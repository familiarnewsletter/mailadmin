@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
@endsection

@section('content')

<!-- Latest compiled and minified CSS -->
@include('media.newsletter.partials.styles')


<body bgcolor="#ffffff" style="margin:0px auto 0px auto;font-family:YuGothic,'Yu Gothic','ＭＳ Ｐゴシック','MS PGothic','メイリオ', Meiryo,'Hiragino Kaku Gothic ProN','ヒラギノ角ゴ ProN W3',sans-serif;" text="#000000" link="#555555" vlink="#555555" alink="#555555" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" marginheight="0">

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">
  <span>原稿作成</span>
</h1>
<div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">原稿作成画面</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
                 <a class="dropdown-item"data-toggle="modal" data-target="#Modal1">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>編集</span>
                </a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-fw fa-file-csv"></i>
                    <span>CSV出力</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-fw fa-file-pdf"></i>
                  <span>PDF出力</span>
                </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">

              <form action="{{ route('newsletter.store') }}" method="post">
                @csrf
              <!-- プリヘッダーテキスト -->
              @include('media.newsletter.partial_forms.preheader.preheader')
              <!-- プリヘッダーテキスト -->

              <!-- HEADER to NAV -->
              @include('media.newsletter.partial_forms.header.headertonav')
              <!-- /HEADER to NAV -->


              <!--▼▼ MAIN ▼▼-->
              @include('media.newsletter.partial_forms.main.main')
              <!--▲▲ MAIN ▲▲-->


              <!--▼▼ SHOP NEWS & EVENT ▼▼-->
              @include('media.newsletter.partial_forms.newsandevent.title')

              <!--▲▲ SHOP NEWS & EVENT ▲▲-->


              <!--▼▼  NEWS & TOPICS ▼▼-->
              @include('media.newsletter.partial_forms.newsandtopics.title')
              <!--▲▲ NEWS & TOPICS ▲▲-->


              <!--▼▼ PICKUP ITEM ▼▼-->
              @include('media.newsletter.partial_forms.pickupitem.title')
              <!--▲▲ PICKUP ITEM ▲▲-->


              <!--▼▼ STYLE BOOK ▼▼-->
              @include('media.newsletter.partial_forms.stylebook.title')
              <!--▲▲ STYLE BOOK ▲▲-->


              <!--▼▼ SHOP BLOG ▼▼-->
              @include('media.newsletter.partial_forms.shopblog.title')
              <!--▲▲ SHOP BLOG ▲▲-->



              <!--▼▼ BANNER ▼▼-->
              @include('media.newsletter.partial_forms.banner.banner')
              <!--▲▲ BANNER ▲▲-->

              <!--▼▼ FOOTER & COPYRIGHT ▼▼-->
              @include('media.newsletter.partial_forms.footer.footertocopylight')
              <!--▲▲ FOOTER & COPYRIGHT ▲▲-->
              </form>



              <br>
                <div class="text-center">
                  <input type="submit" name="store" value="保存">
                 <input type="submit" name="preview" target="_blank" value="プレビュー">
                 <input type="submit" name="source_code" target="_blank" value="HTMLソース表示">
                </div>
              <br>

             </nav>
        </div>
      </div>
    </div>
   
  </div>
</body>
@endsection


@section('scripts')


@endsection