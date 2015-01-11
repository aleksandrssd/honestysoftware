<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pricing | Wee</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="<?php echo $baseurl; ?>assets/images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $baseurl; ?>assets/css/style.css">

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
    </head>
    <body>
        <div class="block1 p_bottom_zero">
            <div class="container_12"> 
                <!--==============================header=================================-->
                <header>
                    <h1><a class="logo" href="<?php echo site_url('home'); ?>">H-S</a></h1>
                    <nav>
                        <ul class="sf-menu">
                            <li class="current"><a href="<?php echo site_url('home'); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('home/aboutus'); ?>">About us</a></li>
                            <li><a href="<?php echo site_url('home/services'); ?>">Services</a></li>
                            <li><a href="<?php echo site_url('home/hosting'); ?>">Domain Hosting</a></li>
                            <li><a href="<?php echo site_url('home/projectfourcol');?>">Projects</a></li>                                                     
                            <li><a href="<?php echo site_url('home/blog'); ?>">Blog</a></li>          
                            <li><a href="<?php echo site_url('home/contact'); ?>">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </header>
                <!--SLIDER-->
                <section class="innerpages">
                    <div class="grid_12">
                        <h1>Domain Hosting</h1>
                    </div>
                </section>
                <!--SLIDER_END--> 
            </div>
        </div>
        <div class="block2">
            <div class="container_12"> 
                <!--==============================content================================-->
                <section class="content">
                    <div class="wrapper">
                        <article class="grid_12 last-col">
                            <div class="hello_box">We love working with clients who love to standout from the crowd. There is always a plan matching your business needs. If you want more, do not hesitate to contact us.</div>
                        </article>
                        <span style="float: right">
                            <select name="price_table" onchange="return loadUrl(this.value);">                              
                                <option value="three">Three Column</option>
                                <option value="four">Four Column</option>
                            </select>
                        </span>
                    </div>
                    <div class="wrapper projects">
                        <div class="row clearfix">
                            <article class="grid_12 pricing">
                                <article class='grid_4 alpha'>
                                    <div class='well'>
                                        <div class="pricetable">Basic (Free)</div>
                                        <ul>
                                            <li>5 users</li>
                                            <li>1 live IP</li>
                                            <li>Unlimited emails</li>
                                            <li>Free upgrade to Pro & Business</li>
                                            <li>1 domain</li>
                                            <li>$20/yr</li>
                                        </ul>
                                        <div class="signup"> <a href="#" class="button">Signup Now</a> </div>
                                    </div>
                                </article>
                                <article class='grid_4'>
                                    <div class='spot'> Top<br/>
                                        Seller </div>
                                    <div class='well highlighted'>
                                        <div class="pricetable" style="margin-top: -40px;margin-bottom: 40px">Pro</div>
                                        <ul>
                                            <li>20 users</li>
                                            <li>5 live IP</li>
                                            <li>Unlimited emails</li>
                                            <li>Unlimited bandwidth</li>
                                            <li>20 domain</li>
                                            <li>$40/yr</li>
                                        </ul>
                                        <div class="signup"> <a href="#" class="button">Signup Now</a> </div>
                                    </div>
                                </article>
                                <article class='grid_4 omega'>
                                    <div class='well'>
                                        <div class="pricetable">Business</div>
                                        <ul>
                                            <li>Unlimited users</li>
                                            <li>Unlimited live IPs</li>
                                            <li>Unlimited emails</li>
                                            <li>Unlimited bandwidth</li>
                                            <li>Unlimited domains</li>
                                            <li>$80/yr</li>
                                        </ul>
                                        <div class="signup"> <a href="#" class="button">Signup Now</a> </div>
                                    </div>
                                </article>
                            </article>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="block3"> 
            <!--==============================footer=================================-->
            <div class="container_12">
                <footer>
                    <div class="wrapper">
                        <div class="grid_5">
                            <h2>About</h2>
                            <p>Hi, we are Honesty Software - a creative agency! 
                                Honesty Software emphasizes clean displays of content while facilitating great user experiences.
                            </p>
                            <ul class="social">
                                <li> <a href="#">
                                        <figure><img src="<?php echo $baseurl; ?>assets/images/soc1.png" width="31" height="24" alt=""></figure>
                                        Follow us on Twitter</a> 
                                </li>
                                <li> <a href="https://www.facebook.com/honestysoft">
                                        <figure><img src="<?php echo $baseurl; ?>assets/images/soc2.png" width="31" height="26" alt=""></figure>
                                        Join us on Facebook</a> 
                                </li>
                                <li> <a href="#">
                                        <figure><img src="<?php echo $baseurl; ?>assets/images/soc3.png" width="31" height="26" alt=""></figure>
                                        Subscribe to our blog</a> 
                                </li>
                                <li class="cont_item m_bottom_zero"> <a href="index-5.html">
                                        <figure><img src="<?php echo $baseurl; ?>assets/images/soc4.png" width="31" height="20" alt=""></figure>
                                        Contact Us</a> 
                                </li>
                            </ul>
                        </div>
                       
                        <div class="grid_3 last-col">
                            <h2>Meta Tag</h2>
                            <ul class="navigate">
                                <li class="current"><a href="<?php echo site_url('home'); ?>">Home</a></li>
                                <li><a href="<?php echo site_url('home/aboutus'); ?>">About us</a></li>
                                <li><a href="<?php echo site_url('home/services'); ?>">Services</a></li>
                                <li><a href="<?php echo site_url('home/hosting'); ?>">Hosting</a></li>
                                <li><a href="<?php echo site_url('home/projectfourcol'); ?>">Projects</a></li>                                                      
                                <li><a href="<?php echo site_url('home/blog'); ?>">Blog</a></li>          
                                <li><a href="<?php echo site_url('home/contact'); ?>">Contact</a></li>
                                <li><a href="#">Site Map</a></li>  
                            </ul>
                        </div>
                         <div class="grid_4">
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=373650309375413&version=v2.0";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                            </script>
                            <div class="fb-like-box" style="background-color: white" data-href="https://www.facebook.com/honestysoft" data-width="300px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div> 
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/jquery-1.8.2.min.js"></script> 
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/superfish.js"></script> 
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/jquery.responsivemenu.js"></script> 
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/jquery.flexslider.js"></script> 
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/jquery.easing.1.3.js"></script> 
        <script src="<?php echo $baseurl; ?>assets/js/jquery.isotope.min.js" type="text/javascript"></script> 
        <script src="<?php echo $baseurl; ?>assets/js/contact.js" type="text/javascript"></script> 
        <script src="<?php echo $baseurl; ?>assets/js/jquery.carouFredSel-6.1.0-packed.js" type="text/javascript"></script> 
        <script src="<?php echo $baseurl; ?>assets/js/touchTouch.jquery.js" type="text/javascript"></script> 
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/jquery-ui-1.8.24.custom.min.js"></script> 
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/script.js"></script>
        <script>
            function loadUrl(sval){
                if(sval == 'three'){
                    var getlocation = '<?php echo site_url("home/threecolumn"); ?>';
                    this.document.location.href = getlocation;
                }
                if(sval == 'four'){
                    var getlocation = '<?php echo site_url("home/hosting"); ?>';
                    this.document.location.href = getlocation;
                }
               
            }    
        </script>
    </body>
</html>