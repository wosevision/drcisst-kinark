<?php require_once( 'header.php' ); ?>

<cms:template clonable='1' title='Videos' >
    <cms:editable 
     name='featvids' 
     label='YouTube Embed'
     desc='must contain a valid YouTube embed link'
     type='text' />
</cms:template>

<cms:if k_is_page >

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
			
			<?php include( 'resources-sidebar.php' ); ?>

            <article class="col-lg-9 col-md-8 col-sm-12 fixpad">
                <div class="news">
                    <h2>
                        <cms:show k_page_title />
                    </h2>
                    <iframe width="100%" height="500" src="<cms:show featvids />" frameborder="0" allowfullscreen></iframe>
                </div>
            </article>
        </section>
        
    </div>
        
    <!-- /container --> 

<cms:else />
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
            
            <?php include( 'resources-sidebar.php' ); ?>

            <article class="col-lg-9 col-md-8 col-sm-12 fixpad">
                <div class="news">
                    <h2>Videos</h2>
                    
                    <div class="row">
                    
						<cms:pages masterpage='video.php' >
					
							<div class="col-lg-6 vidBox">
								<h4>
									<a href="<cms:show k_page_link />"><cms:show k_page_title /></a>
								</h4>
								<iframe class="videoFrame" width="100%" height="250" src="<cms:show featvids />" frameborder="0" allowfullscreen></iframe>
							</div>
						
						</cms:pages>
						
					</div>
                </div>
            </article>
        </section>
        
    </div>
<!-- /container -->
</cms:if>
        
<?php require_once( 'footer.php' ); ?>