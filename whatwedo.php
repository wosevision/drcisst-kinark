<?php require_once( 'header.php' ); ?>

<cms:template clonable='1' title='What We Do' >

    <cms:editable name='header_image' label='Header Image' desc='Upload filesize limit 10MB' crop='1' type='image' show_preview='1' preview_width='150' />

    <cms:editable name='whatwedo_article' label='Article'
                                            desc='Enter contents of article'
                                            toolbar='custom'
                                            custom_toolbar='bold, italic, underline |
                                            justifyleft, justifycenter, justifyright |
                                            numberedlist, bulletedlist |
                                            undo, redo |
                                            |
                                            cut, copy, paste, pastetext |
                                            link, unlink |
                                            source, blockquote'
                                            type='richtext' />
     
</cms:template>

<cms:if k_is_page >
 
    <!-- container -->
        <div class="container">

            <section class="row">
                
                <article class="col-xs-12 fixpad">
                    <div class="inside-img">
                    	<img src="<cms:show header_image />" alt="What We Do" />
                    </div>
                </article>
                     
            </section>

            <section class="row">
                
                <article class="col-lg-3 col-md-4 col-sm-12 fixpad side-nav">
                    <div class="featured">
                        <h3>What We Do</h3>
					        <cms:pages masterpage='whatwedo.php' order='asc'>
						        <a href="<cms:show k_page_link />"><cms:show k_page_title /></a><br>
					        </cms:pages >
                    </div>
    
					<div class="sm-featured hidden-md hidden-lg" id="hammy">
						<i class="ham fa fa-bars"></i>
					</div>
                </article>

                <article class="col-lg-9 col-md-8 col-sm-12 fixpad">
                    <div class="news">
                        <h2>
                            What We Do
                        </h2>
                        <cms:show whatwedo_article />
                    </div>
                </article>
                
            </section>
            
        </div>
    <!-- /container --> 
</cms:if>

<?php require_once( 'footer.php' ); ?>