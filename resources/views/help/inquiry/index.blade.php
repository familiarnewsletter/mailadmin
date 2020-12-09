@extends('layout')

@section('styles')

@endsection

@section('content')
<div class="container">
	<h2>お問い合わせ</h2>
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">ご質問・ご要望等</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item"data-toggle="modal" data-target="#Modal4">期間選択</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/promotion/newsletter/create">新規作成</a>
              <a class="dropdown-item" href="#">エクスポート</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            <div id="editor"></div>    
          </nav>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.5.6/full/ckeditor.js"></script>
  <script>
    // エディタへの設定を適用する
    CKEDITOR.replace('editor', {
      uiColor: '#EEEEEE',
      height: 400,

    });
  </script>

@endsection