@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>

@endsection

@section('content')

<div class="container-fluid">

<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#products_index" data-toggle>商品一覧</a>
    </li>
    <li class="tab-item">
      <a href="#products_create" data-toggle>商品登録</a>
    </li>
    
 
  </ul>

  <div class="tab-content is-open" id="products_index">
    <div class="container">

    <div class="col-xs-12">
        <table id="table1" class="table table-bordered">
            <thead>
            <tr>
                <th>品番</th>
                <th>品名</th>
                <th>カテゴリ</th>
                <th>価格</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>         
            </tr>
            <tr>
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>      
            </tr>
            <tr>
                <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>       
            </tr>
            <tr>
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>       
            </tr>
            <tr>
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>        
            </tr>
            <tr>
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>       
            </tr>
            <tr>
                <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>    
            </tr>
            <tr>
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>    
            </tr>
            <tr>
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>       
            </tr>
            <tr>
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>         
            </tr>
            <tr>
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>        
            </tr>
            <tr>
                 <td>100200</td>
                <td>Tシャツ</td>
                <td>トップス</td>
                <td>5,000</td>
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
  <div class="tab-content" id="products_create">
  	 <div class="container"> 
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">商品登録</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
              <form action="#" method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">品名</label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                </div>
                <div class="form-group">
                  <label for="product_number">品番</label>
                  <input type="text" class="form-control" name="product_number" id="product_number" value="{{ old('product_number') }}" />
                </div>
                <div class="form-group">
                  <label for="category">カテゴリ</label>
                  <input type="text" class="form-control" name="category" id="category" value="{{ old('category') }}" />
                </div>
                <div class="form-group">
                  <label for="price">価格</label>
                  <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}" />
                </div>
                <div class="form-group">
                  <label for="size">サイズ</label>
                  <input type="text" class="form-control" name="size" id="size" value="{{ old('size') }}" />
                </div>
                <div class="form-group">
                  <label for="color">カラー</label>
                  <input type="text" class="form-control" name="color" id="color" value="{{ old('color') }}" />
                </div>
                <div class="form-group">
                  <label for="age">対象年齢</label>
                  <select type="text" class="form-control" name="age" id="age" value="{{ old('age') }}" />
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="maker_id">メーカー</label>
                  <select type="text" class="form-control" name="maker_id" id="maker_id" value="{{ old('maker_id') }}" />
                    <option>A工場</option>
                    <option>B工場</option>
                    <option>C工場</option>
                    <option>D工場</option>
                    <option>E工場</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="status">ステータス</label>
                  <select type="text" class="form-control" name="status" id="status" value="{{ old('status') }}" />
                    <option>正価</option>
                    <option>セール（３０％OFF)</option>
                    <option>セール（５０％OFF)</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="image">画像</label>
                  <input type="text" class="form-control" name="image" id="image" value="{{ old('image') }}" />
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
}); 
</script>

@endsection