<!--▼▼ MAIN ▼▼-->
<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="f6f4f2">
<tbody><tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x40.gif" width="600" height="40" border="0" style="display:block;"></td></tr>
<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;text-align:center;" valign="top">


<!--INPUT IMAGE 500×350 -->
<img src="/images/image.jpg" data-toggle="modal" data-target="#Modal1" width="500" border="0" style="display:inline-block;"></a>
<!--INPUT IMAGE 500×350 -->
</td>
</tr>

<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x36.gif" width="600" height="36" border="0" style="display:block;"></td></tr>
<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
<p style="font-size:30px;font-weight:bold;color:#827c72;text-align:center;line-height:1.7;">
        
            

  <form action="#" method="POST">
    @csrf
	<div class="form-group">
	  <input type="text" class="form-control" name="main_heading" id="main_heading" placeholder="タイトル" value="{{ old('main_heading') }}" >
	</div>
</form>
              
</p>
</td></tr>
<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x20.gif" width="600" height="20" border="0" style="display:block;"></td></tr>
<tr>
<td colspan="1" width="20" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_24x24.gif" width="24" height="24" border="0" style="display:block;"></td>
<td colspan="3" width="560" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><p style="font-size:16px;color:#555555;text-align:left;line-height:1.7;">

<!--INPUT TEXT -->
<a class="text" style="margin:0;padding:0;vertical-align:top;font-size:30px;font-weight:bold;color:#827c72;text-align:center;line-height:1.7;">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
          
          <nav class="panel panel-default">
          	<form action="#" method="POST">
             <div class="form-group">
           	<label for="title">見出し名</label>
              <div id="editor"><input type="text" name="maintitle"></div>
            </div>
                
         	</div> 
	        
           </form>        
          </nav>
        </div>
      </div>
</a>
<!--INPUT TEXT -->



</td>
<td colspan="1" width="20" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_24x24.gif" width="24" height="24" border="0" style="display:block;"></td>
</tr>

<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x20.gif" width="600" height="20" border="0" style="display:block;"></td></tr>
<tr>
<td colspan="2" width="108" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_108x64.gif" width="108" height="64" border="0" style="display:block;"></td>

<td colspan="1" width="384" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">

	<!--INPUT BUTTON LINK -->
<a class="text" style="margin:0;padding:0;vertical-align:top;font-size:30px;font-weight:bold;color:#827c72;text-align:center;line-height:1.7;">
    <form action="#" method="POST">
    @csrf
	<div class="form-group">
	  <input type="text" class="form-control" name="main_link" id="main_link" placeholder="リンク先URL" value="{{ old('main_link') }}" >
	</div>
</form>
</a>


<!--INPUT BUTTON LINK -->
</td>



<td colspan="2" width="108" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_108x64.gif" width="108" height="64" border="0" style="display:block;"></td>
</tr>
<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x40.gif" width="600" height="40" border="0" style="display:block;"></td></tr>
</tbody></table>
<!--▲▲ MAIN ▲▲-->



<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
  <script>
    // エディタへの設定を適用する
    CKEDITOR.replace('editor', {
      uiColor: '#EEEEEE',
      height: 400,
    });
  </script>
