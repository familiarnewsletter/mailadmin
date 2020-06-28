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

	public function movieIndex(){

		return view ('promotion.movie.index', [

			// 'shops' => $shops,
        
		]);
	}

	public function homepageIndex(){

		return view ('promotion.homepage.index', [

			// 'shops' => $shops,
        
		]);
	}

	public function newsletterIndex(){

		return view ('promotion.newsletter.index', [

			// 'shops' => $shops,
        
		]);
	}

	public function facebookIndex(){

		return view ('promotion.facebook.index', [

			// 'shops' => $shops,
        
		]);
	}


	public function lineIndex(){

		return view ('promotion.line.index', [

			// 'shops' => $shops,
        
		]);
	}



	public function blogIndex(){

		return view ('promotion.blog.index', [

			// 'shops' => $shops,
        
		]);
	}

	public function instagramIndex(){

		return view ('promotion.instagram.index', [

			// 'shops' => $shops,
        
		]);
	}

	public function show(){

		return view ('show', [

			// 'shops' => $shops,
        
		]);
	}
}
