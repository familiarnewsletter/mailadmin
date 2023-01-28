@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
<style>
    <!--
    #jquery-ui-sortable {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 70%;
    }
    #jquery-ui-sortable li {
        margin: 0 3px 3px 3px;
        padding: 0.3em;
        padding-left: 1em;
        font-size: 15px;
        font-weight: bold;
        cursor: move;
    }
    -->
    </style>
    
@endsection

@section('content')

<!-- Latest compiled and minified CSS -->
@include('media.newsletter.partials.styles')

<body bgcolor="#ffffff" style="margin:0px auto 0px auto;font-family:YuGothic,'Yu Gothic','ＭＳ Ｐゴシック','MS PGothic','メイリオ', Meiryo,'Hiragino Kaku Gothic ProN','ヒラギノ角ゴ ProN W3',sans-serif;" text="#000000" link="#555555" vlink="#555555" alink="#555555" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" marginheight="0">


<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">
  <i class="far fa-envelope"></i>
  <span>配置図編集</span>
</h1>
<div class="container">


     <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">{{ $newsletter_parts_ad->type_id_label }}</h6>
          <div class="dropdown no-arrow">
            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              
            </a>
            
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            <hr>
            
                <form action="{{ route('newsletter.updatemap', ['newsletter_parts_admin_id' => $newsletter_parts_ad->id]) }}" method="post">
                @csrf

                <div class="form-group">
                  <label for="type_id">記事カテゴリ</label>
                  <select type="integer" class="form-control" name="type_id" id="type_id" value="{{ $newsletter_parts_ad->type_id_label }}" >
                    
                      <option value="1" @if(old('type_id',"$newsletter_parts_ad->type_id")=='1')selected="selected"@endif><label>TOP</label></option>
                      <option value="2" @if(old('type_id',"$newsletter_parts_ad->type_id")=='2')selected="selected"@endif><label>SHOP NEWS ＆ EVENT</label></option>
                      <option value="3" @if(old('type_id',"$newsletter_parts_ad->type_id")=='3')selected="selected"@endif><label>NEWS ＆ TOPICS</label></option>
                      <option value="4" @if(old('type_id',"$newsletter_parts_ad->type_id")=='4')selected="selected"@endif><label>PICKUP ITEM 1ブロック＋テキスト</label></option>
                      <option value="5" @if(old('type_id',"$newsletter_parts_ad->type_id")=='5')selected="selected"@endif><label>PICKUP ITEM 2ブロック</label></option>
                      <option value="6" @if(old('type_id',"$newsletter_parts_ad->type_id")=='6')selected="selected"@endif><label>SHOP BLOG</label></option>
                      <option value="7" @if(old('type_id',"$newsletter_parts_ad->type_id")=='7')selected="selected"@endif><label>STYLE BOOK 1ブロック＋テキスト</label></option>
                      <option value="8" @if(old('type_id',"$newsletter_parts_ad->type_id")=='8')selected="selected"@endif><label>STYLE BOOK 3ブロック</label></option>
                      <!-- <option value="9" @if(old('type_id',"$newsletter_parts_ad->type_id")=='9')selected="selected"@endif><label>CATEGORY</label></option> -->
                      <option value="10" @if(old('type_id',"$newsletter_parts_ad->type_id")=='10')selected="selected"@endif><label>BANNER</label></option>
                      <!-- <option value="11" @if(old('type_id',"$newsletter_parts_ad->type_id")=='11')selected="selected"@endif><label>PICKUP ITEM(セール用)</label></option>
                      <option value="12" @if(old('type_id',"$newsletter_parts_ad->type_id")=='12')selected="selected"@endif><label>CATEGORY(セール用)</label></option>
                      <option value="13" @if(old('type_id',"$newsletter_parts_ad->type_id")=='13')selected="selected"@endif><label>SIZE(セール用)</label></option> -->
                    
                  </select>
                </div>

                <div class="form-group">
                  <label for="order_id">表示順</label>
                  <input type="number" class="form-control" name="order_id" id="order_id" value="{{ $newsletter_parts_ad->order_id }}" >
                </div>
        
                    <div class="text-right">
                      <input type="submit" value="カテゴリを変更">
                      <a href="/media/newsletter/index"><button class="button">戻る</button></a>
                    </div>
                 </form>        
              </div>
              </nav>
            </div>
          </div>
          </div>
      </div>
    </div> 
  
 
 



</body>
@endsection


@section('scripts')

@endsection