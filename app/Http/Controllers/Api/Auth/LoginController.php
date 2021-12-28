<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Laravel\Passport\Bridge\AccessToken;
use Laravel\Passport\Client;

class LoginController extends Controller
{
    //

    public function login(Request $request) {
        $client = DB::table('oauth_clients')->where('password_client', 1)->get()->first();

        $user = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        $check = User::where('username', $request->username)->get()->first();

        if($check->detail['is_active'] == '1') {
            if($check->detail['is_login'] == '0') {
                if(Auth::attempt($user)) {
                    $this->isLogin(Auth::id());
                    $response = Http::asForm()->post('http://bioxy.nonah/oauth/token', [
                        'grant_type' => 'password',
                        'client_id' => $client->id /*'9530b116-04ad-4b7c-99b8-0b8f6723b5fd'*/,
                        'client_secret' => $client->secret /*'qbgwZKhzipAtol3rOBYKat5qo1BldVIkdcEH37a2'*/,
                        'username' => $request->username,
                        'password' => $request->password,
                        'scope' => '*',
                    ]);

                    return $response->json();
                }
                else {
                    return response([
                        'message' => 'Login failed.'
                    ]);
                }
            }
            else {
                return response([
                    'message' => 'Account is already logged in through another device.'
                ]);
            }
        }
        else {
            return response([
                'message' => 'Account is suspended.'
            ]);
        }


    }
    private function isLogin(int $id) {
        $user = User::findOrFail($id);
        return $user->detail()->update([
            'is_login' => '1'
        ]);
    }

    public function refresh(Request $request) {
        $client = DB::table('oauth_clients')->where('password_client', 1)->get()->first();
        
        $this->validate($request, [
            'refresh_token' => 'required',
        ], [
            'refresh_token' => 'Refresh token required.'
        ]);

        $response = Http::asForm()->post('http://bioxy.nonah/oauth/token', [
            'grant_type' => 'refresh_token',
            'refresh_token' => $request->refresh_token,
            'client_id' => $client->id,
            'client_secret' => $client->secret,
            'scope' => '*',
        ]);
        
        return $response->json();
    }

    public function logout() {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $accessToken = Auth::user()->token()->where('revoked', false)->get()->first();
        DB::table('oauth_refresh_tokens')->where('access_token_id', $accessToken->id)->update(['revoked'=>true]);

        $user->detail()->update([
            'is_login' => '0'
        ]);
        $accessToken->revoke();
        return response([
            'message' => 'Account has successfully been logged out.'
        ]);
    }
}
