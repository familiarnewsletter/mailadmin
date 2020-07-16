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

<style type="text/css">
      .gmap {
position: relative;
padding-bottom: 56.25%;
padding-top: 30px;
height: 0;
overflow: hidden;
}
 
.gmap iframe,
.gmap object,
.gmap embed {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}
</style>

@endsection

@section('content')
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">法人詳細</h1>
<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#shops_show" data-toggle>取引先情報</a>
    </li>
    <li class="tab-item">
      <a href="#budget_show" data-toggle>予算・実績</a>
    </li>
    <li class="tab-item">
      <a href="#meeting_show" data-toggle>商談ログ</a>
    </li>
  </ul>


<!--------------------- shops ---------------------------------->

  <div class="tab-content is-open" id="shops_show">

     <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">法人概要</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#">編集</a>
               <a class="dropdown-item" href="#">削除</a>
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
              <div class="swiper-slide"><img src="/images/hills1.jpg" width="800" height="600" alt=""></div>
              <div class="swiper-slide"><img src="/images/hills2.jpg" width="800" height="600" alt=""></div>
              <div class="swiper-slide"><img src="/images/hills3.jpg" width="800" height="600" alt=""></div>
              <div class="swiper-slide">
                <div id="gmap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.6804959267715!2d139.72788801532792!3d35.660242738729934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b771049dc33%3A0x5bfe0248594cc802!2z5YWt5pys5pyo44OS44Or44K6!5e0!3m2!1sja!2sjp!4v1594557697033!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div><br>
          <!-- Swiper END -->
          <p>
            これはダミーの法人です。ダミー以外の何ものでもありません。これはダミーの法人です。ダミー以外の何ものでもありません。これはダミーの法人です。ダミー以外の何ものでもありません。
          </p>
          <p>
            これはダミーの法人です。ダミー以外の何ものでもありません。これはダミーの法人です。ダミー以外の何ものでもありません。これはダミーの法人です。ダミー以外の何ものでもありません。
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
              <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#">編集</a>
               <a class="dropdown-item" href="#">削除</a>
              <a class="dropdown-item" href="#">エクスポート</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
             <table id="table" class="table table-bordered">
                <thead>
                <tr>
                    <th>項目</th>
                    <th>詳細</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>法人名</td>
                    <td>aaa</td>                                
                </tr>
                <tr>
                    <td>住所</td>
                    <td>aaa</td>                           
                </tr>
                <tr>
                    <td>電話番号</td>
                   <td>aaa</td>                             
                </tr>
                <tr>
                    <td>Fax番号</td>
                   <td>aaa</td>                              
                </tr>
                <tr>
                    <td>Email</td>
                   <td>aaa</td>                               
                </tr>
                <tr>
                    <td>先方担当者</td>
                   <td>aaa</td>                               
                </tr>
                <tr>
                    <td>成約日</td>
                   <td>aaa</td>                               
                </tr>
                
                </tbody>
            </table>
  
          
          </nav>
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
              <a class="dropdown-item"data-toggle="modal" data-target="#Modal1">期間選択</a>
              <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#">編集</a>
               <a class="dropdown-item" href="#">削除</a>
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
              <a class="dropdown-item"data-toggle="modal" data-target="#Modal2">期間選択</a>
              <div class="dropdown-divider"></div>
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
                    <th>出荷日</th>
                    <th>金額</th>
                    <th>数量</th>
                    <th>詳細</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2020.1.1</td>
                    <td>100,000</td>
                    <td>50</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>                
                </tr>
                <tr>
                    <td>2020.1.1</td>
                    <td>100,000</td>
                    <td>50</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>                
                </tr>
                <tr>
                    <td>2020.1.1</td>
                    <td>100,000</td>
                    <td>50</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>                
                </tr>
                <tr>
                    <td>2020.1.1</td>
                    <td>100,000</td>
                    <td>50</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>                
                </tr>
                <tr>
                    <td>2020.1.1</td>
                    <td>100,000</td>
                    <td>50</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>                
                </tr>
                <tr>
                    <td>2020.1.1</td>
                    <td>100,000</td>
                    <td>50</td>
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
                  <label for="title">年度選択</label>
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
                  <label for="title">年度選択</label>
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

<!--------------------- Meeting ---------------------------------->
 
  <div class="tab-content" id="meeting_show">
    <div class="container">
     
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">商談履歴</h6>
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
            
                  <table class="table">
                      <thead>

                        <tr>
                          <th>日時</th>
                          <th>法人名</th>
                          <th>内容</th>
                          <th>詳細</th>
                        </tr>

                      </thead>

                      <tbody>
                      
                        <tr>
                          <td>2019.1.10</td>
                          <td>A商事</td>
                          <td>新規取引</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>     
                        </tr>
                         <tr>
                          <td>2020.2.10</td>
                          <td>B高校</td>
                          <td>取引条件変更</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>     
                        </tr>
                        <tr>
                          <td>2020.3.10</td>
                          <td>B高校</td>
                          <td>発注頻度</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>     
                        </tr>

                        <tr>
                          <td>2020.4.10</td>
                          <td>B高校</td>
                          <td>発注頻度</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>     
                        </tr>

                        <tr>
                          <td>2020.5.10</td>
                          <td>B高校</td>
                          <td>発注頻度</td>
                          <td><a href="#" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-info-circle"></i>
                            </a></td>     
                        </tr>

                        <tr>
                          <td>2020.6.10</td>
                          <td>B高校</td>
                          <td>発注頻度</td>
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
                  <label for="title">年度選択</label>
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
                  <label for="title">年度選択</label>
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
                    label: '予算比',
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
}); 
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
<script type="text/javascript">
  var mySwiper = new Swiper('.swiper-container', {
  effect: "cube",
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