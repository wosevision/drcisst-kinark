$(document).ready(function(){

    var scrolledPast = false ;

    var navExpanded = false;
    
    $(".topnav-buttons").hide();
    
	// Cache the window object
	$window = $(window);
	
	$(window).scroll(function() {
	
        if ( $(document).scrollTop() > 200 && scrolledPast == false ) {
        
            $("#navbar").addClass("navbar-scrolled");
        
            $("#logo-bg").velocity({ 
                            opacity: 0 });
                        
            $("#logo-cross").velocity({ 
                            opacity: 0 });
                        
            $("#logo-text-btm").velocity({ 
                            opacity: 0 });
                        
            $("#logo-text-top").velocity({ 
                            opacity: 0 });
                            
            
            $(".topnav-buttons").velocity("transition.perspectiveRightIn", { delay: 350 });
        
            $("#logo-whole").velocity(
                            { 
                            scale: 0.75,
                            translateY: -112 }, 
                            {
                            duration: 200,
                            easing: "ease-in-out",
                            delay: 200
                            });
            scrolledPast = true;
                            
        } else if ( $(document).scrollTop() < 200 && scrolledPast == true) {
            
            $("#navbar").removeClass("navbar-scrolled");
        
            $("#logo-bg").velocity({ 
                            opacity: 1 });
                        
            $("#logo-cross").velocity({ 
                            opacity: 1 });
                        
            $("#logo-text-btm").velocity({ 
                            opacity: 1 });
                        
            $("#logo-text-top").velocity({ 
                            opacity: 1 });
                            
            $(".topnav-buttons").velocity("transition.perspectiveDownOut");
        
            $("#logo-whole").velocity(
                            { 
                            scale: 1,
                            translateY: 0 }, 
                            {
                            duration: 500,
                            easing: "ease-in-out"
                            });
            
            scrolledPast = false;
        }
    }); 
	

    $("p,h1,h2,h3,h4,h5").css( "font-size-adjust", $("#textslider").val() );

    $("#expandbtn, .nav-overlay").click(function () {
    
                    if ( navExpanded == false ) {
                        $(".navexpand").stop().velocity({ 
                                                    bottom: "30px",
                                                    opacity: 1
                                                }, {
                                                    /* Velocity's default options */
                                                    duration: 300,
                                                    easing: "ease-out"
                                                });
                                                
                        $(".navbar-fixed-bottom").stop().velocity({ 
                                                    bottom: "-20px",
                                                    opacity: 0.5
                                                }, {
                                                    /* Velocity's default options */
                                                    duration: 300,
                                                    easing: "ease-out"
                                                });
                        
                        $("#expandbtn").addClass("navbtn-clk");

                        $(".textslider").hide();

                        $(".nav-overlay").fadeIn(300);
                        
                        $("#textbtn").removeClass("navbtn-exp-clk");
                        
                        navExpanded = true;
                        
                    } else if (  navExpanded == true ) {
                    
                        $(".navexpand").stop().velocity({ 
                                                    bottom: "0px",
                                                    opacity: 0
                                                }, {
                                                    /* Velocity's default options */
                                                    duration: 300,
                                                    easing: "ease-out"
                                                });
                                                
                        $(".navbar-fixed-bottom").stop().velocity({ 
                                                    bottom: "0px",
                                                    opacity: 1
                                                }, {
                                                    /* Velocity's default options */
                                                    duration: 300,
                                                    easing: "ease-out"
                                                });
                    

                        $("#expandbtn").removeClass("navbtn-clk");

                        $(".textslider").hide();

                        $(".nav-overlay").fadeOut(300);
                        
                        $("#textbtn").removeClass("navbtn-exp-clk");
                        
                        navExpanded = false;
                        
                    }
                });
        
    $("#textbtn").click(function () {

                        $(".textslider").stop().slideToggle(150);

                        $("#textbtn").addClass("navbtn-exp-clk");

                    });

    $("#textslider").on("input change", function () {

                        $("p,h1,h2,h3,h4,h5").css( "font-size-adjust", $("#textslider").val() );

                    });

    /*
	
	$('div[data-type="background"]').each(function(){
	    
		var $bgobj = $(this); // assigning the object
		
        $(window).scroll(function() {
        
            if ( $(document).scrollTop() < 375) {
                // Scroll the background at the speed specified
                // the yPos is a negative value because we're scrolling it UP!
                var yPos = -( ($window.scrollTop() - $bgobj.offset().top) / $bgobj.data('speed') );
                // Put together final background position
                var coords = '50% '+ yPos + 'px';
                // Move the background
                $bgobj.css({ backgroundPosition: coords });
            }
            
            if ( $(document).scrollTop() > 100) {
                
                $("#navBar").css({
                              "height": "50px",
                              "position": "fixed"
                            });
                $("#navLogo").css({
                              "position": "absolute"
                            });            
                $("#navBar").css({
                              "body": "padding-bottom: 20px"
                            });
            }
        });
		// Window scroll Ends
	});
	
	$('div[data-type="backgroundXandY"]').each(function(){
	
		var $bgobj = $(this); // assigning the object
		$(window).scroll(function() {
			// Scroll the background at the speed specified
			var xPos = -( ($window.scrollTop() - $bgobj.offset().top) / $bgobj.data('xspeed'));
			var yPos = -( ($window.scrollTop() - $bgobj.offset().top) / $bgobj.data('yspeed'));
			// Put together our final background position
			var coords = xPos + 'px ' + yPos + 'px';
			// Move the background
			$bgobj.css({ backgroundPosition: coords });
		}); 
		// Window scroll Ends
	});
	
	$('a').click(function(){
		$('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top
		}, 500);
		return false;
	});
	
	*/
});
