<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporationController extends Controller
{
   public function clientsIndex(){

		return view ('sales.corporations.clients.index', [

			// 'shops' => $shops,
        
		]);
	}


	public function ordersIndex(){

		return view ('sales.corporations.orders.index', [

			// 'shops' => $shops,
        
		]);
	}


	public function invoicesIndex(){

		return view ('sales.corporations.invoices.index', [

			// 'shops' => $shops,
        
		]);
	}
}
