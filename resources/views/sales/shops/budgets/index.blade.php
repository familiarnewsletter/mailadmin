@extends('layout')

@section('styles')
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>

@endsection

@section('content')

<div class="container-fluid">

<div class="container">

 <div align="right">
   <select name=”year”>

      <option value=”2020”>2020</option>
      <option value=”2019”>2019</option>
      <option value=”2018”>2018</option>
      <option value=”2017”>2017</option>
 
    </select>
  </div>

  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#shops_index" data-toggle>月別</a>
    </li>
    <li class="tab-item">
      <a href="#shops_create" data-toggle>週別</a>
    </li>
    <li class="tab-item">
      <a href="#action_index" data-toggle>日別</a>
    </li>

  </ul>

  <div class="tab-content is-open" id="shops_index">
   
    <canvas id="myChart"></canvas>


<div class="container">

    <div class="col-xs-12">
        <table id="table1" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>店名</th>
                <th>エリア</th>
                <th>年間予算</th>
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
  <div class="tab-content" id="shops_create">
  	<canvas id="myChart2"></canvas>
    
  </div>
      
  <div class="tab-content" id="action_index">
    <canvas id="myChart3"></canvas>
    
  
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
}); 
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var data_list = <?php echo json_encode($data_list); ?>;
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
    datasets: [{
      label: 'budgets',
      data: data_list,
      backgroundColor: "silver"
    }, {
      label: 'sales',
      data: [2, 100, 500, 50, 2, 3, 1],
      backgroundColor: "blue"
    }]
  }
});
</script>
<script>
  var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['M', 'T', 'W', 'T', 'F'],
    datasets: [{
      label: 'sales',
      data: [2, 29, 5, 5, 2],
      backgroundColor: "blue"
    }]
  }
});
</script>

<script>
  var ctx = document.getElementById('myChart3').getContext('2d');
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