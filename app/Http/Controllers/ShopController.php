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


	public function shopShow(){

		return view ('sales.shops.list.show', [

			// 'shops' => $shops,
        
		]);
	}















	public function budgetsIndex(){

		$data_list = [100, 122, 30, 60, 6, 300, 70];

		return view ('sales.shops.budgets.index', [

			'data_list' => $data_list,
        
		]);
	}






	public function ordersIndex(){

		return view ('sales.shops.orders.index', [

			// 'shops' => $shops,
        
		]);
	}

	

}
