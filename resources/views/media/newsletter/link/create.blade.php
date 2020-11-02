

@extends('layout')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  
 

</style>
@endsection

@section('content')

<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">リンク設定</h1>

      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">設定項目</h6>
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
            
           
              
             <form action="{{ route('newsletter.storelink', ['newsletter_id' => $newsletter->id]) }}" method="post">
                @csrf

                <div class="form-group">
                  <label for="type_id">カテゴリ</label>
                  <select type="text" class="form-control" name="type_id" id="type_id" onchange="createLink(this.value)">

                    <option disabled selected>タイプを選択</option>
                    <option value="1">全体記事リンク</option>
                    
                    @foreach($newsletter_parts_admin as $newsletter_parts_ad)
                  
                    @if(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 4 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 5 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 7 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 8 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 9 || isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 12)
                    <option value="{{ $newsletter_parts_ad->type_id }}">{{ $newsletter_parts_ad->type_id_label }}</option>
                    @endif

                
                  @endforeach
                  </select>
                 
                  
                    
                </div>
                  <div class="form-group">
                  <label for="link_type">タイプ</label>
                  <select type="text" class="form-control" name="link_type" id="link_type" onchange="Selc(this)">
                    
                      <option disabled selected>形式を選択してください</option>
                      
                  </select>
                </div>
                  
                <div class="form-group">
                   <p id="comt" >リンク先URL</p>
                  <input type="text" class="form-control" name="link_url" id="link_url"/>
                </div>

                <div class="form-group">
                   <label for="utm_content_id">キャンペーンコード(2桁)</label>
                  <input type="text" class="form-control" name="utm_content_id" id="utm_content_id"/>
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


<script language="Javascript">

  function Selc(Obj){
    O_value=Obj.options[Obj.selectedIndex].value;
    
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

<script type="text/javascript">
    const linkList = 
      {
        "1": ["「正しく表示されない方はこちらをクリック」",],
        "4": ["「詳しくはこちら」", "「GOODS一覧」","テキスト入力"],
        "5": ["「詳しくはこちら」", "「GOODS一覧」","テキスト入力"],
        "7": ["「詳しくはこちら」", "「SNAP一覧」"],
        "8": ["「詳しくはこちら」", "「SNAP一覧」"],
        "9": ["「詳しくはこちら」", "「SNAP一覧」"],
        "11": ["「詳しくはこちら」", "「GOODS一覧」"],
      };


  function createLink(selectlink_Type){
    
    let link_type = document.getElementById('link_type');

    link_type.disabled = false;
    link_type.innerHTML = '';
    let option = document.createElement('option');
    option.innerHTML = '形式を選択してください';
    option.defaultSelected = true;
    option.disabled = true;
    link_type.appendChild(option);  
    
    linkList[selectlink_Type].forEach( menu => {
      let option = document.createElement('option');
      
      option.innerHTML = menu;
      link_type.appendChild(option);  
    });    
    
  }
  </script>

    

@endsection
