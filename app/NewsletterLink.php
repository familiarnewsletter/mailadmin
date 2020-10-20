<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsletterLink extends Model
{

    protected $table = 'newsletter_link';

    public function newsletter()
	{
	    return $this->belongsTo('App\Newsletter');
	}
}
