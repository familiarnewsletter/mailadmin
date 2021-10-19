@foreach($newsletter_parts as $np) 
@if($np->newsletterPartsAdmin()->first()->type_id == 1)
@php 

	foreach ($directorys as $directory) {
		if($directory->type_id === 1){
			$top_path = $directory->path;
		}
	}

	if($np->link_url)
		$original_url = $np->link_url;
		if (strpos($original_url, '#') !== false) {
		    //含まれている場合
		    $url = strstr($original_url, "#" , true);
			$anchor_id = strstr($original_url, "#");
		}
		 
		if (strpos($original_url, '#') === false) {
		    //含まれていない場合
		    $url = $original_url;
		    $anchor_id = "/";
		}
		
		

@endphp


<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="f6f4f2">

	<tbody>
		<tr>
			<td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
			<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x40.gif" width="600" height="40" border="0" style="display:block;">
			</td>
		</tr>

		<tr>
			<td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;text-align:center;" valign="top">

				<!--▼▼ 画像タップ時のリンク ▼▼-->
				<a href="{{ $url }}?utm_source=h_mail&utm_medium=email&utm_campaign={{ $newsletter->utm_campaign_id }}&utm_content={{ $np->utm_content_id }}{{ $anchor_id }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
				<!--▲▲ 画像タップ時のリンク ▲▲-->

				<!--▼▼ 画像 ▼▼-->
				<img src="{{$top_path}}{{ $np->img_url }}" width="500" border="0" style="display:inline-block;"></a>
				<!--▲▲ 画像 ▲▲-->
			</td>
		</tr>

		<tr>
			<td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x36.gif" width="600" height="36" border="0" style="display:block;">
			</td>
		</tr>

		<tr>
			<td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<!--▼▼ タイトル ▼▼-->
				<p style="font-size:25px;font-weight:bold;color:#827c72;line-height:1.7">
					<?php 
						$str = strip_tags($np->title, '<br><strong>');
					?>
					{!! $str !!}
				</p>
				<!--▲▲ タイトル ▲▲-->

			</td>
		</tr>


		<tr>
			<td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x20.gif" width="600" height="20" border="0" style="display:block;">
			</td>
		</tr>

		<tr>
			<td colspan="1" width="20" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_24x24.gif" width="24" height="24" border="0" style="display:block;">
			</td>

			
			<td colspan="3" width="560" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">

				<!--▼▼ テキスト ▼▼-->
				<p style="font-size:16px;color:#555555;text-align:center;line-height:1.7;">
				{!! $np->text !!}
				</p>
				<!--▲▲ テキスト ▲▲-->

			</td>
			<td colspan="1" width="20" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_24x24.gif" width="24" height="24" border="0" style="display:block;">
			</td>
		</tr>

		<tr>
			<td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x20.gif" width="600" height="20" border="0" style="display:block;">
			</td>
		</tr>

		<tr>
			<td colspan="2" width="108" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_108x64.gif" width="108" height="64" border="0" style="display:block;">
			</td>
			<td colspan="1" width="384" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">

				<!--▼▼ ボタンタップ時のリンク ▼▼-->
				<a href="{{ $url}}?utm_source=h_mail&utm_medium=email&utm_campaign={{ $newsletter->utm_campaign_id }}&utm_content={{ $np->utm_content_id }}{{ $anchor_id }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
				<!--▲▲ ボタンタップ時のリンク ▲▲-->

					<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/btn_384x64.png" width="384" height="64" border="0" style="display:block;">
				</a>
			</td>
			<td colspan="2" width="108" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_108x64.gif" width="108" height="64" border="0" style="display:block;">
			</td>
		</tr>

		<tr>
			<td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x40.gif" width="600" height="40" border="0" style="display:block;">
			</td>
		</tr>

	</tbody>

</table>
@endif
@endforeach


