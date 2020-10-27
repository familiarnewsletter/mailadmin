<!--▼▼ STYLE BOOK ▼▼-->
<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
	<tbody>
		<tr>
			<td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/ttl_stylebook.png" alt="STYLE BOOK" width="600" height="162" border="0" style="display:block;">
			</td>
		</tr>
		<!-- ITEM 3個 -->
		<tr>

		@php
		foreach($newsletter_parts ->sortBy('id') as $np){

			if($np->newsletterPartsAdmin()->first()->type_id == 12){
				$pickupitemforsales[] = $np;
			}

		}
		$i = 1;
		@endphp

		@if(isset($pickupitemforsales))
		@foreach($pickupitemforsales as $pickupitemforsale)
		
		
			
		@php	
		if( $i % 3 == 1){  
			     echo '<tr>';
			   }
			   
		@endphp
		
		<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
		
		<p>
			<!--▼▼ 画像タップ時のリンク ▼▼-->
			<a href="{{ $pickupitemforsale->link_url }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
			<!--▲▲ 画像タップ時のリンク ▲▲-->
			<!--▼▼ 画像 ▼▼-->
			<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/{{ $pickupitemforsale->img_url }}" width="188" height="188" border="0" style="display:inline-block;">
			<!--▲▲ 画像 ▲▲-->
			</a>
		</p>
		<p>
			<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_188x10.gif" width="188" height="10" border="0" style="display:block;">
		</p>
		<p style="font-size:14px;color:#555555;text-align:left; line-height:1.7;">
			<!--▼▼ テキスト ▼▼-->
			{!! $pickupitemforsale->text !!}
			<!--▲▲ テキスト ▲▲-->
		</p>

		
		
		<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
			<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_18x18.gif" width="18" height="18" border="0" style="display:block;">
		</td>

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

		<tr>
			<td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x24.gif" width="600" height="24" border="0" style="display:block;">
			</td>
		</tr>
		<!-- ITEM 3個 -->

	</tbody>
</table>
@foreach($newsletter_link as $nl)
@if(isset($nl->type_id) && $nl->type_id == 12)
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
<!--▲▲ STYLE BOOK ▲▲-->
