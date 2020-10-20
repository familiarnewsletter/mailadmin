<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">



	<tbody>
		<tr>
			<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/ttl_stylebook.png" alt="NEWS &amp; TOPICS" width="600" height="162" border="0" style="display:block">
			</td>
		</tr>



	<tr>
		<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0" valign="top">
			<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x24.gif" width="600" height="24" border="0" style="display:block">
		</td>
	</tr>


	<tr>
@foreach($newsletter_parts as $np) 

@if($np->newsletterPartsAdmin()->first()->type_id == 7)


	<td style="margin:0;padding:0;vertical-align:top;font-size:0" valign="top">


		<!--▼▼ 画像タップ時のリンク ▼▼-->
		<a href="{{ $np->link_url }}" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none" target="_blank">
		<!--▲▲ 画像タップ時のリンク ▲▲-->

		<!--▼▼ 画像 ▼▼-->
		<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/item/2020SS/{{ $np->img_url }}" width="250" height="175" border="0" style="display:block">
		<!--▲▲ 画像 ▲▲-->


		</a>
	</td>



		<td style="margin:0;padding:0;vertical-align:top;font-size:0" valign="top">
			<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_32x32.gif" width="32" height="32" border="0" style="display:block">
		</td>



		<td style="margin:0;padding:0;vertical-align:middle;font-size:0" valign="middle">



		<div style="text-align:left"></div>



		<div><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_8x8.gif" width="8" height="8" border="0" style="display:block">
		</div>


		<!--▼▼ タイトル ▼▼-->
		<div style="font-size:23px;color:#555555;text-align:left;line-height:1.7">{{ $np->title }}</div>
		<!--▲▲ タイトル ▲▲-->


		<div><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_20x20.gif" width="20" height="20" border="0" style="display:block"></div>


		
		<div style="text-align:right">
			<!--▼▼ ボタンタップ時のリンク ▼▼-->
			<a href="{{ $np->link_url }}" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none" target="_blank">
			<!--▲▲ ボタンタップ時のリンク ▲▲-->

			<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/btn_176x40.png" width="176" height="40" border="0" style="display:inline-block">

			</a>
	</div>



	</td>



	</tr>


	<tr>
		<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0" valign="top">
			<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x24.gif" width="600" height="24" border="0" style="display:block">
		</td>
	</tr>

@endif

@endforeach


	<tr>
		<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0" valign="top">
			<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x24.gif" width="600" height="24" border="0" style="display:block">
		</td>
	</tr>



	</tbody>
</table>

@foreach($newsletter_link as $nl)
@if(isset($nl->type_id) && $nl->type_id == 7)
<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
	<tbody>
		<tr>
		<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
			<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_180x56.gif" width="180" height="56" border="0" style="display:block;">
		</td>
		<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
			

					<!--▼▼ アイテム一覧のリンク ▼▼-->
			<a href="{{ $nl->link_url }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
			<!--▲▲ アイテム一覧のリンク ▲▲-->
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/btn_snaplist.png" width="240" height="56" border="0" style="display:block;">
				
			</a>
		</td>
			<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_180x56.gif" width="180" height="56" border="0" style="display:block;">
			</td>
		</tr>
		<tr>
			<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x16.gif" width="600" height="16" border="0" style="display:block;">
			</td>
		</tr>
		
	</tbody>
</table>
@endif
@endforeach