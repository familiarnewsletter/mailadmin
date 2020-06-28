@extends('layout')

@section('styles')
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>

@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">法人予算管理</h1>
<div class="container">

 <div align="right">
   <select name=”year”>
      <option value=”2017”>2017</option>
      <option value=”2018”>2018</option>
      <option value=”2019”>2019</option>
      <option value=”2020”>2020</option>
    </select>
  </div>

  <ul class="tab-list" id="tab-1">
 
    <li class="tab-item is-open">
      <a href="#shops_index" data-toggle>月別</a>
    </li>
    <li class="tab-item">
      <a href="#shops_create" data-toggle>週別</a>
    </li>
    <li class="tab-item">
      <a href="#action_index" data-toggle>日別</a>
    </li>

  </ul>

  <div class="tab-content is-open" id="shops_index">
   
    

<div class="container">

    <div class="col-xs-12">
        <table id="table1" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>取引先名</th>
                <th>カテゴリ</th>
                <th>年間予算</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Aホスピタル</td>
                <td>クリニック</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>A商事</td>
                <td>企業</td>
                <td>700000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>3</td>
               <td>中央区役所</td>
                <td>自治体</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>4</td>
                <td>K幼稚園</td>
                <td>教育機関</td>
                <td>1000000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>5</td>
                <td>B高校</td>
                <td>教育機関</td>
                <td>50000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>6</td>
                <td>K病院</td>
                <td>クリニック</td>
                <td>43000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>7</td>
                <td>T市役所</td>
                <td>自治体</td>
                <td>55000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            
            
            </tbody>
        </table>
    </div>
</div>


  </div>
  <div class="tab-content" id="shops_create">
  	<div class="container">

         <div class="col-xs-12">
        <table id="table2" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>取引先名</th>
                <th>カテゴリ</th>
                <th>年間予算</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Aホスピタル</td>
                <td>クリニック</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>A商事</td>
                <td>企業</td>
                <td>700000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>3</td>
               <td>中央区役所</td>
                <td>自治体</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>4</td>
                <td>K幼稚園</td>
                <td>教育機関</td>
                <td>1000000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>5</td>
                <td>B高校</td>
                <td>教育機関</td>
                <td>50000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>6</td>
                <td>K病院</td>
                <td>クリニック</td>
                <td>43000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>7</td>
                <td>T市役所</td>
                <td>自治体</td>
                <td>55000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            
            
            </tbody>
        </table>
    </div>
   
</div>
    
  </div>
      
  <div class="tab-content" id="action_index">
    <div class="container">

     <div class="col-xs-12">
        <table id="table3" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>取引先名</th>
                <th>カテゴリ</th>
                <th>年間予算</th>
                <th>詳細</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Aホスピタル</td>
                <td>クリニック</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>A商事</td>
                <td>企業</td>
                <td>700000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>3</td>
               <td>中央区役所</td>
                <td>自治体</td>
                <td>300000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>4</td>
                <td>K幼稚園</td>
                <td>教育機関</td>
                <td>1000000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>5</td>
                <td>B高校</td>
                <td>教育機関</td>
                <td>50000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>6</td>
                <td>K病院</td>
                <td>クリニック</td>
                <td>43000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            <tr>
                <td>7</td>
                <td>T市役所</td>
                <td>自治体</td>
                <td>55000</td>
                <td><a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info-circle"></i>
                  </a></td>     
            </tr>
            
            
            </tbody>
        </table>
    </div>
</div>
    
  </div>
 </div>
    
</div>

 

</div>


@endsection

@section('scripts')

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="/sb_admin_2/vendor/jquery/jquery.min.js"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="/sb_admin_2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/sb_admin_2/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/sb_admin_2/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/sb_admin_2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  
<script>
    jQuery(function($){ 
    $("#table1").DataTable(); 
    $("#table2").DataTable();
    $("#table3").DataTable();
}); 
</script>




@endsection