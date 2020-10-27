<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">



	<tbody>
		<tr>
			<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/ttl_snap.png" alt="PICKUP ITEM" width="600" height="162" border="0" style="display:block">
			</td>
		</tr>

		@php
		foreach($newsletter_parts ->sortByDesc('id') as $nlp){

			if($nlp->newsletterPartsAdmin()->first()->type_id == 9){
				$snaps[] = $nlp;
			}

		}
		$i = 1;
		@endphp

		@if(isset($snaps))
		@foreach($snaps as $snap)
		
			
		@php	
		if( $i % 2 != 0){  
			     echo "<tr>";
			   }
			   
		@endphp
			<td style="margin:0;padding:0;vertical-align:top;font-size:0" valign="top">

			<div>
				<!--▼▼ 画像タップ時のリンク ▼▼-->
				<a href="{{ $snap->link_url }}" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none" target="_blank">
				<!--▲▲ 画像タップ時のリンク ▲▲-->
				<!--▼▼ 画像 ▼▼-->
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/item/2020SS/{{ $snap->img_url }}" width="288" border="0" style="display:inline-block">
				<!--▲▲ 画像 ▲▲-->

				</a>
			</div>


			<div>
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_288x14.gif" width="288" height="14" border="0" style="display:block">
			</div>


				
				

			<div style="font-size:16px;color:#555555;text-align:center">
				<!--▼▼ タイトル ▼▼-->
				<strong>{{ $snap->title }}</strong><br>
				<!--▲▲ タイトル ▲▲-->
				<!--▼▼ テキスト ▼▼-->
				{!! $snap->text !!}
				<!--▲▲ テキスト ▲▲-->
			</div>



			<div>
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_288x20.gif" width="288" height="20" border="0" style="display:block">
			</div>



			</td>
			<!--▲▲ SNAP１個 ▲▲-->


			

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
			<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x16.gif" width="600" height="16" border="0" style="display:block" class="CToWUd">
			</td>
		</tr>



	</tbody>
</table>
@foreach($newsletter_link as $nl)
@if(isset($nl->type_id) && $nl->type_id == 9)
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