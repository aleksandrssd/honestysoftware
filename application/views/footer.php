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
<script>
function loadUrl(sval) {
    if (sval == 'three') {
        var getlocation = '<?php echo site_url("home/projectthreecol"); ?>';
        this.document.location.href = getlocation;
    }
    if (sval == 'four') {
        var getlocation = '<?php echo site_url("home/projectfourcol"); ?>';
        this.document.location.href = getlocation;
    }

}
</script>
</body>
</html>