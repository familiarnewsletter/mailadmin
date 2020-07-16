@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">

@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">受注管理</h1>
<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#orders_index" data-toggle>受注一覧</a>
    </li>
    <li class="tab-item">
      <a href="#orders_list_index" data-toggle>納品リスト一覧</a>
    </li>
    <li class="tab-item">
      <a href="#return_index" data-toggle>返品一覧</a>
    </li>
    
 
  </ul>

  <div class="tab-content is-open" id="orders_index">
    <div class="container">
   <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">受注一覧</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item" href="#">新規作成</a>
              <a class="dropdown-item" href="#">編集</a>
               <a class="dropdown-item" href="#">削除</a>
              <a class="dropdown-item" href="#">エクスポート</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
        <table id="table1" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>取引先名</th>
                <th>受注額</th>
                <th>受注リスト</th>
                <th>納期</th>
                <th>ステータス</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Aホスピタル</td>
                <td>300,000</td>
                <td><a href="#">Aホスピタルセット</a></td>
                <td>2020.7.10</td>
                <td>完了</td>
                <td><a href="/corporations/orders/show" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>A商事</td>
                 <td>300,000</td>
                <td><a href="#">A商事セット</a></td>
                <td>2020.7.10</td>
                <td>在庫手配中</td>
                <td><a href="/corporations/orders/show" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>3</td>
               <td>中央区役所</td>
                 <td>300,000</td>
                <td><a href="#">中央区セット</a></td>
                <td>2020.7.10</td>
                <td>請求書送付待ち</td>
                <td><a href="/corporations/orders/show" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>4</td>
                <td>K幼稚園</td>
                 <td>300,000</td>
                <td><a href="#">K幼稚園セット</a></td>
                <td>2020.7.10</td>
                <td>キャンセル</td>
                <td><a href="/corporations/orders/show" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>5</td>
                <td>Bクリニック</td>
                 <td>300,000</td>
                <td><a href="#">Bクリニックセット</a></td>
                <td>2020.7.10</td>
                <td>入金待ち</td>
                <td><a href="/corporations/orders/show" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>6</td>
                <td>K病院</td>
                 <td>300,000</td>
                <td><a href="#">K病院セット</a></td>
                <td>2020.7.10</td>
                <td>発送中</td>
                <td><a href="/corporations/orders/show" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>      
            </tr>
            <tr>
                <td>7</td>
                <td>T市役所</td>
                 <td>300,000</td>
                <td><a href="#">T市役所セット</a></td>
                <td>2020.7.10</td>
                <td>発送待ち</td>
                <td><a href="/corporations/orders/show" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>    
            </tr>
            
            
            </tbody>
        </table>
      </nav>
    </div>
    </div>
</div>
  </div>

 



<div class="tab-content is-open" id="orders_list_index">
     <div class="container">
   <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">納品リスト</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item" href="#">新規作成</a>
              <a class="dropdown-item" href="#">編集</a>
               <a class="dropdown-item" href="#">削除</a>
              <a class="dropdown-item" href="#">エクスポート</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
        <table id="table2" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>取引先名</th>
                <th>金額</th>
                <th>点数</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Aホスピタルセット</td>
                <td>200,000</td>
                <td>30</td>
                <td><a href="/corporations/orderlist/show" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>A商事セット1</td>
                <td>200,000</td>
                <td>30</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>3</td>
               <td>中央区セット</td>
                <td>200,000</td>
                <td>30</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>4</td>
                <td>K幼稚園セット</td>
                <td>200,000</td>
                <td>30</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>5</td>
                <td>Bクリニックセット</td>
                <td>200,000</td>
                <td>30</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>6</td>
                <td>K病院返品セット</td>
                <td>200,000</td>
                <td>30</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>7</td>
                <td>T市役所</td>
                <td>200,000</td>
                <td>30</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            
            
            </tbody>
        </table>
      </nav>
    </div>
    </div>
</div>
  </div>
  <div class="tab-content" id="return_index">
     <div class="container">
   <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">返品一覧</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item" href="#">新規作成</a>
              <a class="dropdown-item" href="#">編集</a>
               <a class="dropdown-item" href="#">削除</a>
              <a class="dropdown-item" href="#">エクスポート</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">

        <table id="table3" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>取引先名</th>
                <th>返品金額</th>
                <th>点数</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Aホスピタル</td>
                <<td>200,000</td>
                <td>30</td>
                <td><a href="/corporations/orders/show" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>A商事</td>
                <td>200,000</td>
                <td>30</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>3</td>
               <td>中央区役所</td>
                <td>200,000</td>
                <td>30</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>4</td>
                <td>K幼稚園</td>
                <td>200,000</td>
                <td>30</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>5</td>
                <td>B高校</td>
                <td>200,000</td>
                <td>30</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>6</td>
                <td>K病院</td>
                <td>200,000</td>
                <td>30</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>7</td>
                <td>T市役所</td>
                <td>200,000</td>
                <td>30</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            
            
            </tbody>
        </table>
      </nav>
    </div>
    </div>
</div>
  </div>    
  </div>


@endsection

@section('scripts')

<script src="/sb_admin_2/vendor/jquery/jquery.js"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="/sb_admin_2/vendor/jquery-easing/jquery.easing.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/sb_admin_2/js/sb-admin-2.js"></script>

  <!-- Page level plugins -->
  <script src="/sb_admin_2/vendor/datatables/jquery.dataTables.js"></script>
  <script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.js"></script>

  
<script>
    jQuery(function($){ 
    $("#table1").DataTable(); 
    $("#table2").DataTable(); 
    $("#table3").DataTable(); 
}); 
</script>
@endsection