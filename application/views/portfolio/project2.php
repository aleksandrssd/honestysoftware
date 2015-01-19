<style> 
    #fruits{
        border:1px solid #e1e1e1;
    }
</style>
<!--SLIDER-->
<section class="innerpages">
    <div class="grid_12">                       
        <h1>Portfolio</h1>
    </div>
</section>
<!--SLIDER_END--> 
</div>
</div>
<div class="block2">
    <div class="container_12"> 
        <!--==============================content================================-->
        <section class="content">
            <div class="wrapper projects">
                <div class="row clearfix">
                    <article class="grid_6">
                        <div id="fruits">
                            <ul>
                                <li><img src="<?php echo $baseurl; ?>assets/images/slide3.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/slide4.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/slide6.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/slide8.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/slide9.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/slide3.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/slide4.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/slide6.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/slide9.jpg" /></li>
                            </ul>
                        </div>

                    </article>
                    <article class="grid_6">
                        <div class="hello_box"><a href="http://www.premiumwebcart.com/" target="_blank">Premium Web Cart</a></div>
                        <div id="accordion">
                            <h3> + Client</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Premium Web Cart</li>
                                    <li>host30.cention</li>
                                    <li>Website : <a href = "http://www.premiumwebcart.com/">Premium Web Cart</a></li>
                                </ul>
                            </div>
                            <h3> + Skills Involved</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Framework : Codeigniter</li>
                                    <li>UI Technology : Google Web Toolkit (GWT), GXT</li>
                                    <li>Web Server : Apache Tomcat</li>
                                    <li>Database : Independent (Currently using MySQL)</li>
                                    <li>Reporting Tool : JasperReport</li>
                                    <li>Others Tools : Html5, Css3</li>
                                    <li>Mail Transfer Protocol : SMTP</li>
                                </ul>
                            </div>
                            <h3> + Platform</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Operating System (OS) Independent</li>
                                    <li>Browser Independent</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="row clearfix" id="responsivetab">
                    <article class="grid_12">
                        <div id="horizontalTab">
                            <ul>
                                <li><a href="#tab-1">Details</a></li>
                                <li><a href="#tab-2">Major Modules</a></li>
                                <li><a href="#tab-3">Features & Benefits</a></li>
                            </ul>
                            <div id="tab-1">
                                <p>If you have a business that never stops moving, then you need a business system that never stops progressing. When you’re living in the shark tank, it’s best to keep swimming.</p>
                            </div>
                            <div id="tab-2">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Compare Us To The Competition</li>
                                    <li>Unbeatable Pricing</li>
                                    <li>Check Out How It Works ?</li>
                                </ul>
                            </div>
                            <div id="tab-3">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Many banks / merchant accounts use the most popular gateways as the "engine" of their system so it's likely we are already integrated.</li>
                                    <li>Call us and we’ll investigate this for you and provide an answer quickly</li>
                                    <li>On the off chance we’re not already integrated, we’ll be happy to add a new integration for you
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>
</div>
<script language="javascript">
    $(document).ready(function() {
        $("#fruits").tiksluscarousel({width: 450, height: 320, nav: 'thumbnails', current: 1, type: 'zoom'});
    });
</script>