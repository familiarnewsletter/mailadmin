<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
	<tbody>
		<tr>
			<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/ttl_newsandtopics.png" alt="NEWS &amp; TOPICS" width="600" height="162" border="0" style="display:block;">
			</td>
		</tr>
	

@foreach($newsletter_parts ->sortBy('id') as $np) 

@if($np->newsletterPartsAdmin()->first()->type_id == 3)

@php

	foreach ($directorys as $directory) {
		if($directory->type_id === 3){
			$newsandtopics_path = $directory->path;
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

	<tr>
		<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
			<!--▼▼ 画像タップ時のリンク ▼▼-->
			<a href="{{ $url }}{{$utm_code}}{{ $newsletter->utm_campaign_id }}&utm_content={{ $np->utm_content_id }}{{ $anchor_id }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
			<!--▲▲ 画像タップ時のリンク ▲▲-->
			<!--▼▼ 画像 ▼▼-->
			<img src="{{ $newsandtopics_path }}{{ $np->img_url }}" width="250" height="175" border="0" style="display:block;">
			<!--▲▲ 画像 ▲▲-->
			</a>
		</td>
		<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
			<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_32x32.gif" width="32" height="32" border="0" style="display:block;">
		</td>
		<td style="margin:0;padding:0;vertical-align:middle;font-size:0;" valign="middle">
			<p style="text-align:left;">
				<!--▼▼ ニュースのカテゴリアイコン ▼▼-->
				<img src="{{ $np->title }}" width="104" height="24" border="0" style="display:block;">
				<!--▲▲ ニュースのカテゴリアイコン ▲▲-->
			</p>
			<p>
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_8x8.gif" width="8" height="8" border="0" style="display:block;">
			</p>
			<p style="font-size:18px;color:#555555;text-align:left;line-height:1.7;">
				<!--▼▼ テキスト ▼▼-->
				{!! $np->text !!}
				<!--▲▲ テキスト ▲▲-->
			</p>
			<p>
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_20x20.gif" width="20" height="20" border="0" style="display:block;">
			</p>
			<p style="text-align:right;">
				<!--▼▼ ボタンタップ時のリンク ▼▼-->
				<a href="{{ $url }}{{$utm_code}}{{ $newsletter->utm_campaign_id }}&utm_content={{ $np->utm_content_id }}{{ $anchor_id }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
				<!--▲▲ ボタンタップ時のリンク ▲▲-->
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/btn_176x40.png" width="176" height="40" border="0" style="display:inline-block;">
				</a>
			</p>
		</td>
	</tr>
	
	<tr>
		<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
			<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x24.gif" width="600" height="24" border="0" style="display:block;">
		</td>
	</tr>
	

@endif

@endforeach

	</tbody>
</table>


