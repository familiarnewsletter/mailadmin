@extends('layout')

@section('styles')

@endsection

@section('content')

<div class="container-fluid">

<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#sns_index" data-toggle>配信内容一覧</a>
    </li>
    <li class="tab-item">
      <a href="#follower_index" data-toggle>フォロワー分析</a>
    </li>
    <li class="tab-item">
      <a href="#eg_index" data-toggle>EG分析</a>
    </li>
    <li class="tab-item">
      <a href="#access_create" data-toggle>予算設定</a>
    </li>
 
  </ul>

 　<div class="tab-content is-open" id="sns_index">
   
  </div>
  <div class="tab-content" id="follower_index">
   
  </div>
  <div class="tab-content" id="eg_index">
   
  </div>
  <div class="tab-content" id="access_create">
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