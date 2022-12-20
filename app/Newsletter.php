<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Newsletter extends Model
{
    protected $table = 'newsletter';


     /**
	 * 状態定義
	 */
	
	
    

    public function newsletterPartsAdmin()
	{
	    return $this->hasMany('App\NewsletterPartsAdmin');
	}

	
	
	

	
}
