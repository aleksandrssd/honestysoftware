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
                                <li><img src="<?php echo $baseurl; ?>assets/images/c1.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/c2.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/c4.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/c5.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/c6.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/c7.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/c8.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/c9.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/c10.jpg" /></li>
                            </ul>
                        </div>

                    </article>
                    <article class="grid_6">
                        <div class="hello_box"><a href = "http://deladavid.com/" target="_blank">Dela david Store</a></div>
                        <div id="accordion">
                            <h3> + Client</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Dela david Store</li>
                                    <li>host30.cention</li>
                                    <li>Website : <a href = "http://deladavid.com/" target="_blank">Dela david Store</a></li>
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
                                <p>The place of work is as important as the work itself. Honesty Software is excited about headquartered at Bangladesh. This is how our work place looks like!
                                    Honesty Software is a diverse end-to-end IT solution provider offering wide range of Mobile Application, web applications and also expert consultancy services. Our solutions enable companies to make their Application Lifecycle management and Project management easier and more efficient.</p>
                            </div>
                            <div id="tab-2">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Payment Methods</li>
                                    <li>Shipping Methods</li>
                                    <li>Customer Care</li>
                                </ul>
                            </div>
                            <div id="tab-3">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Get your Engagement & Wedding moments hand oil painted on canvas! Our custom hand oil painted canvases are a fusion between your personal memories and our professional artistry</li>
                                    <li>We specialize in custom oil paintings so come to us with your ideas, photos, and memories and let us recreate them in a timeless hand oil painting! Whether you want your painting shipped to you rolled or on a 1.5″ stretch gallery wrap wooden frame we can handle your needs. Tell us the size and concept and we’ll take care of the rest</li>
                                    <li>Those 3 words sum up the essence of what De la David stands for. As a company, our goal is to create art that can resonate throughout your life that will lead to your own inspiration. We believe in the power of creativity and invite you on our journey in artistic creation and innovation</li>
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
        $("#fruits").tiksluscarousel({width: 450, height: 270, nav: 'thumbnails', current: 1, type: 'zoom'});
    });
</script>