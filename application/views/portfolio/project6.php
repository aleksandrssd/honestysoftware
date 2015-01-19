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
                                <li><img src="<?php echo $baseurl; ?>assets/images/xz1.png" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/xz2.png" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/xz3.png" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/xz4.png" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/xz5.png" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/xz6.png" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/xz1.png" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/xz2.png" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/xz3.png" /></li>
                            </ul>
                        </div>
                    </article>
                    <article class="grid_6">
                        <div class="hello_box"><a href = "https://play.google.com/store/apps/details?id=honesty.android.videoframe" target="_blank">Video Frame</a></div>
                        <div id="accordion">
                            <h3> + Client</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Whitecall Limited</li>
                                    <li>Cloud IT Limited</li>
                                    <li>Ctechuk Limited</li>
                                    <li>Website : <a href = "https://play.google.com/store/apps/details?id=honesty.android.videoframe" target="_blank">Video Frame</a></li>
                                </ul>
                            </div>
                            <h3> + Skills Involved</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Operating System : Android</li>
                                    <li>UI Technology : Google Web Toolkit (GWT), GXT</li>
                                    <li>Web Server : Apache Tomcat</li>
                                    <li>Database : Independent (Currently using MySQL)</li>
                                    <li>Reporting Tool : JasperReport</li>
                                </ul>
                            </div>
                            <h3> + Platform</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
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
                                    <li>Select any video from Gallery.</li>
                                    <li>Select any frame number what you want to take from the video. (high quality video consists of 30 frames per second).</li>
                                    <li>Give time in mili second with in the limit of the video. (1 second = 1000 mili second).</li>
                                </ul>
                            </div>
                            <div id="tab-3">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>See the preview of the frame and save the frame of the video in your sdcard.</li>
                                    <li>See the preview of the frame and save the frame of the video in your sdcard.</li>
                                    <li>Generate the frame with your own choice by selecting time or number of frame.</li>
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