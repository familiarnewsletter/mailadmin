    <!-- コンポーネント: カテゴリ パターンD（カテゴリ数6、2×3） -->
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
                      <td style="direction:ltr;font-size:0px;padding:0 0 24px;text-align:center;">
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
                                                <td style="width:88px;">
                                                  <img alt="Category" height="auto" src="https://cdn.shopify.com/s/files/1/0640/3611/0585/files/head_category.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="88">
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




		@php
		foreach($newsletter_parts ->sortBy('id') as $nlp){

			if($nlp->newsletterPartsAdmin()->first()->type_id == 12){
				$categories[] = $nlp;
			}

		}
		$i = 1;
		@endphp

		@if(isset($categories))
		@foreach($categories as $category)
		
			
		@php	
		
			   
		

			foreach ($directorys as $directory) {
				if($directory->type_id === 12){
					$category_path = $directory->path;
				}
			}


		

		if(strpos($category->link_url, "?") != false){
		  
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
                      <td style="direction:ltr;font-size:0px;padding:0 0 10px 0;text-align:center;">
                        <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="width:660px;" ><![endif]-->
                        <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0;line-height:0;text-align:left;display:inline-block;width:100%;direction:ltr;">
                          <!--[if mso | IE]><table border="0" cellpadding="0" cellspacing="0" role="presentation" ><tr><td style="vertical-align:top;width:330px;" ><![endif]-->
                          <div class="mj-column-per-50 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:50%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                              <tbody>
                                <tr>
                                  <td style="vertical-align:top;padding:0;">
                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style width="100%">
                                      <tbody>
                                        <tr>
                                          <td align="center" style="font-size:0px;padding:0 5px 0 0;word-break:break-word;">
                                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                              <tbody>
                                                <tr>
                                                  <td style="width:325px;"><!-- 変数: 遷移先URL -->
                                                    <a href="[[[{{ $category->link_url }}?utm_source=h_mail&utm_medium=email&utm_campaign=$$$トラッキングコード$$$&utm_content={{ $category->utm_content_id }}]]]" target="_blank">
                                                    	<!-- 変数: カテゴリ画像URL -->
                                                      <img height="auto" src="{{ $category_path }}{{ $category->img_url }}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="325">
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


                           @elseif( $i % 2 == 0)


                          <!--[if mso | IE]></td><td style="vertical-align:top;width:330px;" ><![endif]-->
                          <div class="mj-column-per-50 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:50%;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                              <tbody>
                                <tr>
                                  <td style="vertical-align:top;padding:0;">
                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style width="100%">
                                      <tbody>
                                        <tr>
                                          <td align="center" style="font-size:0px;padding:0 0 0 5px;word-break:break-word;">
                                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                              <tbody>
                                                <tr>
                                                  <td style="width:325px;"><!-- 変数: 遷移先URL -->
                                                    <a href="[[[{{ $category->link_url }}?utm_source=h_mail&utm_medium=email&utm_campaign=$$$トラッキングコード$$$&utm_content={{ $category->utm_content_id }}]]]" target="_blank">
                                                    	<!-- 変数: カテゴリ画像URL -->
                                                      <img height="auto" src="{{ $category_path }}{{ $category->img_url }}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="325">
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
                  </tbody>
                </table>
              </div>
              
              <!--[if mso | IE]></td></tr></table></td></tr></table><![endif]-->
            @endif

			@php	

			$i++;
			@endphp


			@endforeach
			@endif


			</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--[if mso | IE]></td></tr></table><![endif]-->

