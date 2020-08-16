@extends('layout')

@section('styles')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<!--  datatables css -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<!--  flatpickr css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">

@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">
  <i class="far fa-calendar-alt"></i>
  <span>販促選択</span>
</h1>


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#promotion_index" data-toggle>企画管理</a>
    </li>
    <li class="tab-item">
      <a href="#ap_index" data-toggle>AP管理</a>
    </li>
 
  </ul>

  <div class="tab-content is-open" id="promotion_index">
    <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">企画一覧</h6>
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
              <a class="dropdown-item" href="/promotion/list/create">
                <i class="fas fa-fw fa-plus-square"></i>
                <span>新規作成</span>
              </a>
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
            
                   
             <div class="container">

                <div class="col-xs-12">
                     <table id="table1" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>企画名</th>
                            <th>予算</th>
                            <th>開始日</th>
                            <th>終了日</th>
                            <th>詳細</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>デニムバッグ</td>
                            <td>300,000</td>
                            <td>2020.8.20</td>
                            <td>2020.8.22</td>
                            <td><a href="/promotion/list/show" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-info-circle"></i>
                              </a></td>                
                        </tr>
                       <tr>
                            <td>デニムバッグ</td>
                            <td>300,000</td>
                            <td>2020.8.20</td>
                            <td>2020.8.22</td>
                            <td><a href="/shops/list/show" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-info-circle"></i>
                              </a></td>                
                        </tr>
                        <tr>
                            <td>デニムバッグ</td>
                            <td>300,000</td>
                            <td>2020.8.20</td>
                            <td>2020.8.22</td>
                            <td><a href="/shops/list/show" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-info-circle"></i>
                              </a></td>                
                        </tr>
                        <tr>
                            <td>デニムバッグ</td>
                            <td>300,000</td>
                            <td>2020.8.20</td>
                            <td>2020.8.22</td>
                            <td><a href="/shops/list/show" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-info-circle"></i>
                              </a></td>                
                        </tr>
                        <tr>
                            <td>デニムバッグ</td>
                            <td>300,000</td>
                            <td>2020.8.20</td>
                            <td>2020.8.22</td>
                            <td><a href="/shops/list/show" class="btn btn-info btn-circle btn-sm">
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

  <div class="tab-content" id="ap_index">
     <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">タスク進捗</h6>
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
              <a class="dropdown-item" href="/promotion/ap/create">
                <i class="fas fa-fw fa-plus-square"></i>
                <span>新規作成</span>
              </a>
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
            
                   
             <div class="container">

              <div class="col-xs-12">
                  <table id="table2" class="table table-bordered">
                <thead>
                <tr>
                    <th>企画名</th>
                    <th>実施日</th>
                    <th>残タスク</th>
                    <th>タスク消化率</th>
                    <th>詳細</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>デニムバッグ</td>
                    <td>2020.2.8</td>
                    <td>5</td>
                    <td>50</td>
                    <td><a href="/promotion/ap/show" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>                
                </tr>
                <tr>
                    <td>デニムバッグ</td>
                    <td>2020.2.8</td>
                    <td>5</td>
                    <td>50</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>                
                </tr>
                <tr>
                    <td>デニムバッグ</td>
                    <td>2020.2.8</td>
                    <td>5</td>
                    <td>50</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>                
                </tr>
                <tr>
                    <td>デニムバッグ</td>
                    <td>2020.2.8</td>
                    <td>5</td>
                    <td>50</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>                
                </tr>
               <tr>
                    <td>デニムバッグ</td>
                    <td>2020.2.8</td>
                    <td>5</td>
                    <td>50</td>
                    <td><a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                      </a></td>                
                </tr>
                <tr>
                    <td>デニムバッグ</td>
                    <td>2020.2.8</td>
                    <td>5</td>
                    <td>50</td>
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

</div>


@endsection


@section('scripts')


<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="/sb_admin_2/vendor/jquery/jquery.min.js"></script>
  
  
  <!-- Custom scripts for all pages-->
  <script src="/sb_admin_2/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/sb_admin_2/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  
<script>
    jQuery(function($){ 
    $("#table1").DataTable(); 
    $("#table2").DataTable(); 
}); 
</script>


 
@endsection