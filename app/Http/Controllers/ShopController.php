<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopIndex(){

		return view ('sales.shops.list.index', [

			// 'shops' => $shops,
        
		]);
	}









	public function ordersIndex(){

		return view ('sales.shops.orders.index', [

			// 'shops' => $shops,
        
		]);
	}

	

}
