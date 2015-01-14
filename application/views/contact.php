<!--SLIDER-->
<section class="innerpages">
    <div class="grid_12">                       
        <h1>Contact </h1>
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
                    <div class="hello_box"> We love working with clients who love to standout from the crowd. The following contact form is validation ready and this enhances user experience. </div>
                </article>
            </div>
            <div class="wrapper projects">
                <div class="row clearfix">
                    <article class="grid_12">
                        <div class="gmap">
                            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden; padding-left: 10px; width:1100px;"><div id="gmap_canvas" style="width:940px; height:350px; padding-left: 10px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type="text/javascript"> function init_map() {
                                    var myOptions = {zoom: 14, center: new google.maps.LatLng(23.8074103, 90.3684121), mapTypeId: google.maps.MapTypeId.ROADMAP};
                                    map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                                    marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(23.8074103, 90.3684121)});
                                    infowindow = new google.maps.InfoWindow({content: "<b>Honesty Software</b><br/>Mirpur , Block: C <br/>1216 Dhaka"});
                                    google.maps.event.addListener(marker, "click", function() {
                                        infowindow.open(map, marker);
                                    });
                                    infowindow.open(map, marker);
                                }
                                google.maps.event.addDomListener(window, 'load', init_map);</script>
                        </div>
                    </article>
                </div>
                <div class="row clearfix">
                    <article class="grid_12">
                        <h2>Reach Us</h2>
                        <p>Join us on <a href="https://www.facebook.com/honestysoft">Facebook</a>, follow us on <a href="#">Twitter</a> & <a href="#">Pinterest</a> for irregular doses of technology, inspiration & creativity.</p>
                        <form action="<?php echo site_url('home/sendmail'); ?>" method="post" id="cform" name="cform">
                            <ul id="homehireus" class="hireform contactform">
                                <li>
                                    <label>Name:<span class="required">*</span></label>
                                    <input name="name" id="name" type="text" value="<?php
                                    if ($this->session->userdata('name')): echo $this->session->userdata('name');
                                    endif;
                                    ?>" tabindex="1" required>
                                </li>
                                <li>
                                    <label>Phone:</label>
                                    <input name="phone" id="phone" type="text" value="<?php
                                    if ($this->session->userdata('phn')): echo $this->session->userdata('phn');
                                    endif;
                                    ?>" tabindex="3">
                                </li>
                                <li>
                                    <label>Email:<span class="required">*</span></label>
                                    <input name="email" id="email" type="text" value="<?php
                                    if ($this->session->userdata('email')): echo $this->session->userdata('email');
                                    endif;
                                    ?>" tabindex="2" required>
                                </li>
                                <li>
                                    <label>Subject:<span class="required"></span></label>
                                    <input name="subject" id="subject" type="text" value="" tabindex="4">
                                </li>
                                <li>
                                    <input id="send-message" type="submit" value="Send Details To Us" tabindex="6"/>
                                    <?php
                                    if ($this->session->userdata('saved')):
                                        echo '<div id="output" class="contactpage-msg ui-state-green ui-corner-all">' . $this->session->userdata('saved') . '</div>';
                                        $this->session->unset_userdata('saved');
                                    endif;
                                    ?>
                                </li>
                                <li>
                                    <label>Message:<span class="required"></span></label>
                                    <textarea name="message" id="message" tabindex="5" required></textarea>
                                </li>
                            </ul>
                        </form>
                    </article>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="hireus_block offices">
    <div class="container_12">
        <section class="">
            <div class="wrapper">
                <h2>Offices</h2>
                <article class="grid_4"> <b>Mailing Address </b>
                    <p>Address : Section-13, Block-C,<br/>
                        Road-8, House-7, Mirpur,Dhaka-1216.<br/>
                        Mobile: +8801728308111<br/>
                        Email: info@honestysoftware.com
                    </p>
                </article>  

                <article class="grid_4"> <b>Feel Free To Call Us </b>
                    <p>
                        (88) 01915 255244<br/>                               
                        (88) 02 951 5145-6<br/>
                        Office hour: 10 A.M. - 7 P.M. (GMT+6)<br/>
                        (Closed on Friday-Saturday)
                    </p>
                </article> 
                <article class="grid_4"> <b>Connect With Us </b>
                    <p>
                        info@honestysoftware.com<br/>
                        Send Us A Message<br/>
                        Support<br/>
                        Honesty software<br/>
                        Blog<br/>
                    </p>
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
<script type="text/javascript" src="<?php echo $baseurl; ?>assets/js/script.js"></script>
</body>
</html>