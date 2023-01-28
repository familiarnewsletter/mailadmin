<!-- コンポーネント: PICK UP パターンA（商品数1） -->
    <!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="narrow-width-on-desktop-outlook" role="presentation" style="width:720px;" width="720" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
    <div class="narrow-width-on-desktop" style="margin:0px auto;max-width:720px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:0 30px 50px;text-align:center;">
              <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" width="720px" ><table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:660px;" width="660" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
              <div style="margin:0px auto;max-width:660px;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                  <tbody>
                    <tr>
                      <td style="direction:ltr;font-size:0px;padding:0 0 24px 0;text-align:center;">
                        <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:660px;" ><![endif]-->
                        <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                              <tr>
                                <td style="vertical-align:top;padding:0;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style width="100%">
                                    <tbody>
                                      <tr>
                                        <td align="left" style="font-size:0px;padding:0 0 14px 0;word-break:break-word;">
                                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                            <tbody>
                                              <tr>
                                                <td style="width:76px;">
                                                  <img alt="PICK UP" height="auto" src="https://cdn.shopify.com/s/files/1/0640/3611/0585/files/head_pickup.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="76">
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align="center" style="font-size:0px;padding:0;word-break:break-word;">
                                          <p style="border-top:solid 1px #e5e5e5;font-size:1px;margin:0px auto;width:100%;">
                                          </p>
                                          <!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 1px #e5e5e5;font-size:1px;margin:0px auto;width:660px;" role="presentation" width="660px" ><tr><td style="height:0;line-height:0;"> &nbsp;
</td></tr></table><![endif]-->
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

@foreach($newsletter_parts ->sortBy('id') as $np) 

@if($np->newsletterPartsAdmin()->first()->type_id == 4)

@php 

	foreach ($directorys as $directory) {
		if($directory->type_id === 4){
			$pickupitem1row_path = $directory->path;
		}
	}

@endphp

 <!--[if mso | IE]></td></tr></table></td></tr><tr><td class="" width="720px" ><table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:660px;" width="660" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
              <div style="margin:0px auto;max-width:660px;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                  <tbody>
                    <tr>
                      <td style="direction:ltr;font-size:0px;padding:0;text-align:center;">
                        <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="width:660px;" ><![endif]-->
                        <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0;line-height:0;text-align:left;display:inline-block;width:100%;direction:ltr;">
                          <!--[if mso | IE]><table border="0" cellpadding="0" cellspacing="0" role="presentation" ><tr><td style="vertical-align:middle;width:330px;" ><![endif]-->
                          <div class="mj-column-per-50 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:middle;width:50%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                              <tbody>
                                <tr>
                                  <td style="vertical-align:middle;padding:0 6px 0 0;">
                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style width="100%">
                                      <tbody>
                                        <tr>
                                          <td align="center" style="font-size:0px;padding:0;word-break:break-word;">
                                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                              <tbody>
                                                <tr>
                                                  <td style="width:324px;">
                                                  	<!-- 変数: 遷移先URL -->
                                                    <a href="{{ $np->link_url }}?utm_source=h_mail&utm_medium=email&utm_campaign={{ $newsletter->utm_campaign_id }}&utm_content={{ $np->utm_content_id }}" target="_blank">
                                                    	<!-- 変数: 商品画像URL -->
                                                      <img height="auto" src="{{ $pickupitem1row_path }}{{ $np->img_url }}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="324">
                                                    </a>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <!--[if mso | IE]></td><td style="vertical-align:middle;width:330px;" ><![endif]-->
                          <div class="mj-column-per-50 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:middle;width:50%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                              <tbody>
                                <tr>
                                  <td style="vertical-align:middle;padding:0 0 0 6px;">
                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style width="100%">
                                      <tbody>
                                        <tr>
                                          <td align="left" style="font-size:0px;padding:0 0 15px 0;word-break:break-word;">
                                            <div style="font-family:'ヒラギノ角ゴ Pro W3', Hiragino Kaku Gothic Pro, 'メイリオ', Meiryo, Osaka, 'ＭＳ Ｐゴシック', MS PGothic, sans-serif;font-size:14px;font-weight:600;line-height:21px;text-align:left;color:#555555;"><!-- 変数: 商品名 -->{{ $np->title }}</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="font-size:0px;padding:0 0 15px 0;word-break:break-word;">
                                            <div style="font-family:'ヒラギノ角ゴ Pro W3', Hiragino Kaku Gothic Pro, 'メイリオ', Meiryo, Osaka, 'ＭＳ Ｐゴシック', MS PGothic, sans-serif;font-size:10px;font-weight:300;line-height:16px;text-align:left;color:#555555;"><!-- 変数: 商品テキスト -->{{ $np->text }}</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="font-size:0px;padding:0;word-break:break-word;">
                                            <div style="font-family:'ヒラギノ角ゴ Pro W3', Hiragino Kaku Gothic Pro, 'メイリオ', Meiryo, Osaka, 'ＭＳ Ｐゴシック', MS PGothic, sans-serif;font-size:12px;font-weight:600;line-height:12px;text-align:left;color:#555555;"><!-- 変数: 商品金額テキスト --><span style="font-size: 10px; color: #808080;">税込 {{ $np->title }}</span></div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <!--[if mso | IE]></td></tr></table><![endif]-->
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table></td></tr></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--[if mso | IE]></td></tr></table><![endif]-->

			

@endif

@endforeach
			
		
@foreach($newsletter_link as $nl)
@if(isset($nl->type_id) && $nl->type_id == 4)






             

@endif
@endforeach


<!-- <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
	<tbody>
		<tr>
		<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
			<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_180x56.gif" width="180" height="56" border="0" style="display:block;">
		</td>
		<td style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
			

			
			<a href="{{ $nl->link_url }}?utm_source=h_mail&utm_medium=email&utm_campaign={{ $newsletter->utm_campaign_id }}&utm_content={{ $nl->utm_content_id }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
			
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


		<tr>
				<td style="margin:0;padding:0;vertical-align:top;font-size:0" valign="top">

					
					<a href="{{ $np->link_url }}?utm_source=h_mail&utm_medium=email&utm_campaign={{ $newsletter->utm_campaign_id }}&utm_content={{ $np->utm_content_id }}" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none" target="_blank">

					
					<img src="{{ $pickupitem1row_path }}{{ $np->img_url }}" width="250" height="175" border="0" style="display:block">
					
					</a>
				</td>

				<td style="margin:0;padding:0;vertical-align:top;font-size:0" valign="top">
					<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_32x32.gif" width="32" height="32" border="0" style="display:block">
				</td>


				<td style="margin:0;padding:0;vertical-align:middle;font-size:0" valign="middle">
				<div style="text-align:left">
					<p style="font-size:18px;color:#d98885;text-align:left;line-height:1.7;">
				
				{{ $np->title }}
				
			</p>
				</div>
				<div>
					<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_8x8.gif" width="8" height="8" border="0" style="display:block">
				</div>
				<div style="font-size:18px;color:#555555;text-align:left;line-height:1.7">

					
					{!! $np->text !!}
					
				</div>
				<div>
					<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_20x20.gif" width="20" height="20" border="0" style="display:block">
				</div>

				<div style="text-align:right">

					
					<a href="{{ $np->link_url }}" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none" target="_blank">
					
					<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/btn_176x40.png" width="176" height="40" border="0" style="display:block;margin-left:auto;">
					
					</a>
				</div>
				</td>
			</tr>
			<tr>
				<td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
					<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x24.gif" width="600" height="24" border="0" style="display:block;">
				</td>
			</tr>
		
	</tbody>
</table> -->