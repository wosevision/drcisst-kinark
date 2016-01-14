<?php require_once( 'header.php' ); ?>
 
    <!-- container -->
        <div class="container">

            <section class="row">
				<article class="col-lg-3 col-md-4 col-sm-12 fixpad">
					<h3>Latest Posts</h3>
					<ul>
						<cms:pages masterpage='article.php' limit='6' >
					        <li><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></li>
						</cms:pages >
					</ul>
				</article>

                <article class="col-lg-9 col-md-8 col-sm-12 fixpad">
                    <div class="news">
						<h2>News </h2>
						<cms:pages masterpage='article.php' >
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
        <footer>
            
            <div class="row">
                <div class="col-lg-2 col-md-offset-2 col-md-4 col-sm-12">
                    <h3>Links</h3>
                    <a href="#">What We Do</a><br>
                    <a href="#">Resources</a><br>
                    <a href="#">Contact</a><br>
                    <a href="#">Members</a><br>
                    <a href="#">Donate</a><br>
                </div>
                
                <div class="col-lg-2 col-md-4 col-sm-12">
                    <h3>Contact</h3>
                    <a href="mailto:admin@drcisst.org">admin@drcisst.org</a><br><br>
                    <i class="fa fa-facebook-square fa-lg"></i>
                    <a href="https://www.facebook.com/drcisst" target="new">Facebook</a><br>
                    <i class="fa fa-twitter-square fa-lg"></i>
                    <a href="https://twitter.com/drcisst" target="new">Twitter</a><br>
                    <i class="fa fa-youtube-square fa-lg"></i>
                    <a href="https://www.youtube.com" target="new">Youtube</a><br><br>
                    <p>24 HR Emergency Contact Number 
                        <br><a href="tel:9055768711">905-576-8711 ext. 3200</a></p>
                </div>
                
                <div class="col-lg-2 col-lg-offset-0 col-md-offset-2 col-md-4 col-sm-12">
                    <h3>Member Login</h3>
                    <input type="text" value="Username" />
                    <input type="password" value="Password" />
                    <a href="#">Become a member</a>
                </div>
                
                <div class="col-lg-2 col-md-4 col-sm-12">
                    <p>Registered charity No. 839972924RR0001</p>
                </div>
            </div>

        </footer>
           
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/velocity.min.js"></script>
        <script src="js/velocity.ui.js"></script>
        
        <script src="js/fact.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
<?php COUCH::invoke(); ?>