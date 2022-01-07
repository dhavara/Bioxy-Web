<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Auth\IpController;
use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Frame;
use App\Models\Log;
use App\Models\Title;
use App\Models\User;
use App\Models\UserColor;
use App\Models\UserDetail;
use App\Models\UserFrame;
use App\Models\UserTitle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    //
    public function index() {
        return view('shop.shop', [
            'active_shop' => "active",
            'titles' => Title::where('price', '>', 0)->get()->sortBy('price'),
            'frames' => Frame::where('price', '>', 0)->get()->sortBy('price'),
            'colors' => Color::where('price', '>', 0)->get()->sortBy('price')
        ]);
    }

    public function purchase(Request $request) {
        $item_type = $request->type;
        $item_id = $request->id;

        $user = User::findOrFail(Auth::user()->id);

        switch ($item_type) {
            case 'title':
                if (UserTitle::where([
                    'user_id' => Auth::user()->id,
                    'title_id' => $item_id
                ])->get()->count() > 0) return redirect()->back()->with('fail', 'Anda sudah memiliki item ini.');

                $title = Title::where('id', $item_id)->get()->first();

                if ($user->detail['point'] < $title['price']) return redirect()->back()->with('fail', 'Poin Anda tidak cukup untuk membeli item ini.');

                UserTitle::create([
                    'user_id' => Auth::user()->id,
                    'title_id' => $item_id
                ]);

                $ip = new IpController();
                Log::create([
                    'table' => 'bio11_users_titles',
                    'creator' => Auth::user()->id,
                    'path' => "ShopController@purchase",
                    'desc' => "Create data in UserTitle",
                    'ip' => $ip->getIp()
                ]);

                
                UserDetail::where('user_id', Auth::user()->id)->decrement('point', $title['price']);

                return redirect()->back()->with('success', 'Anda berhasil membeli item ini senilai ' . $title['price'] . ' poin!');
                break;
            case 'frame';
                if (UserFrame::where([
                    'user_id' => Auth::user()->id,
                    'frame_id' => $item_id
                ])->get()->count() > 0) return redirect()->back()->with('fail', 'Anda sudah memiliki item ini.');

                $frame = Frame::where('id', $item_id)->get()->first();

                if ($user->detail['point'] < $frame['price']) return redirect()->back()->with('fail', 'Poin Anda tidak cukup untuk membeli item ini.');

                UserFrame::create([
                    'user_id' => Auth::user()->id,
                    'frame_id' => $item_id
                ]);

                $ip = new IpController();
                Log::create([
                    'table' => 'bio11_users_frames',
                    'creator' => Auth::user()->id,
                    'path' => "ShopController@purchase",
                    'desc' => "Create data in UserFrame",
                    'ip' => $ip->getIp()
                ]);

                
                UserDetail::where('user_id', Auth::user()->id)->decrement('point', $frame['price']);

                return redirect()->back()->with('success', 'Anda berhasil membeli item ini senilai ' . $frame['price'] . ' poin!');
                break;
            case 'color';
                if (UserColor::where([
                    'user_id' => Auth::user()->id,
                    'color_id' => $item_id
                ])->get()->count() > 0) return redirect()->back()->with('fail', 'Anda sudah memiliki item ini.');

                $color = Color::where('id', $item_id)->get()->first();

                if ($user->detail['point'] < $color['price']) return redirect()->back()->with('fail', 'Poin Anda tidak cukup untuk membeli item ini.');

                UserColor::create([
                    'user_id' => Auth::user()->id,
                    'color_id' => $item_id,
                    'created_at' => \Carbon\Carbon::now()
                ]);

                $ip = new IpController();
                Log::create([
                    'table' => 'bio11_users_colors',
                    'creator' => Auth::user()->id,
                    'path' => "ShopController@purchase",
                    'desc' => "Create data in UserColor",
                    'ip' => $ip->getIp()
                ]);

                
                UserDetail::where('user_id', Auth::user()->id)->decrement('point', $color['price']);

                return redirect()->back()->with('success', 'Anda berhasil membeli item ini senilai ' . $color['price'] . ' poin!');
                break;
        }
    }
}
