@extends('layout')

@section('styles')

@endsection

@section('content')

<div class="container-fluid">

<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#invoice_index" data-toggle>請求一覧</a>
    </li>
    <li class="tab-item">
      <a href="#invoice_create" data-toggle>請求書発行</a>
    </li>
    <li class="tab-item">
      <a href="#bankaccount_create" data-toggle>口座設定</a>
    </li>
 
  </ul>

  <div class="tab-content is-open" id="invoice_index">
   
  </div>
  <div class="tab-content" id="invoice_create">
     <p>ワン<br />にゃー<br />にゃー</p>
  </div>
  <div class="tab-content" id="bankaccount_create">
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