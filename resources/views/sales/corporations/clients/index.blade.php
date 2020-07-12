@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">

@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">法人管理</h1>
<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#clients_index" data-toggle>法人一覧</a>
    </li>
    <li class="tab-item">
      <a href="#clients_create" data-toggle>法人登録</a>
    </li>
    <li class="tab-item">
      <a href="#meetinglog_index" data-toggle>業務ログ</a>
    </li>
    
 
  </ul>

  <div class="tab-content is-open" id="clients_index">
    <div class="container">
   <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">企画概要</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item"data-toggle="modal" data-target="#Modal1">エリア選択</a>
              <a class="dropdown-item"data-toggle="modal" data-target="#Modal2">カテゴリ選択</a>
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
                <th>No</th>
                <th>取引先名</th>
                <th>カテゴリ</th>
                <th>年間予算</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Aホスピタル</td>
                <td>クリニック</td>
                <td>300000</td>
                <td><a href="/corporations/clients/show" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>A商事</td>
                <td>企業</td>
                <td>700000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>3</td>
               <td>中央区役所</td>
                <td>自治体</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>4</td>
                <td>K幼稚園</td>
                <td>教育機関</td>
                <td>1000000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>5</td>
                <td>B高校</td>
                <td>教育機関</td>
                <td>50000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>6</td>
                <td>K病院</td>
                <td>クリニック</td>
                <td>43000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>7</td>
                <td>T市役所</td>
                <td>自治体</td>
                <td>55000</td>
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
                  <label for="title">エリア選択</label>
                  <select type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" >
                    <option>北海道・東北</option>
                    <option>関東</option>
                    <option>東京</option>
                    <option>北信越・中部</option>
                    <option>名古屋</option>
                    <option>神戸・兵庫</option>
                    <option>大阪</option>
                    <option>近畿</option>
                  </select>
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
          <h6 class="m-0 font-weight-bold text-primary">カテゴリ</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
              <div class="form-group">
                  <label for="title">カテゴリ選択</label>
                  <select type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" >
                    <option>企業</option>
                    <option>自治体</option>
                    <option>教育機関</option>
                    <option>クリニック</option>
                    <option>その他</option>
                  </select>
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
      <div class="tab-content" id="clients_create">
      	 <div class="container"> 
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">新規登録</h6>
            </div>
            <div class="card-body">
              
              <nav class="panel panel-default">
                
               
                  
                  <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name">取引先名</label>
                      <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" />
                    </div>
                    <div class="form-group">
                      <label for="category">カテゴリ</label>
                      <input type="text" class="form-control" name="category" id="category" value="{{ old('category') }}" />
                    </div>
                    <div class="form-group">
                      <label for="address">住所</label>
                      <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}" />
                    </div>
                    <div class="form-group">
                      <label for="phone_number">電話番号</label>
                      <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" />
                    </div>
                    <div class="form-group">
                      <label for="email">メールアドレス</label>
                      <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" />
                    </div>
                    <div class="form-group">
                      <label for="contract_date">成約日</label>
                      <input type="text" class="form-control" name="contract_date" id="contract_date" value="{{ old('contract_date') }}" />
                    </div>
                    <div class="form-group">
                      <label for="remarks">備考</label>
                      <input type="text" class="form-control" name="remarks" id="remarks" value="{{ old('remarks') }}" />
                    </div>
                    <div class="form-group">
                      <label for="files">画像</label>
                      <div class="custom-file">
                          <input type="file" name="image" class="custom-file-input">
                          <label class="custom-file-label">画像選択</label>
                      </div>
                    </div>

                    <div class="text-right">
                      <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                  </form>        
              </nav>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="tab-content" id="meetinglog_index">
     <div class="container">
        	<div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">ログ</h6>
                <div class="dropdown no-arrow">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                    <div class="dropdown-header">menu:</div>
                    <a class="dropdown-item" href="#">追加</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">月別</a>
                    <a class="dropdown-item" href="#">週別</a>
                  </div>
                </div>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <div class="card-body">
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

                      </tbody>
                    </table>
                 </div>
                </div>
            </div>
          </div>
     </div>      
  </div>


@endsection

@section('scripts')

<script src="/sb_admin_2/vendor/jquery/jquery.js"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="/sb_admin_2/vendor/jquery-easing/jquery.easing.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/sb_admin_2/js/sb-admin-2.js"></script>

  <!-- Page level plugins -->
  <script src="/sb_admin_2/vendor/datatables/jquery.dataTables.js"></script>
  <script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.js"></script>

  
<script>
    jQuery(function($){ 
    $("#table1").DataTable(); 
}); 
</script>
@endsection