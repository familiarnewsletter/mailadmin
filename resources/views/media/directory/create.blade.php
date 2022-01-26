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
<h1 class="h3 mb-2 text-gray-800">ディレクトリ登録</h1>
<div class="container">


     <div class="container"> 
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">新規登録</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
             <form action="{{ route('directory.store') }}" method="post">
                @csrf

                <div class="form-group">
                  <label for="type_id">カテゴリ</label>
                  <select type="text" class="form-control" name="type_id" id="type_id"/>
                    <option value="1"><label>TOP</label></option>
                      <option value="2"><label>SHOP NEWS ＆ EVENT</label></option>
                      <option value="3"><label>NEWS ＆ TOPICS</label></option>
                      <option value="4"><label>PICKUP ITEM 1列＋テキスト</label></option>
                      <option value="5"><label>PICKUP ITEM 2列</label></option>
                      <option value="6"><label>SHOP BLOG</label></option>
                      <option value="7"><label>STYLE BOOK 1列＋テキスト</label></option>
                      <option value="8"><label>STYLE BOOK 3列</label></option>
                      <option value="9"><label>SNAP</label></option>
                      <option value="10"><label>BANNER</label></option>
                      <option value="11"><label>PICKUP ITEM(３列)</label></option>
                  </select> 
                </div>
                <div class="form-group">
                  <label for="path">参照パス</label>
                  <input type="text" class="form-control" name="path" id="path"/>
                </div>
                
                <hr>
                
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
               

                <div class="text-right">
                  <input type="submit" value="保存">
                </div>
              </form>        
          </nav>
        </div>
      </div>
    </div>
  
  </div>
 

</div>

@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@endsection
