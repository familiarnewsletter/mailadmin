@extends('layout')

@section('styles')
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>

@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">店舗予算管理</h1>
<div class="container">

 

  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#monthly_budget" data-toggle>月別</a>
    </li>
    <li class="tab-item">
      <a href="#weekly_budget" data-toggle>週別</a>
    </li>
    <li class="tab-item">
      <a href="#daily_budget" data-toggle>日別</a>
    </li>

  </ul>

  <div class="tab-content is-open" id="monthly_budget">

    <div align="right">
   <select name=”year”>

      <option value=”Feb”>Feb</option>
      <option value=”Mar”>Mar</option>
      <option value=”Apr”>Apr</option>
      <option value=”May”>May</option>
      <option value=”Jun”>Jun</option>
      <option value=”Jul”>Jul</option>
      <option value=”Aug”>Aug</option>
      <option value=”Sep”>Sep</option>
      <option value=”Oct”>Oct</option>
      <option value=”Nov”>Nov</option>
      <option value=”Dec”>Dec</option>
      <option value=”Jan”>Jan</option>
 
    </select>
  </div>
   
   

<div class="container">

    <div class="col-xs-12">
        <table id="table1" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>店名</th>
                <th>エリア</th>
                <th>月別予算</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>銀座店</td>
                <td>東京</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>大阪阪急</td>
                <td>大阪</td>
                <td>700000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>3</td>
               <td>西宮店</td>
                <td>兵庫</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>4</td>
                <td>神戸店</td>
                <td>兵庫</td>
                <td>1000000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>5</td>
                <td>横浜本町店</td>
                <td>横浜</td>
                <td>50000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>6</td>
                <td>自由が丘店</td>
                <td>東京</td>
                <td>43000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>7</td>
                <td>金沢店</td>
                <td>北陸中部</td>
                <td>55000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>8</td>
                <td>仙台店</td>
                <td>北海道東北</td>
                <td>44000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>9</td>
                <td>博多店</td>
                <td>九州</td>
                <td>60000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>10</td>
                <td>奈良店</td>
                <td>近畿</td>
                <td>70000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>11</td>
                <td>高松店</td>
                <td>四国</td>
                <td>30000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>12</td>
                <td>札幌店</td>
                <td>北海道東北</td>
                <td>30000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>12</td>
                <td>名古屋店</td>
                <td>愛知</td>
                <td>65000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            </tbody>
        </table>
    </div>
</div>



  </div>
  <div class="tab-content" id="weekly_budget">
    <div align="right">
   <select name=”year”>

      <option value=”1w”>1w</option>
      <option value=”2w”>2w</option>
      <option value=”3w”>3w</option>
      <option value=”4w”>4w</option>
 
    </select>
  </div>
  	<div class="container">

    <div class="col-xs-12">
        <table id="table2" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>店名</th>
                <th>エリア</th>
                <th>週別予算</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>銀座店</td>
                <td>東京</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>大阪阪急</td>
                <td>大阪</td>
                <td>700000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>3</td>
               <td>西宮店</td>
                <td>兵庫</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>4</td>
                <td>神戸店</td>
                <td>兵庫</td>
                <td>1000000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>5</td>
                <td>横浜本町店</td>
                <td>横浜</td>
                <td>50000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>6</td>
                <td>自由が丘店</td>
                <td>東京</td>
                <td>43000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>7</td>
                <td>金沢店</td>
                <td>北陸中部</td>
                <td>55000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>8</td>
                <td>仙台店</td>
                <td>北海道東北</td>
                <td>44000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>9</td>
                <td>博多店</td>
                <td>九州</td>
                <td>60000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>10</td>
                <td>奈良店</td>
                <td>近畿</td>
                <td>70000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>11</td>
                <td>高松店</td>
                <td>四国</td>
                <td>30000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>12</td>
                <td>札幌店</td>
                <td>北海道東北</td>
                <td>30000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>12</td>
                <td>名古屋店</td>
                <td>愛知</td>
                <td>65000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            </tbody>
        </table>
    </div>
  </div>
</div>
      
  <div class="tab-content" id="daily_budget">
    <div align="right">
   <select name=”year”>

      <option value=”mon”>Monday</option>
      <option value=”tue”>Tuesday</option>
      <option value=”wed”>Wednesday</option>
      <option value=”thi”>Thirsday</option>
      <option value=”fri”>Friday</option>
      <option value=”sat”>Saturday</option>
      <option value=”sun”>Sunday</option>
 
    </select>
  </div>
    <div class="container">

    <div class="col-xs-12">
        <table id="table3" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>店名</th>
                <th>エリア</th>
                <th>日別予算</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>銀座店</td>
                <td>東京</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>大阪阪急</td>
                <td>大阪</td>
                <td>700000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>3</td>
               <td>西宮店</td>
                <td>兵庫</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>4</td>
                <td>神戸店</td>
                <td>兵庫</td>
                <td>1000000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>5</td>
                <td>横浜本町店</td>
                <td>横浜</td>
                <td>50000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>6</td>
                <td>自由が丘店</td>
                <td>東京</td>
                <td>43000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>7</td>
                <td>金沢店</td>
                <td>北陸中部</td>
                <td>55000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>8</td>
                <td>仙台店</td>
                <td>北海道東北</td>
                <td>44000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>9</td>
                <td>博多店</td>
                <td>九州</td>
                <td>60000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>10</td>
                <td>奈良店</td>
                <td>近畿</td>
                <td>70000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>11</td>
                <td>高松店</td>
                <td>四国</td>
                <td>30000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>12</td>
                <td>札幌店</td>
                <td>北海道東北</td>
                <td>30000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>12</td>
                <td>名古屋店</td>
                <td>愛知</td>
                <td>65000</td>
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




@endsection

@section('scripts')

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="/sb_admin_2/vendor/jquery/jquery.min.js"></script>
  
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


 
  <script src="/sb_admin_2/js/sb-admin-2.js"></script>
   <script src="/sb_admin_2/vendor/chart.js/Chart.js"></script>
   <script src="/sb_admin_2/vendor/chart.js/Chart.bundle.js"></script>

<script>
  var ctx = document.getElementById('table1').getContext('2d');
  var data_list = <?php echo json_encode($data_list); ?>;
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan'],
    datasets: [{
      label: 'budgets',
      data: data_list,
      backgroundColor: "silver"
    }, {
      label: 'sales',
      data: [2, 100, 500, 50, 2, 3, 100, 2, 100, 500, 50, 2, 3, 1000, ],
      backgroundColor: "blue"
    }]
  }
});
</script>
<script>
  var ctx = document.getElementById('table2').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['1w', '2w', '3w', '4w', '5w'],
    datasets: [{
      label: 'budgets',
      data: [200, 1000, 500, 500, 200],
      backgroundColor: "silver"
    }, {
      label: 'sales',
      data: [200, 100, 500, 500, 200],
      backgroundColor: "blue"
    }]
  }
});
</script>

<script>
  var ctx = document.getElementById('table3').getContext('2d');
  var data_list = <?php echo json_encode($data_list); ?>;
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
    datasets: [{
      label: 'budgets',
      data: [200, 100, 500, 50, 200, 30, 100],
      backgroundColor: "silver"
    }, {
      label: 'sales',
      data: [200, 100, 500, 50, 200, 30, 100],
      backgroundColor: "blue"
    }]
  }
});
</script>


@endsection