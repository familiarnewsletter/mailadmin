<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\NewsletterAdmin;
use App\Newsletter;
use App\NewsletterPartsAdmin;
use App\NewsletterParts;
use App\NewsletterLink;
use Carbon\Carbon;
use Request as SaveRequest;
use Request as MapRequest;
use App\Http\Requests\CreateNewsletter;
use App\Http\Requests\CreateNewsletterParts;



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

		return view ('media.newsletter.show', [

			'newsletter' => $newsletter,
			'newsletter_parts_admin' => $newsletter_parts_admin,
			'newsletter_parts' => $newsletter_parts,
			'newsletter_link' => $newsletter_link
			
		]);
	}





  //   public function newsletterMapSort(int $id){


  //   	$newsletter = Newsletter::find($id);
		// $newsletter_parts_admin = $newsletter->newsletterPartsAdmin()->get();
		

  //       $i = 0;

  //       foreach ($_POST as $value) {
  //           // Execute statement:
  //           // UPDATE [Table] SET [Position] = $i WHERE [EntityId] = $value
  //           $i++;
  //           DB::table('newsletter_parts_admin')->where('order', '=', $value)->update([ 'order' => $i ]);
  //       }

  //       $newsletter_parts_admin = NewsletterPartsAdmin::orderBy('id', 'ASC')->where('newsletter_id', $newsletter->id)->get();

  //       return redirect()->route('newsletter.show', [
        
  //       	'id' => $id,
		// 	'newsletter_parts_admin' => $newsletter_parts_admin

  //       ]);
  //   }








	public function newsletterCreate(){



		return view ('media.newsletter.create', [

        
		]);
	}



	public function newsletterStore(CreateNewsletter $request){


		$newsletter = new Newsletter;
        $newsletter->title = $request->title;
        $newsletter->preheader_text = $request->preheader_text;
        $newsletter->delivery_date = $request->delivery_date;
        $newsletter->category = $request->category;



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
        $newsletter->category = $request->category;
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

		elseif ($newsletter_parts_ad->type_id == 12) {

			return view ('media.newsletter.parts.create.pickupitemforsale', [

				'newsletter' => $newsletter,
				'newsletter_parts_ad' => $newsletter_parts_ad
	        
			]);
		}
	}

	// if (SaveRequest::get('save')) {

 //            return redirect()->route('newsletter.show', [

 //            	'id' => $newsletter->id

 // 			]);
        

 //        } 


	public function newsletterPartsStore(int $newsletter_parts_admin_id, CreateNewsletterParts $request){

		$newsletter = NewsletterPartsAdmin::find($newsletter_parts_admin_id)->newsletter()->first();

		$newsletter_parts = new NewsletterParts();

        $newsletter_parts->title = $request->title;
        $newsletter_parts->img_url = $request->img_url;
        $newsletter_parts->link_url = $request->link_url;
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
        // return view('media.newsletter.parts.edit', [ 


        // 	'newsletter_parts' => $newsletter_parts


        // ]);
    
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

		elseif ($type_id == 12) {

			return view ('media.newsletter.parts.edit.pickupitemforsale', [

				'newsletter_parts' => $newsletter_parts,
	        
			]);
		}
    }




    public function newsletterPartsUpdate(int $newsletter_parts_id, CreateNewsletterParts $request){

    	 
    	$newsletter_parts = NewsletterParts::find($newsletter_parts_id);
    	
       
        $newsletter_parts->title = $request->title;
        $newsletter_parts->img_url = $request->img_url;
        $newsletter_parts->link_url = $request->link_url;
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

    	$newsletter_parts_admin = NewsletterPartsAdmin::where('newsletter_id', $newsletter->id)->get();
    	
		return view ('media.newsletter.link.create', [

			'newsletter' => $newsletter,
			'newsletter_parts_admin' => $newsletter_parts_admin
        
		]);
	}



	public function newsletterLinkStore(int $newsletter_id, Request $request){


		$newsletter_link = new NewsletterLink;
        $newsletter_link->type_id = $request->type_id;
        $newsletter_link->newsletter_id = $newsletter_id;
        $newsletter_link->link_url = $request->link_url;
        
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




	public function newsletterLinkUpdate(Request $request, int $newsletter_link_id){


		$newsletter_link = NewsletterLink::find($newsletter_link_id);

 		$newsletter_link->type_id = $request->type_id;
        
        $newsletter_link->link_url = $request->link_url;
        
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



	

	
}
