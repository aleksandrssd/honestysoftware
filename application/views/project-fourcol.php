<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title;?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <link rel="icon" href="<?php echo $baseurl; ?>assets/images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $baseurl; ?>assets/css/style.css">
        <link href="<?php echo $baseurl; ?>assets/css/touchTouch.css" rel="stylesheet" type="text/css" />

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
                    <h1><a class="logo" style="font-family: ClarendonLTStdLight" href="<?php echo site_url('home'); ?>">H-S</a></h1>                  
                    <nav>
                        <ul class="sf-menu">
                            <li class="current"><a href="<?php echo site_url('home'); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('home/aboutus'); ?>">About us</a></li>
                            <li><a href="<?php echo site_url('home/services'); ?>">Services</a></li>
                            <li><a href="<?php echo site_url('home/hosting'); ?>">Hosting</a></li>
                            <li><a href="<?php echo site_url('home/projectfourcol'); ?>">Projects</a></li>                                                     
                            <li><a href="<?php echo site_url('home/blog'); ?>">Blog</a></li>          
                            <li><a href="<?php echo site_url('home/contact'); ?>">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </header>
                <!--SLIDER-->
                <section class="innerpages">
                    <div class="grid_12">                       
                        <h1>Projects</h1>
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
                            <div class="hello_box"> We love working with clients who love to standout from the crowd. There is always a plan matching your business needs. If you want more, do not hesitate to contact us. </div>
                        </article>
                    </div>
                    <div class="wrapper projects">
                        <div class="row clearfix">
                            <article class="grid_12">
                                <h2 class="clearfix">
                                    <div class="f_left">Filter
                                        <span style="float: right">
                                            <select name="price_table" onchange="return loadUrl(this.value);">                                
                                                <option value="four">Four Column</option>
                                                <option value="three">Three Column</option>
                                            </select>
                                        </span>
                                    </div>
                                    <ul class="project-filter inline f_right">
                                        <li><a href="#" data-filter="*" class="active">All</a></li>
                                        <li><a href="#" data-filter=".websites">Websites</a></li>
                                        <li><a href="#" data-filter=".print">Print</a></li>
                                        <li><a href="#" data-filter=".applications" >Application</a></li>
                                        <li><a href="#" data-filter=".wordpress">WordPress</a></li>
                                        <li><a href="#" data-filter=".content-writing">Content Writing</a></li>
                                    </ul>
                                </h2>
                            </article>
                        </div>
                        <article class="row clearfix">
                            <div class="projects-fourcols clearfix " id="projects">
                                <article class="grid_3 project-item websites "> 
                                    <a href="http://host30.cention.se/Login/-/workflow"><img src="<?php echo $baseurl; ?>assets/images/project-details.jpg" alt="Project 1"></a>                                   
                                    <p class="entry-title">
                                        Web site:
                                        <a href="http://host30.cention.se/Login/-/workflow" rel="bookmark" title="Cention COntact Center">
                                            Cention Contact Center<br/>
                                        </a>
                                        <span class="button large">PHP</span>
                                        <span class="button large">Mysql</span> 
                                        <span class="button large">CSS</span>
                                        <span class="button large">Jquery</span>
                                    </p>
                                    <span class="zoom-bg" style="opacity: 0; "> 
                                        <span class="zoom-icon" style="bottom: 100%;">
                                            <a href="<?php echo $baseurl; ?>assets/images/project-details.jpg" class="touch-item"></a>
                                        </span> 
                                        <span class="zoom-link" style="top: 100%;">
                                            <a href="http://host30.cention.se/Login/-/workflow">Details</a>
                                        </span>
                                    </span>
                                </article>
                                <article class="grid_3 project-item applications"> 
                                    <a href="http://www.premiumwebcart.com/"><img src="<?php echo $baseurl; ?>assets/images/project-details9.jpg" alt="Project 1"></a>
                                    <p class="entry-title">
                                        Web site:
                                        <a href="http://www.premiumwebcart.com/" rel="bookmark" title="Cention COntact Center">
                                            Premium web cart<br/>
                                        </a>
                                        <span class="button large">PHP</span>
                                        <span class="button large">Mysql</span> 
                                        <span class="button large">CSS</span>
                                        <span class="button large">Jquery</span>
                                    </p>
                                    <span class="zoom-bg" style="opacity: 0; "> 
                                        <span class="zoom-icon" style="bottom: 100%;">
                                            <a href="<?php echo $baseurl; ?>assets/images/project-details9.jpg" class="touch-item"></a>
                                        </span> 
                                        <span class="zoom-link" style="top: 100%;">
                                            <a href="http://www.premiumwebcart.com/">Details</a>
                                        </span> 
                                    </span> 
                                </article>
                                <article class="grid_3 project-item applications">
                                    <a href="http://deladavid.com/"><img src="<?php echo $baseurl; ?>assets/images/project-details3.jpg" alt="Project 1"></a>
                                    <br/>
                                    <p class="entry-title">
                                        Web site:
                                        <a href="http://deladavid.com/" rel="bookmark" title="Cention COntact Center">
                                            Dela david Store<br/>
                                        </a>
                                        <span class="button large">PHP</span>
                                        <span class="button large">Mysql</span> 
                                        <span class="button large">CSS</span>
                                        <span class="button large">Jquery</span>
                                    </p>
                                    <span class="zoom-bg" style="opacity: 0; ">
                                        <span class="zoom-icon" style="bottom: 100%;">
                                            <a href="<?php echo $baseurl; ?>assets/images/project-details3.jpg" class="touch-item"></a>
                                        </span>
                                        <span class="zoom-link" style="top: 100%;">
                                            <a href="http://deladavid.com/">Details</a>
                                        </span>
                                    </span> 
                                </article>
                                <article class="grid_3 project-item  wordpress">
                                    <a href="http://www.uniglare.com/"><img src="<?php echo $baseurl; ?>assets/images/project-details4.jpg" alt="Project 1"></a>
                                    <p class="entry-title">
                                        Web site:
                                        <a href="http://www.uniglare.com/" rel="bookmark" title="Cention COntact Center">
                                            Uni Glare<br/>
                                        </a>
                                        <span class="button large">PHP</span>
                                        <span class="button large">Mysql</span> 
                                        <span class="button large">CSS</span>
                                        <span class="button large">Jquery</span>
                                    </p>
                                    <span class="zoom-bg" style="opacity: 0; "> 
                                        <span class="zoom-icon" style="bottom: 100%;">
                                            <a href="<?php echo $baseurl; ?>assets/images/project-details4.jpg" class="touch-item"></a>
                                        </span>
                                        <span class="zoom-link" style="top: 100%;">
                                            <a href="http://www.uniglare.com/">Details</a>
                                        </span>
                                    </span>
                                </article>
                                <article class="grid_3 project-item print"> 
                                    <a href="https://whitecall.ca"><img src="<?php echo $baseurl; ?>assets/images/project-details5.jpg" alt="Project 1"></a>
                                    <p class="entry-title">
                                        Web site:
                                        <a href="https://whitecall.ca" rel="bookmark" title="Cention COntact Center">
                                            VPS EYE<br/>
                                        </a>
                                        <span class="button large">PHP</span>
                                        <span class="button large">Mysql</span> 
                                        <span class="button large">CSS</span>
                                        <span class="button large">Jquery</span>
                                    </p>
                                    <span class="zoom-bg" style="opacity: 0; ">
                                        <span class="zoom-icon" style="bottom: 100%;">
                                            <a href="<?php echo $baseurl; ?>assets/images/project-details5.jpg" class="touch-item"></a>
                                        </span>
                                        <span class="zoom-link" style="top: 100%;">
                                            <a href="https://whitecall.ca">Details</a>
                                        </span> 
                                    </span> 
                                </article>
                                <article class="grid_3 project-item content-writing">
                                    <a href="https://play.google.com/store/apps/details?id=honesty.android.videoframe"><img src="<?php echo $baseurl; ?>assets/images/project-details6.jpg" alt="Project 1"></a>
                                    <p class="entry-title">
                                        Web site:
                                        <a href="https://play.google.com/store/apps/details?id=honesty.android.videoframe" rel="bookmark" title="Cention COntact Center">
                                            Video Frame<br/>
                                        </a>
                                        <span class="button large">Java</span>
                                        <span class="button large">SQL Lite</span> 
                                        <span class="button large">Android</span>
                                     </p>
                                    <span class="zoom-bg" style="opacity: 0; ">
                                        <span class="zoom-icon" style="bottom: 100%;">
                                            <a href="<?php echo $baseurl; ?>assets/images/project-details6.jpg" class="touch-item"></a>
                                        </span>
                                        <span class="zoom-link" style="top: 100%;">
                                            <a href="https://play.google.com/store/apps/details?id=honesty.android.videoframe">Details</a>
                                        </span>
                                    </span> 
                                </article>
                                <article class="grid_3 project-item print"> 
                                    <a href="https://uk.ses-astra.com/18612988/uk"><img src="<?php echo $baseurl; ?>assets/images/project-details7.jpg" alt="Project 1"></a>
                                    <p class="entry-title">
                                        Web site:
                                        <a href="https://uk.ses-astra.com/18612988/uk" rel="bookmark" title="Cention COntact Center">
                                            Solidus ecare<br/>
                                        </a>
                                        <span class="button large">PHP</span>
                                        <span class="button large">Mysql</span> 
                                        <span class="button large">CSS</span>
                                        <span class="button large">Jquery</span>
                                    </p>
                                    <span class="zoom-bg" style="opacity: 0; "> 
                                        <span class="zoom-icon" style="bottom: 100%;">
                                            <a href="<?php echo $baseurl; ?>assets/images/project-details7.jpg" class="touch-item"></a>
                                        </span>
                                        <span class="zoom-link" style="top: 100%;">
                                            <a href="https://uk.ses-astra.com/18612988/uk">Details</a>
                                        </span> 
                                    </span>
                                </article>
                                <article class="grid_3 project-item wordpress">
                                    <a href="https://pwcproject.com/v2/login"><img src="<?php echo $baseurl; ?>assets/images/project-details8.jpg" alt="Project 1"></a>
                                    <p class="entry-title">
                                        Web site:
                                        <a href="https://pwcproject.com/v2/login" rel="bookmark" title="Cention COntact Center">
                                            Project Manager<br/>
                                        </a>
                                        <span class="button large">PHP</span>
                                        <span class="button large">Mysql</span> 
                                        <span class="button large">CSS</span>
                                        <span class="button large">Jquery</span>
                                    </p>
                                    <span class="zoom-bg" style="opacity: 0; "> 
                                        <span class="zoom-icon" style="bottom: 100%;">
                                            <a href="<?php echo $baseurl; ?>assets/images/project-details8.jpg" class="touch-item"></a>
                                        </span>
                                        <span class="zoom-link" style="top: 100%;">
                                            <a href="https://pwcproject.com/v2/login">Details</a>
                                        </span>
                                    </span> 
                                </article>
                                <article class="grid_3 project-item print">
                                    <a href="https://play.google.com/store/apps/details?id=honesty.android.call.password2"><img src="<?php echo $baseurl; ?>assets/images/project-details93.jpg" alt="Project 1"></a>
                                    <p class="entry-title">
                                        Web site:
                                        <a href="https://play.google.com/store/apps/details?id=honesty.android.call.password2" rel="bookmark" title="Cention COntact Center">
                                            Pwc Store<br/>
                                        </a>
                                        <span class="button large">Java</span>
                                        <span class="button large">SQL LITE</span> 
                                        <span class="button large">Android</span>
                                      </p>
                                    <span class="zoom-bg" style="opacity: 0; ">
                                        <span class="zoom-icon" style="bottom: 100%;">
                                            <a href="<?php echo $baseurl; ?>assets/images/project-details9.jpg" class="touch-item"></a>
                                        </span> 
                                        <span class="zoom-link" style="top: 100%;">
                                            <a href="https://play.google.com/store/apps/details?id=honesty.android.call.password2">Details</a>
                                        </span>
                                    </span> 
                                </article>
                                <article class="grid_3 project-item applications">
                                    <a href="http://mwfashionltd.com/"><img src="<?php echo $baseurl; ?>assets/images/project-details10.jpg" alt="Project 1"></a>
                                    <p class="entry-title">
                                        Web site:
                                        <a href="http://mwfashionltd.com/" rel="bookmark" title="Cention COntact Center">
                                            Mw Fashion<br/>
                                        </a>
                                        <span class="button large">PHP</span>
                                        <span class="button large">Mysql</span> 
                                        <span class="button large">CSS</span>
                                        <span class="button large">Jquery</span>
                                    </p>
                                    <span class="zoom-bg" style="opacity: 0; "> 
                                        <span class="zoom-icon" style="bottom: 100%;">
                                            <a href="<?php echo $baseurl; ?>assets/images/project-details10.jpg" class="touch-item"></a>
                                        </span>
                                        <span class="zoom-link" style="top: 100%;">
                                            <a href="http://mwfashionltd.com/">Details</a>
                                        </span>
                                    </span> 
                                </article>
                                <article class="grid_3 project-item websites">
                                    <a href="http://clouditbd.com/"><img src="<?php echo $baseurl; ?>assets/images/project-details11.jpg" alt="Project 1"></a>
                                    <p class="entry-title">
                                        Web site:
                                        <a href="http://clouditbd.com/" rel="bookmark" title="Cention COntact Center">
                                            Cloud it Limited<br/>
                                        </a>
                                        <span class="button large">PHP</span>
                                        <span class="button large">Mysql</span> 
                                        <span class="button large">CSS</span>
                                        <span class="button large">Jquery</span>
                                    </p>
                                    <span class="zoom-bg" style="opacity: 0; ">
                                        <span class="zoom-icon" style="bottom: 100%;">
                                            <a href="<?php echo $baseurl; ?>assets/images/project-details11.jpg" class="touch-item"></a>
                                        </span>
                                        <span class="zoom-link" style="top: 100%;">
                                            <a href="http://clouditbd.com/">Details</a>
                                        </span>
                                    </span>
                                </article>
                                <article class="grid_3 project-item last websites"> 
                                    <a href="http://www.kontaktdata.se/"><img src="<?php echo $baseurl; ?>assets/images/project-details12.jpg" alt="Project 1"></a>
                                    <p class="entry-title">
                                        Web site:
                                        <a href="http://www.kontaktdata.se/" rel="bookmark" title="Cention COntact Center">
                                            Kontakt Data<br/>
                                        </a>
                                        <span class="button large">PHP</span>
                                        <span class="button large">Mysql</span> 
                                        <span class="button large">CSS</span>
                                        <span class="button large">Jquery</span>
                                    </p>
                                    <span class="zoom-bg" style="opacity: 0; ">
                                        <span class="zoom-icon" style="bottom: 100%;">
                                            <a href="<?php echo $baseurl; ?>assets/images/project-details12.jpg" class="touch-item"></a>
                                        </span>
                                        <span class="zoom-link" style="top: 100%;">
                                            <a href="http://www.kontaktdata.se/">Details</a>
                                        </span>
                                    </span> 
                                </article>
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
                            <h2>Impressed?<br/>
                                want to hire us?</h2>
                            <p class="MB0"> Send us your details and we'll get in touch withtin 24 hours. </p>
                        </article>
                        <article class="grid_9">
                            <form action="#" method="post" id="cform" name="cform" class="clearfix">
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
                                        <input type="button" id="send-message" value="Send Details To Wee" tabindex="4">
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
                var getlocation = '<?php echo site_url("home/projectthreecol"); ?>';
                this.document.location.href = getlocation;
            }
            if(sval == 'four'){
                var getlocation = '<?php echo site_url("home/projectfourcol"); ?>';
                this.document.location.href = getlocation;
            }
               
        }    
        </script>
    </body>
</html>