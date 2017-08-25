<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MallController extends Controller
{
    //
    public function getIndex()
    {
        $slideshow['slideshow'] = DB::table('slideshows')->orderby('id','desc')->take(4)->get();
        $promotion['promotion'] = DB::table('promotions')->orderby('id')->take(4)->get();
        $shop['shop'] = DB::table('shops')->orderby('id')->get();
        $logo['logo'] = DB::table('logos')->orderby('id')->get();
        $product['product'] = DB::table('products')->orderby('id','desc')->get();
        $deal['deal'] = DB::table('deals')->orderby('id')->get();
        $like['like'] = DB::table('likes')->orderby('id')->get();
        return view('mall.index')->with($slideshow)->with($promotion)->with($shop)->with($logo)->with($product)->with($deal)->with($like);
    }
}
