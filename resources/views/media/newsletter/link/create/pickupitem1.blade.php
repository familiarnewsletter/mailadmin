<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
</head>
<body>
  
    <input type="textbox" id="b2" value="テキスト" maxlength="5">
  <input type="button" value="活性/非活性" onclick="clickBtn2()">

  <script>
  function clickBtn2(){
    
    if (document.getElementById("b2").disabled === true){
      // disabled属性を削除
      document.getElementById("b2").removeAttribute("disabled");
      document.getElementById("b2").style.color = "black";
    }else{
      // disabled属性を設定
      document.getElementById("b2").setAttribute("disabled", true);
      document.getElementById("b2").style.color = "White";
    }
  }
  </script>
</body>
</html>