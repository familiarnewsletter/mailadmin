<!--▼▼ BANNER ▼▼-->

<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">

<tbody><tr><td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x80.gif" width="600" height="80" border="0" style="display:block;"></td></tr>

<!-- BANNER 2個 -->


@php
foreach($newsletter_parts ->sortBy('id') as $nlp){

if($nlp->newsletterPartsAdmin()->first()->type_id == 10){
	$banners[] = $nlp;
}

}
$i = 1;
@endphp

@if(isset($banners))
@foreach($banners as $banner)

<!-- ITEM 2個 -->
<!-- <tr> -->

@php	
if( $i % 2 != 0){  
		echo "<tr>";
	}
	
@endphp

@php

foreach ($directorys as $directory) {
	if($directory->type_id === 10){
		$banner_path = $directory->path;
	}
}

@endphp

<!-- BANNER 1個 -->

<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">

<p><a href="{{ $banner->link_url }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">

<img src="{{ $banner_path }}{{ $banner->img_url }}" width="288" height="126" border="0" style="display:block;">

</a></p>

</td>

<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_24x24.gif" width="24" height="24" border="0" style="display:block;"></td>


@php	
if( $i % 2 == 0){  
		echo "</tr>";
	}
	$i++;
@endphp

<!-- </tr> -->
<!-- ITEM 2個 -->

@endforeach
@endif


<tr><td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x24.gif" width="600" height="24" border="0" style="display:block;"></td></tr>

</tbody></table>

<!--▲▲ BANNER ▲▲-->






