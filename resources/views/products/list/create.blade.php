@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">


@endsection

@section('content')
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
                  <label for="type">形態</label>
                  <input type="text" class="form-control" name="type" id="type" value="{{ old('type') }}" />
                </div>
                <div class="form-group">
                  <label for="gift">ギフト包装</label>
                  <select type="text" class="form-control" name="gift" id="gift" value="{{ old('gift') }}" />
                    <option>可</option>
                    <option>不可</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="limit">点数制限</label>
                  <input type="text" class="form-control" name="limit" id="limit" value="{{ old('limit') }}" />
                </div>
                <div class="form-group">
                  <label for="omni">オムニ客注</label>
                  <select type="text" class="form-control" name="omni" id="omni" value="{{ old('omni') }}" />
                    <option>あり</option>
                    <option>なし</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="shop_selling">店頭販売</label>
                  <select type="text" class="form-control" name="shop_selling" id="shop_selling" value="{{ old('shop_selling') }}" />
                    <option>あり</option>
                    <option>なし</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="start_date">販売開始日</label>
                  <input type="text" class="form-control" name="start_date" id="start_date" value="{{ old('start_date') }}" />
                </div>
                <div class="form-group">
                  <label for="imtype">画像</label>
                  <div class="custom-file">
                        <input type="file" name="imtype" class="custom-file-input">
                        <label class="custom-file-label">File</label>
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
@endsection

@section('scripts')

@endsection
