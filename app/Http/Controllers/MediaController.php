<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function newsletterIndex(){

		return view ('media.newsletter.index', [

			
        
		]);
	}


	

	public function newsletterShow(){

		return view ('media.newsletter.show', [

			
        
		]);
	}




	public function newsletterMakemap(){

		return view ('media.newsletter.makemap', [

        
		]);
	}





	public function newsletterCreate(){

		return view ('media.newsletter.create', [

			
        
		]);
	}

















	public function instagramIndex(){

		return view ('media.instagram.index', [

			
        
		]);
	}


	public function instagramShow(){

		return view ('media.instagram.show', [

			
        
		]);
	}






	public function movieIndex(){

		return view ('media.movie.index', [

			// 'shops' => $shops,
        
		]);
	}

	

	public function facebookIndex(){

		return view ('media.facebook.index', [

			// 'shops' => $shops,
        
		]);
	}




	public function Show(){

		return view ('show', [

			
        
		]);
	}

	
}
