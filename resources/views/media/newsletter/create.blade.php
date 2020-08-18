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

<!-- プリヘッダーテキスト -->
@include('media.newsletter.partial_forms.preheader')
<!-- プリヘッダーテキスト -->

<!-- HEADER to NAV -->
@include('media.newsletter.partial_forms.headertonav')
<!-- /HEADER to NAV -->


<!--▼▼ MAIN ▼▼-->
@include('media.newsletter.partial_forms.main')
<!--▲▲ MAIN ▲▲-->


<!--▼▼ SHOP NEWS & EVENT ▼▼-->
@include('media.newsletter.partial_forms.newsandevent')
<!--▲▲ SHOP NEWS & EVENT ▲▲-->


<!--▼▼  NEWS & TOPICS ▼▼-->
@include('media.newsletter.partial_forms.newsandtopics')
<!--▲▲ NEWS & TOPICS ▲▲-->


<!--▼▼ PICKUP ITEM ▼▼-->
@include('media.newsletter.partial_forms.pickupitem')
<!--▲▲ PICKUP ITEM ▲▲-->


<!--▼▼ SHOP BLOG ▼▼-->
@include('media.newsletter.partial_forms.shopblog')
<!--▲▲ SHOP BLOG ▲▲-->


<!--▼▼ STYLE BOOK ▼▼-->
@include('media.newsletter.partial_forms.stylebook')
<!--▲▲ STYLE BOOK ▲▲-->


<!--▼▼ BANNER ▼▼-->
@include('media.newsletter.partial_forms.banner')
<!--▲▲ BANNER ▲▲-->

<!--▼▼ FOOTER & COPYRIGHT ▼▼-->
@include('media.newsletter.partial_forms.footertocopylight')
<!--▲▲ FOOTER & COPYRIGHT ▲▲-->
<br>
  <div class="text-center">
    <a href="#"><button type="submit" class="btn btn-primary">Preview</button></a>
  </div>
<br>
</body>
@endsection


@section('scripts')


@endsection