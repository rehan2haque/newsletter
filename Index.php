<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<?php


$nsw_issue = "november";  //change this to the current month issue


if (isset($_GET['issue'])) {
    $nsw_issue = $_GET['issue'];  //APPLY THE GET VARIABLE FOR ISSUE TO THE PHP VATIABLE nsw_issue, this is the issue the page will load up. Else apply the default LIVEISSUE which is current months issue.
} else {
    $nsw_issue = $nsw_issue ; //default to the current month
}



?>



<head>
    <title>Operations Newsletter</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-default.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">    
    <link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- <link rel="stylesheet" href="./customcss.css"> -->
</head> 

<body onload="chromecheck()" class="header-fixed">    

<div class="wrapper">
    <!--=== Header ===-->    
        <div class="header" style="background-color:black;">
        <div class="container">
            <!-- Logo -->
            <a class="logo pull-left" href="index.php">
                 <img src="assets/img/custom/kantar/OperationsBannelogosSM.png" alt="Logo">
                <!-- <img src="assets/img/custom/kantar/KANTAR_WPBAN_SM.png" alt="Logo"> -->
            </a>                           
                    
                   <div class="hidden-sm hidden-xs container text-center"><img style="margin: 30px 0;" src="assets/img/custom/kantar/KANTAR_WP_SM.jpg" alt="Logo"></div>    
       
            <!-- End Logo -->


            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <!-- Blog -->
                    <!-- <li>
                        <a href="index.html">Blog</a>
                    </li> -->
                    <!-- End Blog -->


                    <!-- Home -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            ISSUE
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?issue=november&year=2015">November 2015</a></li> <!--Click load correct php ? use GET to load correct parameter -->
                        </ul>
                    </li>
                    <!-- End Home -->




                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->


<?php
include $nsw_issue.'/'.$nsw_issue.'.php'; 
//'november/november.php';  // current issue.
?>





     <!--=== Footer Version 1 ===-->
    <div class="footer-v1">


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">                     
                        <p>
                            2015 &copy; All Rights Reserved.
                           <!-- <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a> -->
                        </p>
                    </div>

                    <!-- Social Links -->
                    <div class="col-md-6">
                        <ul class="footer-socials list-inline">
                            <li>
                                <a href="https://www.linkedin.com/company/kantar-worldpanel" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/KWP_UK" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social Links -->
                </div>
            </div> 
        </div><!--/copyright-->
    </div>     
    <!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/plugins/cube-portfolio/cube-portfolio-3.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();

        });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

<script>
function chromecheck()  {
var isChromium = window.chrome,
    vendorName = window.navigator.vendor,
    isOpera = window.navigator.userAgent.indexOf("OPR") > -1,
    isIEedge = window.navigator.userAgent.indexOf("Edge") > -1;
if(isChromium !== null && isChromium !== undefined && vendorName === "Google Inc." && isOpera == false && isIEedge == false) {
   console.log("IS CHROME");// is Google chrome 
} else { 
   //console.log("IS NOT CHROME"); // not Google chrome 
   window.alert("We notice you are using an inferior, sub standard browser....Your enjoyment of the interweb and digital media consumption may not be at full capacity. This site has been designed to give you the best experience when using Google Chrome, why not switch over now? Thanks from the Newsletter Team.");
}

 }





</script>




</body>
</html> 