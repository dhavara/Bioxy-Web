<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Frame;
use App\Models\Title;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index() {
        return view('shop.shop', [
            'titles' => Title::where('price', '>', 0)->get(),
            'frames' => Frame::where('price', '>', 0)->get(),
            'colors' => Color::where('price', '>', 0)->get()
        ]);
    }
}
