<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <link rel="icon" href="<?php echo $baseurl; ?>assets/images/favicon.png" type="image/x-icon" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $baseurl; ?>assets/css/style.css">
        <link href="<?php echo $baseurl; ?>assets/css/touchTouch.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $baseurl; ?>assets/css/jqbar.css" rel="stylesheet" type="text/css" />
        <!-- for Tab show -->
        <link type="text/css" rel="stylesheet" href="<?php echo $baseurl; ?>assets/css/responsive-tabs.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo $baseurl; ?>assets/css/styleTab.css" />

        <!--blog-->
        <link href="<?php echo $baseurl; ?>assets/css/bootstrap.min.css" rel="stylesheet">
<!--        <link href="<?php echo $baseurl; ?>assets/css/theme.css" rel="stylesheet">-->
        <link href="<?php echo $baseurl; ?>assets/css/bootstrap-reset.css" rel="stylesheet">
        <!--/blog-->

        <script>
            $(function() {
                $('ul.sf-menu li').on('click', function() {
                    $(this).parent().find('li.current').removeClass('current');
                    $(this).addClass('current');
                });
            });
        </script>
    </head>
    <body>
        <div class="block1 p_bottom_zero">
            <div class="container_12"> 
                <!--==============================header=================================-->
                <header>
                    <a href="<?php echo site_url('home'); ?>"><img src="<?php echo $baseurl; ?>assets/images/logo.png" height="60"/></a>
                    <nav>
                        <ul class="sf-menu">
                            <li class="current"><a href="<?php echo site_url('home'); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('home/aboutus'); ?>">About us</a></li>
                            <li>
                                <a href="javascript:">Services</a>
                                <ul>
                                    <li><a href="<?php echo site_url('home/services'); ?>">Services</a></li>
                                    <li><a href="<?php echo site_url('home/process'); ?>">Our Process</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('home/hosting'); ?>">Hosting</a></li>
                            <li><a href="<?php echo site_url('home/projectfourcol'); ?>">Portfolio</a></li>                                                       
                            <li><a href="<?php echo site_url('home/blog'); ?>">Blog</a></li>          
                            <li><a href="<?php echo site_url('home/contact'); ?>">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </header>
                <!--SLIDER-->
                <section class="innerpages">
                    <div class="grid_12">                       
                        <h1>Blog </h1>
                    </div>
                </section>
                <!--SLIDER_END--> 
            </div>
        </div>
        <div class="block2">
            <div class="container">
                <div class="row">
                    <!--blog start-->
                    <div class="col-lg-9 ">
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-lg-2 col-sm-2">
                                    <div class="date-wrap">
                                        <span class="date">10</span>
                                        <span class="month">September</span>
                                    </div>
                                    <div class="comnt-wrap">
                                        <span class="comnt-ico">
                                            <i class="fa fa-comments"></i>
                                        </span>
                                        <span class="value">15</span>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-sm-10">
                                    <div class="blog-img">
                                        <img src="<?php echo $baseurl; ?>assets/images/project-details9.jpg" alt="Project 1">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-sm-2 text-right">
                                    <div class="author">
                                        By <a href="#">Admin</a>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li><a href="javascript:;"><em>travel</em></a></li>
                                        <li><a href="javascript:;"><em>tour</em></a></li>
                                        <li><a href="javascript:;"><em>recreation</em></a></li>
                                        <li><a href="javascript:;"><em>tourism</em></a></li>
                                    </ul>
                                    <div class="shate-view">
                                        <ul class="list-unstyled">
                                            <li><a href="javascript:;">209 View</a></li>
                                            <li><a href="javascript:;">23 Share</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-sm-10">
                                    <h1><a href="blog_detail.html">Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium.</a></h1>
                                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                    <a href="blog_detail.html" class="btn btn-danger">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-lg-2 col-sm-2">
                                    <div class="date-wrap">
                                        <span class="date">04</span>
                                        <span class="month">September</span>
                                    </div>
                                    <div class="comnt-wrap">
                                        <span class="comnt-ico">
                                            <i class="fa fa-comments"></i>
                                        </span>
                                        <span class="value">15</span>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-sm-10">
                                    <div class="blog-img">
                                        <img src="<?php echo $baseurl; ?>assets/images/project-details9.jpg" alt="Project 1">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-sm-2 text-right">
                                    <div class="author">
                                        By <a href="#">Admin</a>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li><a href="javascript:;"><em>travel</em></a></li>
                                        <li><a href="javascript:;"><em>tour</em></a></li>
                                        <li><a href="javascript:;"><em>recreation</em></a></li>
                                        <li><a href="javascript:;"><em>tourism</em></a></li>
                                    </ul>
                                    <div class="shate-view">
                                        <ul class="list-unstyled">
                                            <li><a href="javascript:;">209 View</a></li>
                                            <li><a href="javascript:;">23 Share</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-sm-10">
                                    <h1><a href="blog_detail.html">Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium.</a></h1>
                                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                    <a href="blog_detail.html" class="btn btn-danger">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-lg-2 col-sm-2">
                                    <div class="date-wrap">
                                        <span class="date">09</span>
                                        <span class="month">September</span>
                                    </div>
                                    <div class="comnt-wrap">
                                        <span class="comnt-ico">
                                            <i class="fa fa-comments"></i>
                                        </span>
                                        <span class="value">15</span>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-sm-10">
                                    <div class="blog-img">
                                        <img src="<?php echo $baseurl; ?>assets/images/project-details9.jpg" alt="Project 1">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-sm-2 text-right">
                                    <div class="author">
                                        By <a href="#">Admin</a>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li><a href="javascript:;"><em>travel</em></a></li>
                                        <li><a href="javascript:;"><em>tour</em></a></li>
                                        <li><a href="javascript:;"><em>recreation</em></a></li>
                                        <li><a href="javascript:;"><em>tourism</em></a></li>
                                    </ul>
                                    <div class="shate-view">
                                        <ul class="list-unstyled">
                                            <li><a href="javascript:;">209 View</a></li>
                                            <li><a href="javascript:;">23 Share</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-sm-10">
                                    <h1><a href="blog_detail.html">Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium.</a></h1>
                                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                    <a href="blog_detail.html" class="btn btn-danger">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-lg-2 col-sm-2">
                                    <div class="date-wrap">
                                        <span class="date">24</span>
                                        <span class="month">September</span>
                                    </div>
                                    <div class="comnt-wrap">
                                        <span class="comnt-ico">
                                            <i class="fa fa-comments"></i>
                                        </span>
                                        <span class="value">15</span>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-sm-10">
                                    <div class="blog-img">
                                       <img src="<?php echo $baseurl; ?>assets/images/project-details9.jpg" alt="Project 1">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-sm-2 text-right">
                                    <div class="author">
                                        By <a href="#">Admin</a>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li><a href="javascript:;"><em>travel</em></a></li>
                                        <li><a href="javascript:;"><em>tour</em></a></li>
                                        <li><a href="javascript:;"><em>recreation</em></a></li>
                                        <li><a href="javascript:;"><em>tourism</em></a></li>
                                    </ul>
                                    <div class="shate-view">
                                        <ul class="list-unstyled">
                                            <li><a href="javascript:;">209 View</a></li>
                                            <li><a href="javascript:;">23 Share</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-sm-10">
                                    <h1><a href="blog_detail.html">Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium.</a></h1>
                                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                    <a href="blog_detail.html" class="btn btn-danger">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-lg-2 col-sm-2">
                                    <div class="date-wrap">
                                        <span class="date">18</span>
                                        <span class="month">September</span>
                                    </div>
                                    <div class="comnt-wrap">
                                        <span class="comnt-ico">
                                            <i class="fa fa-comments"></i>
                                        </span>
                                        <span class="value">15</span>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-sm-10">
                                    <div class="blog-img">
                                        <img src="<?php echo $baseurl; ?>assets/images/project-details9.jpg" alt="Project 1">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-sm-2 text-right">
                                    <div class="author">
                                        By <a href="#">Admin</a>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li><a href="javascript:;"><em>travel</em></a></li>
                                        <li><a href="javascript:;"><em>tour</em></a></li>
                                        <li><a href="javascript:;"><em>recreation</em></a></li>
                                        <li><a href="javascript:;"><em>tourism</em></a></li>
                                    </ul>
                                    <div class="shate-view">
                                        <ul class="list-unstyled">
                                            <li><a href="javascript:;">209 View</a></li>
                                            <li><a href="javascript:;">23 Share</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-sm-10">
                                    <h1><a href="blog_detail.html">Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium.</a></h1>
                                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                    <a href="blog_detail.html" class="btn btn-danger">Continue Reading</a>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <ul class="pagination">
                                <li><a href="#">«</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-3">
                        <div class="blog-side-item">
                            <div class="search-row">
                                <input type="text" class="form-control" placeholder="Search here">
                            </div>
                            <div class="category">
                                <h3>Categories</h3>
                                <ul class="list-unstyled">
                                    <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Animals</a></li>
                                    <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Landscape</a></li>
                                    <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Portait</a></li>
                                    <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Wild Life</a></li>
                                    <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Video</a></li>
                                </ul>
                            </div>

                            <div class="blog-post">
                                <h3>Latest Blog Post</h3>
                                <div class="media">
                                    <a class="pull-left" href="javascript:;">
                                       <img src="<?php echo $baseurl; ?>assets/images/project-details9.jpg" alt="Project 1">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-heading"><a href="javascript:;">02 May 2013 </a></h5>
                                        <p>
                                            Donec id elit non mi porta gravida at eget metus amet int
                                        </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="javascript:;">
                                       <img src="<?php echo $baseurl; ?>assets/images/project-details9.jpg" alt="Project 1">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-heading"><a href="javascript:;">02 May 2013 </a></h5>
                                        <p>
                                            Donec id elit non mi porta gravida at eget metus amet int
                                        </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="javascript:;">
                                        <img class=" " src="img/blog/blog-thumb-3.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-heading"><a href="javascript:;">02 May 2013 </a></h5>
                                        <p>
                                            Donec id elit non mi porta gravida at eget metus amet int
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="tags">
                                <h3>Tags</h3>
                                <ul class="list-unstyled tag">
                                    <li><a href="#">flat</a></li>
                                    <li><a href="#"> clean</a></li>
                                    <li><a href="#"> admin</a></li>
                                    <li><a href="#"> UI</a></li>
                                    <li><a href="#"> responsive</a></li>
                                    <li><a href="#"> Web Design</a></li>
                                    <li><a href="#"> UIX</a></li>
                                    <li><a href="#"> Blog</a></li>
                                    <li><a href="#">flat Admin</a></li>
                                    <li><a href="#"> Dashboard</a></li>
                                </ul>
                            </div>


                            <div class="archive">
                                <h3>Archive</h3>
                                <ul class="list-unstyled">
                                    <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> May 2013</a></li>
                                    <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> April 2013</a></li>
                                    <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> March 2013</a></li>
                                    <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> February 2013</a></li>
                                    <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> January 2013</a></li>
                                </ul>
                            </div>


                        </div>
                                    </div>

                       
                                </div>

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
                                            if (d.getElementById(id))
                                                return;
                                            js = d.createElement(s);
                                            js.id = id;
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
                </body>
                </html>