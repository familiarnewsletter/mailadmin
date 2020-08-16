<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function userIndex(){

		return view ('common.users.index', [

			
        
		]);
	}


	

	public function userShow(){

		return view ('common.users.show', [

			
        
		]);
	}





	 public function chatIndex(){

		return view ('common.chat.index', [

			
        
		]);
	}


	

	public function chatShow(){

		return view ('common.chat.show', [

			
        
		]);
	}
}
