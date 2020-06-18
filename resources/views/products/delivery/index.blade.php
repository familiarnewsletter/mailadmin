@extends('layout')

@section('styles')

@endsection

@section('content')

<div class="container-fluid">

<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#deliverylist_index" data-toggle>出荷履歴一覧</a>
    </li>
    <li class="tab-item">
      <a href="#deliverylist_create" data-toggle>出荷リスト作成</a>
    </li>
    <li class="tab-item">
      <a href="#collection_index" data-toggle>回収リスト一覧</a>
    </li>
    <li class="tab-item">
      <a href="#collection_create" data-toggle>回収リスト作成</a>
    </li>
 
  </ul>

  <div class="tab-content is-open" id="deliverylist_index">
   
  </div>
  <div class="tab-content" id="deliverylist_create">
  	 <p>ワン<br />にゃー<br />にゃー</p>
  </div>
  <div class="tab-content" id="collection_index">
  	 <p>ぴー<br />ぴー<br />ぴー</p>
  </div>
  <div class="tab-content" id="collection_create">
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