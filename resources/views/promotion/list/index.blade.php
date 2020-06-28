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

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">販促企画</h1>


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#promotion_index" data-toggle>販促企画一覧</a>
    </li>
    <li class="tab-item">
      <a href="#promotion_create" data-toggle>企画登録</a>
    </li>
    <li class="tab-item">
      <a href="#log_index" data-toggle>企画ログ</a>
    </li>
    <li class="tab-item">
      <a href="#budget_index" data-toggle>予算設定</a>
    </li>
 
  </ul>

  <div class="tab-content is-open" id="promotion_index">
   <div class="container">

    <div class="col-xs-12">
        <table id="table1" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>企画名</th>
                <th>立ち上がり日</th>
                <th>予算</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Tシャツキャンペーン</td>
                <td>2020.2.19</td>
                <td>1200000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>Yシャツキャンペーン</td>
                <td>2020.12.2</td>
                <td>10000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>          
            </tr>
            <tr>
                <td>3</td>
               <td>UGCキャンペーン</td>
                <td>2020.10.2</td>
                <td>30000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>              
            </tr>
            <tr>
                <td>4</td>
                <td>デザイン体験</td>
                <td>2020.6.2</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>             
            </tr>
            <tr>
                <td>5</td>
                <td>Tシャツキャンペーン</td>
                <td>2020.7.2</td>
                <td>9000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>            
            </tr>
            <tr>
                <td>6</td>
                <td>Tシャツキャンペーン</td>
                <td>2020.9.9</td>
                <td>80000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>              
            </tr>
            <tr>
                <td>7</td>
                <td>Tシャツキャンペーン</td>
                <td>2020.1.2</td>
                <td>780000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>              
            </tr>
            <tr>
                <td>8</td>
                <td>Tシャツキャンペーン</td>
                <td>2020.2.2</td>
                <td>110000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>              
            </tr>
            <tr>
                <td>9</td>
                <td>Tシャツキャンペーン</td>
                <td>2020.2.2</td>
                <td>1110000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>              
            </tr>
            <tr>
                <td>10</td>
                <td>Tシャツキャンペーン</td>
                <td>2020.2.2</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>              
            </tr>
            <tr>
                <td>11</td>
                <td>Tシャツキャンペーン</td>
                <td>2020.3.2</td>
                <td>3090000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>             
            </tr>
            <tr>
                <td>12</td>
                <td>Tシャツキャンペーン</td>
                <td>2020.2.5</td>
                <td>200000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>            
            </tr>
            <tr>
                <td>13</td>
                <td>Tシャツキャンペーン</td>
                <td>2020.2.9</td>
                <td>60000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>         
            </tr>
            </tbody>
        </table>
    </div>

  </div>
  
 
  </div>
  <div class="tab-content" id="promotion_create">
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
                  <label for="target">ターゲット</label>
                  <input type="text" class="form-control" name="target" id="target" value="{{ old('target') }}" >
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
                  <label for="assigning_id">開始日</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" >
                </div>
                <div class="form-group">
                  <label for="assigning_id">終了日</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" >
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
  <div class="tab-content" id="log_index">
    <div class="container">
  	 <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">企画過程</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                      <div class="dropdown-header">menu:</div>
                      <a class="dropdown-item" href="#">新規登録</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">週別表示</a>
                      <a class="dropdown-item" href="#">月別表示</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
              <div class="container">

    <div class="col-xs-12">
        <table id="table2" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>企画名</th>
                <th>タスク名</th>
                <th>実施日</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Tシャツキャンペーン</td>
                <td>内容策定</td>
                <td>2020.2.19</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>Yシャツキャンペーン</td>
                <td>画像依頼</td>
                <td>2020.2.19</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>          
            </tr>
            <tr>
                <td>3</td>
               <td>UGCキャンペーン</td>
                <td>投稿開始</td>
                <td>2020.10.2</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>              
            </tr>
            <tr>
                <td>4</td>
                <td>デザイン体験</td>
                <td>集客</td>
                <td>2020.6.2</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>             
            </tr>
            <tr>
                <td>5</td>
                <td>UGCキャンペーン</td>
                <td>投稿開始</td>
                <td>2020.10.2</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>            
            </tr>
            <tr>
                <td>6</td>
                <td>UGCキャンペーン</td>
                <td>投稿開始</td>
                <td>2020.10.2</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>              
            </tr>
            <tr>
                <td>7</td>
                <td>UGCキャンペーン</td>
                <td>投稿開始</td>
                <td>2020.10.2</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>              
            </tr>
            <tr>
                <td>8</td>
                <td>UGCキャンペーン</td>
                <td>投稿開始</td>
                <td>2020.10.2</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>              
            </tr>
            <tr>
                <td>9</td>
                <td>UGCキャンペーン</td>
                <td>投稿開始</td>
                <td>2020.10.2</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>              
            </tr>
            <tr>
                <td>10</td>
                <td>UGCキャンペーン</td>
                <td>投稿開始</td>
                <td>2020.10.2</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>              
            </tr>
            <tr>
                <td>11</td>
                <td>UGCキャンペーン</td>
                <td>投稿開始</td>
                <td>2020.10.2</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>             
            </tr>
            <tr>
                <td>12</td>
                <td>UGCキャンペーン</td>
                <td>投稿開始</td>
                <td>2020.10.2</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>            
            </tr>
            <tr>
                <td>13</td>
                <td>UGCキャンペーン</td>
                <td>投稿開始</td>
                <td>2020.10.2</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>         
            </tr>
            </tbody>
        </table>
    </div>
</div>
  </div>
  
  </div>
  </div>
  <div class="tab-content" id="budget_index">
     <div class="container"> 
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">予算登録</h6>
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
                  <label for="target_item_list">ターゲットアイテム</label>
                  <input type="text" class="form-control" name="target_item_list" id="target_item_list" value="{{ old('target_item') }}" >
                </div>
                <div class="form-group">
                  <label for="target_budget">予算</label>
                  <input type="number" step="1000" class="form-control" name="target_budget" id="target_budget" value="{{ old('target_budget') }}" >
                </div>
                <div class="form-group">
                <label for="due_date">期限</label>
                <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}" />
                </div>
                <div class="form-group">
                  <label for="end_date">検証終了日</label>
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

 

</div>


@endsection


  <!-- Page level plugins -->
  <script src="/sb_admin_2/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script>
    jQuery(function($){ 
    $("#table1").DataTable(); 
    $("#table2").DataTable();
    $("#table3").DataTable();
}); 
</script>



@section('scripts')


@endsection