<?php require_once( 'admin/cms.php' ); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main-body.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
    <div class="nav-overlay"></div>
    
    <!-- TOP NAVBAR & LOGO -->   
    <nav class="topnav" id="navbar" role="navigation">
        <ul class="topnav-left sm-hide">
            <li><a href="whatwedo.php">What We Do</a></li>
            <li><a href="resources.html">Resources</a></li>
        </ul>
        <a href="index.php">
            <svg alt="Durham Region Critical Incident Stress Support Team" version="1.1" id="logo-whole" class="topnav-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="112.7 -1.5 1048.8 721.5" enable-background="new 112.7 -1.5 1048.8 721.5" xml:space="preserve">
                <g id="logo-bg">
                <circle fill="#319DFF" cx="637.5" cy="359.3" r="345.1"/>
                <circle fill="none" stroke="#319DFF" stroke-miterlimit="10" cx="637.5" cy="359.3" r="360.7"/>
                <circle fill="#FFE784" cx="637.5" cy="359.3" r="244.5"/>
                <path fill="none" stroke="#98CEFF" stroke-width="0.5" stroke-miterlimit="10" d="M424.4,568.6C369.7,514.2,336,438.1,336,354.9"/>
                <path fill="none" stroke="#98CEFF" stroke-width="0.5" stroke-miterlimit="10" d="M939.2,355.1c0,83.6-33.8,159.5-89,214"/>
                </g>
                    <g>
                        <polygon fill="#FF6666" points="1161.5,529.7 1147.8,503.7 1102,415.7 1147.8,328.6 1161.5,303.1 1004.6,303.1 1004.6,529.7 		"/>
                        <polygon fill="#FF6666" points="112.7,529.7 267.9,529.7 267.9,303.1 112.7,303.1 126.4,329.4 171.9,417.4 126.4,504.6 		"/>
                    </g>
                <g>
                    <polygon fill="#FF4040" points="267.9,405.6 267.9,529.7 348.1,449.5 285.8,387.2 	"/>
                    <polygon fill="#FF4040" points="1004.6,405.6 942.6,467.4 1004.6,529.7 	"/>
                    <rect x="267.9" y="263.1" fill="#FF8C8C" width="736.7" height="226.7"/>
                </g>
                <g>
                    <path fill="#FF4040" d="M373.9,465V303.4h36.3c11.8,0,20.6,3.7,25.8,10.7c5.1,6.9,7.8,17.5,7.8,30.9v72.7c0,16.1-2.7,28.5-8.3,35.7
                        c-5.1,7.2-14.5,11.3-26.6,11.3h-34.8v0.6L373.9,465L373.9,465z M398.7,445.6h8.3c4.2,0,7.8-1.3,10-4.2c2.1-3,3-8.3,3-16.1v-79.9
                        c0-8.3-0.9-14.5-3-17.9c-2.1-3.7-5.7-5.1-10.7-5.1h-7.8v123.2L398.7,445.6L398.7,445.6z"/>
                    <path fill="#FF4040" d="M498.9,389l-7.8-0.3v76.3h-24.5V303.4h40.6c8.3,0,14.8,1.8,18.8,5.1c4.2,3.7,6.9,8.3,8.3,14.5
                        c1.3,6.1,2.1,13.9,2.1,23.8c0,9.9-0.9,17.5-3,22.7c-2.1,5.1-6.1,8.8-11.8,10.7c5.7,0.9,9.7,4.8,11.8,11.3
                        c2.1,6.6,3.7,19.9,3.7,40.9c0,20.9,0.3,31.7,0.9,33.6h-24.5c-0.3-1.3-0.9-20.6-0.9-58.2c0-6.9-0.9-11.8-2.7-14.5
                        C507.6,390.2,504,389,498.9,389z M491,369.3h10c3,0,5.1-0.9,6.9-2.1c1.3-1.3,2.7-3.9,3-7.2c0.3-3.3,0.9-8.8,0.9-15.8v-0.9
                        c0-8.8-0.9-14.5-2.1-16.9c-1.3-2.7-4.8-3.9-10-3.9h-8.1v47.2H491V369.3z"/>
                    <path fill="#FF4040" d="M618.7,455.2c-5.7,7.2-14.5,11.3-26.1,11.3c-11.5,0-20.9-3.9-26.6-11.8c-5.7-7.8-8.8-19.6-8.8-34.5v-70.5
                        c0-23.8,6.1-39.3,18.8-44.8c4.8-2.1,10.7-3.7,16.9-3.7c22.7,0,33.8,14.5,33.8,43.3v21.9h-23.8V346c0-8.3-0.9-14.5-2.1-17.9
                        c-1.3-3.3-4.2-5.1-8.3-5.1c-3.9,0-6.9,1.8-8.8,5.7c-1.8,3.9-2.1,9.7-2.1,17.5v75.4c0,8.8,0.9,14.8,2.1,18.8
                        c1.8,3.9,4.2,5.7,8.3,5.7c3.9,0,6.9-1.8,8.3-5.7c1.4-4,2.1-10,2.1-18.8v-23h23.8v22.7C627.6,436.6,624.5,447.7,618.7,455.2z"/>
                    <path fill="#FF4040" d="M648.4,465V303.4h24.5v161.7h-24.5V465z"/>
                    <path fill="#FF4040" d="M694.7,419.5V405h23.6v16.1c0,9.1,0.9,15.1,2.1,19c1.8,3.7,4.2,5.7,8.8,5.7c4.2,0,6.9-1.3,8.3-4.2
                        c1.3-3,2.1-7.8,2.1-14.8s-1.3-12.7-3.7-17.9c-2.7-5.1-6.6-10.7-11.8-15.8l-11.8-12.1c-5.7-5.7-10-11.8-13.1-18.2
                        c-3-6.1-4.8-13.7-4.8-21.7c0-13.7,2.7-23,7.8-29.7c5.1-6.6,13.9-9.7,26.6-9.7s20.9,3.9,25.5,11.3c4.5,7.2,6.6,18.8,6.6,33v10h-22.7
                        v-11.8c0-7.8-0.9-13.7-2.1-16.9c-1.3-3.3-3.9-5.1-7.8-5.1c-3.9,0-6.6,1.3-8.3,3.9c-1.8,2.7-2.7,6.6-2.7,11.8s0.9,9.1,2.7,12.1
                        c1.8,3,4.8,6.9,9.1,11.8l13.7,14.5c6.6,7.2,11.8,14.5,15.1,21.7c3.7,7.2,5.1,15.8,5.1,24.5c0,15.1-2.7,26.1-7.2,33.6
                        c-4.8,7.2-13.9,11-26.6,11s-21.4-3.9-26.6-12.1C697.1,446.6,694.7,434.7,694.7,419.5z"/>
                    <path fill="#FF4040" d="M778,419.5V405h23.6v16.1c0,9.1,0.9,15.1,2.1,19c1.8,3.7,4.2,5.7,8.8,5.7s6.9-1.3,8.3-4.2
                        c1.3-3,2.1-7.8,2.1-14.8s-1.3-12.7-3.7-17.9c-2.7-5.1-6.6-10.7-11.8-15.8l-11.8-12.1c-5.7-5.7-10-11.8-13.1-18.2
                        c-3-6.1-4.8-13.7-4.8-21.7c0-13.7,2.7-23,7.8-29.7c5.1-6.6,13.9-9.7,26.6-9.7s20.9,3.9,25.5,11.3c4.6,7.3,6.6,18.8,6.6,33v10h-22.7
                        v-11.8c0-7.8-0.9-13.7-2.1-16.9c-1.3-3.7-3.9-5.1-7.8-5.1c-4,0-6.6,1.3-8.3,3.9c-1.8,2.7-2.7,6.6-2.7,11.8s0.9,9.1,2.7,12.1
                        c1.8,3,4.8,6.9,9.1,11.8l13.7,14.5c6.6,7.2,11.8,14.5,15.1,21.7c3.3,7.2,5.1,15.8,5.1,24.5c0,15.1-2.7,26.1-7.2,33.6
                        c-4.8,7.2-13.9,11-26.6,11s-21.4-3.9-26.6-12.1C780.4,446.6,778,434.7,778,419.5z"/>
                    <path fill="#FF4040" d="M872.4,465V324.5h-18.8v-21.4H915v21.4h-18.2V465H872.4z"/>
                </g>
                <g>
                    <path fill="#FFFFFF" d="M366.1,455.6V293.9h36.3c11.8,0,20.6,3.7,25.8,10.7c5.1,6.9,7.8,17.5,7.8,30.9v72.7
                        c0,16.1-2.7,28.5-8.3,35.7c-5.1,7.2-14.5,11.3-26.6,11.3h-35.1V455.6L366.1,455.6z M390.5,436.6h8.3c4.2,0,7.8-1.3,10-4.2
                        c2.1-3,3-8.3,3-16.1v-79.9c0-8.3-0.9-14.5-3-17.9c-2.1-3.7-5.7-5.1-10.7-5.1h-7.2V437h-0.3L390.5,436.6L390.5,436.6z"/>
                    <path fill="#FFFFFF" d="M490.7,379.9l-7.8-0.3V456h-24.5V294.2h40.6c8.3,0,14.8,1.8,18.8,5.1c4.2,3.7,6.9,8.3,8.3,14.5
                        c1.3,6.3,2.1,13.9,2.1,23.8c0,9.9-0.9,17.5-3,22.7c-2.1,5.1-6.1,8.8-11.8,10.7c5.7,0.9,9.7,4.8,11.8,11.3
                        c2.1,6.6,3.7,19.9,3.7,40.9c0,20.9,0.3,31.7,0.9,33.6h-24.5c-0.3-1.3-0.9-20.6-0.9-58.2c0-6.9-0.9-11.8-2.7-14.5
                        C499.5,381.2,495.9,379.9,490.7,379.9z M482.8,360.3h10c3,0,5.1-0.9,6.9-2.1c1.3-1.3,2.7-3.9,3-7.2c0.3-3.7,0.9-8.8,0.9-15.8v-0.9
                        c0-8.8-0.9-14.5-2.1-16.9c-1.3-2.7-4.8-3.9-10-3.9h-8.3v47.2h-0.6L482.8,360.3L482.8,360.3z"/>
                    <path fill="#FFFFFF" d="M610.9,446.6c-5.7,7.2-14.5,11.3-26.1,11.3c-11.6,0-20.9-3.9-26.6-11.8c-5.7-7.8-8.8-19.6-8.8-34.5v-70.2
                        c0-23.8,6.1-39.3,18.8-44.8c4.8-2.1,10.7-3.7,16.9-3.7c22.7,0,33.8,14.5,33.8,43.3v21.9h-23.8v-20.6c0-8.3-0.9-14.5-2.1-17.9
                        c-1.1-3.3-4.2-5.1-8.3-5.1c-3.9,0-6.9,1.8-8.8,5.7c-1.8,3.9-2.1,9.7-2.1,17.5v74.5c0,8.8,0.9,14.8,2.1,18.8
                        c1.8,3.9,4.2,5.7,8.3,5.7c3.9,0,6.9-1.8,8.3-5.7c1.3-3.9,2.1-10,2.1-18.8v-23h23.8v22.7C619.3,427.5,616.6,438.6,610.9,446.6z"/>
                    <path fill="#FFFFFF" d="M640.3,455.6V293.9h24.5v161.7H640.3L640.3,455.6z"/>
                    <path fill="#FFFFFF" d="M686.9,410.5V396h23.6v16.1c0,9.1,0.9,15.1,2.1,19c1.8,3.7,4.2,5.7,8.8,5.7c4.2,0,6.9-1.3,8.3-4.2
                        c1.4-2.9,2.1-7.8,2.1-14.8c0-7-1.3-12.7-3.7-17.9c-2.7-5.1-6.6-10.7-11.8-15.8l-11.8-12.1c-5.7-5.7-10-11.8-13.1-18.2
                        c-3-6.1-4.8-13.7-4.8-21.7c0-13.7,2.7-23,7.8-29.7c5.1-6.6,13.9-9.7,26.6-9.7s20.9,3.9,25.5,11.3c4.2,7.2,6.6,18.8,6.6,33v10h-22.7
                        v-11.8c0-7.8-0.9-13.7-2.1-16.9c-1.3-3.3-3.9-5.1-7.8-5.1c-4,0-6.6,1.3-8.3,3.9c-1.8,2.7-2.7,6.6-2.7,11.8c0,5.2,0.9,9.1,2.7,12.1
                        c1.8,3,4.8,6.9,9.1,11.8l13.7,14.5c6.6,7.2,11.8,14.5,15.1,21.7c3.7,7.2,5.1,15.8,5.1,24.5c0,15.1-2.7,26.1-7.2,33.6
                        c-4.8,7.2-13.9,11-26.6,11c-12.7,0-21.4-3.9-26.6-12.1C689.3,437.4,686.9,425.7,686.9,410.5z"/>
                    <path fill="#FFFFFF" d="M770.1,410.5V396h23.5v16.1c0,9.1,0.9,15.1,2.1,19c1.8,3.7,4.2,5.7,8.8,5.7s6.9-1.3,8.3-4.2
                        c1.4-2.9,2.1-7.8,2.1-14.8c0-7-1.3-12.7-3.7-17.9c-2.7-5.1-6.6-10.7-11.8-15.8l-11.8-12.1c-5.7-5.7-10-11.8-13.1-18.2
                        c-3-6.1-4.8-13.7-4.8-21.7c0-13.7,2.7-23,7.8-29.7c5.1-6.6,13.9-9.7,26.6-9.7s20.9,3.9,25.5,11.3c4.2,7.2,6.6,18.8,6.6,33v10h-22.7
                        v-11.8c0-7.8-0.9-13.7-2.1-16.9c-1.3-3.7-3.9-5.1-7.8-5.1c-4,0-6.6,1.3-8.3,3.9c-1.8,2.7-2.7,6.6-2.7,11.8c0,5.2,0.9,9.1,2.7,12.1
                        c1.8,3,4.8,6.9,9.1,11.8l13.7,14.5c6.6,7.2,11.8,14.5,15.1,21.7c3.3,7.2,5.1,15.8,5.1,24.5c0,15.1-2.7,26.1-7.2,33.6
                        c-4.8,7.2-13.9,11-26.6,11s-21.4-3.9-26.6-12.1C772.2,437.4,770.1,425.7,770.1,410.5z"/>
                    <path fill="#FFFFFF" d="M864.5,455.6V315.2h-18.8v-21.4h61.4v21.4H889v140.5L864.5,455.6L864.5,455.6z"/>
                </g>
                <g id="logo-text-top">
                    <path fill="#FF4040" d="M562.2,213.5c0,2.1-0.9,4.2-2.1,5.7c-1.1,1.6-3.9,2.1-6.6,2.1c-1.3,0-2.1,0-3-0.3c-0.9-0.3-1.8-0.3-2.7-0.9
                        v-3c1.8,0.9,3.9,1.3,5.7,1.3c1.8,0,3.7-0.3,4.2-1.3c0.9-0.9,1.8-2.1,1.8-3.7c0-0.9-0.3-1.8-0.9-2.1c-0.6-0.3-1.8-1.3-3.7-2.1
                        c-1.8-0.9-3-1.8-3.7-3c-0.3-1.3-0.9-2.1-0.9-3.7c0-2.1,0.9-3.9,2.1-5.1c1.1-1.3,3.7-2.1,6.1-2.1c1.3,0,2.1,0,3,0.3s2.1,0.3,3,1.3
                        l-1.3,2.7c-0.9-0.3-1.8-0.9-2.7-0.9s-1.8-0.3-2.7-0.3c-1.3,0-2.7,0.3-3.7,1.3s-1.3,1.8-1.3,3c0,0.3,0,1.3,0.3,1.8
                        c0.3,0.3,0.3,0.9,0.9,1.3c0.6,0.3,1.3,0.9,2.7,1.8c1.8,0.9,2.7,1.8,3.7,2.1c0.9,0.3,0.9,1.3,1.3,1.8
                        C563,211.6,562.2,212.5,562.2,213.5z"/>
                    <path fill="#FF4040" d="M566.4,220.8l5.1-24.9h3l-5.1,24.9H566.4z"/>
                    <path fill="#FF4040" d="M594.9,220.8h-3l-7.8-20.9l0,0c-0.3,2.7-0.9,4.8-1.3,6.9l-3,13.7H577l5.1-24.9h3l7.8,20.9l0,0
                        c0.3-2.7,0.9-4.8,1.3-6.9l3-13.9h2.7L594.9,220.8z"/>
                    <path fill="#FF4040" d="M616.9,198c-2.1,0-3.9,0.3-5.1,1.8c-1.3,1.3-2.7,2.7-3.9,4.8c-1.3,2.1-1.3,4.2-1.3,6.9
                        c0,2.1,0.3,3.9,1.8,5.1s2.7,1.8,4.2,1.8s3.7-0.3,5.7-0.9v2.7c-0.9,0.3-1.8,0.3-2.7,0.9c-0.9,0.6-1.8,0.3-3,0.3
                        c-2.7,0-4.8-0.9-6.6-2.7c-1.8-1.8-2.1-3.9-2.1-6.9c0-3,0.3-5.7,1.8-8.3c1.5-2.4,2.7-4.2,4.8-5.7c2.1-1.3,4.2-2.1,6.9-2.1
                        c2.1,0,4.2,0.3,6.1,1.3l-1.3,2.7C620.5,198.5,618.7,198,616.9,198z"/>
                    <path fill="#FF4040" d="M636.6,220.8h-12.6l5.1-24.9h12.7l-0.3,2.7h-9.7l-1.8,7.8h9.1l-0.3,2.7h-9.1l-1.8,9.1h9.7L636.6,220.8z"/>
                    <path fill="#FF4040" d="M661.4,220.8h-3L662,205c0.9-3,1.3-4.8,1.3-6.1c-0.3,0.3-1.3,1.3-2.1,1.8l-3,1.8l-1.3-2.1l7.8-4.8h2.7
                        L661.4,220.8z"/>
                    <path fill="#FF4040" d="M689.9,203.6c0,2.1-0.3,4.2-0.9,6.9c-0.6,2.7-1.3,4.2-2.7,6.1c-1.5,1.8-2.1,3-3.9,3.7
                        c-1.8,0.6-3,1.3-5.1,1.3c-1.8,0-3,0-3.9-0.3v-2.6c1.3,0.3,3,0.9,4.2,0.9c2.1,0,4.2-0.9,5.7-2.7c1.3-1.8,2.7-3.9,3-7.2l0,0
                        c-0.3,0.9-1.3,1.3-2.1,2.1c-0.8,0.8-1.8,0.9-3,0.9c-1.8,0-3.7-0.3-4.2-1.8c-0.6-1.5-1.8-2.7-1.8-4.8c0-1.8,0.3-3.7,1.3-4.8
                        c0.9-1.3,1.8-2.7,3-3.7s2.7-1.3,4.2-1.3c2.1,0,3.7,0.3,4.8,1.8C689.9,198.9,689.9,200.8,689.9,203.6z M683.1,198
                        c-1.8,0-3,0.3-3.9,1.8c-0.9,1.3-1.8,3-1.8,4.8c0,1.3,0.3,2.7,0.9,3c0.3,0.3,1.8,1.3,2.7,1.3s1.8,0,2.1-0.3c0.3-0.3,1.3-0.9,1.8-1.3
                        c0.3-0.3,0.9-1.3,1.3-1.8c0.3-0.6,0.3-1.8,0.3-2.7c0-1.3-0.3-2.7-0.9-3.7C685.5,198.5,684.7,198,683.1,198z"/>
                    <path fill="#FF4040" d="M710.5,203.6c0,2.1-0.3,4.2-0.9,6.9c-0.3,2.7-1.3,4.2-2.7,6.1c-1.3,1.8-2.1,3-3.9,3.7
                        c-1.3,0.9-3,1.3-5.1,1.3c-1.8,0-3,0-3.9-0.3v-2.6c1.3,0.3,3,0.9,4.2,0.9c2.1,0,4.2-0.9,5.7-2.7c1.3-1.8,2.7-3.9,3-7.2l0,0
                        c-0.3,0.9-1.3,1.3-2.1,2.1c-0.9,0.3-1.8,0.9-3,0.9c-1.8,0-3.7-0.3-4.2-1.8c-0.9-1.3-1.8-2.7-1.8-4.8c0-1.8,0.3-3.7,1.3-4.8
                        c0.9-1.3,1.8-2.7,3-3.7c1.3-0.9,2.7-1.3,4.2-1.3c2.1,0,3.7,0.3,4.8,1.8C709.9,198.9,710.5,200.8,710.5,203.6z M703.8,198
                        c-1.8,0-3,0.3-3.9,1.8c-0.9,1.3-1.8,3-1.8,4.8c0,1.3,0.3,2.7,0.9,3c0.3,0.9,1.8,1.3,2.7,1.3s1.8,0,2.1-0.3c0.9-0.3,1.3-0.9,1.8-1.3
                        c0.3-0.3,0.9-1.3,1.3-1.8c0.3-0.9,0.3-1.8,0.3-2.7c0-1.3-0.3-2.7-0.9-3.7C705.6,198.5,704.8,198,703.8,198z"/>
                    <path fill="#FF4040" d="M722.6,220.8h-3l3.7-15.8c0.9-3,1.3-4.8,1.3-6.1c-0.3,0.3-1.3,1.3-2.1,1.8l-3,1.8l-1.3-2.1l7.8-4.8h2.7
                        L722.6,220.8z"/>
                </g>
                <g>
                    <path fill="#FFFFFF" d="M369.1,218.9c3.9,2.1,6.1,4.8,6.9,7.8c0.9,3.7,0,6.9-2.1,11l-3.7,6.6l-23.1-12.6l3.9-7.2
                        c2.1-3.9,4.8-6.1,7.8-7.2C362.1,216.5,365.7,216.8,369.1,218.9z M366.4,224.3c-4.8-2.7-8.8-1.8-11,2.7l-1.3,2.7l15.1,8.3l1.3-2.1
                        C373,230.7,371.8,226.7,366.4,224.3z"/>
                    <path fill="#FFFFFF" d="M373.9,188.6l14.5,9.8c1.8,0.9,2.7,2.7,3.7,3.9c0.9,1.8,0.9,3,0.9,5.1c-0.3,1.8-0.9,3.7-2.1,5.7
                        c-1.8,2.7-3.9,4.2-6.6,5.1c-2.7,0.3-4.8,0-7.2-1.8l-13.9-9.7l3-4.8l13.7,9.1c1.8,1.3,3,1.8,4.2,1.3c1.3,0,2.1-0.9,3.7-2.7
                        c0.9-1.3,1.3-3,0.9-3.9c-0.3-1.3-1.3-2.7-3-3.7L372,193L373.9,188.6z"/>
                    <path fill="#FFFFFF" d="M394.7,187.8l7.8,6.6l-3.7,4.2l-20.6-16.6l4.8-6.1c2.1-2.7,4.2-4.2,6.6-4.8c2.1-0.3,4.2,0,6.1,1.8
                        c1.3,0.9,2.1,2.1,2.7,3.7c0.3,1.3,0.3,3,0,4.8c6.9,0.3,11.8,0.9,13.9,1.3l-3.9,4.8l-11.8-1.3L394.7,187.8z M391.4,185.1l1.3-1.3
                        c1.3-1.3,1.8-2.7,1.8-3.7s-0.3-1.8-1.3-2.7c-0.9-0.9-1.8-0.9-3-0.9c-0.9,0.3-2.1,1.3-3,2.7l-0.9,1.3L391.4,185.1z"/>
                    <path fill="#FFFFFF" d="M429.2,164.1l-3.9,3.9l-8.3-7.8l-7.2,7.2l8.3,7.8l-3.9,3.9l-19-18.2l3.9-3.9l7.2,6.9l7.2-7.2l-7.2-6.9
                        l3.9-3.9L429.2,164.1z"/>
                    <path fill="#FFFFFF" d="M446,149.2l-5.7-3.7l-7.2,6.6l2.7,6.1l-4.2,3.9L420.9,136l5.1-4.2l24.5,13.9L446,149.2z M436.2,143.3
                        c-5.1-3-7.8-4.8-8.8-5.1c-0.9-0.3-1.3-0.9-1.8-0.9c0.9,1.3,2.1,5.1,4.8,11L436.2,143.3z"/>
                    <path fill="#FFFFFF" d="M462,137.2l-17.5-13.1l0,0c2.7,3.7,4.2,5.7,5.1,6.6l6.9,10l-3.9,3l-15.1-21.4l6.1-4.2l16.9,12.7l0,0
                        l-6.6-20.6l6.1-4.2l15.1,21.4l-4.2,3l-6.9-10c-0.3-0.3-0.9-0.9-1.3-1.8c-0.3-0.3-1.8-2.1-3.7-5.1l0,0l6.6,20.9L462,137.2z"/>
                    <path fill="#FFFFFF" d="M489.5,107.9l4.8,9.1l-4.8,2.7L476.8,96l6.9-3.7c3-1.8,5.7-2.1,7.8-2.1c2.1,0.3,3.9,1.8,5.1,3.9
                        c0.9,1.3,0.9,2.7,0.9,4.2c0,1.3-0.9,3-1.8,4.2c6.1,3.7,10.7,5.7,12.1,6.6l-5.7,3l-10.7-6.1L489.5,107.9z M487.1,103.9l1.8-0.9
                        c1.8-0.9,2.7-1.8,3-2.7c0.3-0.9,0.3-1.8,0-3c-0.3-1.3-1.3-1.8-2.7-1.8c-0.9,0-2.1,0.3-3.9,1.3l-1.3,0.9L487.1,103.9z"/>
                    <path fill="#FFFFFF" d="M524.3,102.3l-13.9,6.1l-10.7-24.5l13.9-6.1l1.8,4.2l-8.8,3.9l2.1,5.1l8.3-3.7l1.8,4.2l-8.3,3.7l2.7,6.1
                        l8.8-3.9L524.3,102.3z"/>
                    <path fill="#FFFFFF" d="M533.4,83l10-3.7l4.2,13.1c-1.3,0.9-2.7,2.1-4.2,2.7c-1.3,0.9-2.7,1.3-4.2,1.8c-3.9,1.3-6.9,1.3-9.7-0.3
                        c-2.7-1.8-4.8-4.2-6.1-8.8c-1.3-3.9-1.3-7.2,0-10.7c1.3-3.3,4.2-5.1,8.3-6.6c2.7-0.9,5.1-1.3,7.8-0.9l-0.3,4.8
                        c-2.1-0.3-4.2,0-6.1,0.3c-2.1,0.9-3.9,2.1-4.8,4.2c-0.9,2.1-0.9,4.2,0,6.9s2.1,4.8,3.9,5.7c1.8,0.9,3.7,1.3,5.7,0.3
                        c1.3-0.3,2.1-0.9,3-1.3l-1.8-5.1l-4.8,1.8L533.4,83z"/>
                    <path fill="#FFFFFF" d="M553.9,92.1L547,66.6l5.1-1.3l6.9,25.5L553.9,92.1z"/>
                    <path fill="#FFFFFF" d="M586,70.9c0.9,4.2,0.3,7.8-1.3,10.7c-1.8,2.7-4.2,4.2-8.3,5.1c-3.9,0.9-7.2,0.3-10-1.8
                        c-2.7-1.8-4.2-4.8-5.1-9.1c-0.9-4.2-0.3-7.8,1.3-10.7c1.8-2.7,4.2-4.2,8.3-5.1c3.9-0.9,7.2-0.3,10,1.8
                        C583.9,63.9,585.2,66.9,586,70.9z M567.3,74.9c0.3,3,1.8,4.8,3,6.1c1.3,1.3,3,1.8,5.1,1.3c4.2-0.9,6.1-4.2,4.8-10
                        c-1.3-5.7-3.9-8.3-8.3-7.2c-2.1,0.3-3.7,1.3-4.2,3C567,69.7,567,72.2,567.3,74.9z"/>
                    <path fill="#FFFFFF" d="M616.9,80.8l-6.9,0.9L596.3,63l0,0c0.3,3.7,0.9,6.1,1.3,7.2l1.3,12.1l-4.8,0.3l-2.7-26.1l6.9-0.9l13.7,18.8
                        l0,0c-0.3-3.7-0.9-5.7-0.9-7.2l-1.3-12.7l5.1-0.3L616.9,80.8z"/>
                    <path fill="#FFFFFF" d="M644.5,58.8c-2.1,0-3.9,0.9-4.8,2.1c-1.3,1.8-1.8,3.9-1.8,6.6c0,6.1,2.1,8.8,6.6,9.1c1.8,0,3.9-0.3,6.9-1.3
                        v4.8c-2.1,0.9-4.8,1.3-7.2,1.3c-3.9,0-6.9-1.3-8.8-3.7c-2.1-2.1-3-5.7-3-10c0-2.7,0.3-5.1,1.8-7.2c0.9-2.1,2.7-3.7,4.2-4.8
                        c1.8-0.9,3.9-1.8,6.6-1.8c2.7,0,5.1,0.9,7.8,2.1l-1.8,4.2c-0.9-0.3-2.1-0.9-3-1.3C647.2,58.8,645.3,58.8,644.5,58.8z"/>
                    <path fill="#FFFFFF" d="M662.3,71.9l-0.9,10l-5.7-0.3l2.7-26.1l7.8,0.9c3.7,0.3,6.1,1.3,7.8,2.7c1.8,1.5,2.1,3.7,2.1,6.1
                        c0,1.8-0.9,3-1.8,3.9c-0.9,1.3-2.1,1.8-3.9,2.7c3.7,6.1,5.7,10.7,6.6,12.1l-6.1-0.3l-5.1-11L662.3,71.9z M662.9,66.9h1.8
                        c1.8,0,3,0,3.9-0.3c0.8-0.3,1.3-1.3,1.3-2.7c0-1.3-0.3-2.1-0.9-2.7c-0.9-0.3-2.1-0.9-3.9-1.3h-1.8L662.9,66.9z"/>
                    <path fill="#FFFFFF" d="M679.9,83.9l3.9-26.1l5.7,0.9l-3.9,26.1L679.9,83.9z"/>
                    <path fill="#FFFFFF" d="M701.6,87.9l-5.7-1.3l4.8-21.4l-6.9-1.3l0.9-4.2l19.6,4.2l-0.9,4.2l-6.9-1.8L701.6,87.9z"/>
                    <path fill="#FFFFFF" d="M712,90.7l6.9-25.5l5.1,1.3l-6.9,25.8L712,90.7z"/>
                    <path fill="#FFFFFF" d="M741.3,76.7c-2.1-0.9-3.9-0.3-5.1,0.9c-1.8,1.3-3,3-3.9,5.7c-1.8,5.7-0.9,9.1,3.7,10.7
                        c1.8,0.3,3.9,0.9,6.9,0.9l-1.3,4.2c-2.1,0-4.8,0-7.2-0.9c-3.7-1.3-6.1-3.7-7.2-6.1c-1.3-3-0.9-6.6,0.3-10.7
                        c0.9-2.7,2.1-4.8,3.9-6.6c1.8-1.8,3.7-2.7,5.7-3c2.1-0.3,4.2-0.3,6.9,0.3c2.7,0.6,4.8,2.1,6.6,4.2l-3,3.9c-0.9-0.9-1.8-1.3-2.7-2.1
                        C743.1,77,742.2,76.7,741.3,76.7z"/>
                    <path fill="#FFFFFF" d="M760.1,107.9l0.9-6.6l-8.8-3.9l-4.2,4.8l-5.7-2.7l19-20.6l6.1,2.7l-2.1,27.9L760.1,107.9z M761.9,96.6
                        c0.9-6.1,0.9-9.1,1.3-10s0-1.3,0.3-1.8c-0.9,1.3-3.7,4.2-7.8,9.1L761.9,96.6z"/>
                    <path fill="#FFFFFF" d="M768.3,111.7l12.1-23.6l4.8,2.7l-10,19l9.7,5.1l-2.1,3.9L768.3,111.7z"/>
                    <path fill="#FFFFFF" d="M794.6,126.6l14.5-22l4.8,3l-14.5,22L794.6,126.6z"/>
                    <path fill="#FFFFFF" d="M823.3,147.2l-5.7-4.2l3-23l0,0c-1.8,3-3.7,5.1-4.2,6.1l-7.2,10l-3.9-3l15.8-20.9l5.7,4.2l-2.7,22.7l0,0
                        c1.8-3,3.7-4.8,4.2-6.1l7.2-10l3.9,3L823.3,147.2z"/>
                    <path fill="#FFFFFF" d="M850.7,142.3c-1.8-1.3-3.7-1.8-5.1-1.3c-1.5,0.6-3.9,1.8-5.7,3.9c-3.9,4.2-4.2,7.8-0.9,11
                        c1.3,1.3,3.7,2.7,6.1,3.7l-3,3.7c-2.1-0.9-4.2-2.1-6.1-3.9c-3-2.7-4.2-5.1-4.2-8.8c0-3,1.8-6.1,4.2-9.7c1.8-2.1,3.9-3.7,6.1-4.2
                        c2.1-0.9,4.2-0.9,6.6-0.3c2.1,0.3,3.9,1.3,6.1,3c1.8,1.8,3.7,3.9,4.2,6.6l-4.2,2.1c-0.3-0.9-0.9-2.1-1.3-3
                        C853.1,144.1,851.5,142.7,850.7,142.3z"/>
                    <path fill="#FFFFFF" d="M844.5,166.8l18.8-18.8l3.9,3.9l-18.8,18.8L844.5,166.8z"/>
                    <path fill="#FFFFFF" d="M877.8,182.9c-3.7,3-6.6,3.9-10,3.9c-3.7-0.3-6.6-2.1-9.7-5.7l-4.8-5.7l19.9-17.5l5.1,6.1
                        c2.7,3,4.2,6.6,3.9,10C882.1,177.1,880.9,180.2,877.8,182.9z M873.8,178.9c4.2-3.9,4.8-7.2,1.3-11.3l-1.8-2.1l-13.1,11.3l1.8,1.8
                        C865.5,182.6,869.3,182.6,873.8,178.9z"/>
                    <path fill="#FFFFFF" d="M879.4,208l-9.1-12.1l21.4-15.8l9.1,12.1l-3.7,2.7l-5.7-7.8l-4.8,3.7l5.1,7.2l-3.9,2.7l-5.1-7.2l-5.7,3.9
                        l5.7,7.8L879.4,208z"/>
                    <path fill="#FFFFFF" d="M894.7,232.3l-3.9-6.1l11-19.9l0,0c-3,2.1-4.8,3.7-6.1,4.2l-10.7,6.6l-2.7-4.2l22.7-13.9l3.7,6.1l-11,19.9
                        l0,0c3-1.8,4.8-3.7,6.1-3.9l10.7-6.6l2.7,4.2L894.7,232.3z"/>
                    <path fill="#FFFFFF" d="M902,247l-2.7-5.1l19.6-9.7l-3-6.6l4.2-2.1l8.8,17.9l-4.2,2.1l-3-6.6L902,247z"/>
                </g>
                <g id="logo-text-btm">
                    <g>
                        <path fill="#FFFFFF" d="M445.2,593c-1.8,1.8-3.7,2.7-5.7,2.7s-4.2-1.3-6.9-3c-2.1-1.8-3.7-3.9-4.8-6.1l3.7-3.9
                            c0.9,1.8,1.8,3,2.1,4.2c0.9,0.9,1.3,1.8,2.1,2.7c0.9,0.9,1.8,1.3,2.7,1.3s1.3-0.3,2.1-0.9c0.3-0.3,0.3-0.9,0.3-1.3
                            c0-0.3,0-0.9,0-1.8c0-0.3-0.9-1.8-1.3-3.7c-0.9-1.8-1.3-3-1.3-3.9s0-2.1,0-3c0.3-0.9,0.9-2.1,1.8-3c1.8-1.8,3.7-2.7,5.1-2.7
                            c2.1,0,4.2,0.9,6.1,2.7c0.9,0.9,1.8,1.8,2.7,3c0.9,1.3,1.3,2.1,2.1,3.7l-4.2,2.1c-0.9-1.3-1.3-2.7-1.8-3c-0.6-0.3-1.3-1.3-1.8-2.1
                            c-0.9-0.9-1.8-0.9-2.1-0.9c-0.9,0-1.3,0.3-1.8,0.9c-0.3,0.3-0.3,0.9-0.3,1.3s0,0.9,0,1.3s0.3,1.8,1.3,3.9c1.3,2.7,1.8,4.2,1.3,6.1
                            C447.2,590.3,446.3,591.9,445.2,593z"/>
                        <path fill="#FFFFFF" d="M454.1,609.1l-4.2-3.7l13.1-17.5l-5.7-4.2l2.7-3.9l16.1,11.8l-2.7,3.9l-5.7-4.2L454.1,609.1z"/>
                        <path fill="#FFFFFF" d="M475.2,611.2l-5.1,8.8l-4.8-3l13.9-22.7l6.6,3.9c3,1.8,4.8,3.9,5.7,5.7c0.9,2.1,0.3,4.2-0.9,6.6
                            c-0.9,1.3-1.8,2.1-3.7,3c-1.8,0.9-3,0.9-4.8,0.3c0.3,6.9,0.3,11.8,0.3,13.9l-5.1-3.7v-11.8L475.2,611.2z M477.6,607.5l1.8,0.9
                            c1.3,0.9,2.7,1.3,3.9,1.3c0.9,0,1.8-0.3,2.7-1.8c0.9-0.9,0.9-2.1,0.3-3c-0.3-0.9-1.3-1.8-3-2.7l-1.3-0.9L477.6,607.5z"/>
                        <path fill="#FFFFFF" d="M501.9,637.5l-13.7-6.9l12.1-23.6l13.7,6.9l-2.1,3.9l-8.8-4.2l-2.7,5.1l7.8,3.9l-2.1,3.9l-7.8-3.9l-3,6.1
                            l8.8,4.2L501.9,637.5z"/>
                        <path fill="#FFFFFF" d="M525.7,640.2c-0.9,2.1-2.7,3.7-4.8,4.2c-2.1,0.3-4.8,0.3-7.2-0.9c-2.7-1.3-4.8-2.7-6.1-4.2l2.1-4.8
                            c1.3,1.3,2.7,2.7,3.7,3.7c0.9,0.9,2.1,1.3,3,1.8c1.3,0.3,2.1,0.3,3,0.3s1.3-0.9,1.8-1.8c0-0.3,0.3-0.9,0-1.3
                            c0-0.3-0.3-0.9-0.9-1.8c-0.3-0.3-1.3-1.8-2.7-3c-1.3-1.3-2.1-2.7-2.7-3.7c-0.3-0.9-0.9-1.8-0.9-3c0-0.9,0-2.1,0.3-3.7
                            c0.9-2.1,2.1-3.7,4.2-4.2c2.1-0.3,4.2-0.3,6.9,0.9c1.3,0.3,2.7,1.3,3.7,2.1c0.9,0.9,2.1,1.8,3,2.7l-3.7,3.7
                            c-0.9-0.9-2.1-1.8-2.7-2.7c-0.9-0.3-1.8-0.9-2.1-1.3c-0.9-0.3-1.8-0.3-2.7-0.3c-0.9,0.3-1.3,0.9-1.8,1.3c0,0.3-0.3,0.9,0,1.3
                            c0,0.3,0.3,0.9,0.3,1.3c0,0.3,1.3,1.8,2.7,3c1.8,2.1,3,3.9,3.7,5.1C526.8,637,526.8,638.7,525.7,640.2z"/>
                        <path fill="#FFFFFF" d="M547,647.4c-0.9,2.1-2.1,3.9-4.2,4.2c-2.1,0.9-4.2,0.3-7.2-0.3c-2.7-0.9-4.8-2.1-6.6-3.9l1.8-4.8
                            c1.3,1.3,2.7,2.1,3.9,3c1.3,0.9,2.1,1.3,3,1.8c1.3,0.3,2.1,0.3,3,0.3c0.9-0.3,1.3-0.9,1.8-1.8c0-0.3,0-0.9,0-1.3s-0.3-0.9-0.9-1.3
                            c-0.3-0.3-1.3-1.3-2.7-2.7c-1.3-1.3-2.1-2.1-2.7-3c-0.3-0.9-0.9-1.8-0.9-3c0-0.9,0-2.1,0.3-3.7c0.9-2.1,2.1-3.7,3.9-4.2
                            c1.8-0.6,4.2-0.9,6.9,0c1.3,0.3,2.7,0.9,3.7,1.8c0.9,0.9,2.1,1.8,3,2.7l-3,3.7c-1.3-0.9-2.1-1.8-3-2.1s-1.8-0.9-2.7-1.3
                            c-0.9-0.3-1.8-0.3-2.7,0c-0.9,0.3-1.3,0.9-1.3,1.8c0,0.3,0,0.9,0,1.3c0,0.3,0.3,0.9,0.9,1.3c0.3,0.3,1.3,1.3,2.7,3
                            c1.8,1.8,3,3.7,3.7,4.8C547.6,644.5,547.6,645.6,547,647.4z"/>
                        <path fill="#FFFFFF" d="M579.1,655.4c-0.3,2.1-1.8,3.9-3.9,4.8c-2.1,0.9-4.2,1.3-7.2,0.3c-2.7-0.3-5.1-1.8-6.9-3l1.3-5.1
                            c1.8,1.3,3,2.1,3.9,2.7c0.9,0.3,2.1,0.9,3,1.3c1.3,0.3,2.1,0.3,3,0s1.3-0.9,1.3-1.8c0-0.3,0-0.9,0-1.3s-0.3-0.9-0.9-1.3
                            c-0.3-0.3-1.3-1.3-3-2.7c-1.3-0.9-2.7-2.1-3-3c-0.3-0.9-0.9-1.8-1.3-2.7c-0.3-0.9-0.3-2.1,0-3.7c0.3-2.1,1.8-3.9,3.7-4.8
                            c1.8-0.9,3.9-1.3,6.9-0.3c1.3,0.3,2.7,0.9,3.9,1.3c1.3,0.3,2.1,1.3,3.7,2.1l-2.7,3.9c-1.3-0.9-2.1-1.3-3-1.8
                            c-0.9-0.3-1.8-0.9-2.7-0.9c-0.9-0.3-1.8,0-2.7,0s-0.9,0.9-1.3,1.8c0,0.3,0,0.9,0,1.3s0.3,0.9,0.9,1.3c0.3,0.3,1.3,1.3,3,2.7
                            c2.1,1.8,3.7,3,4.2,4.2C580.1,652.3,579.7,653.6,579.1,655.4z"/>
                        <path fill="#FFFFFF" d="M609.7,640.5l-2.1,16.9c-0.3,1.8-0.9,3.7-2.1,4.8c-0.9,1.3-2.7,2.1-4.2,3c-1.8,0.3-3.9,0.9-6.1,0.3
                            c-3.7-0.3-5.7-1.8-7.2-3.7c-1.8-1.8-2.1-4.2-1.8-7.2l2.1-16.9l5.7,0.9l-2.1,16.1c-0.3,2.1,0,3.7,0.3,4.8c0.9,0.9,2.1,1.8,3.9,1.8
                            c1.8,0.3,3,0,4.2-0.9c0.9-0.9,1.8-2.1,1.8-4.2l2.1-16.1L609.7,640.5z"/>
                        <path fill="#FFFFFF" d="M634.2,650.2c0,3-1.3,4.8-3,6.6c-1.8,1.3-4.2,2.1-7.8,1.8h-2.7l-0.3,9.4l-5.7-0.3l0.9-26.6l8.3,0.3
                            c3,0,5.7,0.9,7.2,2.1C632.4,644.7,634.2,647.4,634.2,650.2z M621.4,653.6h1.8c1.8,0,3-0.3,3.9-0.9c0.9-0.3,1.3-1.8,1.3-3
                            s-0.3-2.1-0.9-3c-0.6-0.9-1.8-0.9-3.7-0.9H621L621.4,653.6z"/>
                        <path fill="#FFFFFF" d="M658.1,649.4c0,3-0.9,5.1-2.1,6.6c-1.8,1.8-4.2,2.7-7.2,2.7h-2.7l0.3,9.7l-5.7,0.3l-1.3-26.6l8.3-0.3
                            c3,0,5.7,0.3,7.2,1.8C657.2,644.5,658.1,646.6,658.1,649.4z M645.6,654.2h1.8c1.8,0,3-0.3,3.9-1.3c0.8-0.9,1.3-1.8,1.3-3
                            s-0.3-2.1-1.3-3c-0.9-0.9-1.8-0.9-3.7-0.9h-2.7L645.6,654.2z"/>
                        <path fill="#FFFFFF" d="M688.7,650.5c0.3,4.2,0,7.8-1.8,10.7c-1.8,2.7-4.8,4.2-8.8,4.8c-3.9,0.3-7.2,0-9.7-2.1
                            c-2.7-2.1-3.9-5.1-4.8-9.7c-0.3-4.2,0-7.8,1.8-10.7c1.8-2.7,4.8-4.2,8.8-4.8c3.9-0.3,7.2,0,9.7,2.1
                            C686.2,642.6,688,646.3,688.7,650.5z M669.2,653.3c0.3,3,1.3,5.1,2.7,6.6s3,1.8,5.1,1.8c4.2-0.3,6.1-3.9,5.1-9.7
                            c-0.9-6.1-3.7-8.8-7.8-7.8c-2.1,0.3-3.9,1.3-4.8,3C668.9,648.8,668.9,650.2,669.2,653.3z"/>
                        <path fill="#FFFFFF" d="M701,650.5l2.1,10l-5.7,1.3l-6.1-25.8l7.2-1.8c3.7-0.9,6.1-0.9,8.3,0c2.2,0.9,3.7,2.7,3.9,5.1
                            c0.3,1.3,0.3,3-0.3,4.2c-0.3,1.3-1.3,2.7-3,3.7c5.1,4.8,8.8,7.8,10,9.7l-6.1,1.3l-8.3-8.3L701,650.5z M700.2,646.3l1.8-0.3
                            c1.8-0.3,3-0.9,3.7-1.8c0.9-0.9,0.9-1.8,0.3-3c-0.3-1.3-0.9-2.1-1.8-2.1c-0.9-0.3-2.1-0.3-3.9,0l-1.8,0.3L700.2,646.3z"/>
                        <path fill="#FFFFFF" d="M733.7,652.3l-5.1,1.8l-6.6-20.9l-6.9,2.1l-1.3-4.2l19-6.1l1.3,4.2l-6.9,2.1L733.7,652.3z"/>
                        <path fill="#FFFFFF" d="M766.4,639.4l-5.1,2.1l-9.1-19.6l-6.6,3l-1.8-4.2l18.2-8.3l1.8,4.2l-6.6,3L766.4,639.4z"/>
                        <path fill="#FFFFFF" d="M791.9,625.7l-13.7,7.2l-12.7-23l13.7-7.2l2.1,3.9l-8.3,4.8l2.7,5.1l7.8-4.2l2.1,3.9l-7.8,4.2l3.7,6.1
                            l8.3-4.8L791.9,625.7z"/>
                        <path fill="#FFFFFF" d="M812.4,613l-5.1-4.2l-7.8,5.1l1.8,6.1l-5.1,3.7l-6.9-27.6l5.7-3.9l22.7,16.9L812.4,613z M803.1,605.7
                            c-4.8-3.9-7.2-6.1-7.8-6.6c-0.3-0.3-0.9-0.9-1.3-1.3c0.3,1.3,1.8,5.1,3.7,11.3L803.1,605.7z"/>
                        <path fill="#FFFFFF" d="M830.6,598.7l-18.2-11.8l0,0c3,3,4.8,5.1,5.7,6.1l7.8,9.7l-3.9,3l-17-20.7l5.7-4.8l17.9,11.8l0,0
                            l-7.8-19.6l5.7-4.8l16.9,20.6l-3.9,3.7l-7.8-9.7c-0.3-0.3-0.9-0.9-1.3-1.8c-0.3-0.3-1.8-2.1-3.9-4.8l0,0l7.8,20.6L830.6,598.7z"/>
                    </g>
                </g>
                <g id="logo-cross">
                <polygon fill="#FF8C8C" points="664.4,534.3 647.2,534.3 647.2,516.8 629.7,516.8 629.7,534.3 612.4,534.3 612.4,551.5 629.7,551.5 
                    629.7,569.2 647.2,569.2 647.2,551.5 664.4,551.5 "/>
                </g>
                </svg>
        </a>
        <ul class="topnav-right sm-hide">
            <li><a href="contact.html">Contact</a></li>
            <li><a href="admin/login.php">Member Login</a></li>
        </ul>
    </nav>
    
   <!--  BUTTON GROUP IN TOP NAVBAR -->
    <div class="topnav-buttons sm-hide">
        <a href="donate.html"><i class="fa fa-usd"></i></a>
        <a class="emergency" href="tel:9055768711"><i class="fa fa-mobile"></i></a>
    </div>
    
    <!-- BOTTOM BUTTON BAR (SM ONLY) -->
    <nav class="navbar navbar-default navbar-fixed-bottom lrg-hide">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-xs-3"><a href="javascript:;"><span class="glyphicon glyphicon-home navbtn"></span></a></div>
                <div class="col-xs-3"><a href="javascript:;"><span class="glyphicon glyphicon-info-sign navbtn-blk"></span></a></div>
                <div class="col-xs-3"><a href="javascript:;" data-toggle="modal" data-target="#emergcall"><span class="glyphicon glyphicon-phone-alt navbtn-blk"></span></a></div>
                <div class="col-xs-3"><a href="javascript:;" id="expandbtn"><span class="glyphicon glyphicon-th navbtn-blk"></span></a></div>
            </div>
        </div>
    </nav>

    <nav class="navbar-default navexpand lrg-hide">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-xs-3"><a href="javascript:;"><span class="glyphicon glyphicon-credit-card navbtn-exp"></span></a></div>
                <div class="col-xs-3"><a href="javascript:;" id="textbtn"><span class="glyphicon glyphicon-text-height navbtn-exp"></span></a></div>
                <div class="col-xs-3"><a href="javascript:;"><span class="glyphicon glyphicon-book navbtn-exp"></span></a></div>
                <div class="col-xs-3"><a href="javascript:;" data-toggle="modal" data-target="#memberlogin"><span class="glyphicon glyphicon-user navbtn-exp"></span></a></div>
            </div>
        
        </div>
    </nav>
     
    <div class="textslider">
        <input type="range" min="0.52" max="0.84" step="0.04" id="textslider">
    </div>
    
    <!-- EMERGENCY CALL MODAL -->
    <div class="modal fade" id="emergcall" tabindex="-1" role="dialog" aria-labelledby="emergencycall" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="emergencycall">Emergency Contact</h4>
                </div>
                <div class="modal-body text-center">
                    <p>Clicking the button below will open a direct phone line with a local healthcare professional.</p>
                    <p>Please dial extension 3200 when prompted.</p>
                    <br>
                    <a href="tel:9055768711" class="btn btn-lg btn-success btn-block">CALL NOW</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- MEMBER LOGIN MODAL -->
    <div class="modal fade" id="memberlogin" tabindex="-1" role="dialog" aria-labelledby="memberLogin" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="memberLogin">Member Login</h4>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="memberEmail">Email address</label>
                            <input type="email" class="form-control" id="memberEmail" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="memberPassword">Password</label>
                            <input type="password" class="form-control" id="memberPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-success">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>