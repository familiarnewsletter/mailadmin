<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NewsletterPartsAdmin;

class NewsletterParts extends Model
{
    protected $table = 'newsletter_parts';

    public function newsletterAdmin()
	{
	    return $this->belongsTo('App\NewsletterAdmin');
    }
    public function newsletterPartsAdmin()
	{
	    return $this->belongsTo('App\NewsletterPartsAdmin');
	}

	public function select()
	{
		$pickupitems = NewsletterParts::whereHas('newsletter_parts_admin', function($query){
            $query->where('type_id', '=', '4');
        })->get();
		
	}
}
