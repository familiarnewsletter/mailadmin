

@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  
 

</style>
@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">リンク配置</h1>

      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">総合リンク</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
             <form action="{{ route('newsletter.storelink', ['newsletter_id' => $newsletter->id]) }}" method="post">
                @csrf

                <div class="form-group">
                  <label for="type_id">リンク配置</label>
                  <select type="text" class="form-control" name="type_id" id="type_id">
                    <option>リンク設置箇所を選択</option>
                    
                    <option value="0">「正しく表示されない方はこちらをクリック」</option>
                  @foreach($newsletter_parts_admin as $newsletter_parts_ad)
                  
                    @if(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 4 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 5 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 7 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 8 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 9 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 12)
                    <option value="{{ $newsletter_parts_ad->type_id }}">{{ $newsletter_parts_ad->type_id_label }}</option>
                    @endif

                  @endforeach
                   </select>
                </div>
                <div class="form-group">
                  <label for="link_url">リンク先URL</label>
                  <input type="text" class="form-control" name="link_url" id="link_url"/>
                </div>
                
                   
              </nav>
              
            </div>

            <hr>
            <div class="text-right">
              <input type="submit" value="保存">
            </div>
            
            </div>
          

            
          </form> 
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </ul>
            </div>
          @endif       
      </nav>
    </div>

</div>

@endsection

@section('scripts')


@endsection
