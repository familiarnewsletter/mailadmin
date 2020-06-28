@extends('layout')

@section('styles')
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>

@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">受注管理</h1>
<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#orders_index" data-toggle>受注一覧</a>
    </li>
    <li class="tab-item">
      <a href="#orders_create" data-toggle>受注登録</a>
    </li>
    <li class="tab-item">
      <a href="#deliverlist_index" data-toggle>納品リスト一覧</a>
    </li>
    <li class="tab-item">
      <a href="#deliverlist_create" data-toggle>納品リスト登録</a>
    </li>
    <li class="tab-item">
      <a href="#return_create" data-toggle>返品登録</a>
    </li>
 
  </ul>

  <div class="tab-content is-open" id="orders_index">
   <div class="container">

    <div class="col-xs-12">
        <table id="table1" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>取引先名</th>
                <th>納期</th>
                <th>状態</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Aホスピタル</td>
                <td>2020.1.1</td>
                <td>完了</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>A商事</td>
                <td>2020.1.1</td>
                <td>完了</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>3</td>
               <td>中央区役所</td>
                <td>2020.1.1</td>
                <td>完了</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>4</td>
                <td>K幼稚園</td>
               <td>2020.1.1</td>
                <td>完了</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>5</td>
                <td>B高校</td>
                <td>2020.1.1</td>
                <td>完了</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>6</td>
                <td>K病院</td>
                <td>2020.1.1</td>
                <td>完了</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>7</td>
                <td>T市役所</td>
                <td>2020.1.1</td>
                <td>完了</td>
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
          <h6 class="m-0 font-weight-bold text-primary">新規登録</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
              <form action="#" method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">取引先名</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" />
                </div>
                <div class="form-group">
                  <label for="order_list">納品リスト</label>
                  <input type="text" class="form-control" name="order_list" id="order_list" value="{{ old('order_list') }}" />
                </div>
                <div class="form-group">
                  <label for="deal_rate">取引条件(%)</label>
                  <input type="number" step="0.01" class="form-control" name="deal_rate" id="deal_rate" value="{{ old('deal_rate') }}" />
                </div>
                <div class="form-group">
                  <label for="deal_amount">取引金額(円)</label>
                  <input type="number" class="form-control" name="deal_amount" id="deal_amount" value="{{ old('deal_amount') }}" />
                </div>
                <div class="form-group">
                  <label for="delivery_address">納品先</label>
                  <input type="text" class="form-control" name="delivery_address" id="delivery_address" value="{{ old('delivery_address') }}" />
                </div>
                <div class="form-group">
                  <label for="due_date">指定納期</label>
                  <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}" />
                </div>
                <div class="form-group">
                  <label for="remarks">備考</label>
                  <input type="text" class="form-control" name="remarks" id="remarks" value="{{ old('remarks') }}" />
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
  <div class="tab-content" id="deliverlist_index">
     <div class="container">

    <div class="col-xs-12">
        <table id="table2" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>リスト名</th>
                <th>明細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Aホスピタル用セット</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>A商事用セット</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr> 
            
            <tr>
                <td>3</td>
               <td>中央区役所用セット</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>   
           
            <tr>
                <td>4</td>
                <td>Aホスピタル用セット２</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>   
           
            <tr>
                <td>5</td>
                <td>K幼稚園用セット</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
           
            
            </tbody>
        </table>
    </div>
  </div>
  </div>
  <div class="tab-content" id="deliverlist_create">
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
                  <label for="title">リスト名</label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                  <p>数量　<input type="number" value="1" min="1" max="1000000" step="1"></p>
                </div>
                <div class="form-group">
                  <label for="order_list">アイテム１</label>
                  <input type="text" class="form-control" name="order_list" id="order_list" value="{{ old('order_list') }}" />
                  <p>数量　<input type="number" value="1" min="1" max="1000000" step="1"></p>
                </div>
                <div class="form-group">
                  <label for="deal_rate">アイテム２</label>
                  <input type="text" class="form-control" name="deal_rate" id="deal_rate" value="{{ old('deal_rate') }}" />
                  <p>数量　<input type="number" value="1" min="1" max="1000000" step="1"></p>
                </div>
                <div class="form-group">
                  <label for="deal_amount">アイテム３</label>
                  <input type="text" class="form-control" name="deal_amount" id="deal_amount" value="{{ old('deal_amount') }}" />
                  <p>数量　<input type="number" value="1" min="1" max="1000000" step="1"></p>
                </div>
                <div class="form-group">
                  <label for="deal_amount">アイテム４</label>
                  <input type="text" class="form-control" name="deal_amount" id="deal_amount" value="{{ old('deal_amount') }}" />
                  <p>数量　<input type="number" value="1" min="1" max="1000000" step="1"></p>
                </div>
                <div class="form-group">
                  <label for="deal_amount">アイテム５</label>
                  <input type="text" class="form-control" name="deal_amount" id="deal_amount" value="{{ old('deal_amount') }}" />
                  <p>数量　<input type="number" value="1" min="1" max="1000000" step="1"></p>
                </div>
                <div class="form-group">
                  <label for="deal_amount">アイテム６</label>
                  <input type="text" class="form-control" name="deal_amount" id="deal_amount" value="{{ old('deal_amount') }}" />
                  <p>数量　<input type="number" value="1" min="1" max="1000000" step="1"></p>
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
 
  <div class="tab-content" id="return_create">
     <div class="container"> 
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">返品処理</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
               <form action="#" method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">取引先名</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" />
                </div>
                <div class="form-group">
                  <label for="order_list">返品リスト</label>
                  <input type="text" class="form-control" name="order_list" id="order_list" value="{{ old('order_list') }}" />
                </div>
                <div class="form-group">
                  <label for="return_rate">返品条件(%)</label>
                  <input  type="number" step="0.01" class="form-control" name="deal_rate" id="deal_rate" value="{{ old('deal_rate') }}" />
                </div>
                <div class="form-group">
                  <label for="return_amount">返品額(円)</label><!-- <---ここは合計値を算出-->
                  <input type="number" class="form-control" name="deal_amount" id="deal_amount" value="{{ old('deal_amount') }}" />
                </div>
                <div class="form-group">
                  <label for="reason">返品理由</label>
                  <select type="text" class="form-control" name="reason" id="reason" value="{{ old('reason') }}" />
                  <option>不良品発生</option>
                  <option>ラインナップ変更</option>
                  <option>指定回収</option>
                  <option>その他</option>
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
    $("#table2").DataTable();
    $("#table3").DataTable();
}); 
</script>



@endsection