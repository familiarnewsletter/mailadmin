@extends('layout')

@section('styles')

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
   
  </div>
  <div class="tab-content" id="products_create">
  	 <p>ワン<br />にゃー<br />にゃー</p>
  </div>

    <div class="row">

            
          <!-- Content Row -->
          <div class="row">
  </div>
</div>

 

</div>


@endsection

@section('scripts')


@endsection