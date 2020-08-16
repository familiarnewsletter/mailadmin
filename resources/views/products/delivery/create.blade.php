@extends('layout')

@section('styles')
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>

    <!--  flatpickr css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">

@endsection

@section('content')

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
                  <label for="title">店名</label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                </div>
                <div class="form-group">
                  <label for="due_date">エリア</label>
                  <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}" />
                </div>
                <div class="form-group">
                  <label for="assigner_id">住所</label>
                  <input type="text" class="form-control" name="assigner_id" id="assigner_id" value="{{ old('assigner_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">電話番号</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">メールアドレス</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">店長名</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">ランク</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">登録</button>
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




