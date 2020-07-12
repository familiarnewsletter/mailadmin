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
          <canvas id="chart2"></canvas>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="sample02-inner">
          <canvas id="chart3"></canvas>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="sample02-inner">
         <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">当月実績（累計）</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">400,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-yen-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="sample02-inner">
          <iframe src="https://calendar.google.com/calendar/embed?src=testersampler258%40gmail.com&ctz=Asia%2FTokyo" style="border: 0" width="570" height="340" frameborder="0" scrolling="no"></iframe>
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


<div class="container">
 <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">お知らせ</h6>
      <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" >
          <div class="dropdown-header">menu:</div>
          <a class="dropdown-item"data-toggle="modal" data-target="#sampleModal">期間選択</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">検索</a>
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
                        <th>期日</th>
                        <th>詳細</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>セールが始まります</td>
                        <td>各店対象品の発送をお願いします</td>
                        <td>2020.2.19</td>
                        <td><a href="#" class="btn btn-info btn-circle btn-sm">
                            <i class="fas fa-info-circle"></i>
                          </a></td>                
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

<script>
        var ctx = document.getElementById('chart2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['1w', '2w', '3w', '4w', '5w', '6w', '7w'],
                datasets: [{
                    label: 'リーチ数',
                    type: "pie",
                   
                    data: [10000, 11000, 15000, 12000, 9000, 12000, 13000],
                    borderColor: "black",                         // 棒の枠線の色
　　　　　　　　　　    borderWidth: 2, 
                    yAxisID: "y-axis-1",
                }, {
                    label: '開封数',
                    type: "pie",
                    
                    data: [8000, 9000, 10000, 9000, 6000, 8000, 7000],
                    borderColor: "blue",                         // 棒の枠線の色
　　　　　　　　　　    borderWidth: 2, 
                    yAxisID: "y-axis-1",
                }, {
                    label: '開封率',
                    type: "pie",
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
        var ctx = document.getElementById('chart3').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['1w', '2w', '3w', '4w', '5w', '6w', '7w'],
                datasets: [{
                    label: 'リーチ数',
                    type: "line",
                   
                    data: [10000, 11000, 15000, 12000, 9000, 12000, 13000],
                    borderColor: "black",                         // 棒の枠線の色
　　　　　　　　　　    borderWidth: 2, 
                    yAxisID: "y-axis-1",
                }, {
                    label: '開封数',
                    type: "line",
                    
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
 
<script type="text/javascript">
  var mySwiper = new Swiper ('.swiper-container', {
  loop: true,
  slidesPerView: 2,
  spaceBetween: 10,
  centeredSlides : true,
  pagination: '.swiper-pagination',
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev'
})
</script>

<script type="text/javascript">
  var mySwiper = new Swiper ('.swiper-container2', {
  effect: "flip",
  loop: true,
  pagination: '.swiper-pagination',
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
})
</script>

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



@endsection