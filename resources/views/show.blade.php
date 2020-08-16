@extends('layout')

@section('styles')

@endsection

@section('content')

<!-- Latest compiled and minified CSS -->
@include('media.newsletter.partials.styles')

<body bgcolor="#ffffff" style="margin:0px auto 0px auto;font-family:YuGothic,'Yu Gothic','ＭＳ Ｐゴシック','MS PGothic','メイリオ', Meiryo,'Hiragino Kaku Gothic ProN','ヒラギノ角ゴ ProN W3',sans-serif;" text="#000000" link="#555555" vlink="#555555" alink="#555555" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" marginheight="0">

<!-- プリヘッダーテキスト -->
@include('media.newsletter.partials.preheader')
<!-- プリヘッダーテキスト -->

<!-- HEADER to NAV -->
@include('media.newsletter.partials.headertonav')
<!-- /HEADER to NAV -->


<!--▼▼ MAIN ▼▼-->
@include('media.newsletter.partials.main')
<!--▲▲ MAIN ▲▲-->


<!--▼▼ SHOP NEWS & EVENT ▼▼-->
@include('media.newsletter.partials.newsandevent')
<!--▲▲ SHOP NEWS & EVENT ▲▲-->


<!--▼▼  NEWS & TOPICS ▼▼-->
@include('media.newsletter.partials.newsandtopics')
<!--▲▲ NEWS & TOPICS ▲▲-->


<!--▼▼ PICKUP ITEM ▼▼-->
@include('media.newsletter.partials.pickupitem')
<!--▲▲ PICKUP ITEM ▲▲-->


<!--▼▼ SHOP BLOG ▼▼-->
@include('media.newsletter.partials.shopblog')
<!--▲▲ SHOP BLOG ▲▲-->


<!--▼▼ STYLE BOOK ▼▼-->
@include('media.newsletter.partials.stylebook')
<!--▲▲ STYLE BOOK ▲▲-->


<!--▼▼ BANNER ▼▼-->
@include('media.newsletter.partials.banner')
<!--▲▲ BANNER ▲▲-->

<!--▼▼ FOOTER ▼▼-->
@include('media.newsletter.partials.footertocopylight')
<!--▲▲ COPYRIGHT ▲▲-->


</body>
@endsection


@section('scripts')


@endsection