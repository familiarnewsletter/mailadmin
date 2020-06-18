@extends('layout')

@section('styles')

@endsection

@section('content')

<div class="container-fluid">

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
   
  </div>
  <div class="tab-content" id="orders_create">
     <p>ワン<br />にゃー<br />にゃー</p>
  </div>
  <div class="tab-content" id="deliverlist_index">
     <p>ぴー<br />ぴー<br />ぴー</p>
  </div>
  <div class="tab-content" id="deliverlist_index">
     <p>ぴー<br />ぴー<br />ぴー</p>
  </div>
  <div class="tab-content" id="deliverlist_create">
     <p>ぴー<br />ぴー<br />ぴー</p>
  </div>
  <div class="tab-content" id="return_create">
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