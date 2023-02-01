

@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  
 

</style>
@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">リンク配置</h1>

      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">総合リンク</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
             <form action="{{ route('newsletter.storelink', ['newsletter_parts_admin_id' => $newsletter_parts_admin->id]) }}" method="post">
                @csrf

                <div class="form-group">
                  <label for="type_id">カテゴリ</label>
                  <select type="text" class="form-control" name="type_id" id="type_id" onchange="createLink(this.value)">

                    <option disabled selected>タイプを選択</option>
                    <option value="pickupitem1row">PICKUP ITEM(1列＋テキスト)</option>
                    <option value="pickupitem2row">PICKUP ITEM(2列)</option>
                    <option value="stylebook1row">STYLE BOOK(1列＋テキスト)</option>
                    <option value="stylebook3row">STYLE BOOK(3列)</option>
                    <option value="snap">SNAP</option>
                    <option value="pickupitemforsale">PICKUP ITEM(セール用)</option>  
                    <option value="commentforpickupitem">コメント(PICKUP ITEM)</option>     
                  </select>
                  <option value="0">「正しく表示されない方はこちらをクリック」</option>
                  
                    @foreach($newsletter_parts_admin as $newsletter_parts_ad)
                  
                    @if(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 4 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 5 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 7 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 8 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 9 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 12)
                    <option value="{{ $newsletter_parts_ad->type_id }}">{{ $newsletter_parts_ad->type_id_label }}</option>
                    @endif

                
                  @endforeach
                </div>
                <div class="form-group">
                  <label for="link_type">タイプ</label>
                  <select type="text" class="form-control"　name="buttontype" id="buttontype" disabled onchange="Selc(this)">
                    <option disabled selected>形式を選択してください</option>
                  </select>
                </div>
                <div class="form-group">
                   <p id="comt" >リンク先URL</p>
                  <input type="text" class="form-control" name="link_url" id="link_url"/>
                </div>
                            
              
             
  
                   
              </nav>
              
            </div>

            <hr>
            <div class="text-right">
              <input type="submit" value="保存">
            </div>
            
            </div>
          

            
          </form> 
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </ul>
            </div>
          @endif       
      </nav>
    </div>

</div>

@endsection

@section('scripts')
<script type="text/javascript">
    const linkList = 
      {
        "main": ["「正しく表示されない方はこちらをクリック」",],
        "pickupitem1row": ["「詳しくはこちら」", "「GOODS一覧」"],
        "pickupitem2row": ["「詳しくはこちら」", "「GOODS一覧」"],
        "stylebook1row": ["「詳しくはこちら」", "「SNAP一覧」"],
        "stylebook3row": ["「詳しくはこちら」", "「SNAP一覧」"],
        "snap": ["「詳しくはこちら」", "「SNAP一覧」"],
        "pickupitemforsale": ["「詳しくはこちら」", "「GOODS一覧」"],
        "commentforpickupitem": ["テキスト入力"],
      };


  function createLink(selectButtonType){
    
    let buttontype = document.getElementById('buttontype');
    buttontype.disabled = false;
    buttontype.innerHTML = '';
    let option = document.createElement('option');
    option.innerHTML = '形式を選択してください';
    option.defaultSelected = true;
    option.disabled = true;
    buttontype.appendChild(option);  
    
    linkList[selectButtonType].forEach( menu => {
      let option = document.createElement('option');
      option.innerHTML = menu;
      buttontype.appendChild(option);  
    });    

    function Selc(Obj){

    value=Obj.options[Obj.selectedIndex].value; //選択された項目の値を取得する
    console.log(value);
    if (value=="a") {
        msg="テキスト";
        document.getElementById("comt").innerHTML = msg;
      }else{
        msg="リンク先URL";
        document.getElementById("comt").innerHTML = msg;  
      }
    }

    
  }
  </script>

   <script language="Javascript">

    function Selc(Obj){

    T_value = Obj.options[Obj.selectedIndex].text; //選択された項目のタイトルテキストを取得する
    if (T_value=="テキスト入力") {
        msg="テキスト";
        document.getElementById("comt").innerHTML = msg;
      }else{
        msg="リンク先URL";
        document.getElementById("comt").innerHTML = msg;  
      }
    }

  </script>


  

@endsection
