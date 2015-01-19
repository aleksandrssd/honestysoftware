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
                                <li><img src="<?php echo $baseurl; ?>assets/images/software1.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/ss_webdev.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/web-development23.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/web-development31.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/software1.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/ss_webdev.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/web-development23.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/web-development31.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/software1.jpg" /></li>
                            </ul>
                        </div>

                    </article>
                    <article class="grid_6">
                        <div class="hello_box"><a href = "http://clouditbd.com/" target="_blank">Cloud IT Limited</a></div>
                        <div id="accordion">
                            <h3> + Client</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Whitecall Limited</li>
                                    <li>Cloud IT Limited</li>
                                    <li>Ctechuk Limited</li>
                                    <li>Website : <a href = "http://clouditbd.com/" target="_blank">Cloud IT Limited</a></li>
                                </ul>
                            </div>
                            <h3> + Skills Involved</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>CMS : Wordpress</li>
                                    <li>UI Technology : Google Web Toolkit (GWT), GXT</li>
                                    <li>Web Server : Apache Tomcat</li>
                                    <li>Database : Independent (Currently using MySQL)</li>
                                    <li>Reporting Tool : JasperReport</li>
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
                                <p>To be a highly respected global IT solution provider that satisfies the demands of society and works positively towards the interests of humanity..</p>
                            </div>
                            <div id="tab-2">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Reseller Payments</li>
                                    <li>Admin Payments System</li>
                                    <li>Inventory Management System</li>
                                </ul>
                            </div>
                            <div id="tab-3">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Nobis suavitate moderatius has eu, epicuri ancillae pericula ei nam, ferri ipsum quaeque est ea. Ex omnis menandri conceptam his.</li>
                                    <li>Cloud IT has a wealth of experience in designing, coding and distributing mobile applications. We build apps both for clients and for Cloud IT use and have thus released hundreds of applications designed specifically for the mobile web. </li>
                                    <li>Telecom Billing is a carrier-grade solution designed to allow Communications Service Providers (CSP) to collect consumption data, provide flexible real-time charging, rating and billing, produce customizable invoices, process payments/credits/discounts, and manage debt collection. </li>
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