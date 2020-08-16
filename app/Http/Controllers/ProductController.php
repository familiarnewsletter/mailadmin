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

	public function productsShow(){

		return view ('products.list.show', [

			// 'shops' => $shops,
        
		]);
	}


	public function productsCreate(){

		return view ('products.list.create', [

			// 'shops' => $shops,
        
		]);
	}





	public function consumptionIndex(){

		return view ('products.consumption.index', [

			// 'shops' => $shops,
        
		]);
	}


	public function consumptionShow(){

		return view ('products.consumption.show', [

			// 'shops' => $shops,
        
		]);
	}


	public function consumptionCreate(){

		return view ('products.consumption.create', [

			// 'shops' => $shops,
        
		]);
	}




	public function deliveryShow(){

		return view ('products.delivery.show', [

			// 'shops' => $shops,
        
		]);
	}


	public function deliveryCreate(){

		return view ('products.delivery.create', [

			// 'shops' => $shops,
        
		]);
	}
}
