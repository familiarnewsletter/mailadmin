<!--▼▼ PICKUP ITEM ▼▼-->

<!-- コンポーネント: PICK UP パターンB（商品数2） -->
    <!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="narrow-width-on-desktop-outlook" role="presentation" style="width:720px;" width="720" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
    <div class="narrow-width-on-desktop" style="margin:0px auto;max-width:720px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:0 30px 70px;text-align:center;">
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


        @foreach($newsletter_link as $nl)
			  @if(isset($nl->type_id) && $nl->type_id == 5 && $nl->link_type == "テキスト入力")
        <div style="margin:0px auto;max-width:660px;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                  <tbody>
                    <tr>
                      <td style="direction:ltr;font-size:0px;padding:0 0 20px 0;text-align:center;">
                        <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:660px;" ><![endif]-->
                        <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                              <tr>
                                <td style="vertical-align:top;padding:0;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style width="100%">
                                    <tbody>
                                      <tr>
                                        <td align="left" style="font-size:0px;padding:0;word-break:break-word;">
                                          <div style="font-family:'ヒラギノ角ゴ Pro W3', Hiragino Kaku Gothic Pro, 'メイリオ', Meiryo, Osaka, 'ＭＳ Ｐゴシック', MS PGothic, sans-serif;font-size:14px;font-weight:300;line-height:28px;text-align:left;color:#555555;"><!-- 変数: 商品テキスト -->{{ $nl->link_url }}</div>
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

              <!--[if mso | IE]></td></tr></table></td></tr><tr><td class="" width="720px" ><table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:660px;" width="660" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
              <div style="margin:0px auto;max-width:660px;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                  <tbody>
                    <tr>
                      <td style="direction:ltr;font-size:0px;padding:0 0 20px 0;text-align:center;">
                        <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:660px;" ><![endif]-->
                        <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                              <tr>
                                <td style="vertical-align:top;padding:0;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style width="100%">
                                    <tbody>
                                      <tr>
                                        <td align="left" style="font-size:0px;padding:0;word-break:break-word;">
                                          <div style="font-family:'ヒラギノ角ゴ Pro W3', Hiragino Kaku Gothic Pro, 'メイリオ', Meiryo, Osaka, 'ＭＳ Ｐゴシック', MS PGothic, sans-serif;font-size:14px;font-weight:300;line-height:28px;text-align:left;color:#555555;"><!-- 変数: 商品テキスト -->{{ $nl->link_url }}</div>
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
              @endif
			  @endforeach




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
			

				foreach ($directorys as $directory) {
					if($directory->type_id === 5){
						$pickupitem2row_path = $directory->path;
					}
				}


  			if(strpos($pickup_item->link_url, "?") != false){
      
          $utm_code = '&utm_source=h_mail&utm_medium=email&utm_campaign=$$$トラッキングコード$$$';

          }else{

            $utm_code = '?utm_source=h_mail&utm_medium=email&utm_campaign=$$$トラッキングコード$$$';

        }


			@endphp	


			
			

			@if( $i % 2 != 0)

              
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
                                          <td align="center" style="font-size:0px;padding:0 0 10px 0;word-break:break-word;">
                                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                              <tbody>
                                                <tr>
                                                  <td style="width:324px;"><!-- 変数: 遷移先URL -->
                                                    <a href="[[[{{ $pickup_item->link_url }}{{ $utm_code }}&utm_content={{ $pickup_item->utm_content_id }}]]]" target="_blank">
                                                    	<!-- 変数: 商品画像URL -->
                                                      <img height="auto" src="{{ $pickupitem2row_path }}{{ $pickup_item->img_url }}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="324">
                                                    </a>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="font-size:0px;padding:0 0 10px 0;word-break:break-word;">
                                            <div style="font-family:'ヒラギノ角ゴ Pro W3', Hiragino Kaku Gothic Pro, 'メイリオ', Meiryo, Osaka, 'ＭＳ Ｐゴシック', MS PGothic, sans-serif;font-size:14px;font-weight:600;line-height:21px;text-align:left;color:#555555;"><!-- 変数: 商品名 -->{!! $pickup_item->title !!}</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="font-size:0px;padding:0;word-break:break-word;">
                                            <div style="font-family:'ヒラギノ角ゴ Pro W3', Hiragino Kaku Gothic Pro, 'メイリオ', Meiryo, Osaka, 'ＭＳ Ｐゴシック', MS PGothic, sans-serif;font-size:12px;font-weight:600;line-height:12px;text-align:left;color:#555555;"><!-- 変数: 商品金額テキスト --> <span style="font-size: 10px; color: #808080;">{!! $pickup_item->text !!}　税込</span></div>
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



                        @elseif( $i % 2 == 0)	
						

                          <div class="mj-column-per-50 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:middle;width:50%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                              <tbody>
                                <tr>
                                  <td style="vertical-align:middle;padding:0 0 0 6px;">
                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style width="100%">
                                      <tbody>
                                        <tr>
                                          <td align="center" style="font-size:0px;padding:0 0 10px 0;word-break:break-word;">
                                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                              <tbody>
                                                <tr>
                                                  <td style="width:324px;"><!-- 変数: 遷移先URL -->
                                                    <a href="[[[{{ $pickup_item->link_url }}{{ $utm_code }}{{ $newsletter->utm_campaign_id }}&utm_content={{ $pickup_item->utm_content_id }}]]]" target="_blank">
                                                    	<!-- 変数: 商品画像URL -->
                                                      <img height="auto" src="{{ $pickupitem2row_path }}{{ $pickup_item->img_url }}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="324">
                                                    </a>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="font-size:0px;padding:0 0 10px 0;word-break:break-word;">
                                            <div style="font-family:'ヒラギノ角ゴ Pro W3', Hiragino Kaku Gothic Pro, 'メイリオ', Meiryo, Osaka, 'ＭＳ Ｐゴシック', MS PGothic, sans-serif;font-size:14px;font-weight:600;line-height:21px;text-align:left;color:#555555;"><!-- 変数: 商品名 -->{!! $pickup_item->title !!}</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="font-size:0px;padding:0;word-break:break-word;">
                                            <div style="font-family:'ヒラギノ角ゴ Pro W3', Hiragino Kaku Gothic Pro, 'メイリオ', Meiryo, Osaka, 'ＭＳ Ｐゴシック', MS PGothic, sans-serif;font-size:12px;font-weight:600;line-height:12px;text-align:left;color:#555555;"><!-- 変数: 商品金額テキスト --> <span style="font-size: 10px; color: #808080;">{!! $pickup_item->text !!}　税込</span></div>
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
                       
              @endif

			@php			
			$i++;
			@endphp


@endforeach
@endif

 
<!-- コンポーネント: スペース -->
    <!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:720px;" width="720" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
    <div style="margin:0px auto;max-width:720px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>
    </div>


@foreach($newsletter_link as $nl)
@if(isset($nl->type_id) && $nl->type_id == 5 && $nl->link_type != "テキスト入力")
<!-- コンポーネント: PICKUP ボタン -->
    <!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:720px;" width="720" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
    <div style="margin:0px auto;max-width:720px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:0 14px 70px;text-align:center;">
              <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:692px;" ><![endif]-->
              <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                  <tbody>
                    <tr>
                      <td style="vertical-align:top;padding:0;">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style width="100%">
                          <tbody>
                            <tr>
                              <td align="center" vertical-align="middle" style="font-size:0px;padding:0;word-break:break-word;">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;width:100%;line-height:100%;">
                                  <tbody>
                                    <tr>
                                      <td align="center" bgcolor="#d7d7d7" role="presentation" style="border:none;border-radius:3px;cursor:auto;height:50px;mso-padding-alt:0;background:#d7d7d7;" valign="middle" height="50px">
                                        <a href="[[[{{ $nl->link_url }}{{ $utm_code }}&utm_content={{ $nl->utm_content_id }}]]]" style="display:inline-block;background:#d7d7d7;color:#555555;font-family:'ヒラギノ角ゴ Pro W3', Hiragino Kaku Gothic Pro, 'メイリオ', Meiryo, Osaka, 'ＭＳ Ｐゴシック', MS PGothic, sans-serif;font-size:12px;font-weight:600;line-height:12px;margin:0;text-decoration:none;text-transform:none;padding:0;mso-padding-alt:0px;border-radius:3px;" target="_blank"> もっと見る&nbsp;&nbsp;&nbsp;<img width="6" height="10" style="width: 6px !important; height: 10px !important;" src="https://cdn.shopify.com/s/files/1/0640/3611/0585/files/icon_arrow-right.png">
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
              <!--[if mso | IE]></td></tr></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>
    </div>
@endif
@endforeach

 