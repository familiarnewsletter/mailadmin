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

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">
  <i class="far fa-user"></i>
  <span>User</span>
</h1>
<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#consumption_index" data-toggle>ユーザー管理</a>
    </li>
    <li class="tab-item">
      <a href="#delivery_index" data-toggle>アクションログ</a>
    </li>
 
  </ul>

  <div class="tab-content is-open" id="consumption_index">
   <div class="container">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">消化率一覧</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
                <a class="dropdown-item"data-toggle="modal" data-target="#Modal1">
                   <i class="fas fa-fw fa-plus-square"></i>
                    <span>販促選択</span>
                </a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/products/list/create">
                  <i class="fas fa-fw fa-plus-square"></i>
                  <span>新規作成</span>
                </a>
               <a class="dropdown-item" href="#">
                  <i class="fas fa-fw fa-file-csv"></i>
                  <span>CSV出力</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-fw fa-file-pdf"></i>
                  <span>PDF出力</span>
                </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
        <table id="table1" class="table table-bordered">
            <thead>
            <tr>
                <th>品番</th>
                <th>品名</th>
                <th>企画名</th>
                <th>消化率</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>150005</td>
                <td>肌着</td>
                <td>ママフェス</td>
                <td>50％</td>
                <td><a href="/products/consumption/show" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>150005</td>
                <td>肌着</td>
                <td>ママフェス</td>
                <td>50％</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
               <td>150005</td>
                <td>肌着</td>
                <td>ママフェス</td>
                <td>50％</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>150005</td>
                <td>肌着</td>
                <td>ママフェス</td>
                <td>50％</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>150005</td>
                <td>肌着</td>
                <td>ママフェス</td>
                <td>50％</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>150005</td>
                <td>肌着</td>
                <td>ママフェス</td>
                <td>50％</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>150005</td>
                <td>肌着</td>
                <td>ママフェス</td>
                <td>50％</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>150005</td>
                <td>肌着</td>
                <td>ママフェス</td>
                <td>50％</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>150005</td>
                <td>肌着</td>
                <td>ママフェス</td>
                <td>50％</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>150005</td>
                <td>肌着</td>
                <td>ママフェス</td>
                <td>50％</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>150005</td>
                <td>肌着</td>
                <td>ママフェス</td>
                <td>50％</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>150005</td>
                <td>肌着</td>
                <td>ママフェス</td>
                <td>50％</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>150005</td>
                <td>肌着</td>
                <td>ママフェス</td>
                <td>50％</td>
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
  <div class="tab-content" id="delivery_index">
    <div class="container">
     <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">販売スケジュール</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                      <div class="dropdown-header">menu:</div>
                        <a class="dropdown-item"data-toggle="modal" data-target="#Modal1">
                           <i class="fas fa-fw fa-plus-square"></i>
                            <span>販促選択</span>
                        </a>
                      <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/products/list/create">
                          <i class="fas fa-fw fa-plus-square"></i>
                          <span>新規作成</span>
                        </a>
                       <a class="dropdown-item" href="#">
                          <i class="fas fa-fw fa-file-csv"></i>
                          <span>CSV出力</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="fas fa-fw fa-file-pdf"></i>
                          <span>PDF出力</span>
                        </a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="card-body">
                  <table class="table">
            <thead>
            <tr>
              <th>月</th>
              <th>予算</th>
              <th>内容</th>
              
            </tr>
            </thead>
            <tbody>
            
              <tr>
                <td>a</td>
                <td>
                  <span class="label">q</span>
                </td>
                
                <td>詳細</td>
              </tr>
           
            </tbody>
          </table>
               
              </div>
          </div>
               
              
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
    $("#table2").DataTable();
    $("#table3").DataTable();
}); 
</script>


@endsection