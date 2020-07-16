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
<h1 class="h3 mb-2 text-gray-800">請求書管理</h1>
<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#invoice_index" data-toggle>請求履歴</a>
    </li>
    <li class="tab-item">
      <a href="#invoice_create" data-toggle>請求書発行</a>
    </li>
    <li class="tab-item">
      <a href="#bankaccount_create" data-toggle>口座設定</a>
    </li>
 
  </ul>

  <div class="tab-content is-open" id="invoice_index">
   
   <div class="container">

    <div class="col-xs-12">
        <table id="table1" class="table table-bordered">
            <thead>
            <tr>
                <th>請求日</th>
                <th>法人名</th>
                <th>請求額</th>
                <th>受注ID</th>
                <th>ステータス</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>2020.1.1</td>
                <td>Aホスピタル</td>
                <td>300,000</td>
                <td>00000001</td>
                <td>未入金</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2020.1.1</td>
               <td>B商事</td>
                <td>300,000</td>
                <td>00000002</td>
                <td>入金済み</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>    
            </tr>
            <tr>
                <td>2020.2.1</td>
               <td>Aホスピタル</td>
                <td>300,000</td>
                <td>00000003</td>
                <td>未入金</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>2020.3.1</td>
                <td>Aホスピタル</td>
                <td>300,000</td>
                <td>00000004</td>
                <td>未入金</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>    
            </tr>
            <tr>
                <td>2020.4.1</td>
                <td>Aホスピタル</td>
                <td>300,000</td>
                <td>00000005</td>
                <td>未納</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>2020.5.1</td>
                <td>Aホスピタル</td>
                <td>300,000</td>
                <td>00000006</td>
                <td>未納</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>2020.6.1</td>
                <td>Aホスピタル</td>
                <td>300,000</td>
                <td>00000007</td>
                <td>未納</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>2020.7.1</td>
                <td>Aホスピタル</td>
                <td>300,000</td>
                <td>00000008</td>
                <td>未納</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>2020.8.1</td>
                <td>Aホスピタル</td>
                <td>300,000</td>
                <td>00000009</td>
                <td>未納</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>2020.9.1</td>
                <td>Aホスピタル</td>
                <td>300,000</td>
                <td>00000010</td>
                <td>未納</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>2020.10.1</td>
                <td>Aホスピタル</td>
                <td>300,000</td>
                <td>00000011</td>
                <td>未納</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>2020.11.1</td>
                <td>Aホスピタル</td>
                <td>300,000</td>
                <td>00000012</td>
                <td>未納</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>2020.12.1</td>
                <td>Aホスピタル</td>
                <td>300,000</td>
                <td>00000001</td>
                <td>未納</td>
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
  <div class="tab-content" id="invoice_create">
     
     <div class="container"> 
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">新規発行</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
              <!-- <form action="#" method="POST"> -->
                @csrf
                <div class="form-group">
                  <label for="title">法人名</label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                </div>
                <div class="form-group">
                  <label for="due_date">支払日</label>
                  <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}" />
                </div>
                <div class="form-group">
                  <label for="assigner_id">受注ID</label>
                  <input type="text" class="form-control" name="assigner_id" id="assigner_id" value="{{ old('assigner_id') }}" />
                </div>
                <div class="form-group">
                  <label for="assigning_id">取引条件</label>
                  <input type="text" class="form-control" name="assigning_id" id="assigning_id" value="{{ old('assigning_id') }}" />
                </div>
                
                <div class="text-right">
                  <a href="/corporations/invoices/show"><button type="submit"  href="#" class="btn btn-primary">内容確認</button></a>
                </div>
              </form>        
          </nav>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="tab-content" id="bankaccount_create">
     
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


@endsection

@section('scripts')
<script src="/sb_admin_2/vendor/jquery/jquery.js"></script>
  
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