<!-- コンポーネント: Style Book タイトル -->
    <!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="narrow-width-on-desktop-outlook" role="presentation" style="width:720px;" width="720" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
    <div class="narrow-width-on-desktop" style="margin:0px auto;max-width:720px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:0 30px 14px;text-align:center;">
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
                                      <td style="width:99px;">
                                        <img alt="Style Book" height="auto" src="https://cdn.shopify.com/s/files/1/0640/3611/0585/files/head_stylebook.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="99">
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
    <!--[if mso | IE]></td></tr></table><![endif]-->

   



@php
foreach($newsletter_parts ->sortBy('id') as $np){

	if($np->newsletterPartsAdmin()->first()->type_id == 8){
		$stylebooks[] = $np;
	}

}
$i = 1;
@endphp






 <!-- コンポーネント: Style Book 画像×3 -->
    <!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:720px;" width="720" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
    <div style="margin:0px auto;max-width:720px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
        	@if(isset($stylebooks))
@foreach($stylebooks as $stylebook)


	
@php	

		

	foreach ($directorys as $directory) {
		if($directory->type_id === 8){
			$stylebook3row_path = $directory->path;
		}
	}

	

  if(strpos($np->link_url, "?") != false){
      
      $utm_code = '&utm_source=h_mail&utm_medium=email&utm_campaign=$$$トラッキングコード$$$';

      }else{

        $utm_code = '?utm_source=h_mail&utm_medium=email&utm_campaign=$$$トラッキングコード$$$';

    }

@endphp
@if($i == 1)
          <tr>
            <td style="direction:ltr;font-size:0px;padding:0 14px 10px;text-align:center;">
              <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="width:692px;" ><![endif]-->
              <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0;line-height:0;text-align:left;display:inline-block;width:100%;direction:ltr;">
                <!--[if mso | IE]><table border="0" cellpadding="0" cellspacing="0" role="presentation" ><tr><td style="vertical-align:middle;width:228px;" ><![endif]-->





                <div class="mj-column-per-33 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:middle;width:33%;">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                  	

                    <tbody>
                    	
                      <tr>
                        <td style="vertical-align:middle;padding:0 5px 0 0;">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" style width="100%">
                            <tbody>
                            	
                              <tr>
                                <td align="center" style="font-size:0px;padding:0;word-break:break-word;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                    <tbody>
                                      <tr>
                                        <td style="width:223px;"><!-- 変数: 遷移先URL -->
                                          <a href="[[[{{ $stylebook->link_url }}?utm_source=h_mail&utm_medium=email&utm_campaign=$$$トラッキングコード$$$&utm_content={{ $stylebook->utm_content_id }}]]]" target="_blank">
                                          	<!-- 変数: 左カラム画像URL -->
                                            <img height="auto" src="{{ $stylebook3row_path }}{{ $stylebook->img_url }}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="223">
                                          </a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                              <tr>
                                <td style="font-size:0px;word-break:break-word;">
                                  <div style="height:10px;line-height:10px;">&#8202;</div>
                                </td>
                              </tr>
                              @endif
                              @if($i == 2)
                              <tr>
                                <td align="center" style="font-size:0px;padding:0;word-break:break-word;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                    <tbody>
                                      <tr>
                                        <td style="width:223px;">
                                          <a href="[[[{{ $stylebook->link_url }}?utm_source=h_mail&utm_medium=email&utm_campaign=$$$トラッキングコード$$$&utm_content={{ $stylebook->utm_content_id }}]]]" target="_blank">
                                          
                                            <img height="auto" src="{{ $stylebook3row_path }}{{ $stylebook->img_url }}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="223">
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
                @endif
                <!--[if mso | IE]></td><td style="vertical-align:middle;width:463px;" ><![endif]-->

                	@if($i == 3)
                <div class="mj-column-per-67 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:middle;width:67%;">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                    <tbody>
                      <tr>
                        <td style="vertical-align:middle;padding:0 0 0 5px;">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" style width="100%">
                            <tbody>
                              <tr>
                                <td align="center" style="font-size:0px;padding:0;word-break:break-word;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                    <tbody>
                                      <tr>
                                        <td style="width:458px;">
                                          <a href="[[[{{ $stylebook->link_url }}?utm_source=h_mail&utm_medium=email&utm_campaign=$$$トラッキングコード$$$&utm_content={{ $stylebook->utm_content_id }}]]]" target="_blank">
                                          	
                                            <img height="auto" src="{{ $stylebook3row_path }}{{ $stylebook->img_url }}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="458">
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
               
               
              </div>
              <!--[if mso | IE]></td></tr></table><![endif]-->

            </td>
          </tr>
          @endif
           @php	
				$i++;
			@endphp

			@endforeach
        </tbody>
      </table>
    </div>

    @endif
    <!--[if mso | IE]></td></tr></table><![endif]-->




@foreach($newsletter_link as $nl)
@if(isset($nl->type_id) && $nl->type_id == 8)



@endif
@endforeach

<!-- コンポーネント: Style Book ボタン -->
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
                                        <a href="[[[https://familiar.co.jp/collections/style-book?utm_source=h_mail&utm_medium=email&utm_campaign=$$$トラッキングコード$$$&utm_content=morestyles]]]" style="display:inline-block;background:#d7d7d7;color:#555555;font-family:'ヒラギノ角ゴ Pro W3', Hiragino Kaku Gothic Pro, 'メイリオ', Meiryo, Osaka, 'ＭＳ Ｐゴシック', MS PGothic, sans-serif;font-size:12px;font-weight:600;line-height:12px;margin:0;text-decoration:none;text-transform:none;padding:0;mso-padding-alt:0px;border-radius:3px;" target="_blank"> もっと見る&nbsp;&nbsp;&nbsp;<img width="6" height="10" style="width: 6px !important; height: 10px !important;" src="https://cdn.shopify.com/s/files/1/0640/3611/0585/files/icon_arrow-right.png">
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


