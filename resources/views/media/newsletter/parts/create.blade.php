

@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  
 

</style>
@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">{{ $newsletter_parts_ad->type_id_label }}の設定</h1>
<div class="container">

  	 <div class="container"> 
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">{{ $newsletter_parts_ad->type_id_label }}</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
             <form action="{{ route('newsletter.storeparts', ['newsletter_parts_admin_id' => $newsletter_parts_ad->id, 'id' => $newsletter->id]) }}" method="post">
                @csrf

                <div class="form-group">
                  <label for="title">タイトル</label>
                  <input type="text" class="form-control" name="title" list="categorytab"　id="title" placeholder="ダブルクリックでnews&topics用のラベルを表示" />
                  <datalist id="categorytab">
        				    <option label="NEWS" value="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/ico_news.gif"></option>
        				  　<option label="NEWS" value="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/ico_products.gif"></option>
        				  　<option label="NEWS" value="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/ico_event.gif"></option>
        				  </datalist>
                </div>
                <div class="form-group">
                  <label for="img_url">画像名</label>
                  <input type="text" class="form-control" name="img_url" id="img_url" />
                </div>
                <div class="form-group">
                  <label for="link_url">リンク先URL</label>
                  <input type="text" class="form-control" name="link_url" id="link_url"/>
                </div>
                <div class="form-group">
                  <label for="text">テキスト</label>
                  <nav class="panel panel-default">
                    
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.js"></script>
                    <style type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.css" ></style>

                    <input id="text" type="text" name="text">
                    <trix-editor input="text" placeholder="入力欄" ></trix-editor>
              
                   
                  </nav>
                  
                </div>

                <hr>
                
                </div>
              

                <div class="text-right">
                  <input type="submit" name="save" value="保存">
                </div>
              </form>        
          </nav>
        </div>
      </div>
    
  
  </div>
 

</div>

@endsection

@section('scripts')

<script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
  <script>
    // エディタへの設定を適用する
    CKEDITOR.replace('editor1', {
      uiColor: '#EEEEEE',
      height: 400,
    });
  </script>
<script>
  
    var e1 = document.getElementById('e1');
    text.value = e1.value;
    console.log(text.value);

  CKEDITOR.replace( 'editor1' );
</script>
@endsection
