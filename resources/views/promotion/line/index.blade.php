@extends('layout')

@section('styles')
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">LINE</h1>
<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#friends_index" data-toggle>友達登録分析</a>
    </li>
    <li class="tab-item">
      <a href="#cvr_index" data-toggle>WEB送客分析</a>
    </li>
    <li class="tab-item">
      <a href="#logs_index" data-toggle>企画ログ</a>
    </li>
    <li class="tab-item">
      <a href="#contents_index" data-toggle>配信内容一覧</a>
    </li>
 
  </ul>


<!--------------------- Friends ---------------------------------->

  <div class="tab-content is-open" id="friends_index">

     <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">登録人数</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item" href="#">daily</a>
              <a class="dropdown-item" href="#">weekly</a>
              <a class="dropdown-item" href="#">monthly</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">DataExport</a>
              <a class="dropdown-item" href="#">check</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
                   
            <canvas id="chart1"></canvas>
          </div>
          </nav>
        </div>
      </div>

       <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">顧客CV率</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item" href="#">daily</a>
              <a class="dropdown-item" href="#">weekly</a>
              <a class="dropdown-item" href="#">monthly</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">DataExport</a>
              <a class="dropdown-item" href="#">check</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            <canvas id="chart2"></canvas>
          
          </nav>
        </div>
      </div>
    </div>
  </div>
 



<!--------------------- CVR ---------------------------------->
 
  <div class="tab-content" id="cvr_index">
    <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">セッション数</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item" href="#">daily</a>
              <a class="dropdown-item" href="#">weekly</a>
              <a class="dropdown-item" href="#">monthly</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">DataExport</a>
              <a class="dropdown-item" href="#">check</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
              <canvas id="chart3"></canvas>
          </nav>
        </div>
      </div>
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">関連アイテムCV率</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item" href="#">daily</a>
              <a class="dropdown-item" href="#">weekly</a>
              <a class="dropdown-item" href="#">monthly</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">DataExport</a>
              <a class="dropdown-item" href="#">check</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            <table id="table1" class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>企画名</th>
                    <th>ターゲットアイテム</th>
                    <th>CV率</th>
                    <th>詳細</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Tシャツキャンペーン</td>
                    <td><a href="#">リスト１</a></td>
                    <td>50%</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>                
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tシャツキャンペーン</td>
                    <td><a href="#">リスト１</a></td>
                    <td>50%</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>           
                </tr>
                <tr>
                    <td>3</td>
                   <td>UGCキャンペーン</td>
                    <td><a href="#">リスト１</a></td>
                    <td>50%</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>              
                </tr>
                <tr>
                    <td>4</td>
                   <td>UGCキャンペーン</td>
                    <td><a href="#">リスト１</a></td>
                    <td>50%</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>              
                </tr>
                <tr>
                    <td>5</td>
                   <td>UGCキャンペーン</td>
                    <td><a href="#">リスト１</a></td>
                    <td>50%</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>               
                </tr>
                <tr>
                    <td>6</td>
                   <td>UGCキャンペーン</td>
                    <td><a href="#">リスト１</a></td>
                    <td>50%</td>
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

  </div>

  
 

 <!--------------------- Logs ---------------------------------->

  
  <div class="tab-content" id="logs_index">
    <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">LINE企画ログ</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item" href="#">daily</a>
              <a class="dropdown-item" href="#">weekly</a>
              <a class="dropdown-item" href="#">monthly</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">DataExport</a>
              <a class="dropdown-item" href="#">check</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          
          <nav class="panel panel-default">
  
        <table id="table1" class="table table-bordered">
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
                
                </tbody>
            </table>
  
         
        </div>
   　　 
     
        </nav>
      </div>
    </div>
  </div>
    
<!--------------------- Contents ---------------------------------->

    
  <div class="tab-content" id="contents_index">
    <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">投稿内容</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item" href="#">daily</a>
              <a class="dropdown-item" href="#">weekly</a>
              <a class="dropdown-item" href="#">monthly</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">DataExport</a>
              <a class="dropdown-item" href="#">check</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
  
        <table id="table2" class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>タイトル</th>
                    <th>配信日</th>
                    <th>予算</th>
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
                    <td>Tシャツキャンペーン</td>
                    <td>内容策定</td>
                    <td>2020.2.19</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>          
                </tr>
                <tr>
                    <td>3</td>
                   <td>UGCキャンペーン</td>
                    <td>配信スタート</td>
                    <td>2020.2.19</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>              
                </tr>
                <tr>
                    <td>4</td>
                   <td>UGCキャンペーン</td>
                    <td>配信スタート</td>
                    <td>2020.2.19</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>              
                </tr>
                <tr>
                    <td>5</td>
                   <td>UGCキャンペーン</td>
                    <td>配信スタート</td>
                    <td>2020.2.19</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>              
                </tr>
                <tr>
                    <td>6</td>
                   <td>UGCキャンペーン</td>
                    <td>配信スタート</td>
                    <td>2020.2.19</td>
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

@endsection

@section('scripts')
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="/sb_admin_2/vendor/jquery/jquery.min.js"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="/sb_admin_2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/sb_admin_2/js/sb-admin-2.min.js"></script>

  

<script src="/sb_admin_2/js/sb-admin-2.js"></script>
<script src="/sb_admin_2/vendor/chart.js/Chart.js"></script>
<script src="/sb_admin_2/vendor/chart.js/Chart.bundle.js"></script>


<script>
  var ctx = document.getElementById('chart1').getContext('2d');
  
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
    datasets: [{
      label: '実績',
      data: [200, 100, 500, 50, 30, 35, 10],
      backgroundColor: "blue"
    }, {
      label: '目標',
      data: [2, 100, 500, 50, 200, 30, 15],
      backgroundColor: "silver"
    }]
  }
});
</script>

<script>
  var ctx = document.getElementById('chart2').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['M', 'T', 'W', 'T', 'F'],
    datasets: [{
      label: '実績',
      data: [2, 29, 5, 5, 2],
      backgroundColor: "blue"
    }, {
      label: '目標',
      data: [2, 29, 5, 5, 2],
      backgroundColor: "silver"
    }]
  }
});
</script>

<script>
  var ctx = document.getElementById('chart3').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['M', 'T', 'W', 'T', 'F'],
    datasets: [{
      label: '実績',
      data: [200, 290, 50, 500, 200],
      borderColor: "blue"
    }, {
      label: '目標',
      data: [20, 100, 300, 50, 80],
      borderColor: "silver"
    }]
  }
});
</script>





<script>
    jQuery(function($){ 
    $("#table1").DataTable();
    $("#table2").DataTable(); 
}); 
</script>

<!-- Page level plugins -->
  <script src="/sb_admin_2/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  




@endsection