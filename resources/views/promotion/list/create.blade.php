@extends('layout')

@section('styles')

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<!--  datatables css -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<!--  flatpickr css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">


@endsection

@section('content')
<div class="container"> 
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">新規企画登録</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
              <form action="#" method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">企画名</label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" >
                </div>
                <div class="form-group">
                  <label for="category">カテゴリー</label>
                  <input type="text" class="form-control" name="category" id="category" value="{{ old('category') }}" >
                </div>
                <div class="form-group">
                  <label for="purpose">目的</label>
                  <input type="text" class="form-control" name="purpose" id="purpose" value="{{ old('purpose') }}" >
                </div>
                <div class="form-group">
                  <label for="detail">詳細</label>
                  <input type="text" class="form-control" name="detail" id="detail" value="{{ old('detail') }}" >
                </div>
                <div class="form-group">
                  <label for="target1">ターゲット1</label>
                  <input type="text" class="form-control" name="target1" id="target1" value="{{ old('target1') }}" >
                </div>
                <div class="form-group">
                  <label for="target2">ターゲット2</label>
                  <input type="text" class="form-control" name="target2" id="target2" value="{{ old('target2') }}" >
                </div>
                <div class="form-group">
                  <label for="planner">担当者</label>
                  <input type="text" class="form-control" name="planner" id="planner" value="{{ old('planner') }}" >
                </div>
                <div class="form-group">
                  <label for="announce_date">告知日</label>
                  <input type="text" class="form-control" name="announce_date" id="announce_date" value="{{ old('announce_date') }}" >
                </div>
                <div class="form-group">
                  <label for="start_date">開始日</label>
                  <input type="text" class="form-control" name="start_date" id="start_date" value="{{ old('start_date') }}" >
                </div>
                <div class="form-group">
                  <label for="end_date">終了日</label>
                  <input type="text" class="form-control" name="end_date" id="end_date" value="{{ old('end_date') }}" >
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">登録</button>
                </div>
              </form>        
          </nav>
        </div>
      </div>
    </div>
@endsection


@section('scripts')
<script src="/sb_admin_2/vendor/jquery/jquery.min.js"></script>
  
<!-- Core plugin JavaScript-->
<script src="/sb_admin_2/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/sb_admin_2/js/sb-admin-2.js"></script>

  

@endsection