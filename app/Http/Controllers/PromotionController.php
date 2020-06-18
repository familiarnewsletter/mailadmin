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

	public function logIndex(){

		return view ('promotion.log.index', [

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

	public function snsIndex(){

		return view ('promotion.sns.index', [

			// 'shops' => $shops,
        
		]);
	}

	public function blogIndex(){

		return view ('promotion.blog.index', [

			// 'shops' => $shops,
        
		]);
	}

	public function othermediaIndex(){

		return view ('promotion.othermedia.index', [

			// 'shops' => $shops,
        
		]);
	}
}
