@extends('layout')

@section('styles')

@endsection

@section('content')

<div class="container-fluid">

<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#media_index" data-toggle>掲載一覧</a>
    </li>
    <li class="tab-item">
      <a href="#result_index" data-toggle>効果分析</a>
    </li>
    <li class="tab-item">
      <a href="#media_create" data-toggle>掲載リクエスト</a>
    </li>
 
  </ul>

 　<div class="tab-content is-open" id="media_index">
   
  </div>
  <div class="tab-content" id="result_index">
   
  </div>
  <div class="tab-content" id="media_create">
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