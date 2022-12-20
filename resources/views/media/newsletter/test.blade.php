<html>

<style>


/*モーダルを開くボタン*/
.modal-open{
  position: fixed;
  display: flex;
  align-items: center;
  justify-content: center;
  top: 50%;
  left: 50%;
  width: 300px;
  height: 50px;
  font-weight: bold;
  color: #fff;
  background: #000;
  margin: auto;
  cursor: pointer;
  transform: translate(-50%,-50%);
}
/*モーダル本体の指定 + モーダル外側の背景の指定*/
.modal-container{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  text-align: center;
  background: rgba(0,0,0,50%);
  padding: 40px 20px;
  overflow: auto;
  opacity: 0;
  visibility: hidden;
  transition: .3s;
  box-sizing: border-box;
}
/*モーダル本体の擬似要素の指定*/
.modal-container:before{
  content: "";
  display: inline-block;
  vertical-align: middle;
  height: 100%;
}
/*モーダル本体に「active」クラス付与した時のスタイル*/
.modal-container.active{
  opacity: 1;
  visibility: visible;
}
/*モーダル枠の指定*/
.modal-body{
  position: relative;
  display: inline-block;
  vertical-align: middle;
  max-width: 500px;
  width: 90%;
}
/*モーダルを閉じるボタンの指定*/
.modal-close{
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  top: -40px;
  right: -40px;
  width: 40px;
  height: 40px;
  font-size: 40px;
  color: #fff;
  cursor: pointer;
}
/*モーダル内のコンテンツの指定*/
.modal-content{
  background: #fff;
  text-align: left;
  padding: 30px;
}


</style>

<div class="modal-open">モーダルを開く</div>

<div class="modal-container">
  <div class="modal-body">
    <div class="modal-close">×</div>
    <div class="modal-content">
      <p>開きました。</p>
    </div>
  </div>
</div>

<script>  

$(function(){
  // 変数に要素を入れる
  var open = $('.modal-open'),
    close = $('.modal-close'),
    container = $('.modal-container');

  //開くボタンをクリックしたらモーダルを表示する
  open.on('click',function(){ 
    container.addClass('active');
    return false;
  });

  //閉じるボタンをクリックしたらモーダルを閉じる
  close.on('click',function(){  
    container.removeClass('active');
  });

  //モーダルの外側をクリックしたらモーダルを閉じる
  $(document).on('click',function(e) {
    if(!$(e.target).closest('.modal-body').length) {
      container.removeClass('active');
    }
  });
});

</script>


</html>