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
@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">配置図作成</h1>
<div class="container">


  	 <div class="container"> 
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">新規登録</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
              <form action="#" method="POST">
                @csrf
                <div class="form-group">
                  <label for="lettertitle">仮タイトル</label>
                  <input type="text" class="form-control" name="lettertitle" id="lettertitle" value="{{ old('lettertitle') }}" />
                </div>
                <div class="form-group">
                  <label for="deliver_date">配信日時</label>
                  <input type="text" class="form-control" name="deliver_date" id="deliver_date" value="{{ old('deliver_date') }}" />
                </div>
                <div class="form-group">
                  <label for="status">レイアウト</label>
                  <select type="text" class="form-control" name="status" id="status" value="{{ old('status') }}">
                  	<option>Full</option>
                  	<option>Select Contents</option>
                  </select> 
                </div>

                <hr>

                <div>コンテンツ</div>      
                <div>
                 <label class="checkbox" for="newsandtopics">
                 	<input type="checkbox"  name="newsandtopics" id="newsandtopics" value="newsandtopics">
                 	News&Topics
                 </label>
                
                 <label class="checkbox" for="newsandevent">
                  <input type="checkbox"  name="newsandevent" id="newsandevent" value="newsandevent">
                  ShopNews&Event
              	 </label>
                
                 <label class="checkbox" for="pickupitem">
                  	<input type="checkbox" name="pickupitem" id="pickupitem" value="pickupitem">
                  	PickupItem
                 </label>
               	
               	 <label class="checkbox" for="shopblog">
                  <input type="checkbox" name="shopblog" id="shopblog" value="shopblog">
                  ShopBlog
              	</label>
              	
              	<label class="checkbox" for="stylebook">
                  <input type="checkbox" name="stylebook" id="stylebook" value="stylebook">
                  StyleBook
              	</label>

              	<label class="checkbox" for="banner">
                  <input type="checkbox" name="banner" id="banner" value="banner">
                  Banner
                </label>
                </div>
                
                <hr>

                <div class="form-group">
                  <label for="top"><strong>Topics</strong></label><br>
                  <hr>
                  <label for="toptitle">TOPタイトル</label>
                  <input type="text" class="form-control" name="toptitle" id="toptitle" value="{{ old('toptitle') }}" />
                </div>
                <div class="form-group">
                  <label for="topimage">TOP画像URL</label>
                  <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input">
                        <label class="custom-file-label">File</label>
                    </div>
                </div>
                
                <hr>
                
               <div class="form-group">
                  <label for="top"><strong>Topics</strong></label><br>
                  <hr>
                  <label for="toptitle">TOPタイトル</label>
                  <input type="text" class="form-control" name="toptitle" id="toptitle" value="{{ old('toptitle') }}" />
                </div>
                <div class="form-group">
                  <label for="topimage">TOP画像URL</label>
                  <input type="text" class="form-control" name="topimage" id="topimage" value="{{ old('topimage') }}" />
                </div>
                <div class="form-group">
                  <label for="topimage">TOP遷移先URL</label>
                  <input type="text" class="form-control" name="topimage" id="topimage" value="{{ old('topimage') }}" />
                </div>
                <div class="form-group">
                  <label for="topimage">TOPテキスト</label>
                  <input type="text" class="form-control" name="topimage" id="topimage" value="{{ old('topimage') }}" />
                </div>
                
                <hr>
                
                
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">Preview</button>
                </div>
              </form>        
          </nav>
        </div>
      </div>
    
  
  </div>
 

</div>

@endsection

@section('scripts')

@endsection
