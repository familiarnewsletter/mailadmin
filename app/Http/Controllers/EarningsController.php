<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EarningsController extends Controller
{

    public function shopsIndex(){

    	$data_list = [100, 122, 30, 60, 6, 300, 70];

		return view ('earnings.shops.index', [

			'data_list' => $data_list,
        
		]);
	}


	public function corporationsIndex(){

		$data_list = [100, 122, 30, 60, 6, 300, 70];

		return view ('earnings.corporations.index', [

			'data_list' => $data_list,
        
		]);
	}


	public function ecIndex(){

		$data_list = [100, 122, 30, 60, 6, 300, 70];

		return view ('earnings.ec.index', [

			'data_list' => $data_list,
        
		]);
	}


	public function promotionsIndex(){

		$data_list = [100, 122, 30, 60, 6, 300, 70];

		return view ('earnings.promotions.index', [

			'data_list' => $data_list,
        
		]);
	}

	public function categoriesIndex(){

		$data_list = [100, 122, 30, 60, 6, 300, 70];

		return view ('earnings.categories.index', [

			'data_list' => $data_list,
        
		]);
	}


	public function brandsIndex(){

		$data_list = [100, 122, 30, 60, 6, 300, 70];

		return view ('earnings.brands.index', [

			'data_list' => $data_list,
        
		]);
	}


	public function sizesIndex(){

		$data_list = [100, 122, 30, 60, 6, 300, 70];

		return view ('earnings.sizes.index', [

			'data_list' => $data_list,
        
		]);
	}

	public function agesIndex(){

		$data_list = [100, 122, 30, 60, 6, 300, 70];

		return view ('earnings.ages.index', [

			'data_list' => $data_list,
        
		]);
	}

	public function areasIndex(){

		$data_list = [100, 122, 30, 60, 6, 300, 70];

		return view ('earnings.areas.index', [

			'data_list' => $data_list,
        
		]);
	}
}
