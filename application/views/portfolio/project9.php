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
                                <li><img src="<?php echo $baseurl; ?>assets/images/yz1.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/yz2.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/yz3.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/yz4.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/yz5.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/yz1.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/yz2.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/yz3.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/yz4.jpg" /></li>
                            </ul>
                        </div>

                    </article>
                    <article class="grid_6">
                        <div class="hello_box"><a href = "https://play.google.com/store/apps/details?id=honesty.android.call.password2" target="_blank">Pwc Store</a></div>
                        <div id="accordion">
                            <h3> + Client</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Whitecall Limited</li>
                                    <li>Cloud IT Limited</li>
                                    <li>Ctechuk Limited</li>
                                    <li>Website : <a href = "https://play.google.com/store/apps/details?id=honesty.android.call.password2" target="_blank">Pwc Store</a></li>
                                </ul>
                            </div>
                            <h3> + Skills Involved</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Operating System : Android</li>
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
                                    <li>Android</li>
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
                                    <li>Audit Management System</li>
                                    <li>Fixed Asset Management System</li>
                                    <li>Inventory Management System</li>
                                </ul>
                            </div>
                            <div id="tab-3">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Set your password between 0 to 71</li>
                                    <li>Add your numbers for what you want to set password.</li>
                                    <li>When calls are coming from those numbers, password window will pop up and press your password button to take those phone calls.Two consecutively wrong password will end the call.</li>
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