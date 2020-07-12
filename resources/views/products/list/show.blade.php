@extends('layout')

@section('styles')
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
<style type="text/css">
  
    .swiper-slide {
        text-align: center;
        
    }
</style>

@endsection

@section('content')
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">商品詳細</h1>
<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#promotion_show" data-toggle>商品概要</a>
    </li>
    <li class="tab-item">
      <a href="#budget_show" data-toggle>予算・実績</a>
    </li>
  </ul>


<!--------------------- Promotion ---------------------------------->

  <div class="tab-content is-open" id="promotion_show">

     <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">商品説明</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item"data-toggle="modal" data-target="#Modal1">期間選択</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">エクスポート</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
          <!-- Swiper START -->
          <div class="swiper-container">
            <!-- メイン表示部分 -->
            <div class="swiper-wrapper">
              <!-- 各スライド -->
              <div class="swiper-slide"><img src="/images/chc1.jpg" width="700" height="600" alt=""></div>
              <div class="swiper-slide"><img src="/images/chc2.jpg" width="700" height="600" alt=""></div>
              <div class="swiper-slide"><img src="/images/chc3.jpg" width="700" height="600" alt=""></div>
              <div class="swiper-slide"><img src="/images/chc4.jpg" width="700" height="600" alt=""></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div><br>
          <!-- Swiper END -->

          <p>
            これはダミーの商品です。ダミー以外の何ものでもありません。これはダミーの商品です。ダミー以外の何ものでもありません。これはダミーの商品です。ダミー以外の何ものでもありません。
          </p>
          <p>
            これはダミーの商品です。ダミー以外の何ものでもありません。これはダミーの商品です。ダミー以外の何ものでもありません。これはダミーの商品です。ダミー以外の何ものでもありません。
          </p>

          
          </div>
          </nav>
        </div>
      </div>

       <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">詳細</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item"data-toggle="modal" data-target="#Modal2">期間選択</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">エクスポート</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
             <table id="table1" class="table table-bordered">
                <thead>
                <tr>
                    <th>項目</th>
                    <th>詳細</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>品番</td>
                    <td>aaa</td>
                                
                </tr>
                <tr>
                    <td>品名</td>
                    <td>aaa</td>
                           
                </tr>
                <tr>
                    <td>カテゴリー</td>
                   <td>aaa</td>
                              
                </tr>
                <tr>
                    <td>対象</td>
                   <td>aaa</td>
                              
                </tr>
                <tr>
                    <td>サイズ</td>
                   <td>aaa</td>
                               
                </tr>
                <tr>
                    <td>カラー</td>
                   <td>aaa</td>
                               
                </tr>

                <tr>
                    <td>メーカー</td>
                   <td>aaa</td>
                               
                </tr>
                <tr>
                    <td>ステータス</td>
                   <td>廃盤</td>
                               
                </tr>
                <tr>
                    <td>価格</td>
                   <td>aaa</td>
                               
                </tr>

                
                </tbody>
            </table>
  
          
          </nav>
        </div>
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


<!--------------------- Budget and Sales ---------------------------------->
 
  <div class="tab-content" id="budget_show">
    <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">予算・実績</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item"data-toggle="modal" data-target="#Modal3">期間選択</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">エクスポート</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
              <canvas id="chart1"></canvas>
          </nav>
        </div>
      </div>
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
              <a class="dropdown-item"data-toggle="modal" data-target="#Modal4">期間選択</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">エクスポート</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
              <table id="table2" class="table table-bordered">
                <thead>
                <tr>
                    <th>日付</th>
                    <th>チャネル</th>
                    <th>数量</th>
                    <th>金額</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2020.3.3</td>
                    <td>銀座店</td>
                    <td>100</td>
                    <td>100,000</td>              
                </tr>
                <tr>
                    <td>2020.3.3</td>
                    <td>銀座店</td>
                    <td>100</td>
                    <td>100,000</td>            
                </tr>
                <tr>
                    <td>2020.3.3</td>
                    <td>銀座店</td>
                    <td>100</td>
                    <td>100,000</td>                
                </tr>
                <tr>
                    <td>2020.3.3</td>
                    <td>銀座店</td>
                    <td>100</td>
                    <td>100,000</td>                
                </tr>
                <tr>
                    <td>2020.3.3</td>
                    <td>銀座店</td>
                    <td>100</td>
                    <td>100,000</td>                 
                </tr>
                <tr><td>2020.3.3</td>
                    <td>銀座店</td>
                    <td>100</td>
                    <td>100,000</td>                
                </tr>

                
                </tbody>
            </table>
          
          </nav>
        </div>
      </div>
    </div>
    </div>

  </div>

<div class="modal fade" id="Modal3" tabindex="-1">
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


@endsection

@section('scripts')




<script src="/sb_admin_2/vendor/jquery/jquery.min.js"></script>
  
  

  <!-- Custom scripts for all pages-->
  <script src="/sb_admin_2/js/sb-admin-2.min.js"></script>

  

<script src="/sb_admin_2/js/sb-admin-2.js"></script>
<script src="/sb_admin_2/vendor/chart.js/Chart.js"></script>



<script>
        var ctx = document.getElementById('chart1').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1w', '2w', '3w', '4w', '5w', '6w', '7w'],
                datasets: [{
                    label: 'リーチ数',
                    type: "bar",
                   
                    data: [10000, 11000, 15000, 12000, 9000, 12000, 13000],
                    borderColor: "black",                         // 棒の枠線の色
　　　　　　　　　　    borderWidth: 2, 
                    yAxisID: "y-axis-1",
                }, {
                    label: '開封数',
                    type: "bar",
                    
                    data: [8000, 9000, 10000, 9000, 6000, 8000, 7000],
                    borderColor: "blue",                         // 棒の枠線の色
　　　　　　　　　　    borderWidth: 2, 
                    yAxisID: "y-axis-1",
                }, {
                    label: '開封率',
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

<script src="/sb_admin_2/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.min.js"></script>



<script>
    jQuery(function($){ 
    $("#table1").DataTable(); 
    $("#table2").DataTable(); 
}); 
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
<script type="text/javascript">
  var mySwiper = new Swiper('.swiper-container', {
  
  autoplay: {
    delay: 3000,
    stopOnLastSlide: false,
    disableOnInteraction: false,
    reverseDirection: false
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  }
});
</script>
@endsection