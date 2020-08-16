<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function promotionIndex(){

		return view ('promotion.list.index', [

			// 'shops' => $shops,
        
		]);
	}

	public function promotionShow(){

		return view ('promotion.list.show', [

			// 'shops' => $shops,
        
		]);
	}

	public function promotionCreate(){

		return view ('promotion.list.create', [

			// 'shops' => $shops,
        
		]);
	}







	public function apShow(){

		return view ('promotion.ap.show', [

			// 'shops' => $shops,
        
		]);
	}



	public function apCreate(){

		return view ('promotion.ap.create', [

			// 'shops' => $shops,
        
		]);
	}




	public function budgetIndex(){

		return view ('promotion.budget.index', [

			// 'shops' => $shops,
        
		]);
	}
	



	public function budgetShow(){

		return view ('promotion.budget.show', [

			// 'shops' => $shops,
        
		]);
	}


	public function budgetCreate(){

		return view ('promotion.budget.create', [

			// 'shops' => $shops,
        
		]);
	}






	

	

	public function show(){

		return view ('show', [

			// 'shops' => $shops,
        
		]);
	}
}
