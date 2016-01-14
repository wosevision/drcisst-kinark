<?php require_once( 'header.php' ); ?>



<!-- container -->
    <div class="container">
    
        <section class="row">
            
            <article class="col-xs-12 fixpad">
                <div class="inside-img img-down">
                    <img src="img/paramed5.jpg" alt="DRCISST">
                </div>
            </article>
                 
        </section>

        <section class="row">
            
            <article class="col-lg-3 col-md-4 col-sm-12 fixpad side-nav">
                
                <cms:search_form processor="<cms:show k_site_link/>search.php" />
                
                <div class="sm-featured hidden-md hidden-lg" id="magny">
                    <i class="ham fa fa-search"></i>
                </div>
            </article>

            <article class="col-lg-9 col-md-8 col-sm-12 fixpad">
                <div class="news">
                    <h2>Search </h2>
                    
                    <div class="row">
                        
                        <cms:search limit='10'>
                            <cms:if k_paginated_top >
                                <div>
                                    <cms:if k_paginator_required >
                                        Page <cms:show k_current_page /> of <cms:show k_total_pages /><br>
                                    </cms:if>
                                    <cms:show k_total_records /> Pages Found -
                                    displaying: <cms:show k_record_from />-<cms:show k_record_to />
                                </div>
                            </cms:if>
							
							<div class="col-md-6">
                                <h4><a href="<cms:show k_page_link/>"><cms:show k_search_title /></a></h4>
                                <p><cms:show k_search_excerpt /></p>
                            </div>

                            <cms:paginator />

                        </cms:search>
						
					</div>
                </div>
            </article>
        </section>
        
    </div>
<!-- /container -->
        
<?php require_once( 'footer.php' ); ?>