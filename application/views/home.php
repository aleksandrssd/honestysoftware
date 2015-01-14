<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="<?php echo $baseurl; ?>assets/images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $baseurl; ?>assets/css/style.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $baseurl; ?>assets/css/slider.css">
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/home-slider01.js"></script>
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/home-slider02.js"></script>
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/scripts.js"></script>
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/html5shiv.js"></script>
       
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
                <header class="homepage">
                    <a href="<?php echo site_url('home'); ?>"><img src="<?php echo $baseurl;?>assets/images/logo.png" height="60"/></a>
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
            </div>
        </div>
        <div class="extra_container">
            <section >
                <div class="fullwidthbanner-container" style="height:450px">
                    <div class="fullwidthbanner">
                        <ul>

                            <!-- FADE -->
                            <li data-transition="fade">
                                <img src="<?php echo $baseurl; ?>assets/images/hp-sldr-1_0.jpg" alt="">
<!--                                <div class="caption lft" data-x="700" data-y="70" data-speed="900" data-start="900" data-easing="easeOutExpo"><img src="<?php echo $baseurl; ?>assets/images/html5.png" alt="" width="256" /></div>

                                <div class="caption sfl big_orange_bg" data-x="10" data-y="40" data-speed="600" data-start="2000" data-easing="easeOutExpo">Built with HTML5 for</div>
                                <div class="caption sfl big_blue_bg" data-x="10" data-y="170" data-speed="600" data-start="2500" data-easing="easeOutExpo">
                                    Corporates Businessnes
                                </div>

                                <div class="caption sfl big_blue_bg" data-x="10" data-y="240" data-speed="600" data-start="2700" data-easing="easeOutExpo">
                                    Advertising Agencies
                                </div>

                                <div class="caption sfl big_blue_bg" data-x="10" data-y="310" data-speed="600" data-start="2900" data-easing="easeOutExpo">
                                    YOU!
                                </div>-->
                            </li>

                            <li data-transition="fade">
                                <img src="<?php echo $baseurl; ?>assets/images/hp-sldr-2.jpg" alt="">
<!--                                <div class="caption lft" data-x="700" data-y="70" data-speed="900" data-start="900" data-easing="easeOutExpo"><img src="<?php echo $baseurl; ?>assets/images/android.png" alt="" width="256" /></div>

                                <div class="caption sfl big_orange_bg" data-x="10" data-y="40" data-speed="600" data-start="2000" data-easing="easeOutExpo">Built Android Application</div>
                                <div class="caption sfl big_blue_bg" data-x="10" data-y="170" data-speed="600" data-start="2500" data-easing="easeOutExpo">
                                    Digitize your company
                                </div>

                                <div class="caption sfl big_blue_bg" data-x="10" data-y="240" data-speed="600" data-start="2700" data-easing="easeOutExpo">
                                    Enhance your idea with Android
                                </div>

                                <div class="caption sfl big_blue_bg" data-x="10" data-y="310" data-speed="600" data-start="2900" data-easing="easeOutExpo">
                                    YOU!
                                </div>-->
                            </li>

                            <!-- SLIDELEFT -->
                            <li data-transition="slideright"> <img src="<?php echo $baseurl; ?>assets/images/hp-sldr-3_1.jpg" alt="" />
<!--                                <div class="caption lft" data-x="700" data-y="60" data-speed="900" data-start="900" data-easing="easeOutExpo"><img src="<?php echo $baseurl; ?>assets/images/responsive.png" alt="" width="256" /></div>
                                <div class="caption lfr big_yellow_bg" data-x="10" data-y="50" data-speed="300" data-start="1600" data-easing="easeOutExpo">Super Corporate</div>
                                <div class="caption sfl small_white_bg" data-x="10" data-y="200" data-speed="300" data-start="1800" data-easing="easeOutExpo">Clean, Creative & Eye Catching</div>
                                <div class="caption sfr small_white_bg" data-x="10" data-y="250" data-speed="300" data-start="2000" data-easing="easeOutExpo">Fully Responsive & Optimized For All Screens</div>
                                <div class="caption sfl small_white_bg" data-x="10" data-y="300" data-speed="300" data-start="2200" data-easing="easeOutExpo">Well Commented & Documented</div>-->

                            </li>

                            <!-- SLIDERIGHT -->
                            <li data-transition="slideleft"> <img src="<?php echo $baseurl; ?>assets/images/hp-sldr-4.jpg" alt="" />
<!--                                <div class="caption lft boxshadow" data-x="10" data-y="50" data-speed="900" data-start="1300" data-easing="easeOutExpo">
                                    <iframe src="http://player.vimeo.com/video/4870899?title=0&amp;color=ff5050"  width="630" height="350" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                </div>
                                <div class="caption lfr big_black_bg" data-x="700" data-y="50" data-speed="300" data-start="1600" data-easing="easeOutExpo">Video Tutorials</div>
                                <div class="caption lfb small_black_bg" data-x="700" data-y="130" data-speed="300" data-start="1800" data-easing="easeOutExpo">Use your training videos <br/>in the banner to get user notice</div>
                                <div class="caption lfb" data-x="700" data-y="210" data-speed="300" data-start="1800" data-easing="easeOutExpo"><a href="#" class="button large">Watch Video Training Now</a></div>-->
                            </li>


                            <!-- SLIDEUP -->
                            <li data-transition="fade"> <img src="<?php echo $baseurl; ?>assets/images/software1.jpg" alt="" />
<!--                                <div class="caption lft" data-x="520" data-y="20" data-speed="900" data-start="500" data-easing="easeOutBack"><img src="<?php echo $baseurl; ?>assets/images/clean.png" alt="" /></div>
                                <div class="caption lfb big_red_bg" data-x="0" data-y="50" data-speed="900" data-start="800" data-easing="easeOutSine">Cross Browser Compatible</div>
                                <div class="caption lfb big_red_bg" data-x="0" data-y="150" data-speed="1100" data-start="1000" data-easing="easeOutSine">Super Clean Template</div>
                                <div class="caption lfb big_red_bg" data-x="0" data-y="250" data-speed="1100" data-start="1200" data-easing="easeOutSine">Valid Markup</div>-->
                            </li>
                        </ul>

                    </div>
                </div>	
            </section>
        </div>
        <div class="block2">
            <div class="container_12"> 
                <!--==============================content================================-->
                <section class="content">
                    <div class="wrapper">
                        <article class="grid_12 last-col">
                            <div class="hello_box"> A successful digital project requires careful analysis, strategic planning
                                and professional support, combined with your company needs & goals. </div>
                        </article>
                    </div>
                    <div class="wrapper offers_box">
                        <article class="grid_3">
                            <h2 class="clearfix"> <span class="f_left">How H-S Work</span> <a id="next" class="next"></a> <a id="prev" class="prev"></a> </h2>
                            <p> We deliver outstanding user experiences through designing and realizing digital solutions.<br/> <a href="<?php echo site_url('home/projectfourcol'); ?>" class="arrowlink">Our Portfolio</a> </p>
                        </article>
                        <div class="grid_9">
                            <div id="home-services">
                                <div class="grid_3">
                                    <div class="offer"> <img src="<?php echo $baseurl; ?>assets/images/sol-ico1.png" alt="Plan">
                                        <div class="title">1. Plan </div>
                                        This phase is the main focus of the project managers and stake holders. After requirement gathering these requirements are analyzed for their validity and the possibility of incorporating the requirements in the system to be development. <br>
                                    </div>
                                </div>
                                <div class="grid_3">
                                    <div class="offer"> <img src="<?php echo $baseurl; ?>assets/images/sol-ico2.png" alt="Design">
                                        <div class="title">2. Design</div>
                                        In this phase the system and software design is prepared from the requirement specifications which were studied in the first phase. System Design helps in specifying hardware and system requirements and also helps in defining overall system architecture.   <br>
                                    </div>
                                </div>
                                <div class="grid_3 last-col">
                                    <div class="offer"> <img src="<?php echo $baseurl; ?>assets/images/sol-ico3.png" alt="Prototype">
                                        <div class="title">3. Prototype</div>
                                        Software prototyping is becoming very popular as a software development model, as it enables to understand customer requirements at an early stage of development.     <br>
                                    </div>
                                </div>
                                <div class="grid_3 ">
                                    <div class="offer"> <img src="<?php echo $baseurl; ?>assets/images/development.png" alt="Development">
                                        <div class="title">4. Development</div>
                                        On receiving system design documents, the work is divided in modules/units and actual coding is started<br>
                                    </div>
                                </div>
                                <div class="grid_3 ">
                                    <div class="offer"> <img src="<?php echo $baseurl; ?>assets/images/testing.png" alt="Testing">
                                        <div class="title">5. Testing</div>
                                        After the code is developed it is tested against the requirements to make sure that the product is actually solving the needs addressed and gathered during the requirements phase. During this phase unit testing, integration testing, system testing, acceptance testing are done.     <br>
                                    </div>
                                </div>
                                <div class="grid_3 last-col ">
                                    <div class="offer"> <img src="<?php echo $baseurl; ?>assets/images/delivery.png" alt="Delivery">
                                        <div class="title">6. Delivery</div>
                                        After successful testing the product is delivered / deployed to the customer for their use. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="featured_block" id="bgimages">
            <div class="container_12">
                <section class="content">
                    <div class="wrapper featured_work">
                        <article class="grid_3">
                            <h2>Featured Project</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                            <a href="<?php echo site_url('home/projectfourcol'); ?>" class="arrowlink">Details</a>&nbsp; <a href="<?php echo site_url('home/contact'); ?>" class="arrowlink">Contact Us</a> </article>
                        <article class="grid_9 last">
                            <div class="flexslider" id="home-page-slider-secondary">
                                <ul class="slides">
                                    <li>
                                        <div class="imgwrap lifted"><img src="<?php echo $baseurl; ?>assets/featureproduct/feature-1.png" alt="Featured"/></div>
                                    <center><span style="color: white; font-weight: bold; font-size: 18px;margin-top: 5px">Cention Contact Center</span></center>
                                    </li>  
                                    <li>
                                        <div class="imgwrap lifted"><img src="<?php echo $baseurl; ?>assets/featureproduct/feature-2.png" alt="Featured"/></div>
                                    <center><span style="color: white; font-weight: bold; font-size: 18px;margin-top: 5px">Interactive Intelligence</span></center>
                                    </li>  
                                    <li>
                                        <div class="imgwrap lifted"><img src="<?php echo $baseurl; ?>assets/featureproduct/feature-3.png" alt="Featured"/></div>
                                    <center><span style="color: white; font-weight: bold; font-size: 18px;margin-top: 5px">Project Manager</span></center>
                                    </li>  
                                    <li>
                                        <div class="imgwrap lifted"><img src="<?php echo $baseurl; ?>assets/featureproduct/feature-4.png" alt="Featured"/></div>
                                    <center><span style="color: white; font-weight: bold; font-size: 18px;margin-top: 5px">Male and female fashion limited</span></center>
                                    </li>  
                                    <li>
                                        <div class="imgwrap lifted"><img src="<?php echo $baseurl; ?>assets/featureproduct/feature-5.png" alt="Featured"/></div>
                                    <center><span style="color: white; font-weight: bold; font-size: 18px;margin-top: 5px">Premium web cart</span></center>
                                    </li>  
                                </ul>
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        </div>
        <div class="hireus_block">
            <div class="container_12">
                <section class="">
                    <div class="wrapper">
                        <article class="grid_3">
                            <h2>Impressed ?<br/>
                                want to hire us ?</h2>
                            <p class="MB0"> Send us your details and we'll get in touch withtin 24 hours. </p>
                        </article>
                        <article class="grid_9">
                            <form action="<?php echo site_url('home/contact'); ?>" method="post" id="cform" name="cform" class="clearfix">
                                <ul id="homehireus" class="hireform">
                                    <li>
                                        <label>Name:<span class="required">*</span></label>
                                        <input name="name" id="name" type="text" value="" tabindex="1">
                                    </li>
                                    <li>
                                        <label>Phone:</label>
                                        <input name="phone" id="phone" type="text" value="" tabindex="3">
                                    </li>
                                    <li>
                                        <label>Email:<span class="required">*</span></label>
                                        <input name="email" id="email" type="text" value="" tabindex="2">
                                    </li>
                                    <li>
                                        <input type="submit" id="send-message" value="Send Details To Us" tabindex="4">
                                    </li>
                                </ul>
                            </form>
                            <div id="output"></div>
                        </article>
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
                            <h2>Meta</h2>
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

        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/superfish.js"></script> 
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/jquery.responsivemenu.js"></script> 
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/jquery.flexslider.js"></script> 
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/jquery.easing.1.3.js"></script> 
        <script src="<?php echo $baseurl; ?>assets/js/jquery.carouFredSel-6.1.0-packed.js" type="text/javascript"></script> 
        <script src="<?php echo $baseurl; ?>assets/js/contact.js" type="text/javascript"></script> 
        <script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/script.js"></script>

    </body>
</html>
