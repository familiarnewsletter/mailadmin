@extends('layout')

@section('styles')
<style type="text/css">
.card-body-1 {
    position: relative;
    overflow-y: scroll;
    height: 200px;
}

ul li div {
    margin:-1.6em 0 0 7em;
}

</style>
@endsection

@section('content')

<div class="container-fluid">

<div class="row">

            <!-- Earnings (Monthly) Card Example -->
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

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">当月予算（累計）</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">360,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-crosshairs fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">累計予算比</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">110%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">販促施策数</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">7</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Content Row -->
          <div class="row">


            <div class="col-lg-6">

                           <!-- Progress Small -->
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">月間進捗</h6>
                </div>
                <div class="card-body">
                  <div class="mb-1 small">予算達成率</div>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="mb-1 small">前年達成率</div>
                  <div class="progress progress-sm mb-2">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">MD</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw →</a>
                </div>
              </div>

            </div>

            <div class="col-lg-6">

              <!-- Roitation Utilities -->
              <div class="card shadow mb-4" >
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">お知らせ</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">メニュー:</div>
                      <a class="dropdown-item" href="#">投稿</a>
                      <a class="dropdown-item" href="#">編集・削除</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body-1">
                  <div class="card-body">
            
                    <ul>
                      <li><span>2020.10.16</span><div>タイトルタイトルタイトル</div></li><br>
                      <li><span>2020.10.16</span><div>タイトルタイトルタイトル</div></li><br>
                      <li><span>2020.10.16</span><div>タイトルタイトルタイトル</div></li><br>
                      <li><span>2020.10.16</span><div>タイトルタイトルタイトル</div></li><br>
                      <li><span>2020.10.16</span><div>タイトルタイトルタイトル</div></li><br>
                    </ul>

                  </div>

                </div>
              </div>

              <iframe src="https://calendar.google.com/calendar/embed?src=testersampler258%40gmail.com&ctz=Asia%2FTokyo" style="border: 0" width="570" height="540" frameborder="0" scrolling="no"></iframe>
          </div>

        </div>


@endsection

@section('scripts')

@endsection