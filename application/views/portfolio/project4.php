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
                                <li><img src="<?php echo $baseurl; ?>assets/images/42.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/43.png" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/42.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/43.png" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/42.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/43.png" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/42.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/43.png" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/42.jpg" /></li>
                            </ul>
                        </div>

                    </article>
                    <article class="grid_6">
                        <div class="hello_box"><a href = "http://www.uniglare.com/" target="_blank">Uni Glare</a></div>
                        <div id="accordion">
                            <h3> + Client</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Uni Glare</li>
                                    <li>host30.cention</li>
                                    <li>Website : <a href = "http://www.uniglare.com/" target="_blank">Uni Glare</a></li>
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
                                <p>UniGlare Technology & Solutions is an innovator and leader in bringing simple, innovative and affordable Mobility products and solutions to the market, catering to a diverse cross section of the society. We strive to provide superior experience to our valued customers.</p>
                            </div>
                            <div id="tab-2">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Iphone</li>
                                    <li>Tablate</li>
                                    <li>Free Gams</li>
                                </ul>
                            </div>
                            <div id="tab-3">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Maintained financial year wise Non-development and annual development program budget and expenditure information</li>
                                    <li>If you yourself are the store owner then you can reactivate it over here.</li>
                                    <li>This store is expired, please contact the store owner to re-activate it.</li>
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