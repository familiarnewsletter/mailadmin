<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsletterAdmin extends Model
{
    public function newsletters()
	{
	    return $this->hasMany('App\Newsletter');
    }
    
    public function newsletterPartsAdmins()
	{
	    return $this->hasMany('App\NewsletterPartsAdmin');
    }
    
    public function newslettersParts()
	{
	    return $this->hasMany('App\NewsletterParts');
	}
}
