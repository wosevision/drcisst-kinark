<?php require_once( 'header.php' ); ?>

<cms:template title='Home'>

</cms:template>
    
    <!-- *** EDITABLE REGION DEFS FOR SLIDER IMAGES *** -->
    <cms:editable name='slider_1' label='Image 1' desc='Upload filesize limit 2MB' height='500' crop='1' type='image' show_preview='1' preview_width='150' />
    <cms:editable name='slider_2' label='Image 2' desc='Upload filesize limit 2MB' height='500' crop='1' type='image' show_preview='1' preview_width='150' />
     
    <!-- container -->
        <div class="container">
            <section class="row main-content">
                
                <article class="col-lg-9 col-md-8 col-sm-12 fixpad">
                    <div class="home-slider">
                        
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                			<!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="<cms:show slider_1 />" alt="..." width="100%">
                                    <div class="carousel-caption">
                                        <cms:editable name='slider_1_caption' label='Image 1 Caption'
                                            desc='Optional'
                                            toolbar='custom'
                                            custom_toolbar='bold, italic, underline |
                                            justifyleft, justifycenter, justifyright |
                                            numberedlist, bulletedlist |
                                            undo, redo |
                                            |
                                            cut, copy, paste, pastetext |
                                            link, unlink |
                                            source'
                                            type='richtext'>Meow</cms:editable>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="<cms:show slider_2 />" alt="..." width="100%">
                                    <div class="carousel-caption">
                                        <cms:editable name='slider_2_caption' label='Image 2 Caption'
                                            desc='Optional'
                                            toolbar='custom'
                                            custom_toolbar='bold, italic, underline |
                                            justifyleft, justifycenter, justifyright |
                                            numberedlist, bulletedlist |
                                            undo, redo |
                                            |
                                            cut, copy, paste, pastetext |
                                            link, unlink |
                                            source'
                                            type='richtext'>Meow Meow</cms:editable>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        
                        
                        
                        
                    </div>
                </article>
                
                
                
                <article class="col-lg-3 col-md-4 col-sm-12 fixpad">
                    <div class="right-nav">
                      
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <a href="#" class="right-navbtn donatebtn">Donate Now</a>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <a href="#" class="right-navbtn contactbtn">Emergency Contact</a>
                            </div>
                        </div>
                        
                        
                        <div class="right-dyk">
                            <h3>Did you know...</h3>
                            <p id="dykInfo"></p>
                        </div>
                    </div>
                </article>
            </section>

            <section class="row news-content">
                <article class="col-lg-3 col-md-4 col-sm-12 fixpad">
                    <div class="featvids">
                        <h3>Featured Videos</h3>
                        <cms:pages masterpage='video.php' limit='4' >
                            <iframe width="100%" height="200" src="<cms:show featvids />" frameborder="0" allowfullscreen></iframe>
                        </cms:pages>
                    </div>
                </article>

                <article class="col-lg-9 col-md-8 col-sm-12 fixpad">
                    <div class="news">
                        <h2>
                            News
                        </h2>
                    <cms:pages masterpage='article.php' limit='5' paginate='1'>
                        <h4>
                            <a href="<cms:show k_page_link />"><cms:show k_page_title /></a>
                        </h4>
                        <h5>by This Person on <cms:date k_page_date format='jS M, y'/></h5>
                        <cms:show article_content />
                    </cms:pages>
                    </div>
                </article>
            </section>
            
        </div>
    <!-- /container --> 
<?php require_once( 'footer.php' ); ?>