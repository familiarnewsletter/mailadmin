@extends('layout')

@section('styles')

   <!--  flatpickr css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
@endsection

@section('content')
<div class="container">
        <h2>タスク一覧</h2>
        <form action="">
            <div class="form-row">
                <div class="form-group col-sm-9">
                    <label for="inputName" class="">タスク</label>
                    <input type="text" class="form-control" id="inputTask" placeholder="">
                </div>
                <div class="form-group col-sm-3">
                    <label for="due_date" class="">期限</label>
                    <input type="text" class="form-control" id="due_date" placeholder="">
                </div>
            </div>
            <input type="button" id="btnAdd" class="btn btn-primary mb-3" value="追加">
        </form>

        <div class="alert alert-warning" role="alert" id="divAlert">
            <span id="inputAlert"></span>
        </div>

        <div class="table-responsive">
            <table class="table table-hover" id="todoList">
                <thead>
                    <tr>
                        <th>タスク内容</th>
                        <th>期限</th>
                        <th>ステータス</th>
                        <th>編集</th>
                        <th>削除</th>
                    </tr>
                </thead>
                <tbody>
                    <td>企画</td>
                    <td>8/15</td>
                    <td>未着手</td>
                    <td><a href="#" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i>
                    </a></td> 
                    <td><a href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i>
                    </a></td> 
                </tbody>
            </table>
        </div>
    </div>

    
@endsection

@section('script')

    
@endsection