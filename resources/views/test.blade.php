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
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">カテゴリー選択</h4>
                </div>
                <div class="modal-body">
                    <label>カテゴリー選択</label>
                    <select id="target2">
                        <option disabled selected>カテゴリ選択</option>
                        <option>TOP</option>
                        <option>SYELE</option>
                     </select>
                     <label>表示順</label>
                    <select id="target2">
                        <option disabled selected>カテゴリ選択</option>
                        <option>TOP</option>
                        <option>SYELE</option>
                     </select>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-primary">登録</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ModalCategoryEdit" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">カテゴリー編集</h4>
                </div>
                <div class="modal-body">
                    <label>カテゴリー選択</label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-danger">編集画面へ</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ModalCategoryDelete" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">カテゴリー削除</h4>
                </div>
                <div class="modal-body">
                    <label>カテゴリー選択</label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-danger">削除</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 原稿のモーダルウィンドウ -->










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
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                    <div class="dropdown-header">menu:</div>
                   
                    
                    <a class="dropdown-item" data-toggle="modal" data-target="">
                          <i class="fas fa-fw fa-edit"></i>
                         <input type="button" id="edit_content" value="記事編集">
                    </a>
                    <a class="dropdown-item" data-toggle="modal" data-target="">
                          <i class="fas fa-fw fa-trash"></i>
                         <input type="button" id="delete_content" value="記事削除">
                    </a>
                    
                  </div>
                </div>
              </div>
              <div class="card-body">
                
                <nav class="panel panel-default" id="document">
                  
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
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    
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
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
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
                     <a class="dropdown-item" href="">
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

                    <a class="dropdown-item" href="">
                          <i class="fas fa-fw fa-file-alt"></i>
                          <input type="button" id="create_content" value="text表示">
                    </a>
                    <a class="dropdown-item" href="">
                          <i class="fas fa-fw fa-file-alt"></i>
                          <input type="button" value="html表示">
                    </a>
                    
                  </div>
                </div>
              </div>
              <div class="card-body">
                
                <nav class="panel panel-default" id="document">



      


          </nav>
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
                            <option disabled selected>カテゴリ選択</option>
                            <option disabled selected>カテゴリ選択</option>
                         </select>

                          
                         

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
    </div>
</div>

@endsection


@section('scripts')




  

@endsection