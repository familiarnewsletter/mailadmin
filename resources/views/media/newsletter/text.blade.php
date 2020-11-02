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
    <span>テキストメール</span>
  </h1>
    <div class="container">
         <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">TEXTメール用データ</h6>
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 
                </a>
                
              </div>
            </div>
            <div class="card-body">
              
              <nav class="panel panel-default">

              @foreach($newsletter_parts_admin as $newsletter_parts_ad)

                <p><b> {{ $newsletter_parts_ad -> type_id_label }}</b> </p>
                 <hr  noshade="">
                  @foreach($newsletter_parts as $nlp)
                  
                   @if($nlp->newsletter_parts_admin_id == $newsletter_parts_ad->id)
                   <?php 
                      $title = strip_tags($nlp->title);
                      $text = strip_tags($nlp->text);
                   ?>
                   <hr>
                    <p>タイトル：{{ $title }}</p>
                    <!-- <p>画像名：{{ $nlp->img_url }}</p> -->
                    <p>リンク先URL：{{ $nlp->link_url }}?utm_source=t_mail&utm_medium=email&utm_campaign={{ $newsletter->utm_campaign_id }}&utm_content={{ $nlp->utm_content_id }}</p>
                    <p>テキスト：{{ $text }}</p>
                    <hr>
                    

                  @endif
                  @endforeach

                  @foreach($newsletter_link as $nll)
                      @if($nll->type_id == $newsletter_parts_ad->type_id)
                      <p><b>関連リンク・コメント</b></p>
                      <hr>
                        <p>タイプ：{{ $nll->link_type }}</p>
                        <?php 
                          if ($nll->link_type != "テキスト入力") {
                             $label = "リンク先URL";
                          }else {
                            $label = "テキスト";
                          }
                            

                         ?>
                        <p>{{ $label }}：{{ $nll->link_url }}</p>
                      <hr>
                      @endif
                    @endforeach
                   
                     <hr noshade="">
              @endforeach

             </nav>
        </div>
      </div>
    </div>
   
  </div>
</body>
@endsection


@section('scripts')


@endsection