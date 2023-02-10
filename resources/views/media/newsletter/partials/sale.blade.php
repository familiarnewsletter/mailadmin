<!-- コンポーネント: セール -->
    <!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="narrow-width-on-desktop-outlook" role="presentation" style="width:720px;" width="720" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
    <div class="narrow-width-on-desktop" style="margin:0px auto;max-width:720px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:0 14px 60px;text-align:center;">
              <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:692px;" ><![endif]-->
              <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                  <tbody>
                    <tr>
                      <td style="vertical-align:top;padding:0;">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style width="100%">
                          <tbody>



@php
foreach($newsletter_parts ->sortBy('id') as $np){

	if($np->newsletterPartsAdmin()->first()->type_id == 11){
		$sales[] = $np;
	}

}
$i = 1;
@endphp

@if(isset($sales))
@foreach($sales as $sale)


	
@php	

	foreach ($directorys as $directory) {
		if($directory->type_id === 11){
			$sale_path = $directory->path;
		}
	}

	

if(strpos($sale->link_url, "?") != false){
	
		$utm_code = '&utm_source=h_mail&utm_medium=email&utm_campaign=$$$トラッキングコード$$$';

	        }else{

         $utm_code = '?utm_source=h_mail&utm_medium=email&utm_campaign=$$$トラッキングコード$$$';

      }

@endphp


                            <!-- セール画像1 -->
                            <tr>
                              <td align="center" style="font-size:0px;padding:0 0 10px 0;word-break:break-word;">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                  <tbody>
                                    <tr>
                                      <td style="width:692px;">
                                      	<!-- 変数: 遷移先URL -->
                                        <a href="[[[{{ $sale->link_url }}{{$utm_code}}&utm_content={{ $sale->utm_content_id }}]]]" target="_blank">
                                        	<!-- 変数: セール画像URL -->
                                          <img height="auto" src="{{ $sale_path }}{{ $sale->img_url }}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="692">
                                        </a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                           
                         

@endforeach
@endif	



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