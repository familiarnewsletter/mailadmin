@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--  datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">

<style type="text/css">
	.checkbox {
 	 display:block;
}
</style>
@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">配置図作成</h1>
<div class="container">


  	 <div class="container"> 
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">新規登録</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
             <!--  <form action="#" method="POST">
                @csrf -->
                <div class="form-group">
                  <label for="lettertitle">仮タイトル</label>
                  <input type="text" class="form-control" name="lettertitle" id="lettertitle" value="{{ old('lettertitle') }}" />
                </div>
                <div class="form-group">
                  <label for="deliver_date">配信日時</label>
                  <input type="text" class="form-control" name="deliver_date" id="deliver_date" value="{{ old('deliver_date') }}" />
                </div>
                <div class="form-group">
                  <label for="status">カテゴリ</label>
                  <select type="text" class="form-control" name="status" id="status" value="{{ old('status') }}">
                  	<option>本会員</option>
                  	<option>NL会員</option>
                    <option>セグメント</option>
                  </select> 
                </div>

                <hr>

                <div>コンテンツ</div>      
                <div>
                  <table>
                  <div class="form-group">
                    <td>
                   	<input type="checkbox"  name="newsandtopics" id="newsandtopics" value="newsandtopics">
                   	ShopNews&Event
                    <label class="number" for="newsandtopics">
                    ×
                    <input type="number" step="1" min="0" max="5" style="width: 100px;" name="newsandtopics" id="newsandtopics" value="newsandtopics">
                   </label>
                   </td>
                   <td>
                    <input type="checkbox"  name="newsandtopics" id="newsandtopics" value="newsandtopics">
                    News&Topics
                    <label class="number" for="newsandtopics">
                    ×
                    <input type="number" step="1" min="0" max="3" style="width: 100px;" name="newsandtopics" id="newsandtopics" value="newsandtopics">
                   </label>
                   </td>
                   <td>
                  
                    <input type="checkbox"  name="newsandtopics" id="newsandtopics" value="newsandtopics">
                    Pickup Item
                    <label class="number" for="newsandtopics">
                    ×
                    <input type="number" step="1" min="0" max="3" style="width: 100px;" name="newsandtopics" id="newsandtopics" value="newsandtopics">
                   </label>
                   </td>
                   <td>
                  
                  
                    <input type="checkbox"  name="newsandtopics" id="newsandtopics" value="newsandtopics">
                    Shop Blog
                    <label class="number" for="newsandtopics">
                    ×
                    <input type="number" step="1" min="0" max="3" style="width: 100px;" name="newsandtopics" id="newsandtopics" value="newsandtopics">
                   </label>
                   </td>
                   <td>
                
                  
                    <input type="checkbox"  name="newsandtopics" id="newsandtopics" value="newsandtopics">
                    Style Book
                    <label class="number" for="newsandtopics">
                    ×
                    <input type="number" step="3" min="3" max="6" style="width: 100px;" name="newsandtopics" id="newsandtopics" value="newsandtopics">
                   </label>
                   </td>
                   <td>
                  
                    <input type="checkbox"  name="newsandtopics" id="newsandtopics" value="newsandtopics">
                    Banner
                    <label class="number" for="newsandtopics">
                    ×
                    <input type="number" step="1" min="0" max="5" style="width: 100px;" name="newsandtopics" id="newsandtopics" value="newsandtopics">
                   </label>
                   </td>
                   
                   </table>
                </div>

                </div>
                
                <hr>

                <div class="text-right">
                  <a href="/media/newsletter/create"><button class="btn btn-primary">記事作成</button></a>
                </div>
              <!-- </form>  -->       
          </nav>
        </div>
      </div>
    
  
  </div>
 

</div>

@endsection

@section('scripts')

@endsection
