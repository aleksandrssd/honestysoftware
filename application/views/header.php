<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <link rel="icon" href="<?php echo $baseurl; ?>assets/images/favicon.ico" type="image/x-icon" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $baseurl; ?>assets/css/style.css">
        <link href="<?php echo $baseurl; ?>assets/css/touchTouch.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $baseurl; ?>assets/css/jqbar.css" rel="stylesheet" type="text/css" />
        <!-- for Tab show -->
        <link type="text/css" rel="stylesheet" href="<?php echo $baseurl; ?>assets/css/responsive-tabs.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo $baseurl; ?>assets/css/styleTab.css" />
        <!-- /for Tab show -->
        <!--[if lt IE 8]>
           <div style=' clear: both; text-align:center; position: relative;'>
             <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
               <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
          </div>
        <![endif]-->
        <!--[if lt IE 9]>
                <script type="text/javascript" src="js/html5.js"></script>
                <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
            <![endif]-->
        <!-- for slide show -->
<!--        <link type="text/css" rel="stylesheet" media="all" href="<?php echo $baseurl; ?>assets/skins/darkglass/skin.css" />
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/devel/jquery-1.6.1.js"></script>
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/devel/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/devel/photocradle.core.js"></script>
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/devel/photocradle.preview.js"></script>
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/devel/photocradle.thumbnails.v2.js"></script>
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/devel/photocradle.original.js"></script>
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/devel/photocradle.preload.js"></script>-->
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/tiksluscarousel.js"></script>
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/rainbow.min.js"></script>
        <link rel="stylesheet" href="<?php echo $baseurl; ?>assets/css/normalize.css" />
        <link rel="stylesheet" href="<?php echo $baseurl; ?>assets/css/tiksluscarousel.css" />
        <link rel="stylesheet" href="<?php echo $baseurl; ?>assets/css/github.css" />
        <link rel="stylesheet" href="<?php echo $baseurl; ?>assets/css/animate.css" />
        <!-- /for slide show -->
    </head>
    <body>
        <div class="block1 p_bottom_zero">
            <div class="container_12"> 
                <!--==============================header=================================-->
                <header>
                    <h1><a class="logo" style="font-family: ClarendonLTStdLight" href="<?php echo site_url('home'); ?>">H-S</a></h1>                  
                    <nav>
                        <ul class="sf-menu">
                            <li class="current"><a href="<?php echo site_url('home'); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('home/aboutus'); ?>">About us</a></li>
                            <li><a href="<?php echo site_url('home/services'); ?>">Services</a></li>
                            <li><a href="<?php echo site_url('home/hosting'); ?>">Hosting</a></li>
                            <li><a href="<?php echo site_url('home/projectfourcol'); ?>">Portfolio</a></li>                                                       
                            <li><a href="<?php echo site_url('home/blog'); ?>">Blog</a></li>          
                            <li><a href="<?php echo site_url('home/contact'); ?>">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </header>