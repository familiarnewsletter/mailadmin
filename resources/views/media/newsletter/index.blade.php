@extends('layout')

@section('styles')
<!-- Latest compiled and minified CSS -->
   

@endsection
<style type=css>

.tab-wrap {
  display: flex;
  flex-wrap: wrap;
  margin:20px 0;
}
.tab-wrap:after {
  content: '';
  width: 100%;
  height: 3px;
  background: DeepSkyBlue;
  display: block;
  order: -1;
}
.tab-label {
  color: White;
  background: LightGray;
  font-weight: bold;
  text-shadow: 0 -1px 0 rgba(0,0,0,.2);
  white-space: nowrap;
  text-align: center;
  padding: 10px .5em;
  order: -1;
  position: relative;
  z-index: 1;
  cursor: pointer;
  border-radius: 5px 5px 0 0;
  flex: 1;
}
.tab-label:not(:last-of-type) {
  margin-right: 5px;
}
.tab-content {
  width: 100%;
  height: 0;
  overflow: hidden;
  opacity: 0;
}
/* アクティブなタブ */
.tab-switch:checked+.tab-label {
  background: DeepSkyBlue;
}
.tab-switch:checked+.tab-label+.tab-content {
  height: auto;
  overflow: auto;
  padding: 15px;
  opacity: 1;
  transition: .5s opacity;
  box-shadow: 0 0 3px rgba(0,0,0,.2);
}
/* ラジオボタン非表示 */
.tab-switch {
  display: none;
}


</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">
  <i class="far fa-envelope"></i>
  <span>メール管理</span>
</h1>
<div class="container">

<div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">配信一覧</h6>
                <div class="dropdown no-arrow">
                  
                  <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                    <div class="dropdown-header">menu:</div>
                   
                    <a class="dropdown-item" >
                          
                          
                          <a href="/media/newsletter/create"><i class="fas fa-fw fa-plus"></i>記事作成</a>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                
                <nav class="panel panel-default">
  
            <table id="table4" class="table table-bordered">
                <thead>
                <tr>
                    <th>配信日</th>
                    <th>タイトル</th>
                    <th>詳細</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($newsletters->sortBy('id') as $newsletter)
                  <tr>
                      <td>{{ $newsletter->utm_campaign_id }}</td>
                      <td>{{ $newsletter->title }}</td>
                      
                      <td><a href="/media/newsletter/show/{{ $newsletter->id }}">
                          
                          <button type="button" class="btn btn-info">➪</button>
                        </a></td>             
                  </tr>
                  @endforeach
               
                </tbody>
            </table>
  
          </nav>
            </div>
        </div>
  
 
  
</div> 
</div>

@endsection

@section('scripts')
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


<script src="/sb_admin_2/js/sb-admin-2.js"></script>

<!-- Page level plugins -->
  <script src="/sb_admin_2/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  




@endsection