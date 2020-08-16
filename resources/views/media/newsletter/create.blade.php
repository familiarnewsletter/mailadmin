@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">


@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">配信登録</h1>
<div class="container">


  	 <div class="container"> 
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">内容登録</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
              <form action="#" method="POST">
                @csrf
                <div class="form-group">
                  <label for="lettertitle">タイトル</label>
                  <input type="text" class="form-control" name="lettertitle" id="lettertitle" value="{{ old('lettertitle') }}" />
                </div>
                <div class="form-group">
                  <label for="deliver_date">配信日時</label>
                  <input type="text" class="form-control" name="deliver_date" id="deliver_date" value="{{ old('deliver_date') }}" />
                </div>
                <div class="form-group">
                  <label for="status">ステータス</label>
                  <input type="text" class="form-control" name="status" id="status" value="{{ old('status') }}" />
                </div>      
                <div class="form-group">
                  <label for="preheader_text">プリヘッダーテキスト</label>
                  <input type="text" class="form-control" name="preheader_text" id="preheader_text" value="{{ old('preheader_text') }}" />
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
<script src="/sb_admin_2/vendor/jquery/jquery.js"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="/sb_admin_2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/sb_admin_2/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/sb_admin_2/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.min.js"></script>



@endsection