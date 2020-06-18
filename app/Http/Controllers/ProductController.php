<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productsIndex(){

		return view ('products.list.index', [

			// 'shops' => $shops,
        
		]);
	}


	public function processIndex(){

		return view ('products.process.index', [

			// 'shops' => $shops,
        
		]);
	}


	public function deliveryIndex(){

		return view ('products.delivery.index', [

			// 'shops' => $shops,
        
		]);
	}
}
