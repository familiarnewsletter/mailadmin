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

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">
  <i class="far fa-chart-bar"></i>
  <span>予算/実績</span>
</h1>
<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#sales_index" data-toggle>WEB予実</a>
    </li>
    <li class="tab-item">
      <a href="#promotion_sales_index" data-toggle>販促別予実</a>
    </li>
    <li class="tab-item">
      <a href="#budget_index" data-toggle>予実一覧</a>
    </li>
 
  </ul>

  <div class="tab-content is-open" id="sales_index">
     <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">期間累計</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
             <a class="dropdown-item"data-toggle="modal" data-target="#Modal1">
                <i class="fas fa-fw fa-calendar-alt"></i>
                <span>期間選択</span>
              </a>
              <div class="dropdown-divider"></div>
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
            
           
            <canvas id="myChart"></canvas>
          </div>
          </nav>
        </div>
      </div>
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">期間選択</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item"data-toggle="modal" data-target="#Modal2">
              　　<i class="fas fa-fw fa-calendar-alt"></i>
                <span>期間選択</span>
              </a>
              <div class="dropdown-divider"></div>
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
  
 <div class="modal fade" id="Modal1" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">期間選択</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">

           <div class="form-group">
                  <label for="title">企画名</label>
                  <select type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" >
                    <option>Tシャツキャンペーン</option>
                  </select>
                </div>
        
                <div class="form-group">
                <label for="logstart_date">期限</label>
                <input type="text" class="form-control" name="logstart_date" id="logstart_date" value="{{ old('logstart_date') }}" >
                </div>
                <div class="form-group">
                  <label for="logend_date">検証終了日</label>
                  <input type="text" class="form-control" name="logend_date" id="logend_date" value="{{ old('logend_date') }}" >
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary btn-sm">選択</button>
                  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">閉じる</button>
                </div>
                   
          </nav>
        </div>
      </div>
    </div>
  </div>
</div> 
  
 
  <div class="tab-content" id="promotion_sales_index">
    <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">期間累計</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
             <a class="dropdown-item"data-toggle="modal" data-target="#Modal2">
                <i class="fas fa-fw fa-calendar-alt"></i>
                <span>期間選択</span>
            　</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                  <a class="dropdown-item" href="#">
                  <i class="fas fa-fw fa-file-csv"></i>
                  <span>CSV出力</span>
              </a>
              <a class="dropdown-item" href="#">
                  <i class="fas fa-fw fa-file-pdf"></i>
                  <span>PDF出力</span>
              </a>
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            <canvas id="myChart2"></canvas>
          </nav>
        </div>
      </div>
    </div>
    <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">期間選択</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
                <a class="dropdown-item"data-toggle="modal" data-target="#Modal2">
                    <i class="fas fa-fw fa-calendar-alt"></i>
                    <span>期間選択</span>
                </a>
              <div class="dropdown-divider"></div>
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
 <div class="modal fade" id="Modal2" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">期間選択</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
           
                <div class="form-group">
                  <label for="title">企画名</label>
                  <select type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" >
                    <option>Tシャツキャンペーン</option>
                  </select>
                </div>
        
                <div class="form-group">
                <label for="logstart_date">期限</label>
                <input type="text" class="form-control" name="logstart_date" id="logstart_date" value="{{ old('logstart_date') }}" >
                </div>
                <div class="form-group">
                  <label for="logend_date2">検証終了日</label>
                  <input type="text" class="form-control" name="logend_date2" id="logend_date2" value="{{ old('logend_date2') }}" >
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary btn-sm">選択</button>
                  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">閉じる</button>
                </div>
                   
          </nav>
        </div>
      </div>
    </div>
  </div>
</div> 
    
  <div class="tab-content" id="budget_index">
    <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">売上履歴</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item"data-toggle="modal" data-target="#Modal4">
                  <i class="fas fa-fw fa-calendar-alt"></i>
                  <span>期間選択</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/promotion/budget/create">
                  <i class="fas fa-fw fa-plus-square"></i>
                 <span>新規作成</span>
              </a>
              <a class="dropdown-item" href="#">
                  <a class="dropdown-item" href="#">
                  <i class="fas fa-fw fa-file-csv"></i>
                  <span>CSV出力</span>
              </a>
              <a class="dropdown-item" href="#">
                  <i class="fas fa-fw fa-file-pdf"></i>
                  <span>PDF出力</span>
              </a>
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
  
        <table id="table3" class="table table-bordered">
                <thead>
                <tr>
                    <th>実施日</th>
                    <th>企画名</th>
                    <th>売上</th>
                    <th>予算比</th>
                    <th>詳細</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2020.2.19</td>
                    <td>Tシャツキャンペーン</td>
                    <td>1,200,000</td>
                    <td>100%</td>
                    <td><a href="/promotion/budget/show" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>
                                      
                </tr>
                <tr>
                     <td>2020.12.2</td>
                    <td>Yシャツキャンペーン</td>                   
                    <td>10000</td>
                    <td>100%</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>
                    
                </tr>
                <tr>
                   <td>2020.10.2</td>
                   <td>UGCキャンペーン</td>
                    <td>30000</td>
                    <td>100%</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>              
                </tr>
                <tr>
                    <td>2020.6.2</td>
                    <td>デザイン体験</td>
                    <td>300000</td>
                    <td>100%</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>             
                </tr>
                <tr>
                    <td>2020.7.2</td>
                    <td>Tシャツキャンペーン</td>
                    <td>9,000</td>
                    <td>100%</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>            
                </tr>
                <tr>
                    <td>2020.9.9</td>
                    <td>Tシャツキャンペーン</td>
                    <td>80000</td>
                    <td>100%</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>              
                </tr>
                <tr>
                     <td>2020.1.2</td>
                    <td>Tシャツキャンペーン</td>
                    <td>780000</td>
                    <td>100%</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>              
                </tr>
                <tr>
                    <td>2020.2.2</td>
                    <td>Tシャツキャンペーン</td>
                    <td>110000</td>
                    <td>100%</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>              
                </tr>
                <tr>
                    <td>2020.2.2</td>
                    <td>Tシャツキャンペーン</td>
                    <td>1110000</td>
                    <td>100%</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>              
                </tr>
                <tr>
                    <td>2020.2.2</td>
                    <td>Tシャツキャンペーン</td>
                    <td>300000</td>
                    <td>100%</td>
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
    <div class="modal fade" id="Modal4" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">期間選択</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
              
               
                <div class="form-group">
                  <label for="title">企画名</label>
                  <select type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" >
                    <option>Tシャツキャンペーン</option>
                  </select>
                </div>
        
                <div class="form-group">
                <label for="logstart_date">期限</label>
                <input type="text" class="form-control" name="logstart_date" id="logstart_date" value="{{ old('logstart_date') }}" >
                </div>
                <div class="form-group">
                  <label for="logend_date">検証終了日</label>
                  <input type="text" class="form-control" name="logend_date" id="logend_date" value="{{ old('logend_date') }}" >
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary btn-sm">選択</button>
                  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">閉じる</button>
                </div>
                   
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
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['8月', '9月', '10月', '11月'],
                datasets: [{
                    label: 'WEB予算',
                    type: "bar",
                   
                    data: [10000, 11000, 15000, 12000, 9000, 12000, 13000],
                    borderColor: "black",                         // 棒の枠線の色
　　　　　　　　　　    borderWidth: 2, 
                    yAxisID: "y-axis-1",
                }, {
                    label: 'WEB実績',
                    type: "bar",
                    
                    data: [8000, 9000, 10000, 9000, 6000, 8000, 7000],
                    borderColor: "blue",                         // 棒の枠線の色
　　　　　　　　　　    borderWidth: 2, 
                    yAxisID: "y-axis-1",
                },{
                    label: '販促予算',
                    type: "bar",
                   
                    data: [10000, 11000, 15000, 12000, 9000, 12000, 13000],
                    borderColor: "gray",                         // 棒の枠線の色
　　　　　　　　　　    borderWidth: 2, 
                    yAxisID: "y-axis-1",
                }, {
                    label: '販促実績',
                    type: "bar",
                    
                    data: [8000, 9000, 10000, 9000, 6000, 8000, 7000],
                    borderColor: "red",                         // 棒の枠線の色
　　　　　　　　　　    borderWidth: 2, 
                    yAxisID: "y-axis-1",
                }, {
                    label: 'WEB予算比',
                    type: "line",
                    fill: false,
                    data: [22, 23, 10, 15, 40, 35, 30],
                    borderColor: "navy",
                    
                    yAxisID: "y-axis-2",
                }]
            },
            options: {
                
                responsive: true,
                scales: {
                    yAxes: [{
                        id: "y-axis-1",
                        
                        position: "left",
                        ticks: {
                            max: 15000,
                            min: 0,
                            stepSize: 1000
                        },
                    }, {
                        id: "y-axis-2",
                        
                        position: "right",
                        ticks: {
                            max: 100,
                            min: 0,
                            stepSize: 20
                        },
                        
                    }],
                },
            }
        });
</script>

<script>
  var ctx = document.getElementById('myChart2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Tシャツキャンペーン', 'タオルDay', 'セール', 'ダミーパーティー', '祭り', 'デニム', 'ふぁみ'],
                datasets: [{
                    label: '予算',
                    type: "bar",
                   
                    data: [10000, 11000, 15000, 12000, 9000, 12000, 13000],
                    borderColor: "black",                         // 棒の枠線の色
　　　　　　　　　　    borderWidth: 2, 
                    yAxisID: "y-axis-1",
                }, {
                    label: '実績',
                    type: "bar",
                    
                    data: [8000, 9000, 10000, 9000, 6000, 8000, 7000],
                    borderColor: "blue",                         // 棒の枠線の色
　　　　　　　　　　    borderWidth: 2, 
                    yAxisID: "y-axis-1",
                }, {
                    label: '新規セッション率',
                    type: "line",
                    fill: false,
                    data: [22, 23, 10, 15, 40, 35, 30],
                    borderColor: "pink",
                    
                    yAxisID: "y-axis-2",
                }]
            },
            options: {
                
                responsive: true,
                scales: {
                    yAxes: [{
                        id: "y-axis-1",
                        
                        position: "left",
                        ticks: {
                            max: 15000,
                            min: 0,
                            stepSize: 1000
                        },
                    }, {
                        id: "y-axis-2",
                        
                        position: "right",
                        ticks: {
                            max: 100,
                            min: 0,
                            stepSize: 20
                        },
                        
                    }],
                },
            }
        });
</script>


<script>
  var ctx = document.getElementById('myChart3').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1w', '2w', '3w', '4w', '5w', '6w', '7w'],
                datasets: [{
                    label: 'セッション数',
                    type: "bar",
                   
                    data: [10000, 11000, 15000, 12000, 9000, 12000, 13000],
                    borderColor: "black",                         // 棒の枠線の色
　　　　　　　　　　    borderWidth: 2, 
                    yAxisID: "y-axis-1",
                }, {
                    label: 'CV数',
                    type: "bar",
                    
                    data: [8000, 9000, 10000, 9000, 6000, 8000, 7000],
                    borderColor: "blue",                         // 棒の枠線の色
　　　　　　　　　　    borderWidth: 2, 
                    yAxisID: "y-axis-1",
                }, {
                    label: 'CV率',
                    type: "line",
                    fill: false,
                    data: [22, 23, 10, 15, 40, 35, 30],
                    borderColor: "pink",
                    
                    yAxisID: "y-axis-2",
                }]
            },
            options: {
                
                responsive: true,
                scales: {
                    yAxes: [{
                        id: "y-axis-1",
                        
                        position: "left",
                        ticks: {
                            max: 15000,
                            min: 0,
                            stepSize: 1000
                        },
                    }, {
                        id: "y-axis-2",
                        
                        position: "right",
                        ticks: {
                            max: 100,
                            min: 0,
                            stepSize: 20
                        },
                        
                    }],
                },
            }
        });
</script>





<script>
    jQuery(function($){ 
    $("#table1").DataTable(); 
    $("#table2").DataTable();
    $("#table3").DataTable(); 
}); 
</script>

<!-- Page level plugins -->
  <script src="/sb_admin_2/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  




@endsection