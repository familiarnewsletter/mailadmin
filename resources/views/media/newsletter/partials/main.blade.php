@foreach($newsletter_parts as $np) 
@if($np->newsletterPartsAdmin()->first()->type_id == 1)
@php 

	foreach ($directorys as $directory) {
		if($directory->type_id === 1){
			$top_path = $directory->path;
		}
	}

	if(strpos($np->link_url, "?") != false){
	  
	  $utm_code = "&utm_source=h_mail&utm_medium=email&utm_campaign=";

		}else{

			$utm_code = "?utm_source=h_mail&utm_medium=email&utm_campaign=";

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

<!--▼▼ MAIN ▼▼-->

<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="f6f4f2">

<tbody><tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x40.gif" width="600" height="40" border="0" style="display:block;"></td></tr>

<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;text-align:center;" valign="top">

<a href="{{ $url }}{{ $utm_code }}{{ $newsletter->utm_campaign_id }}&utm_content={{ $np->utm_content_id }}{{ $anchor_id }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">

<img src="{{$top_path}}{{ $np->img_url }}" width="500" border="0" style="display:block;margin:0 auto;"></a></td>

</tr>

<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x36.gif" width="600" height="36" border="0" style="display:block;"></td></tr>

<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">

<p style="font-size:30px;font-weight:bold;color:#827c72;text-align:center;line-height:1.7;">
@php
	$str = strip_tags($np->title, '<br><strong>');
@endphp
{!! $str !!}
</p>

</td></tr>

<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x20.gif" width="600" height="20" border="0" style="display:block;"></td></tr>

<tr>

<td colspan="1" width="20" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_24x24.gif" width="24" height="24" border="0" style="display:block;"></td>

<td colspan="3" width="560" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><p style="font-size:16px;color:#555555;text-align:left;line-height:1.7;">

{!! $np->text !!}

</p></td>

<td colspan="1" width="20" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_24x24.gif" width="24" height="24" border="0" style="display:block;"></td>

</tr>

<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x20.gif" width="600" height="20" border="0" style="display:block;"></td></tr>

<tr>

<td colspan="2" width="108" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_108x64.gif" width="108" height="64" border="0" style="display:block;"></td>

<td colspan="1" width="384" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
<a href="{{ $url}}{{ $utm_code }}{{ $newsletter->utm_campaign_id }}&utm_content={{ $np->utm_content_id }}{{ $anchor_id }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/btn_384x64.png" width="384" height="64" border="0" style="display:block;">
</a>
</td>

<td colspan="2" width="108" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_108x64.gif" width="108" height="64" border="0" style="display:block;"></td>

</tr>

<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x40.gif" width="600" height="40" border="0" style="display:block;"></td></tr>

</tbody></table>

@endif
@endforeach

<!--▲▲ MAIN ▲▲-->
