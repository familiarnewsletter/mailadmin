<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Newsletter;
use App\NewsletterPartsAdmin;
use App\NewsletterParts;
use App\NewsletterLink;
use App\Directory;
use Carbon\Carbon;
use Request as SaveRequest;
use Request as MapRequest;
use App\Http\Requests\CreateNewsletter;
use App\Http\Requests\CreateNewsletterParts;
use App\Http\Requests\CreateNewsletterLink;


class MediaController extends Controller
{
    public function newsletterIndex(){



    	$newsletters = Newsletter::all();

		return view ('media.newsletter.index', [

			'newsletters' => $newsletters
        
		]);
	}


	

	public function newsletterShow(int $id){


		$newsletter = Newsletter::find($id);
		
		$newsletter_parts_admin = NewsletterPartsAdmin::orderBy('id', 'ASC')->where('newsletter_id', $newsletter->id)->get();

		$newsletter_parts = NewsletterParts::where('newsletter_id', $newsletter->id)->get();

		$newsletter_link = NewsletterLink::where('newsletter_id', $newsletter->id)->get();

		$directorys = Directory::all();

		return view ('media.newsletter.show', [

			'newsletter' => $newsletter,
			'newsletter_parts_admin' => $newsletter_parts_admin,
			'newsletter_parts' => $newsletter_parts,
			'newsletter_link' => $newsletter_link,
			'directorys' => $directorys
			
		]);
	}





  public function newsletterClone(int $id)
	{
	   $newsletter = Newsletter::find($id);
	   $new_newsletter = $newsletter->replicate(); 
	   $new_newsletter->title = $newsletter->title . '(copy)'; 
	   $new_newsletter->save();
	   
	   $newsletter_parts_admin = NewsletterPartsAdmin::where('newsletter_id', $newsletter->id)->get();
	   foreach ($newsletter_parts_admin as $npa) { 
	       $new_npa = $npa->replicate(); 
	       $new_npa->newsletter_id = $new_newsletter->id; 
	       $new_npa->save(); 
	      } 


	   $newsletter_parts = NewsletterParts::where('newsletter_id', $newsletter->id)->get();

	   foreach ($newsletter_parts as $np) { 
	       $new_np = $np->replicate(); 
	       $new_np->newsletter_id = $new_newsletter->id; 
	       $new_np->save(); 
	      } 




	   $newsletter_link = NewsletterLink::where('newsletter_id', $newsletter->id)->get();

	   foreach ($newsletter_link as $nl) { 
	       $new_nl = $nl->replicate(); 
	       $new_nl->newsletter_id = $new_newsletter->id; 
	       $new_nl->save(); 
	      }

	   $newsletters = Newsletter::all();

	 return redirect()->route('newsletter.index', [

	 		'newsletters' => $newsletters

		]);
	  
	}








	public function newsletterCreate(){



		return view ('media.newsletter.create', [

        
		]);
	}



	public function newsletterStore(CreateNewsletter $request){


		$newsletter = new Newsletter;
        $newsletter->title = $request->title;
        $newsletter->preheader_text = $request->preheader_text;
        $newsletter->delivery_date = $request->delivery_date;
        $newsletter->utm_campaign_id = $request->utm_campaign_id;
        $newsletter->category = $request->category;
        $newsletter->header_type = $request->header_type;


        $newsletter->save();

		$newsletters = Newsletter::all();        

	

        return redirect()->route('newsletter.index', [

		]);


		
	}

	public function newsletterEdit(int $id){


		$newsletter = Newsletter::find($id);
		$newsletter_parts_admin = $newsletter->newsletterPartsAdmin()->get();
      
		return view ('media.newsletter.edit', [

			'newsletter' => $newsletter,
			'newsletter_parts_admin' => $newsletter_parts_admin
        
		]);
	}




	public function newsletterUpdate(CreateNewsletter $request, int $id){


		$newsletter = Newsletter::find($id);

        $newsletter->title = $request->title;
        $newsletter->preheader_text = $request->preheader_text;
        $newsletter->delivery_date = $request->delivery_date;
        $newsletter->utm_campaign_id = $request->utm_campaign_id;
        $newsletter->category = $request->category;
        $newsletter->header_type = $request->header_type;
        $newsletter->status = $request->status;
        

        $newsletter->save();

        if (SaveRequest::get('save')) {

			return redirect()->route('newsletter.show', [

					'id' => $id 

	 		]);

		}

		elseif (SaveRequest::get('index')) {

			$newsletters = Newsletter::all();

            return view('media.newsletter.index', [

            	'newsletters' => $newsletters

 			]);
        
        } 
	}






	public function newsletterDelete(Request $request, int $id){



		//削除対象レコードを検索
        Newsletter::find($id)->delete();
        

        
        $newsletters = Newsletter::all(); 
        //リダイレクト
        return redirect()->route('newsletter.index', [

        	'newsletters' => $newsletters

        ]);
	}









	public function newsletterMapStore(Request $request, $id){



		$newsletter = Newsletter::find($id);

		$newsletter_parts_admin = new NewsletterPartsAdmin();

		$newsletter_parts_admin->type_id = $request->type_id;
        $newsletter_parts_admin->newsletter_id = $newsletter->id;

        $newsletter_parts_admin->save();


        return redirect()->route('newsletter.show', [


        		'id' => $newsletter->id

			]);
    

    } 



    public function newsletterMapEdit(int $newsletter_parts_admin_id){



		$newsletter_parts_ad = NewsletterPartsAdmin::find($newsletter_parts_admin_id);		
		
        return view('media.newsletter.map.edit', [ 


        	'newsletter_parts_ad' => $newsletter_parts_ad


        ]);
    

    }




    public function newsletterMapUpdate(int $newsletter_parts_admin_id, Request $request){


    	$newsletter_parts_ad = NewsletterPartsAdmin::find($newsletter_parts_admin_id);
    	$id = $newsletter_parts_ad->newsletter_id;


        $newsletter_parts_ad->type_id = $request->type_id;
        
        $newsletter_parts_ad->save();

        return redirect()->route('newsletter.show', [
        

        	'id' => $id



        ]);
	}




	public function newsletterMapDelete(int $newsletter_parts_admin_id){

        
        $newsletter_parts_ad = NewsletterPartsAdmin::find($newsletter_parts_admin_id);
        $newsletter_parts = NewsletterParts::where('newsletter_parts_admin_id', $newsletter_parts_ad->id)->get();
        

        $newsletter_parts_ad->delete();


        $newsletter = $newsletter_parts_ad->newsletter()->first();
		$newsletter_parts_admin = NewsletterPartsAdmin::where('newsletter_id', $newsletter->id)->get();
        //リダイレクト
        return redirect()->route('newsletter.show', [
        
        	'id' => $newsletter->id,
			'newsletter_parts_admin' => $newsletter_parts_admin

        ]);
    }




   

    public function newsletterPartsCreate(int $newsletter_parts_admin_id){



    	$newsletter_parts_ad = NewsletterPartsAdmin::find($newsletter_parts_admin_id);
    	$newsletter = Newsletter::find($newsletter_parts_ad->newsletter_id);

    	 if ($newsletter_parts_ad->type_id == 1) {

			return view ('media.newsletter.parts.create.top', [

				'newsletter' => $newsletter,
				'newsletter_parts_ad' => $newsletter_parts_ad
	        
			]);
		}

		elseif ($newsletter_parts_ad->type_id == 2) {

			return view ('media.newsletter.parts.create.newsandevent', [

				'newsletter' => $newsletter,
				'newsletter_parts_ad' => $newsletter_parts_ad
	        
			]);
		}

		elseif ($newsletter_parts_ad->type_id == 3) {

			return view ('media.newsletter.parts.create.newsandtopics', [

				'newsletter' => $newsletter,
				'newsletter_parts_ad' => $newsletter_parts_ad
	        
			]);
		}

		elseif ($newsletter_parts_ad->type_id == 4) {

			return view ('media.newsletter.parts.create.pickupitem1', [

				'newsletter' => $newsletter,
				'newsletter_parts_ad' => $newsletter_parts_ad
	        
			]);
		}

		elseif ($newsletter_parts_ad->type_id == 5) {

			return view ('media.newsletter.parts.create.pickupitem2', [

				'newsletter' => $newsletter,
				'newsletter_parts_ad' => $newsletter_parts_ad
	        
			]);
		}

		elseif ($newsletter_parts_ad->type_id == 6) {

			return view ('media.newsletter.parts.create.shopblog', [

				'newsletter' => $newsletter,
				'newsletter_parts_ad' => $newsletter_parts_ad
	        
			]);
		}

		elseif ($newsletter_parts_ad->type_id == 7) {

			return view ('media.newsletter.parts.create.stylebook1', [

				'newsletter' => $newsletter,
				'newsletter_parts_ad' => $newsletter_parts_ad
	        
			]);
		}

		elseif ($newsletter_parts_ad->type_id == 8) {

			return view ('media.newsletter.parts.create.stylebook3', [

				'newsletter' => $newsletter,
				'newsletter_parts_ad' => $newsletter_parts_ad
	        
			]);
		}

		elseif ($newsletter_parts_ad->type_id == 9) {

			return view ('media.newsletter.parts.create.snap', [

				'newsletter' => $newsletter,
				'newsletter_parts_ad' => $newsletter_parts_ad
	        
			]);
		}

		elseif ($newsletter_parts_ad->type_id == 10) {

			return view ('media.newsletter.parts.create.banner', [

				'newsletter' => $newsletter,
				'newsletter_parts_ad' => $newsletter_parts_ad
	        
			]);
		}

		elseif ($newsletter_parts_ad->type_id == 11) {

			return view ('media.newsletter.parts.create.newsandtopicsforsale', [

				'newsletter' => $newsletter,
				'newsletter_parts_ad' => $newsletter_parts_ad
	        
			]);
		}

		
	}

	


	public function newsletterPartsStore(int $newsletter_parts_admin_id, CreateNewsletterParts $request){

		$newsletter = NewsletterPartsAdmin::find($newsletter_parts_admin_id)->newsletter()->first();

		$newsletter_parts = new NewsletterParts();

        $newsletter_parts->title = $request->title;
        $newsletter_parts->img_url = $request->img_url;
        $newsletter_parts->link_url = $request->link_url;
        $newsletter_parts->utm_content_id = $request->utm_content_id;
        $newsletter_parts->text = $request->text;
        
        
        
        $newsletter_parts->newsletter_parts_admin_id = $newsletter_parts_admin_id;
        $newsletter_parts->newsletter_id = $newsletter->id;

        $newsletter_parts->save();


		
        return redirect()->route('newsletter.show', [

        	'id' => $newsletter->id

		]);
        
	}





	public function newsletterPartsEdit(int $newsletter_parts_id){



		$newsletter_parts = NewsletterParts::find($newsletter_parts_id);
		$type_id = $newsletter_parts->newsletterPartsAdmin()->first()->type_id;
        
    
        if ($type_id == 1) {

			return view ('media.newsletter.parts.edit.top', [

				'newsletter_parts' => $newsletter_parts,
				'type_id' => $type_id
	        
			]);
		}

		elseif ($type_id == 2) {

			return view ('media.newsletter.parts.edit.newsandevent', [

				'newsletter_parts' => $newsletter_parts
	        
			]);
		}

		elseif ($type_id == 3) {

			return view ('media.newsletter.parts.edit.newsandtopics', [

				'newsletter_parts' => $newsletter_parts
	        
			]);
		}

		elseif ($type_id == 4) {

			return view ('media.newsletter.parts.edit.pickupitem1', [

				'newsletter_parts' => $newsletter_parts
	        
			]);
		}

		elseif ($type_id == 5) {

			return view ('media.newsletter.parts.edit.pickupitem2', [

				'newsletter_parts' => $newsletter_parts
	        
			]);
		}

		elseif ($type_id == 6) {

			return view ('media.newsletter.parts.edit.shopblog', [

				'newsletter_parts' => $newsletter_parts
	        
			]);
		}

		elseif ($type_id == 7) {

			return view ('media.newsletter.parts.edit.stylebook1', [

				'newsletter_parts' => $newsletter_parts
	        
			]);
		}

		elseif ($type_id == 8) {

			return view ('media.newsletter.parts.edit.stylebook3', [

				'newsletter_parts' => $newsletter_parts
	        
			]);
		}

		elseif ($type_id == 9) {

			return view ('media.newsletter.parts.edit.snap', [

				'newsletter_parts' => $newsletter_parts
	        
			]);
		}

		elseif ($type_id == 10) {

			return view ('media.newsletter.parts.edit.banner', [

				'newsletter_parts' => $newsletter_parts
	        
			]);
		}

		elseif ($type_id == 11) {

			return view ('media.newsletter.parts.edit.newsandtopicsforsale', [

				'newsletter_parts' => $newsletter_parts,
	        
			]);
		}

    }




    public function newsletterPartsUpdate(int $newsletter_parts_id, CreateNewsletterParts $request){

    	 
    	$newsletter_parts = NewsletterParts::find($newsletter_parts_id);
    	
       
        $newsletter_parts->title = $request->title;
        $newsletter_parts->img_url = $request->img_url;
        $newsletter_parts->link_url = $request->link_url;
        $newsletter_parts->utm_content_id = $request->utm_content_id;
        $newsletter_parts->text = $request->text;
        
        
        
        $newsletter_parts->save();

        $id = $newsletter_parts->newsletter_id;

        return redirect()->route('newsletter.show', [
        

        	'id' => $id,
        	'newsletter_parts_id' => $newsletter_parts->id,

        ]);
	}


	 public function newsletterPartsDelete(int $newsletter_parts_id){

        
        $newsletter_parts = NewsletterParts::find($newsletter_parts_id);
        
        $newsletter_parts->delete();

        $newsletter = $newsletter_parts->newsletterPartsAdmin()->first()->newsletter()->first();
        
        $newsletter_parts_admin = NewsletterPartsAdmin::where('newsletter_id', $newsletter->id)->get();
        
       
		
        //リダイレクト
        return redirect()->route('newsletter.show', [
        
        	'id' => $newsletter->id,
			'newsletter_parts_admin' => $newsletter_parts_admin

        ]);
     }





	public function newsletterLinkCreate(int $newsletter_id){


		$newsletter = Newsletter::find($newsletter_id);
    	$newsletter_parts_admin = NewsletterPartsAdmin::where('newsletter_id', $newsletter_id)->get();
    	
    	
    	
		return view ('media.newsletter.link.create', [

			'newsletter' => $newsletter,

			'newsletter_parts_admin' => $newsletter_parts_admin,
        
		]);
		

	}



	public function newsletterLinkStore(int $newsletter_id, CreateNewsletterLink $request){


		$newsletter_link = new NewsletterLink;
        $newsletter_link->type_id = $request->type_id;
        $newsletter_link->newsletter_id = $newsletter_id;
        $newsletter_link->link_type = $request->link_type;
        $newsletter_link->link_url = $request->link_url;
        
       	$newsletter_link->utm_content_id = $request->utm_content_id;
        
        $newsletter_link->save();

		$newsletter = Newsletter::find($newsletter_id);        

		$newsletter_parts_admin = NewsletterPartsAdmin::orderBy('id', 'ASC')->where('newsletter_id', $newsletter->id)->get();

		$newsletter_parts = NewsletterParts::where('newsletter_id', $newsletter->id)->get();	

        return redirect()->route('newsletter.show', [

        	'newsletter' => $newsletter,
        	'id' => $newsletter_id,
			'newsletter_parts_admin' => $newsletter_parts_admin,
			'newsletter_parts' => $newsletter_parts,
			'newsletter_link' => $newsletter_link

		]);


		
	}

	public function newsletterLinkEdit(int $newsletter_link_id){

		$newsletter_link = NewsletterLink::find($newsletter_link_id);
		$newsletter_parts_admin = NewsletterPartsAdmin::where('newsletter_id', $newsletter_link->newsletter_id)->get();
		
		return view ('media.newsletter.link.edit', [

			'newsletter_link' => $newsletter_link,
			'newsletter_parts_admin' => $newsletter_parts_admin
        
		]);
		
	}




	public function newsletterLinkUpdate(CreateNewsletterLink $request, int $newsletter_link_id){


		$newsletter_link = NewsletterLink::find($newsletter_link_id);

 		$newsletter_link->type_id = $request->type_id;
        $newsletter_link->newsletter_id = $newsletter_id;
        $newsletter_link->link_type = $request->link_type;
        $newsletter_link->link_url = $request->link_url;
        
       	$newsletter_link->utm_content_id = $request->utm_content_id;
        
        $newsletter_link->save();

		$newsletter = Newsletter::find($newsletter_link->newsletter_id);        

		$newsletter_parts_admin = NewsletterPartsAdmin::orderBy('id', 'ASC')->where('newsletter_id', $newsletter->id)->get();

		$newsletter_parts = NewsletterParts::where('newsletter_id', $newsletter->id)->get();	

        return redirect()->route('newsletter.show', [

        	'newsletter' => $newsletter,
        	'id' => $newsletter->id,
			'newsletter_parts_admin' => $newsletter_parts_admin,
			'newsletter_parts' => $newsletter_parts,
			'newsletter_link' => $newsletter_link

		]);

		
	}




	public function newsletterLinkDelete(Request $request, int $newsletter_link_id){


		$nl = NewsletterLink::find($newsletter_link_id);

		$newsletter = Newsletter::find($nl->newsletter_id);
		
        NewsletterLink::find($newsletter_link_id)->delete();
        

		
		$newsletter_parts_admin = NewsletterPartsAdmin::orderBy('id', 'ASC')->where('newsletter_id', $newsletter->id)->get();

		$newsletter_parts = NewsletterParts::where('newsletter_id', $newsletter->id)->get();

		$newsletter_link = NewsletterLink::where('newsletter_id', $newsletter->id)->get();
        
        $newsletters = Newsletter::all(); 
  
        return redirect()->route('newsletter.show', [

        	'newsletter' => $newsletter,
        	'id' => $newsletter->id,
			'newsletter_parts_admin' => $newsletter_parts_admin,
			'newsletter_parts' => $newsletter_parts,
			'newsletter_link' => $newsletter_link

        ]);
	}


	

	public function newsletterPreview(){

		return view ('media.newsletter.preview', [

			
        
		]);
	}


	public function newsletterSourceCode(){

		return view ('media.newsletter.source_code', [

			
        
		]);
	}

	public function newsletterText(int $newsletter_id){

		$newsletter = Newsletter::find($newsletter_id);

		$newsletter_parts_admin = NewsletterPartsAdmin::orderBy('id', 'ASC')->where('newsletter_id', $newsletter->id)->get();

		$newsletter_parts = NewsletterParts::where('newsletter_id', $newsletter->id)->get();

		$newsletter_link = NewsletterLink::where('newsletter_id', $newsletter->id)->get();

		return view ('media.newsletter.text', [

			'newsletter' => $newsletter,
        	'newsletter_parts_admin' => $newsletter_parts_admin,
			'newsletter_parts' => $newsletter_parts,
			'newsletter_link' => $newsletter_link
		]);
	}








	public function directoryIndex(){



    	$directorys = Directory::all();

		return view ('media.directory.index', [

			'directorys' => $directorys
        
		]);
	}


	

	

	public function directoryCreate(){



		return view ('media.directory.create', [

        
		]);
	}



	public function directoryStore(Request $request){


		$directory = new Directory;
        $directory->type_id = $request->type_id;
        $directory->path = $request->path;


        $directory->save();

		$directory = Newsletter::all();        

	

        return redirect()->route('directory.index', [

		]);


		
	}

	public function directoryEdit(int $directory_id){


		$directory = Directory::find($directory_id);
		
		return view ('media.directory.edit', [

			'directory' => $directory,
        
		]);
	}




	public function directoryUpdate(Request $request, int $directory_id){


		$directory = Directory::find($directory_id);

       	$directory->type_id = $request->type_id;
        $directory->path = $request->path;
       
        

        $directory->save();

        $directorys = Directory::all();

        return view('media.directory.index', [

        	'directorys' => $directorys

		]);
        
       
	}



	public function directoryDelete(Request $request, int $id){



		//削除対象レコードを検索
        Directory::find($id)->delete();
        

        
        $directorys = Newsletter::all(); 
        //リダイレクト
        return redirect()->route('directory.index', [

        	'directorys' => $directorys

        ]);
	}






	

	
}
