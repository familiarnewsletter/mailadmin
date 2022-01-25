<!--▼▼ STYLE BOOK ▼▼-->

<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">

<tbody><tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/ttl_stylebook.png" alt="STYLE BOOK" width="600" height="162" border="0" style="display:block;"></td></tr>

<!-- ITEM 3個 -->

@php
foreach($newsletter_parts ->sortBy('id') as $np){

	if($np->newsletterPartsAdmin()->first()->type_id == 8){
		$stylebooks[] = $np;
	}

}
$i = 1;
@endphp

@if(isset($stylebooks))
@foreach($stylebooks as $stylebook)


	
@php	
if( $i % 3 == 1){  
			echo '<tr>';
		}
		

	foreach ($directorys as $directory) {
		if($directory->type_id === 8){
			$stylebook3row_path = $directory->path;
		}
	}

	

if(strpos($stylebook->link_url, "?") != false){
	
	$utm_code = "&utm_source=h_mail&utm_medium=email&utm_campaign=";

}else{

	$utm_code = "?utm_source=h_mail&utm_medium=email&utm_campaign=";

}

@endphp

<!-- item1 -->

<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">

<p><a href="{{ $stylebook->link_url }}{{$utm_code}}{{ $newsletter->utm_campaign_id }}&utm_content={{ $stylebook->utm_content_id }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">

<img src="{{ $stylebook3row_path }}{{ $stylebook->img_url }}" width="188" height="282" border="0" style="display:block;">

</a></p>

<p><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_188x10.gif" width="188" height="10" border="0" style="display:block;"></p>

<p style="font-size:14px;color:#555555;text-align:left; line-height:1.7;">{!! $stylebook->text !!}</p>

</td>


<!-- item1 -->



@php	
if( $i % 3 == 0){  
		echo "</tr>";
	}
	$i++;
@endphp

<!-- </tr> -->
<!-- ITEM 2個 -->

@endforeach
@endif	


@foreach($newsletter_link as $nl)
@if(isset($nl->type_id) && $nl->type_id == 8)
</tbody></table>

<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">

<tbody><tr><td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x16.gif" width="600" height="16" border="0" style="display:block;"></td></tr>

<tr>

<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_180x56.gif" width="180" height="56" border="0" style="display:block;"></td>

<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><a href="{{ $nl->link_url }}?utm_source=h_mail&utm_medium=email&utm_campaign={{ $newsletter->utm_campaign_id }}&utm_content={{ $nl->utm_content_id }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/btn_snaplist.png" width="240" height="56" border="0" style="display:block;"></a></td>

<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_180x56.gif" width="180" height="56" border="0" style="display:block;"></td>

</tr>

</tbody></table>
@endif
@endforeach

<!--▲▲ STYLE BOOK ▲▲-->
