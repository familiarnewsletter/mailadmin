@extends('layout')

@section('styles')

@endsection

@section('content')

<div class="container-fluid">

<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#promotion_index" data-toggle>販促一覧</a>
    </li>
    <li class="tab-item">
      <a href="#promotion_create" data-toggle>販促登録</a>
    </li>
    <li class="tab-item">
      <a href="#log_index" data-toggle>企画ログ</a>
    </li>
    <li class="tab-item">
      <a href="#budget_index" data-toggle>予算設定</a>
    </li>
 
  </ul>

  <div class="tab-content is-open" id="promotion_index">
   
  </div>
  <div class="tab-content" id="promotion_create">
  	 <p>ワン<br />にゃー<br />にゃー</p>
  </div>
  <div class="tab-content" id="log_index">
  	 <p>ぴー<br />ぴー<br />ぴー</p>
  </div>
  <div class="tab-content" id="budget_index">
     <p>ぴー<br />ぴー<br />ぴー</p>
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