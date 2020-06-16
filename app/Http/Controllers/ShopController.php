<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopIndex(){

		//$shops = Shop::all();
        
		return view ('sales.shops.lists.index', [

			// 'shops' => $shops,
        
		]);
	}

	

}
