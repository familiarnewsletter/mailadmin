<!--▼▼ SHOP NEWS & EVENT ▼▼-->
<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
	<tbody>
		<tr>
			<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/ttl_newsandtopics.png" alt="NEWS &amp; EVENT" width="600" height="162" border="0" style="display:block;">
			</td>
		</tr>
		<!-- 記事 -->
		@foreach($newsletter_parts ->sortBy('id') as $np) 
		@if($np->newsletterPartsAdmin()->first()->type_id == 11)
		<tr>
			<td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;text-align:center;" valign="top">
				<a href="{{ $np->link_url }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/{{ $np->img_url }}" width="500" border="0" style="display:inline-block;">
				</a>
			</td>

		</tr>
		<!-- 記事 -->
		<tr>
			<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x24.gif" width="600" height="24" border="0" style="display:block;">
			</td>
		</tr>
		@endif

		@endforeach
	</tbody>
</table>
<!--▲▲ SHOP NEWS & EVENT ▲▲-->