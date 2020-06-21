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
      <a href="#orders_index" data-toggle>客注一覧</a>
    </li>
    <li class="tab-item">
      <a href="#orders_create" data-toggle>客注登録</a>
    </li>
 
  </ul>

  <div class="tab-content is-open" id="orders_index">
   <div class="col-xs-12">
        <table id="table1" class="table table-bordered">
            <thead>
            <tr>
                <th>注文日</th>
                <th>承り票No</th>
                <th>店名</th>
                <th>担当スタッフ</th>
                <th>ステータス</th>
                <th>注文内容</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>2020.6.6</td>
                <td>123456</td>
                <td>銀座店</td>
                <td>田中太郎</td>
                <td><a href="#" class="btn btn-success btn-sm btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">完了</span>
                  </a></td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2020.6.6</td>
                <td>123456</td>
                <td>銀座店</td>
                <td>田中太郎</td>
                <td><a href="#" class="btn btn-success btn-sm btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">完了</span>
                  </a></td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>       
            </tr>
            <tr>
                <td>2020.6.6</td>
                <td>123456</td>
                <td>銀座店</td>
                <td>田中太郎</td>
                <td><a href="#" class="btn btn-danger btn-sm btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">キャンセル</span>
                  </a></td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>2020.6.6</td>
                <td>123456</td>
                <td>銀座店</td>
                <td>田中太郎</td>
                <td><a href="#" class="btn btn-success btn-sm btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">完了</span>
                  </a></td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
               <td>2020.6.6</td>
                <td>123456</td>
                <td>銀座店</td>
                <td>田中太郎</td>
                <td><a href="#" class="btn btn-warning btn-sm btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    <span class="text">来店未</span>
                  </a></td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>       
            </tr>
            <tr>
                <td>2020.6.6</td>
                <td>123456</td>
                <td>銀座店</td>
                <td>田中太郎</td>
                <td><a href="#" class="btn btn-success btn-sm btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">完了</span>
                  </a></td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>      
            </tr>
            <tr>
               <td>2020.6.6</td>
                <td>123456</td>
                <td>銀座店</td>
                <td>田中太郎</td>
                <td><a href="#" class="btn btn-success btn-sm btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">完了</span>
                  </a></td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>       
            </tr>
            <tr>
                <td>2020.6.6</td>
                <td>123456</td>
                <td>銀座店</td>
                <td>田中太郎</td>
                <td><a href="#" class="btn btn-info btn-sm btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-info"></i>
                    </span>
                    <span class="text">入荷</span>
                  </a></td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>         
            </tr>
            
            </tbody>
        </table>
    </div>
</div>
  </div>
  <div class="tab-content" id="orders_create">
  	 <div class="container"> 
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">承り表発行</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
              <form action="#" method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">お名前</label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                </div>
                <div class="form-group">
                  <label for="due_date">お電話番号</label>
                  <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}" />
                </div>
                <div class="form-group">
                  <label for="assigner_id">ご住所</label>
                  <input type="text" class="form-control" name="assigner_id" id="assigner_id" value="{{ old('assigner_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">Email</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">メールアドレス</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">担当者名</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">ご注文品</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">お渡し方法</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">ご希望日</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">ご注文日</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">商品選択画面へ</button>
                </div>
              </form>        
          </nav>
        </div>
      </div>
    </div>
  </div>
  </div>
    <div class="row">

            
          <!-- Content Row -->
          <div class="row">
  </div>
</div>

 

</div>


@endsection

@section('scripts')

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