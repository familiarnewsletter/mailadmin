@extends('layout')

@section('styles')
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">


@endsection


@section('content')



     <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">予算設定</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item"data-toggle="modal" data-target="#Modal1">期間選択</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/promotion/list/create">新規作成</a>
              <a class="dropdown-item" href="#">エクスポート</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
              <form action="#" method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">企画名</label>
                  <select type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" >
                    <option>Tシャツキャンペーン</option>
                    <option>Yシャツキャンペーン</option>
                    <option>UGCキャンペーン</option>
                    <option>セール</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="target_budget">予算</label>
                  <input type="number" step="1000" class="form-control" name="target_budget" id="target_budget" value="{{ old('target_budget') }}" >
                </div>
                <div class="form-group">
                <label for="due_date">開始日</label>
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
 
@endsection

@section('scripts')

@endsection