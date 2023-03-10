

@include('media.newsletter.partials.styles')        
        

        <!-- HEADER to NAV -->
        @include('media.newsletter.partials.headertonav')
        <!-- /HEADER to NAV -->


        <!--▼▼ 配置図により可変 ▼▼-->
        @foreach($newsletter_parts_admin ->sortBy('order_id') as $newsletter_parts_ad)   


                    @if(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 1)
                    
                    <!--▼▼ MAIN ▼▼-->
                    @include('media.newsletter.partials.main')
                    <!--▲▲ MAIN ▲▲-->


                    @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 2)
                        
                        <!--▼▼ SHOP NEWS & EVENT ▼▼-->
                        @include('media.newsletter.partials.newsandevent')   
                        <!--▲▲ SHOP NEWS & EVENT ▲▲-->

                    @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 3)
                        
                        <!--▼▼  NEWS & TOPICS ▼▼-->
                        @include('media.newsletter.partials.newsandtopics')
                        <!--▲▲ NEWS & TOPICS ▲▲-->


                @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 4)

                        <!--▼▼ PICKUP ITEM 1row ▼▼-->
                        @include('media.newsletter.partials.pickupitem1')
                        <!--▲▲ PICKUP ITEM 1row ▲▲-->


                    @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 5)

                        <!--▼▼ PICKUP ITEM 2row ▼▼-->
                        @include('media.newsletter.partials.pickupitem')
                        <!--▲▲ PICKUP ITEM 2row ▲▲-->


                    @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 6)

                        <!--▼▼ SHOP BLOG ▼▼-->
                        @include('media.newsletter.partials.shopblog')
                        <!--▲▲ SHOP BLOG ▲▲-->

                    @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 7)

                        <!--▼▼ STYLE BOOK 1row ▼▼-->
                        @include('media.newsletter.partials.stylebook1')
                        <!--▲▲ STYLE BOOK 1row ▲▲-->


                    @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 8)

                        <!--▼▼ STYLE BOOK 3row ▼▼-->
                        @include('media.newsletter.partials.stylebook')
                        <!--▲▲ STYLE BOOK 3row ▲▲-->

                    @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 9)

                  <!--▼▼ SIZE ▼▼-->
                  @include('media.newsletter.partials.size')
                  <!--▲▲ SIZE ▲▲-->


                  @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 10)

                      <!--▼▼ BANNER ▼▼-->
                      @include('media.newsletter.partials.banner')
                      <!--▲▲ BANNER ▲▲-->

                  @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 11)
                      
                      <!--▼▼  SALE ▼▼-->
                      @include('media.newsletter.partials.sale')
                      <!--▲▲ SALE ▲▲-->


                  @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 12)

                      <!--▼▼ CATEGORY ▼▼-->
                      @include('media.newsletter.partials.category')
                      <!--▲▲ CATEGORY ▲▲-->


                  @elseif(isset($newsletter_parts_ad->type_id) && $newsletter_parts_ad->type_id == 13)

                      <!--▼▼ CATEGORY1 ▼▼-->
                      @include('media.newsletter.partials.category1')

                @endif

                @endforeach
                <!--▲▲ 配置図により可変 ▲▲-->

               
        
        @include('media.newsletter.partials.footertocopylight')
        <!--▲▲ COPYRIGHT ▲▲-->
        
