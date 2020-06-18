@extends('layout')

@section('styles')

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
      <a href="#budget_index" data-toggle>予算設定</a>
    </li>
    <li class="tab-item">
      <a href="#action_index" data-toggle>予算設定</a>
    </li>
 
  </ul>

  <div class="tab-content is-open" id="shops_index">
   
  </div>
  <div class="tab-content" id="shops_create">
  	 <p>ワン<br />にゃー<br />にゃー</p>
  </div>
  <div class="tab-content" id="budget_index">
  	 <p>ぴー<br />ぴー<br />ぴー</p>
  </div>
  <div class="tab-content" id="action_index">
     <p>ぴ<br />ぴ<br />ぴ</p>
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