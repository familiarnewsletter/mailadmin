@extends('layout')

@section('styles')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<!--  datatables css -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<!--  flatpickr css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css" />

 <style type="text/css">
      .swiper-container {
        width: 100%;
        height: 370px;
      }
      
      .swiper-slide {
        /* 画像位置の調整用 */
        text-align: center;
        color: #fff;
      }

    </style>

<style type="text/css">
    .sample02 .swiper-wrapper {
  align-items: stretch;
}

.sample02 .swiper-slide {
  display: flex;
  justify-content: center;
  align-items: center;
  height: auto;
  padding-bottom: 25px;
}

.sample02 .sample02-inner {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 70%;
}

.sample02 .swiper-button-prev,
.sample02 .swiper-button-next {
  display: none;
  width: 20px;
  height: 32.58px;
  fill: #666;
  stroke: none;
  stroke-width: 0;
  background-image: none;
  z-index: 10000;
}

.sample02 .swiper-container-horizontal > .swiper-pagination-bullets {
  bottom: 0;
}

.sample02 .swiper-pagination-bullet-active {
  background: #666;
}

@media (min-width: 768px) {
  .sample02 .swiper-slide {
    padding: 50px;
  }

  .sample02 .swiper-button-prev,
  .sample02 .swiper-button-next {
    display: block;
  }

  .sample02 .swiper-container-horizontal > .swiper-pagination-bullets {
    bottom: 10px;
  }
}
</style>

@endsection

@section('content')
<div class="container">
 <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">月間トピックス</h6>
      <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" >
          <div class="dropdown-header">menu:</div>
          <a class="dropdown-item"data-toggle="modal" data-target="#sampleModal">期間選択</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">登録</a>
          <a class="dropdown-item" href="#">編集</a>
          <a class="dropdown-item" href="#">削除</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      
      <nav class="panel panel-default">
        
               
         <div class="container">

<!-- Slider main container -->

<div class="sample sample02">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="sample02-inner">
          <canvas id="chart"></canvas>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="sample02-inner">
          <img src="/images/summersale.jpg" width="850" height="500" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="sample02-inner">
          <h1><font color="black">プロモーション設定</font></h1>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="sample02-inner">
         <h1><font color="black">月間トピックスを強調</font></h1>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="sample02-inner">
          <iframe src="https://calendar.google.com/calendar/embed?src=testersampler258%40gmail.com&ctz=Asia%2FTokyo" style="border: 0" width="650" height="420" frameborder="0" scrolling="no"></iframe>
        </div>
      </div>

    </div>
      
    <div class="swiper-button-prev">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44">
        <path class="c-arrow c-arrow-prev" d="M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z" />
      </svg>
    </div>
    <div class="swiper-button-next">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44">
        <path class="c-arrow c-arrow-next" d="M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z" />
      </svg>
    </div>

    <div class="swiper-pagination"></div>
  </div>
</div>
</div>
</nav>
</div>
</div>

<div class="container">
 <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">共有事項</h6>
      <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" >
          <div class="dropdown-header">menu:</div>
          <a class="dropdown-item"data-toggle="modal" data-target="#sampleModal">期間選択</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">投稿</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      
      <nav class="panel panel-default">
        
               
         <div class="container">

            <div class="col-xs-12">
                <table id="table1" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>タイトル</th>
                        <th>内容</th>
                        <th>日付</th>
                        <th>詳細</th>
                        <th>編集</th>
                        <th>削除</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>9月の販促企画</td>
                        <td>販促管理画面に追加しております。</td>
                        <td>2020.7.19</td>
                        <td><a href="#" class="btn btn-info btn-circle btn-sm">
                            <i class="fas fa-info-circle"></i>
                          </a></td> 
                        <td><a href="#" class="btn btn-primary btn-circle btn-sm">
                              <i class="fas fa-edit"></i>
                              </a></td>
                         <td><a href="#" class="btn btn-danger btn-circle btn-sm">
                          <i class="fas fa-trash-alt"></i></a></td>               
                    </tr>
                    <tr>
                        <td>プレママフェス詳細決定</td>
                        <td>詳細確認の上、配信スケジュールを設定お願いします。</td>
                        <td>2020.8.19</td>
                        <td><a href="#" class="btn btn-info btn-circle btn-sm">
                            <i class="fas fa-info-circle"></i>
                          </a></td> 
                      　<td><a href="#" class="btn btn-primary btn-circle btn-sm">
                              <i class="fas fa-edit"></i>
                              </a></td>
                       <td><a href="#" class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash-alt"></i></a></td>               
                    </tr>
                       
                    </tbody>
                </table>
            </div>

          </div>

      </div>
      </nav>
    </div>
  </div>
</div>
  

<!-- モーダル・ダイアログ -->
<div class="modal fade" id="sampleModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">表示期間選択</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
              
               
                <div class="form-group">
                  <label for="title">企画名</label>
                  <select type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" >
                    <option>2020</option>
                    <option>2019</option>
                    <option>2018</option>
                    <option>2017</option>
                  </select>
                </div>
        
                <div class="form-group">
                <label for="logstart_date">開始日</label>
                <input type="text" class="form-control" name="logstart_date" id="logstart_date" value="{{ old('logstart_date') }}" >
                </div>
                <div class="form-group">
                  <label for="logend_date">終了日</label>
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

@endsection


@section('scripts')
<script src="/sb_admin_2/vendor/jquery/jquery.min.js"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="/sb_admin_2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/sb_admin_2/js/sb-admin-2.js"></script>


<script src="/sb_admin_2/vendor/chart.js/Chart.js"></script>
<script src="/sb_admin_2/vendor/chart.js/Chart.bundle.js"></script>


<script>
        var ctx = document.getElementById('chart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1w', '2w', '3w', '4w', '5w', '6w', '7w'],
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
                    
                    data: [12000, 9000, 11000, 8000, 12000, 15000, 11000],
                    borderColor: "blue",                         // 棒の枠線の色
　　　　　　　　　　    borderWidth: 2, 
                    yAxisID: "y-axis-1",
                }, {
                    label: '予算比',
                    type: "line",
                    fill: false,
                    data: [110, 80, 70, 60, 80, 75, 110],
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
                            max: 200,
                            min: 0,
                            stepSize: 20
                        },
                        
                    }],
                },
            }
        });
</script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
 

<script type="text/javascript">
    window.addEventListener('DOMContentLoaded', function() {
  var swiper = new Swiper('.sample02 .swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    loop: true,
    speed: 1000,
    autoplay: 3000,
    spaceBetween: 10,
    effect: 'coverflow'
  });
}, false);
</script>


<script>
    jQuery(function($){ 
    $("#table1").DataTable(); 
}); 
</script>

  <script src="/sb_admin_2/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.min.js"></script>



@endsection