

<!-- コンポーネント: バナー -->
    <!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:720px;" width="720" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
    <div style="margin:0px auto;max-width:720px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:0 14px 60px;text-align:center;">
              <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" width="720px" ><table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:692px;" width="692" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
              <div style="margin:0px auto;max-width:692px;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                  <tbody>
                    <tr>
                      <td style="direction:ltr;font-size:0px;padding:0;text-align:center;">
                        <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:692px;" ><![endif]-->
                        <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                              <tr>
                                <td style="vertical-align:top;padding:0;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style width="100%">
                                    <tbody>



@php
foreach($newsletter_parts ->sortBy('id') as $nlp){

if($nlp->newsletterPartsAdmin()->first()->type_id == 10){
	$banners[] = $nlp;
}

}

@endphp

@if(isset($banners))
@foreach($banners as $banner)



@php	


foreach ($directorys as $directory) {
	if($directory->type_id === 10){
		$banner_path = $directory->path;
	}
}

if(strpos($banner->link_url, "?") != false){
      
        $utm_code = '&utm_source=h_mail&utm_medium=email&utm_campaign=$$$トラッキングコード$$$';

        }else{

          $utm_code = '?utm_source=h_mail&utm_medium=email&utm_campaign=$$$トラッキングコード$$$';

      }

@endphp




<!-- バナー画像1 -->
                                      <tr>
                                        <td align="center" style="font-size:0px;padding:0 0 10px 0;word-break:break-word;">
                                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                            <tbody>
                                              <tr>
                                                <td style="width:692px;">
                                                	<!-- 変数: 遷移先URL -->
                                                  <a href="[[[{{ $banner->link_url }}{{$utm_code}}&utm_content={{ $banner->utm_content_id }}]]]" target="_blank">
                                                  	<!-- 変数: バナー画像URL -->
                                                    <img height="auto" src="{{ $banner_path }}{{ $banner->img_url }}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="692">
                                                  </a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                      <!-- バナー画像2 -->
                                      <!-- <tr>
                                        <td align="center" style="font-size:0px;padding:0 0 10px 0;word-break:break-word;">
                                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                            <tbody>
                                              <tr>
                                                <td style="width:692px;">
                                                  <a href="" target="_blank">
                                                    <img height="auto" src="" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="692">
                                                  </a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr> -->




@endforeach
@endif




<!--▲▲ BANNER ▲▲-->





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
              <!--[if mso | IE]></td></tr></table></td></tr></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--[if mso | IE]></td></tr></table><![endif]-->