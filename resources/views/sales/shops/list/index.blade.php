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


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#shops_index" data-toggle>店舗一覧</a>
    </li>
    <li class="tab-item">
      <a href="#shops_create" data-toggle>店舗登録</a>
    </li>
    <li class="tab-item">
      <a href="#action_index" data-toggle>アクションシート</a>
    </li>
 
  </ul>

  <div class="tab-content is-open" id="shops_index">
   
    


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
  	<div class="container"> 
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">新規店舗登録</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
              <form action="#" method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">店名</label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                </div>
                <div class="form-group">
                  <label for="due_date">エリア</label>
                  <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}" />
                </div>
                <div class="form-group">
                  <label for="assigner_id">住所</label>
                  <input type="text" class="form-control" name="assigner_id" id="assigner_id" value="{{ old('assigner_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">電話番号</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">メールアドレス</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">店長名</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">ランク</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
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
  
      
  <div class="tab-content" id="action_index">
    <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">アクション一覧</h6>
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
              <th>月</th>
              <th>予算</th>
              <th>内容</th>
              
            </tr>
            </thead>
            <tbody>
            
              <tr>
                <td>a</td>
                <td>
                  <span class="label">q</span>
                </td>
                
                <td>詳細</td>
              </tr>
           
            </tbody>
          </table>
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

  <!-- Page level plugins -->
  <script src="/sb_admin_2/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  
<script>
    jQuery(function($){ 
    $("#table1").DataTable(); 
}); 
</script>


@endsection