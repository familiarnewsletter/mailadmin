@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
<style>
    
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
    
    xmp {
    user-select: all;
    }


    </style>
    



@endsection

@section('content')

<!-- Latest compiled and minified CSS -->
@include('media.newsletter.partials.styles')




<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">
  <i class="far fa-envelope"></i>
  <span>Newsletter</span>
</h1>
<div class="container">


  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item">
      <a href="#info_show" data-toggle>配信情報</a>
    </li>
    <li class="tab-item">
      <a href="#map_show" data-toggle>配置図管理</a>
    </li>
    <li class="tab-item">
      <a href="#document_show" data-toggle>原稿管理</a>
    </li>
    <!-- <li class="tab-item">
      <a href="#data_show" data-toggle>数値管理</a>
    </li> -->
 
  </ul>

  <div class="tab-content" id="info_show">
     <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">配信データ</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
                 <a class="dropdown-item" href="/media/newsletter/edit/{{ $newsletter->id }}">
                    <i class="fas fa-fw fa-edit"></i>
                    <button>編集</button>
                </a>
                <form action="{{ route('newsletter.delete',$newsletter->id) }}"　method="POST">
                  @csrf
                <a class="dropdown-item">
                    <i class="fas fa-fw fa-trash"></i>
                    <input type="submit" value="削除" onclick='return confirm("本当に削除しますか？");'/>
                </a>
              </form>
              <form action="{{ route('newsletter.clone', ['id' => $newsletter->id ])}}"　method="POST">
                  @csrf
                <a class="dropdown-item">
                     <i class="fas fa-copy"></i>
                    <input type="submit" value="コピー" onclick='return confirm("このファイルを複製します");'/>
                </a>
              </form>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
                <div class="form-group">
                  <label for="title">タイトル</label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ $newsletter->title }}" readonly />
                </div>
                <div class="form-group">
                  <label for="preheader">プリヘッダーテキスト</label>
                  <input type="text" class="form-control" name="preheader" id="preheader" value="{{ $newsletter->preheader_text }}" readonly />
                </div>   
                <div class="form-group">
                  <label for="deliver_date">配信日時</label>
                  <input type="text" class="form-control" name="deliver_date" id="deliver_date" value="{{ $newsletter->delivery_date }}" readonly />
                </div>     
                <div class="form-group">
                  <label for="utm_campaign_id">キャンペーンコード（６桁）</label>
                  <input type="text" class="form-control" name="utm_campaign_id" id="utm_campaign_id" value="{{ $newsletter->utm_campaign_id }}" readonly />
                </div>        
                <div class="form-group">
                  <label for="status">カテゴリ</label>
                  <input type="text" class="form-control" name="status" id="status" value="{{ $newsletter->category }}" readonly > 
                </div>
                <div class="form-group">
                  <label for="header_type">ヘッダー</label>
                  <input type="text" class="form-control" name="header_type" id="header_type" value="{{ $newsletter->header_type }}" readonly />
                </div>
                <div class="form-group">
                  <label for="status">ステータス</label>
                  <input type="text" class="form-control" name="status" id="status" value="{{ $newsletter->status_label }}" readonly > 
                </div>

                <hr>
               

                <div class="text-right">
                  <a href="/media/newsletter/index"><button class="button">戻る</button></a>
                </div>
              
          </div>
          </nav>
        </div>
      </div>
     
  </div>
</div> 


 <div class="tab-content" id="map_show">
     <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">カテゴリ一覧</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
               <a class="dropdown-item" >
                 <a class="dropdown-item" data-toggle="modal" data-target="#Modal1">
                    <i class="fas fa-fw fa-plus"></i>
                    <input type="button" id="create_parts" value="カテゴリ登録">
                  </a>
                </a>
                <a class="dropdown-item" data-toggle="modal" data-target="#Modal2">
                    <i class="fas fa-fw fa-edit"></i>
                    <input type="button" id="edit_parts" value="カテゴリ編集">
                </a>
                <a class="dropdown-item" data-toggle="modal" data-target="#Modal3">
                    <i class="fas fa-fw fa-trash"></i>
                   <input type="button" id="delete_parts" value="カテゴリ削除">
                </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            <hr>
            

            <div>
                  
              
                  <ul id="jquery-ui-sortable">
                  
                     
                    @foreach($newsletter_parts_admin as $newsletter_parts_ad) 
                      <li id="item" class="ui-state-default">
                         {{ $newsletter_parts_ad->order_id }}:{{ $newsletter_parts_ad->type_id_label }} 
                        <input type="hidden" name="sortable_[]" value="{{ $newsletter_parts_ad->id }}">
                      </li>
                     @endforeach 
                  
                  </ul>
               
                    

                    </div>
 
                
              </div>
              </nav>
            </div>
          </div>
          </div>
      </div>
    </div> 
  
 <div class="modal fade" id="Modal1" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">カテゴリ選択</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
              <form action="{{ route('newsletter.storemap', ['id' => $newsletter->id]) }}" method="post">
                @csrf
               
                <div class="form-group">
                  <label for="type_id">記事カテゴリ</label>
                  <select type="integer" class="form-control" name="type_id" id="type_id" >
                    
                       <option value="1"><label>TOP</label></option>
                      <option value="2"><label>SHOP NEWS ＆ EVENT</label></option>
                      <option value="3"><label>NEWS ＆ TOPICS</label></option>
                      <option value="4"><label>PICKUP ITEM 1列＋テキスト</label></option>
                      <option value="5"><label>PICKUP ITEM 2列</label></option>
                      <option value="6"><label>SHOP BLOG</label></option>
                      <option value="7"><label>STYLE BOOK 1列＋テキスト</label></option>
                      <option value="8"><label>STYLE BOOK 3列</label></option>
                      <option value="9"><label>SNAP</label></option>
                      <option value="10"><label>BANNER</label></option>
                      <option value="11"><label>PICKUP ITEM(セール用)</label></option>
                      <option value="12"><label>CATEGORY(セール用)</label></option>
                      <option value="13"><label>SIZE(セール用)</label></option>
                    
                  </select>
                </div>
                <div class="form-group">
                  <label for="order_id">表示順</label>
                  <input type="number" class="form-control" name="order_id" id="order_id" />
                </div>
        
                <div class="text-right">
                  <button type="submit" class="btn btn-primary btn-sm">カテゴリ追加</button>
                  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">閉じる</button>
                </div>
                   
              </form>

          </nav>
        </div>
      </div>
    </div>
  </div>
</div> 

 <div class="modal fade" id="Modal2" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">編集対象選択</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
                 
                <select id="target">
                    <option disabled selected>カテゴリ選択</option>
                  @foreach($newsletter_parts_admin as $newsletter_parts_ad) 
                    <option name="pulldown" value="/media/newsletter/editmap/{{ $newsletter_parts_ad->id }}">{{ $newsletter_parts_ad->type_id_label }}</option>
                  @endforeach 
                 </select>

                  
                  <!-- Bootstrap core JavaScript-->
                  <script src="/sb_admin_2/vendor/jquery/jquery.js"></script>

                  <script type="text/javascript">
                  $(document).ready(function(){
                    $('#target').bind('change', function() {
                      var linkurl = $('#target option:selected').val();
                      $('#link').attr({href:linkurl});
                    });

                  });
                  </script>

                <div class="text-right">
                  <a href="" id="link"><button ype="button" class="btn btn-primary btn-sm">カテゴリを編集</button></a>
                  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">閉じる</button>
                </div> 

          </nav>
        </div>
      </div>
    </div>
  </div>
</div> 
<div class="modal fade" id="Modal3" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">削除対象選択</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
               @foreach($newsletter_parts_admin ->sortBy('id') as $newsletter_parts_ad)    
              <form action="{{ route('newsletter.deletemap', ['newsletter_parts_admin_id' => $newsletter_parts_ad->id]) }}" >
                @csrf
               
                <div class="form-group">
                  <label for="type_id">記事カテゴリ</label>
                   
                     
                        <p class="ui-state-default">{{ $newsletter_parts_ad->type_id_label }}</p>
                      
                    

                </div>
        
                <div class="text-right">
                 
                  <input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("本当に削除しますか？");'>
                </div>
                   
              </form>
               @endforeach 
          </nav>
        </div>
      </div>
    </div>
  </div>
</div> 





  <div class="tab-content  is-open" id="document_show">
    <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">原稿データ</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
             
              <a class="dropdown-item" data-toggle="modal" data-target="#Modal4">
                    <i class="fas fa-fw fa-plus"></i>
                    <input type="button" id="create_content" value="記事作成">
              </a>
              <a class="dropdown-item" data-toggle="modal" data-target="#Modal5">
                    <i class="fas fa-fw fa-edit"></i>
                   <input type="button" id="edit_content" value="記事編集">
              </a>
              <a class="dropdown-item" data-toggle="modal" data-target="#Modal6">
                    <i class="fas fa-fw fa-trash"></i>
                   <input type="button" id="delete_content" value="記事削除">
              </a>
              <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="/media/newsletter/createlink/{{ $newsletter->id }}">
                    <i class="fas fa-fw fa-link"></i>
                    <input type="button" id="create_content" value="リンク追加">
              </a>
              <a class="dropdown-item" data-toggle="modal" data-target="#Modal8">
                    <i class="fas fa-fw fa-edit"></i>
                   <input type="button" id="test_content" value="リンク編集">
              </a>
              <a class="dropdown-item" data-toggle="modal" data-target="#Modal9">
                    <i class="fas fa-fw fa-trash"></i>
                   <input type="button" id="test_content" value="リンク削除">
              </a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="/media/newsletter/text/{{ $newsletter->id }}">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <input type="button" id="create_content" value="text表示">
              </a>
              <a class="dropdown-item" href="/media/newsletter/html/{{ $newsletter->id }}">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <input type="button" value="html表示">
              </a>
              
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default" id="document">



        @include('media.newsletter.partials.styles')        
        <!-- プリヘッダーテキスト -->
				@include('media.newsletter.partials.preheader')
				<!-- プリヘッダーテキスト -->

				<!-- HEADER to NAV -->
				@include('media.newsletter.partials.headertonav')
				<!-- /HEADER to NAV -->


				<!--▼▼ 配置図により可変 ▼▼-->
				@foreach($newsletter_parts_admin as $newsletter_parts_ad)   


            @if(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 1)
               
               <!--▼▼ MAIN ▼▼-->
               @include('media.newsletter.partials.main')
               <!--▲▲ MAIN ▲▲-->


            @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 2)
                
                <!--▼▼ SHOP NEWS & EVENT ▼▼-->
                @include('media.newsletter.partials.newsandevent')   
                <!--▲▲ SHOP NEWS & EVENT ▲▲-->

            @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 3)
                
                <!--▼▼  NEWS & TOPICS ▼▼-->
                @include('media.newsletter.partials.newsandtopics')
                <!--▲▲ NEWS & TOPICS ▲▲-->


           @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 4)

                <!--▼▼ PICKUP ITEM 1row ▼▼-->
                @include('media.newsletter.partials.pickupitem1')
                <!--▲▲ PICKUP ITEM 1row ▲▲-->


            @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 5)

                <!--▼▼ PICKUP ITEM 2row ▼▼-->
                @include('media.newsletter.partials.pickupitem')
                <!--▲▲ PICKUP ITEM 2row ▲▲-->


            @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 6)

                <!--▼▼ SHOP BLOG ▼▼-->
                @include('media.newsletter.partials.shopblog')
                <!--▲▲ SHOP BLOG ▲▲-->

            @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 7)

                <!--▼▼ STYLE BOOK 1row ▼▼-->
                @include('media.newsletter.partials.stylebook1')
                <!--▲▲ STYLE BOOK 1row ▲▲-->


            @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 8)

                <!--▼▼ STYLE BOOK 3row ▼▼-->
                @include('media.newsletter.partials.stylebook')
                <!--▲▲ STYLE BOOK 3row ▲▲-->

            @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 9)

                <!--▼▼ SNAP ▼▼-->
                @include('media.newsletter.partials.snap')
                <!--▲▲ SNAP ▲▲-->


            @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 10)

                <!--▼▼ BANNER ▼▼-->
                @include('media.newsletter.partials.banner')
                <!--▲▲ BANNER ▲▲-->

            @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 11)
                
                <!--▼▼  NEWS & TOPICS ▼▼-->
                @include('media.newsletter.partials.newsandtopicsforsale')
                <!--▲▲ NEWS & TOPICS ▲▲-->

            @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 12)

                <!--▼▼ PICKUP ITEM 2row ▼▼-->
                @include('media.newsletter.partials.pickupitemforsale')
                <!--▲▲ PICKUP ITEM 2row ▲▲-->

            @endif

          @endforeach
          <!--▲▲ 配置図により可変 ▲▲-->


          @include('media.newsletter.partials.footerapp')
				@include('media.newsletter.partials.footertocopylight')
				<!--▲▲ COPYRIGHT ▲▲-->


          </nav>
        </div>
      </div>
    </div>
   
  </div>
<div class="modal fade" id="Modal4" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">カテゴリ選択</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
                 
                <select id="target2">
                    <option disabled selected>カテゴリ選択</option>
                  @foreach($newsletter_parts_admin ->sortBy('id') as $newsletter_parts_ad) 
                    <option name="pulldown" value="/media/newsletter/createparts/{{ $newsletter_parts_ad->id }}">{{ $newsletter_parts_ad->type_id_label }}</option>
                  @endforeach 
                 </select>

                  
                  <!-- Bootstrap core JavaScript-->
                  <script src="/sb_admin_2/vendor/jquery/jquery.js"></script>

                  <script type="text/javascript">
                  $(document).ready(function(){
                    $('#target2').bind('change', function() {
                      var linkurl2 = $('#target2 option:selected').val();
                      $('#link2').attr({href:linkurl2});
                    });

                  });
                  </script>

                <div class="text-right">
                  <a href="" id="link2"><button type="button" class="btn btn-primary btn-sm">カテゴリを追加</button></a>
                  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">閉じる</button>
                </div> 

          </nav>
        </div>
      </div>
    </div>
  </div>
</div> 

<div class="modal fade" id="Modal5" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">編集対象選択</h6>
        </div>
        <div class="card-body">
                   
          <nav class="panel panel-default">
                 
                <select id="target3">
                    <option disabled selected>カテゴリ選択</option>
                  @foreach($newsletter_parts ->sortBy('id') as $np) 
                    <option name="pulldown" value="/media/newsletter/editparts/{{ $np->id }}">
                      <?php 

                            $type = $np->newsletterPartsAdmin()->first()->type_id_label;

                            echo $type.":".$np->img_url; 




                            ?><!-- {{ $np->title }} -->
                    </option>
                  @endforeach 
                 </select>

                  
                  <!-- Bootstrap core JavaScript-->
                  <script src="/sb_admin_2/vendor/jquery/jquery.js"></script>

                  <script type="text/javascript">
                  $(document).ready(function(){
                    $('#target3').bind('change', function() {
                      var linkurl2 = $('#target3 option:selected').val();
                      $('#link3').attr({href:linkurl2});
                    });

                  });
                  </script>

                <div class="text-right">
                  <a href="" id="link3"><button type="button" class="btn btn-primary btn-sm">カテゴリを編集</button></a>
                  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">閉じる</button>
                </div> 

          </nav>
        </div>
      </div>
    </div>
  </div>
</div> 

<div class="modal fade" id="Modal6" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">削除対象選択</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
            @foreach($newsletter_parts as $np)    
               
              <form action="{{ route('newsletter.deleteparts', ['newsletter_parts_id' => $np->id]) }}" >
                @csrf
               
                <div class="form-group">
                  
                   
                  <p class="ui-state-default" name="pulldown" value="{{ $np->id }}">
                  <?php 

                            $type = $np->newsletterPartsAdmin()->first()->type_id_label;

                            echo $type.":".$np->img_url; 




                            ?><!-- {{ $np->title }} -->
                    </p>
                   
                   
                </div>
        
                <div class="text-right">
                 
                  <input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("本当に削除しますか？");'>

                </div>
                   
              </form>
                @endforeach 
          </nav>
        </div>
      </div>
    </div>
  </div>
</div> 



<div class="modal fade" id="Modal8" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">リンク編集</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
             <select id="target4">
                    <option >コンテンツ選択</option>
                  @foreach($newsletter_link as $nl) 
                    <option name="pulldown" value="/media/newsletter/editlink/{{ $nl->id }}">
                      <?php 

                            // $type = $nl->type_id;

                            echo $nl->link_url; 

                            ?>
                    </option>
                  @endforeach 
                 </select>

                  
                  <!-- Bootstrap core JavaScript-->
                  <script src="/sb_admin_2/vendor/jquery/jquery.js"></script>

                  <script type="text/javascript">
                  $(document).ready(function(){
                    $('#target4').bind('change', function() {
                      var linkurl4 = $('#target4 option:selected').val();
                      $('#link4').attr({href:linkurl4});
                    });

                  });
                  </script>

                <div class="text-right">
                  <a href="" id="link4"><button type="button" class="btn btn-primary btn-sm">編集</button></a>
                  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">閉じる</button>
                </div> 
           
          </nav>
        </div>
      </div>
    </div>
  </div>
</div> 

<div class="modal fade" id="Modal9" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">リンク削除</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           @foreach($newsletter_link as $nl)    
               
              <form action="{{ route('newsletter.deletelink', ['newsletter_link_id' => $nl->id]) }}" >
                @csrf
               
                <div class="form-group">
                  
                   
                  <p class="ui-state-default" name="pulldown" value="{{ $nl->id }}">
                  <?php 

                            

                            echo $nl->link_url; 




                            ?>
                    </p>
                   
                   
                </div>
        
                <div class="text-right">
                 
                  <input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("本当に削除しますか？");'>
                </div>
                   
              </form>
                @endforeach 
           
          </nav>
        </div>
      </div>
    </div>
  </div>
</div> 



  


@endsection


@section('scripts')

<script>
$(function(){
  
  $('#show_source').click(function(event){
    var str = $("#document").html();  //HTMLで取得
    document.getElementById('source').innerHTML = str;
    

  });
});
</script>

  <script type="text/javascript">
    <!--
  function text_select() {
      //要素の取得
      var element = document.getElementById("source");
      //rangeオブジェクトの作成
      var range = document.createRange();
      //取得した要素の内側を範囲とする
      range.selectNodeContents(element);
      //範囲を選択状態にする
      window.getSelection().addRange(range);
  }
    //-->
  </script>

@endsection