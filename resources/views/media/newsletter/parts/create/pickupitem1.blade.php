

@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<style type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.css" ></style>
  
 

</style>
@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">{{ $newsletter_parts_ad->type_id_label }}の設定</h1>

      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">{{ $newsletter_parts_ad->type_id_label }}</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
             <form action="{{ route('newsletter.storeparts', ['newsletter_parts_admin_id' => $newsletter_parts_ad->id, 'id' => $newsletter->id]) }}" method="post">
                @csrf

                <div class="form-group">
                  <label for="title">品名</label>
                  <input type="text" class="form-control" name="title" list="categorytab"　id="title" />
        
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
                    
                    <input id="text" type="text" hidden="" placeholder="ここには何も入力しない" name="text"　>
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
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $message)
              <p>{{ $message }}</p>
            @endforeach
          </ul>
        </div>
      @endif
</div>

@endsection

@section('scripts')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.js"></script>
@endsection
