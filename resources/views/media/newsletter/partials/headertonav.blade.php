<!-- HEADER -->
  <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="ffffff">
	<tbody>
		<tr>
			<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x16.gif" width="600" height="16" border="0" style="display:block;">
			</td>
		</tr>
		@foreach($newsletter_link as $nl)
		@if(isset($nl) && $nl->type_id == 0)

		<tr>
			<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
			<p style="font-size:14px;color:#555555;text-align:center;">正しく表示されない方は
				<!--▼▼ リンク ▼▼-->
				<a href="{{ $nl->link_url }}" target="_blank">
					こちらをクリック
				</a>
				<!--▲▲ リンク ▲▲-->
			してください</p>
			</td>
		</tr>
		@endif
		@endforeach
		<tr>
			<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x30.gif" width="600" height="30" border="0" style="display:block;">
			</td>
		</tr>
		
		<tr>
			<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_190x45.gif" width="190" height="45" border="0" style="display:block;"></td>
				<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
					<a href="https://www.familiar.co.jp?utm_source=h_mail&amp;utm_medium=email&amp;utm_campaign=20xxxx&amp;utm_content=header" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
						<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/logo.png" width="220" height="45" border="0" style="display:block;">
					</a>
				</td>
			<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_190x45.gif" width="190" height="45" border="0" style="display:block;">
			</td>
		</tr>
		<tr>
			<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
				<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x30.gif" width="600" height="30" border="0" style="display:block;">
			</td>
		</tr>
		</tbody>
	</table>
	<!-- /HEADER -->


	<!-- NAV -->
	<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="ffffff">
		<tbody>
			<tr>
				<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
					<a href="https://www.familiar.co.jp?utm_source=h_mail&amp;utm_medium=email&amp;utm_campaign=20xxxx&amp;utm_content=header" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
						<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/nav_home.png" width="200" height="22" border="0" style="display:block;">
					</a>
				</td>
				<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
					<a href="https://www.ec.familiar.co.jp?utm_source=h_mail&amp;utm_medium=email&amp;utm_campaign=20xxxx&amp;utm_content=header" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
						<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/nav_onlineshop.png" width="200" height="22" border="0" style="display:block;">
					</a>
				</td>
				<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
					<a href="https://www.ec.familiar.co.jp/shop/index.php?utm_source=h_mail&amp;utm_medium=email&amp;utm_campaign=20xxxx&amp;utm_content=header" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
						<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/nav_shopinfo.png" width="200" height="22" border="0" style="display:block;">
					</a>
				</td>
			</tr>
			<tr>
				<td colspan="3" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
					<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x20.gif" width="600" height="20" border="0" style="display:block;">
				</td>
			</tr>
		</tbody>
	</table>
<!-- /NAV -->