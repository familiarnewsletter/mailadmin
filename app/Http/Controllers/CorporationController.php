<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporationController extends Controller
{
   public function clientIndex(){

		return view ('sales.corporations.clients.index', [

			// 'shops' => $shops,
        
		]);
	}
}
