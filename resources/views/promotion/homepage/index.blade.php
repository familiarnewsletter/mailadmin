@extends('layout')

@section('styles')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<!--  datatables css -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">HP分析</h1>
<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#sales_index" data-toggle>WEB売上分析</a>
    </li>
    <li class="tab-item">
      <a href="#access_index" data-toggle>アクセス分析</a>
    </li>
    <li class="tab-item">
      <a href="#budget_index" data-toggle>予算管理</a>
    </li>
 
  </ul>


<!--------------------- Sales ---------------------------------->

  <div class="tab-content is-open" id="sales_index">

     <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">WEB売上</h6>
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
          <h6 class="m-0 font-weight-bold text-primary">CV率</h6>
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
 



<!--------------------- Access ---------------------------------->
 
  <div class="tab-content" id="access_index">
   <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">セッション</h6>
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
          </div>
          </nav>
        </div>
      </div>
       <div class="container">
       <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">ユーザー</h6>
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
             <canvas id="chart4"></canvas>
          
          </nav>
        </div>
      </div>
    </div>
    <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">PV数</h6>
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
            <canvas id="chart5"></canvas>
                   
           
          </div>
          </nav>
        </div>
      </div>
  </div>
  </div>

  
 

 <!--------------------- Budget ---------------------------------->

  
  <div class="tab-content" id="budget_index">
  
  
       <div class="container">
       <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">関連アイテム売上</h6>
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
          
          <div class="card-body">
          
          <nav class="panel panel-default">
    
              <table id="table1" class="table table-bordered">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Month</th>
                          <th>予算</th>
                          <th>詳細</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td>1</td>
                          <td>Feb</td>
                          <td>1200000</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>                
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>Mar</td>
                          <td>1200000</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>         
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>Apr</td>
                          <td>1200000</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>               
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>May</td>
                          <td>1200000</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>             
                      </tr>
                      <tr>
                          <td>5</td>
                          <td>Jun</td>
                          <td>1200000</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>             
                      </tr>
                      <tr>
                          <td>6</td>
                          <td>Jul</td>
                          <td>1200000</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>                 
                      </tr>
                      <tr>
                          <td>7</td>
                          <td>Aug</td>
                          <td>1200000</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>               
                      </tr>
                      <tr>
                          <td>8</td>
                          <td>Sep</td>
                          <td>1200000</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>               
                      </tr>
                      <tr>
                          <td>9</td>
                          <td>Oct</td>
                          <td>1200000</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>                 
                      </tr>
                      <tr>
                          <td>10</td>
                          <td>Nov</td>
                          <td>1200000</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>                
                      </tr>
                      <tr>
                          <td>11</td>
                          <td>Dec</td>
                          <td>1200000</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>              
                      </tr>
                      <tr>
                          <td>12</td>
                          <td>Jan</td>
                          <td>1200000</td>
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
    labels: ['Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan'],
    datasets: [{
      label: '目標',
      data: [72000, 78000, 88000, 92000, 98000, 100000],
      backgroundColor: "silver"
    }, {
      label: '実績',
      data: [52000, 90000, 0, 0, 0, 0],
      backgroundColor: "blue"
    }]
  }
});
</script>

<script>
  var ctx = document.getElementById('chart2').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thi', 'Fri', 'Sat', 'Sun' ],
    datasets: [{
      label: '目標',
      data: [30, 50, 60, 60, 20, 30, 20],
      borderColor: "silver"
    }, {
      label: '実績',
      data: [30, 50, 50, 50, 50, 80, 0],
      borderColor: "blue"
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
      label: '目標',
      data: [200, 290, 50, 500, 200],
      borderColor: "silver"
    }, {
      label: '実績',
      data: [20, 100, 300, 50, 80],
      borderColor: "blue"
    }]
  }
});
</script>

<script>
  var ctx = document.getElementById('chart4').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['M', 'T', 'W', 'T', 'F'],
    datasets: [{
      label: '目標',
      data: [200, 290, 50, 500, 200],
      borderColor: "silver"
    }, {
      label: '実績',
      data: [20, 100, 300, 50, 80],
      borderColor: "blue"
    }]
  }
});
</script>

<script>
  var ctx = document.getElementById('chart5').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['M', 'T', 'W', 'T', 'F'],
    datasets: [{
      label: '目標',
      data: [200, 290, 50, 500, 200],
      borderColor: "silver"
    }, {
      label: '実績',
      data: [20, 100, 300, 50, 80],
      borderColor: "blue"
    }]
  }
});
</script>

<script>
    jQuery(function($){ 
    $("#table1").DataTable(); 
}); 
</script>

<!-- Page level plugins -->
  <script src="/sb_admin_2/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  




@endsection