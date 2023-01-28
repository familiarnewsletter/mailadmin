@foreach($newsletter_parts as $np) 
@if($np->newsletterPartsAdmin()->first()->type_id == 1)
@php 

	foreach ($directorys as $directory) {
		if($directory->type_id === 1){
			$top_path = $directory->path;
		}
	}

	if(strpos($np->link_url, "?") != false){
	  
	  $utm_code = "&utm_source=h_mail&utm_medium=email&utm_campaign=";

		}else{

			$utm_code = "?utm_source=h_mail&utm_medium=email&utm_campaign=";

		}

	if($np->link_url)
		$original_url = $np->link_url;
		if (strpos($original_url, '#') !== false) {
			//含まれている場合
			$url = strstr($original_url, "#" , true);
			$anchor_id = strstr($original_url, "#");
		}
		 
		if (strpos($original_url, '#') === false) {
		    //含まれていない場合
		    $url = $original_url;
		    $anchor_id = "/";
		}
		
		

@endphp

<!--▼▼ MAIN ▼▼-->

<!-- <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="f6f4f2">

<tbody><tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x40.gif" width="600" height="40" border="0" style="display:block;"></td></tr>

<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;text-align:center;" valign="top">

<a href="{{ $url }}{{ $utm_code }}{{ $newsletter->utm_campaign_id }}&utm_content={{ $np->utm_content_id }}{{ $anchor_id }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">

<img src="{{$top_path}}{{ $np->img_url }}" width="500" border="0" style="display:block;margin:0 auto;"></a></td>

</tr>

<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x36.gif" width="600" height="36" border="0" style="display:block;"></td></tr>

<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">

<p style="font-size:30px;font-weight:bold;color:#827c72;text-align:center;line-height:1.7;">
@php
	$str = strip_tags($np->title, '<br><strong>');
@endphp
{!! $str !!}
</p>

</td></tr>

<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x20.gif" width="600" height="20" border="0" style="display:block;"></td></tr>

<tr>

<td colspan="1" width="20" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_24x24.gif" width="24" height="24" border="0" style="display:block;"></td>

<td colspan="3" width="560" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><p style="font-size:16px;color:#555555;text-align:left;line-height:1.7;">

{!! $np->text !!}

</p></td>

<td colspan="1" width="20" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_24x24.gif" width="24" height="24" border="0" style="display:block;"></td>

</tr>

<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x20.gif" width="600" height="20" border="0" style="display:block;"></td></tr>

<tr>

<td colspan="2" width="108" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_108x64.gif" width="108" height="64" border="0" style="display:block;"></td>

<td colspan="1" width="384" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top">
<a href="{{ $url}}{{ $utm_code }}{{ $newsletter->utm_campaign_id }}&utm_content={{ $np->utm_content_id }}{{ $anchor_id }}" target="_blank" style="margin:0;padding:0;vertical-align:top;font-size:0;text-decoration:none;">
<img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/btn_384x64.png" width="384" height="64" border="0" style="display:block;">
</a>
</td>

<td colspan="2" width="108" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_108x64.gif" width="108" height="64" border="0" style="display:block;"></td>

</tr>

<tr><td colspan="5" style="margin:0;padding:0;vertical-align:top;font-size:0;" valign="top"><img src="https://www.ec.familiar.co.jp/user_data/packages/mail/content/2020/spacer_600x40.gif" width="600" height="40" border="0" style="display:block;"></td></tr>

</tbody></table> -->


<!-- コンポーネント: メインビジュアル パターンA（画像/テキスト/ボタン） -->
    <!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="mv-outlook" role="presentation" style="width:720px;" width="720" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
    <div class="mv" style="margin:0px auto;max-width:720px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:0 14px 70px;text-align:center;">
              <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:692px;" ><![endif]-->
              <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color:#f5f5f5;vertical-align:top;" width="100%">
                  <tbody>
                    <tr>
                      <td align="center" style="font-size:0px;padding:0;word-break:break-word;">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                          <tbody>
                            <tr>
                              <td style="width:692px;">
                              	<!-- 変数: 画像URL -->
                                <img height="auto" src="{{$top_path}}{{ $np->img_url }}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="692">
                                <!-- 変数: 画像URL -->
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="center" style="font-size:0px;padding:30px 16px 20px;word-break:break-word;">
                        <div style="font-family:'ヒラギノ角ゴ Pro W3', Hiragino Kaku Gothic Pro, 'メイリオ', Meiryo, Osaka, 'ＭＳ Ｐゴシック', MS PGothic, sans-serif;font-size:22px;font-weight:600;line-height:30.8px;text-align:center;color:#555555;"><!-- 変数: タイトル -->{!! $np->title !!}</div>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="font-size:0px;padding:0 16px 20px;word-break:break-word;">
                        <div style="font-family:'ヒラギノ角ゴ Pro W3', Hiragino Kaku Gothic Pro, 'メイリオ', Meiryo, Osaka, 'ＭＳ Ｐゴシック', MS PGothic, sans-serif;font-size:14px;font-weight:300;line-height:28px;text-align:left;color:#555555;"><!-- 変数: テキスト -->{!! $np->text !!}
                    <tr>
                      <td align="center" vertical-align="middle" style="font-size:0px;padding:0 16px 20px;word-break:break-word;">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;width:100%;line-height:100%;">
                          <tbody>
                            <tr>
                              <td align="center" bgcolor="#518FCC" role="presentation" style="border:none;border-radius:3px;cursor:auto;height:50px;mso-padding-alt:0;background:#518FCC;" valign="middle" height="50px"><!-- 変数: 遷移先URL -->
                                <a href="{{ $url}}{{ $utm_code }}{{ $newsletter->utm_campaign_id }}&utm_content={{ $np->utm_content_id }}{{ $anchor_id }}" style="display:inline-block;background:#518FCC;color:#ffffff;font-family:'ヒラギノ角ゴ Pro W3', Hiragino Kaku Gothic Pro, 'メイリオ', Meiryo, Osaka, 'ＭＳ Ｐゴシック', MS PGothic, sans-serif;font-size:14px;font-weight:600;line-height:14px;margin:0;text-decoration:none;text-transform:none;padding:0;mso-padding-alt:0px;border-radius:3px;" target="_blank"> くわしくはこちら </a>
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

@endif
@endforeach

<!--▲▲ MAIN ▲▲-->
