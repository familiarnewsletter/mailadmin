<!--▼▼ PICKUP ITEM ▼▼-->
<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
	<tbody>
		<tr>
			<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/ttl_pickupitem.png" alt="PICKUP ITEM" width="600" height="162" border="0" style="display:block;">
			</td>
		</tr>
		@php
		foreach($newsletter_parts as $nlp){

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
			   
		@endphp
			
			

			<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<p>
					<!--▼▼ 画像タップ時のリンク ▼▼-->
					<a href="{{ $pickup_item->link_url }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
					<!--▲▲ 画像タップ時のリンク ▲▲-->
					<!--▼▼ 画像 ▼▼-->
					<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/item/2020SS/{{ $pickup_item->img_url }}" width="288" border="0" style="display:inline-block;">
					<!--▲▲ 画像 ▲▲-->
					</a>
				</p>
				<p>
					<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_288x14.gif" width="288" height="14" border="0" style="display:block;">
				</p>
				<p style="font-size:16px;color:#555555;text-align:center;">
					<!--▼▼ 品名・品番 ▼▼-->
					{!! $pickup_item->text !!}
					<!--▲▲ 品名・品番 ▲▲-->
				</p>
				<p>
					<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_288x20.gif" width="288" height="20" border="0" style="display:block;">
				</p>
				

			</td>
			<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_24x24.gif" width="24" height="24" border="0" style="display:block;">
			</td>
		
			
			
		@php	
			if( $i % 2 == 0){  
			     echo "</tr>";
			   }
			    $i++;
		@endphp
		
		<!-- ITEM 2個 -->
		
		@endforeach
		@endif
		<tr>
			<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x16.gif" width="600" height="16" border="0" style="display:block;">
			</td>
		</tr>
	
	</tbody>
</table>
@foreach($newsletter_link as $nl)
@if(isset($nl->type_id) && $nl->type_id == 5)
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
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/btn_goodslist.png" width="240" height="56" border="0" style="display:block;">
				
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
<!--▲▲ PICKUP ITEM ▲▲ -->