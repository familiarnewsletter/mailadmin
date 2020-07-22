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
<h1 class="h3 mb-2 text-gray-800">新規配信登録</h1>
<div class="container">


  	 <div class="container"> 
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">配信登録</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
              <form action="#" method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">表題</label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                </div>
                <div class="form-group">
                  <label for="product_number">配信日時</label>
                  <input type="text" class="form-control" name="product_number" id="product_number" value="{{ old('product_number') }}" />
                </div>
                <div class="form-group">
                  <label for="category">ステータス</label>
                  <input type="text" class="form-control" name="category" id="category" value="{{ old('category') }}" />
                </div>
                <hr>
                <div class="form-group">
                  <label for="price"><strong>News＆Topics</strong></label><br>
                  <hr>
                  <label for="price">タイトル</label>
                  <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}" />
                </div>
                <div class="form-group">
                  <label for="image">画像</label>
                  <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input">
                        <label class="custom-file-label">File</label>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                  <label for="size">Shop News</label>
                  <input type="text" class="form-control" name="size" id="size" value="{{ old('size') }}" />
                </div>
                <div class="form-group">
                  <label for="image">画像</label>
                  <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input">
                        <label class="custom-file-label">File</label>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                  <label for="color">Style</label>
                  <input type="text" class="form-control" name="color" id="color" value="{{ old('color') }}" />
                </div>
                <div class="form-group">
                  <label for="image">画像</label>
                  <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input">
                        <label class="custom-file-label">File</label>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                  <label for="age">Items</label>
                   <input type="text" class="form-control" name="color" id="color" value="{{ old('color') }}" />
                </div>
                <div class="form-group">
                  <label for="image">画像</label>
                  <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input">
                        <label class="custom-file-label">File</label>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                  <label for="maker_id">Blog</label>
                   <input type="text" class="form-control" name="color" id="color" value="{{ old('color') }}" />
                </div>
                <div class="form-group">
                  <label for="image">画像</label>
                  <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input">
                        <label class="custom-file-label">File</label>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                  <label for="status"></label>
                   <input type="text" class="form-control" name="color" id="color" value="{{ old('color') }}" />
                </div>
                <div class="form-group">
                  <label for="image">画像</label>
                  <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input">
                        <label class="custom-file-label">File</label>
                    </div>
                </div>
                <div class="form-group">
                  <label for="image">画像</label>
                  <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input">
                        <label class="custom-file-label">File</label>
                    </div>
                </div>
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

  
<script>
    jQuery(function($){ 
    $("#table1").DataTable(); 
}); 
</script>

@endsection