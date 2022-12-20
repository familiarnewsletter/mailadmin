@extends('layout')

@section('styles')
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">


@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">
  <i class="far fa-folder"></i>
  <span>ディレクトリ管理</span>
</h1>



  
<div>
    <div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">参照パス一覧</h6>
            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
              <a class="dropdown-item" href="/media/directory/create">
                    <i class="fas fa-fw fa-plus-square"></i>
                    <span>新規登録</span>
                </a>
              
                 <div class="dropdown-divider"></div>
            </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
  
            <table id="table1" class="table table-bordered">
                <thead>
                <tr>
                    <th>カテゴリ</th>
                    <th>参照パス</th>
                    <th>編集</th>
                    <th>削除</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($directorys as $directory)
                  <tr>
                      <td>{{ $directory->type_id_label }}</td>
                      <td>{{ $directory->path }}</td>
                      <td><a href="/media/directory/edit/{{ $directory->id }}" class="btn btn-primary btn-circle btn-sm">
                          <i class="fas fa-edit"></i>
                        </a></td>
                      <td>
                          <form action="{{ route('directory.delete',$directory->id) }}" method="POST">
                              @csrf

                              <button type="submit" class="btn btn-danger btn-circle btn-sm" onclick='return confirm("本当に削除しますか？");'>
                                  <i class="fa fa-btn fa-trash"></i>
                              </button>
                          </form>
                      </td>      
                  </tr>
                  @endforeach
               
                </tbody>
            </table>
  
          </nav>
        </div>
      </div>
    </div>
   
</div> 
 
    
  
</div>

@endsection

@section('scripts')
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


<script src="/sb_admin_2/js/sb-admin-2.js"></script>



<script>
    jQuery(function($){ 
    $("#table1").DataTable(); 
    
}); 
</script>

<!-- Page level plugins -->
  <script src="/sb_admin_2/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  




@endsection