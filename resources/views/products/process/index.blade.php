@extends('layout')

@section('styles')

@endsection

@section('content')

<div class="container-fluid">

<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#maker_index" data-toggle>メーカー一覧</a>
    </li>
    <li class="tab-item">
      <a href="#maker_create" data-toggle>メーカー登録</a>
    </li>
    <li class="tab-item">
      <a href="#warehousing_index" data-toggle>入庫管理</a>
    </li>
    <li class="tab-item">
      <a href="#cost_index" data-toggle>コスト管理</a>
    </li>
 
  </ul>

  <div class="tab-content is-open" id="maker_index">
   
  </div>
  <div class="tab-content" id="maker_create">
  	 <p>ワン<br />にゃー<br />にゃー</p>
  </div>
  <div class="tab-content" id="warehousing_index">
  	 <p>ぴー<br />ぴー<br />ぴー</p>
  </div>
  <div class="tab-content" id="cost_index">
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