@extends('layout')

@section('styles')

@endsection

@section('content')

<div class="container-fluid">

<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#blog_index" data-toggle>投稿一覧</a>
    </li>
    <li class="tab-item">
      <a href="#pv_index" data-toggle>PV数</a>
    </li>
    <li class="tab-item">
      <a href="#budget_create" data-toggle>予算設定</a>
    </li>
 
  </ul>

 　<div class="tab-content is-open" id="blog_index">
   
  </div>
  <div class="tab-content" id="pv_index">
   
  </div>
  <div class="tab-content" id="budget_create">
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