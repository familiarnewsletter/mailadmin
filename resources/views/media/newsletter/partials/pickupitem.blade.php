<!--▼▼ PICKUP ITEM ▼▼-->

<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">

<tbody>
	<tr>
		<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
			<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/ttl_pickupitem.png" alt="PICKUP ITEM" width="600" height="162" border="0" style="display:block;">
				@foreach($newsletter_link as $nl)
				@if(isset($nl->type_id) && $nl->type_id == 5 && $nl->link_type == "テキスト入力")
				<p style="font-size:16px;color:#555555;text-align:center;line-height:1.7">
                {{ $nl->link_url }}
                </p>
                @endif
				@endforeach
</td></tr>

<!-- ITEM 2個 -->

@php
foreach($newsletter_parts ->sortBy('id') as $nlp){

	if($nlp->newsletterPartsAdmin()->first()->type_id == 5){
		$pickup_items[] = $nlp;
	}

}
$i = 1;
@endphp

@if(isset($pickup_items))
@foreach($pickup_items as $pickup_item)

	
@php	
if( $i % 2 != 0){  
			echo "<tr>";
		}
		

	


	foreach ($directorys as $directory) {
		if($directory->type_id === 5){
			$pickupitem2row_path = $directory->path;
		}
	}


if(strpos($pickup_item->link_url, "?") != false){
	
	$utm_code = "&utm_source=h_mail&utm_medium=email&utm_campaign=";

}else{

	$utm_code = "?utm_source=h_mail&utm_medium=email&utm_campaign=";

}

@endphp	

<!-- 1item -->
<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">

<p><a href="{{ $pickup_item->link_url }}{{ $utm_code }}{{ $newsletter->utm_campaign_id }}&utm_content={{ $pickup_item->utm_content_id }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">

<img src="{{ $pickupitem2row_path }}{{ $pickup_item->img_url }}" width="288" border="0" style="display:block;">

</a></p>

<p><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_288x14.gif" width="288" height="14" border="0" style="display:block;"></p>

<p style="font-size:16px;color:#555555;text-align:center;">{!! $pickup_item->text !!}</p>

<p><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_288x20.gif" width="288" height="20" border="0" style="display:block;"></p>

</td>


<!-- 1item -->

@php	
if( $i % 2 == 0){  
	echo "</tr>";
}
$i++;
@endphp

<!-- ITEM 2個 -->

@endforeach
@endif

<!-- ITEM 2個 -->


@foreach($newsletter_link as $nl)
@if(isset($nl->type_id) && $nl->type_id == 5 && $nl->link_type != "テキスト入力")
<tr><td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x16.gif" width="600" height="16" border="0" style="display:block;"></td></tr>

</tbody></table>

<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">

<tbody><tr>

<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_180x56.gif" width="180" height="56" border="0" style="display:block;"></td>

@if($nl->link_type == "「GOODS一覧」")
<a href="{{ $nl->link_url }}?utm_source=h_mail&utm_medium=email&utm_campaign={{ $newsletter->utm_campaign_id }}&utm_content={{ $nl->utm_content_id }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/btn_goodslist.png" width="240" height="56" border="0" style="display:block;">
</a>

@elseif($nl->link_type == "「詳しくはこちら」")
<a href="{{ $nl->link_url }}?utm_source=h_mail&utm_medium=email&utm_campaign={{ $newsletter->utm_campaign_id }}&utm_content={{ $nl->utm_content_id }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/kuwashikuwa_banner_kai.png" width="240" height="56" border="0" style="display:block;">
</a>
@endif

</td>

<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_180x56.gif" width="180" height="56" border="0" style="display:block;"></td>

</tr>

</tbody></table>
@endif
@endforeach
<!--▲▲ PICKUP ITEM ▲▲-->

