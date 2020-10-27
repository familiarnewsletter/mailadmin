@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">

<style type="text/css">
	.checkbox {
 	 display:block;
}
</style>
<style type="text/css">
  #input_plural {
    margin: 10px 0;
}
 

</style>
@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">配信情報編集</h1>
<div class="container">


  	 <div class="container"> 
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">新規登録</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
             <form action="{{ route('newsletter.update', ['id' => $newsletter->id]) }}" method="post">
                @csrf

                <div class="form-group">
                  <label for="title">タイトル</label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ $newsletter->title }}" />
                </div>
                <div class="form-group">
                  <label for="preheader_text">プリヘッダーテキスト</label>
                  <input type="text" class="form-control" name="preheader_text" id="preheader_text" value="{{ $newsletter->preheader_text }}" />
                </div>
                <div class="form-group">
                  <label for="delivery_date">配信日時</label>
                  <input type="text" class="form-control" name="delivery_date" id="delivery_date" value="{{ $newsletter->delivery_date }}" />
                </div>                
                <div class="form-group">
                  <label for="category">カテゴリ</label>
                  <select type="text" class="form-control" name="category" id="category" value="{{ $newsletter->category }}" > 
                      <option value="本会員" @if(old('category',"$newsletter->category")!='NL会員')selected="selected"@endif>本会員</option>
                    <option value="NL会員" @if(old('category',"$newsletter->category")=='NL会員')selected="selected"@endif>NL会員</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="type">ヘッダー</label><br>
                  <div class="form-group row">
   
                       <div class="col-md-6">
                          <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" id="header_type" name="header_type" value="配信用" @if(old('header_type',"$newsletter->header_type")!='アップロード用')checked="checked"@endif>
                             <label class="form-check-label" for="header_type">配信用</label>
                          </div>
                          <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" id="header_type"  name="header_type" value="アップロード用" @if(old('header_type',"$newsletter->header_type")=='アップロード用')checked="checked"@endif>
                             <label class="form-check-label" for="header_type">アップロード用</label>
                          </div>
                          
                       </div>
                    </div>
                </div>
                <div class="form-group">
                  <label for="status">ステータス</label>
                  <select type="text" class="form-control" name="status" id="status" > 
                    @foreach(\App\Newsletter::STATUS as $key => $val)
                      <option
                          value="{{ $key }}"
                          {{ $key == old('status', $newsletter->status) ? 'selected' : '' }}
                          >
                        {{ $val['label'] }}
                      </option>
                    @endforeach
                  </select>
                </div>


                <hr>
                
                </div>
                
               

                <div class="text-right">
                  <input type="submit" name="save" value="更新">
                  <input type="submit" name="index" value="戻る">
                </div>
              </form>        
          </nav>
        </div>
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
 

</div>

@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).on("click", ".add", function() {
    $(this).parent().clone(true).insertAfter($(this).parent());
});
$(document).on("click", ".del", function() {
    var target = $(this).parent();
    if (target.parent().children().length > 1) {
        target.remove();
    }
});
</script>
@endsection