@extends('layout')

@section('styles')
    
<style type="text/css">
  .tab-wrap {
  background: White;
  box-shadow: 0 0 5px rgba(0,0,0,.1);
  display: flex;
  flex-wrap: wrap;
  overflow: hidden;
  padding: 0 0 20px;
}

.tab-label {
  color: Gray;
  cursor: pointer;
  flex: 1;
  font-weight: bold;
  order: -1;
  padding: 12px 24px;
  position: relative;
  text-align: center;
  transition: cubic-bezier(0.4, 0, 0.2, 1) .2s;
  user-select: none;
  white-space: nowrap;
  -webkit-tap-highlight-color: transparent;
}

.tab-label:hover {
  background: rgba(0, 191, 255,.1);
}

.tab-switch:checked + .tab-label {
  color: DeepSkyBlue;
}

.tab-label::after {
  background: DeepSkyBlue;
  bottom: 0;
  content: '';
  display: block;
  height: 3px;
  left: 0;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  transform: translateX(100%);
  transition: cubic-bezier(0.4, 0, 0.2, 1) .2s 80ms;
  width: 100%;
  z-index: 1;
}

.tab-switch:checked ~ .tab-label::after {
  transform: translateX(-100%);
}

.tab-switch:checked + .tab-label::after {
  opacity: 1;
  transform: translateX(0);
}

.tab-content {
  height:0;
  opacity:0;
  padding: 0 20px;
  pointer-events:none;
  transform: translateX(-30%);
  transition: transform .3s 80ms, opacity .3s 80ms;
  width: 100%;
}

.tab-switch:checked ~ .tab-content {
  transform: translateX(30%);
}

.tab-switch:checked + .tab-label + .tab-content {
  height: auto;
  opacity: 1;
  order: 1;
  pointer-events:auto;
  transform: translateX(0);
}

.tab-wrap::after {
  content: '';
  height: 20px;
  order: -1;
  width: 100%;
}

.tab-switch {
  display: none;
}

/* ============================== */

body {
  background: WhiteSmoke;
  font-family: sans-serif;
  margin: 10px;
}
    </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>


*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
.content{
    margin: 0 auto;
    padding: 40px;
}
.modal{
    display: none;
    height: 100vh;
    position: fixed;
    top: 0;
    width: 100%;
}
.modal__bg{
    background: rgba(0,0,0,0.8);
    height: 100vh;
    position: absolute;
    width: 100%;
}
.modal__content{
    background: #fff;
    left: 50%;
    padding: 40px;
    position: absolute;
    top: 50%;
    transform: translate(-50%,-50%);
    width: 60%;
}

</style>
@endsection

<!-- 配置図のモーダルウィンドウ -->

    <div class="modal fade" id="ModalCategoryCreate" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
                            <option value="4"><label>PICKUP ITEM 1ブロック＋テキスト</label></option>
                            <option value="5"><label>PICKUP ITEM 2ブロック</label></option>
                            <option value="6"><label>SHOP BLOG</label></option>
                            <option value="7"><label>STYLE BOOK 1ブロック＋テキスト</label></option>
                            <option value="8"><label>STYLE BOOK 3ブロック</label></option>
                            <!-- <option value="9"><label>CATEGORY</label></option> -->
                            <option value="10"><label>BANNER</label></option>
                            <!-- <option value="11"><label>PICKUP ITEM 3列</label></option> -->                    
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
    <div class="modal fade" id="ModalCategoryEdit" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
    <div class="modal fade" id="ModalCategoryDelete" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">カテゴリー削除</h6>
              </div>
              <div class="card-body">
                
                <nav class="panel panel-default">                
                     @foreach($newsletter_parts_admin ->sortBy('order_id') as $newsletter_parts_ad)    
                    <form action="{{ route('newsletter.deletemap', ['newsletter_parts_admin_id' => $newsletter_parts_ad->id]) }}" >
                      @csrf
                     
                      <div class="form-group">
                       
                           
                             
                              
                      </div>

                      <div class="border border-danger" style="padding:10px;">
                         {{ $newsletter_parts_ad->type_id_label }}
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
    </div>


    <!-- 原稿のモーダルウィンドウ -->



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
                     @php

                            $type = $np->newsletterPartsAdmin()->first()->type_id_label;

                            echo $type.":".$np->img_url; 




                      @endphp<!-- {{ $np->title }} -->
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
    </div>
</div>


  </ul>





@section('content')




  <!-- レター編集タブ -->
 <div class="tab-wrap">
    <input id="TAB-01" type="radio" name="TAB" class="tab-switch" checked="checked" /><label class="tab-label" for="TAB-01">配信管理</label>
    <div class="tab-content">
    
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">配信データ</h6>
          <div class="dropdown no-arrow">
            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
             
              
              <a class="dropdown-item" href="/media/newsletter/edit/{{ $newsletter->id }}">
                    <i class="fas fa-fw fa-edit"></i>
                   <input type="button" id="edit_content" value="記事編集">
              </a>
               <form action="{{ route('newsletter.delete',$newsletter->id) }}"　method="POST">
                  @csrf
                <a class="dropdown-item">
                    <i class="fas fa-fw fa-trash"></i>
                    <input type="submit" value="削除" onclick='return confirm("本当に削除しますか？");'/>
                </a>
              </form>
              
            </div>
          </div>
        </div>
         <div class="card-body">
                
                <nav class="panel panel-default" id="document">
                  

                      <div class="border border-dark" style="padding:10px;">
                         タイトル：{{ $newsletter->title }}
                      </div>
                      <div class="border border-dark" style="padding:10px;">
                         配信日：{{ $newsletter->utm_campaign_id }}
                      </div>
              </nav>
            </div>
  </div>
   
    
    

    </div>

    <!-- 配置図作成タブ -->
    <input id="TAB-02" type="radio" name="TAB" class="tab-switch" /><label class="tab-label" for="TAB-02">配置図管理</label>
      <div class="tab-content">
        <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">配置図データ</h6>
                <div class="dropdown no-arrow">
                  
                  <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                    <div class="dropdown-header">menu:</div>
                   
                    <a class="dropdown-item" data-toggle="modal" data-target="#ModalCategoryCreate">
                          <i class="fas fa-fw fa-plus"></i>
                          <input type="button" id="create_content" value="記事作成">
                    </a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#ModalCategoryEdit">
                          <i class="fas fa-fw fa-edit"></i>
                         <input type="button" id="edit_content" value="記事編集">
                    </a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#ModalCategoryDelete">
                          <i class="fas fa-fw fa-trash"></i>
                         <input type="button" id="delete_content" value="記事削除">
                    </a>
                    


                  </div>
                </div>
              </div>
              <div class="card-body">
                
                <nav class="panel panel-default" id="document">
                  

                    @foreach($newsletter_parts_admin as $newsletter_parts_ad) 
                      <div class="border border-primary" style="padding:10px;">
                         {{ $newsletter_parts_ad->order_id }}:{{ $newsletter_parts_ad->type_id_label }} 
                        <!-- <input type="hidden" name="sortable_[]" value="{{ $newsletter_parts_ad->id }}"> -->
                      </div>
                     @endforeach 
                  
              </nav>
            </div>
        </div>
          
    </div>

    <!-- 原稿作成タブ -->
    <input id="TAB-03" type="radio" name="TAB" class="tab-switch" /><label class="tab-label" for="TAB-03">原稿管理</label>
    <div class="tab-content">
         <div class="card shadow mb-4">
              
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">原稿データ</h6>
                <div class="dropdown no-arrow">

                  <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        

          <!-- HEADER to NAV -->
          @include('media.newsletter.partials.headertonav')
          <!-- /HEADER to NAV -->


          <!--▼▼ 配置図により可変 ▼▼-->
          @foreach($newsletter_parts_admin ->sortBy('order_id') as $newsletter_parts_ad)   


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
                  @include('media.newsletter.partials.category')
                  <!--▲▲ SNAP ▲▲-->


              @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 10)

                  <!--▼▼ BANNER ▼▼-->
                  @include('media.newsletter.partials.banner')
                  <!--▲▲ BANNER ▲▲-->

              @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 11)
                  
                  <!--▼▼  PICKUP ITEM 3row ▼▼-->
                  @include('media.newsletter.partials.pickupitem3')
                  <!--▲▲ PICKUP ITEM 3row ▲▲-->


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

@endsection


@section('scripts')




  

@endsection