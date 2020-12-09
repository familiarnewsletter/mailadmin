@extends('layout')

@section('styles')
<style>
<!--
ul.jquery-ui-sortable {
    list-style-type: none;
    margin: 100px;
    padding: 2px;
    width: 30%;
    float: left;
    min-height: 1.5em;
    background-color: beige;
    border: solid 1px #606060;
}
ul.jquery-ui-sortable li {
    margin: 3px;
    padding: 0.3em;
    padding-left: 1em;
    font-size: 15px;
    font-weight: bold;
    cursor: move;
}
li.border-color-red {
    border-color: red;
}
li.border-color-blue {
    border-color: blue;
}

}
-->
</style>

@endsection

@section('content')

<div class="container">
     <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">見出し選択</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
              <div class="dropdown-header">menu:</div>
                 <a class="dropdown-item">
                    <i class="fas fa-fw fa-edit"></i>
                    <button>編集</button>
                </a>
                
            </div>
          </div>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
          
<center>

<ul class="jquery-ui-sortable">
   <label><b>見出しリスト</b></label>
    <li class="ui-state-default border-color-red">NEWS & TOPICS</li>
    <li class="ui-state-default border-color-red">SHOP NEWS & EVENT</li>
    <li class="ui-state-default border-color-red">PICKUP ITEM(1row)</li>
    <li class="ui-state-default border-color-red">PICKUP ITEM(2row)</li>
    <li class="ui-state-default border-color-red">STYLEBOOK(1row)</li>
    <li class="ui-state-default border-color-red">STYLEBOOK(3row)</li>
    <li class="ui-state-default border-color-red">SNAP</li>
    <li class="ui-state-default border-color-red">SHOP BLOG</li>
    <li class="ui-state-default border-color-red">BANNER</li>
</ul>
<ul class="jquery-ui-sortable">
	<label><b>配信用リスト</b></label>
    <li class="ui-state-default border-color-blue">TOP</li>
    
</ul>

</center>



<div style="clear: both;"></div>

               

                <hr>
               

                <div class="text-right">
                  <a href="/media/newsletter/index"><button class="button">設定</button></a>
                </div>
              
          </div>
          </nav>
        </div>
      </div>
     
  </div>

@endsection

@section('scripts')
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>

<script>
<!--
$( function() {
    $( '.jquery-ui-sortable' ) . sortable( {
        connectWith: '.jquery-ui-sortable'
    } );
    $( '.jquery-ui-sortable' ) . disableSelection();
} );
// -->
</script>
@endsection