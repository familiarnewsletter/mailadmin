@extends('layout')

@section('styles')

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
   
  </div>
  <div class="tab-content" id="orders_create">
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