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
<h1 class="h3 mb-2 text-gray-800">
  <i class="fas fa-fw fa-tshirt"></i>
  <span>商品マスタ</span>
</h1>


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#products_index" data-toggle>商品管理</a>
    </li>
    <li class="tab-item">
      <a href="#list_index" data-toggle>リスト管理</a>
    </li>
    
 
  </ul>

  <div class="tab-content is-open" id="products_index">
    <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">商品一覧</h6>
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
                <th>カテゴリ</th>
                <th>価格</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
               
                <td>100200</td>
                <td>ネックレス</td>
                <td>雑貨</td>
                <td>5,000</td>
                <td><a href="/products/list/show" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>         
            </tr>
            <tr>
                 
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>      
            </tr>
            <tr>
                  
                <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>       
            </tr>
            <tr>
                  
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>       
            </tr>
            <tr>
                  
                 <td>100200</td>
                <td>パンツ</td>
                <td>ボトムス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>        
            </tr>
            <tr>
                  
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>       
            </tr>
            <tr>
                  
                <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>    
            </tr>
           
            </tbody>
        </table>
    </div>
</div>
  </nav>
</div>
  </div>
  </div>
  <div class="tab-content" id="list_index">
  	 <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">リスト一覧</h6>
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
        <table id="table2" class="table table-bordered">
            <thead>
            <tr>
                
                <th>リスト名</th>
                <th>関連企画</th>
                <th>カテゴリ</th>
                <th>商品数</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
               
                <td>100200</td>
                <td>ネックレス</td>
                <td>雑貨</td>
                <td>5,000</td>
                <td><a href="/products/list/show" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>         
            </tr>
            <tr>
                 
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>      
            </tr>
            <tr>
                  
                <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>       
            </tr>
            <tr>
                  
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>       
            </tr>
            <tr>
                  
                 <td>100200</td>
                <td>パンツ</td>
                <td>ボトムス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>        
            </tr>
            <tr>
                  
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>       
            </tr>
            <tr>
                  
                <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>    
            </tr>
           
            </tbody>
        </table>
    </div>
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

  <!-- Custom scripts for all ptypes-->
  <script src="/sb_admin_2/js/sb-admin-2.min.js"></script>

  <!-- Ptype level plugins -->
  <script src="/sb_admin_2/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  
<script>
    jQuery(function($){ 
    $("#table1").DataTable(); 
    $("#table2").DataTable();
}); 
</script>

@endsection