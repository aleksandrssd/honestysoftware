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
                                <li><img src="<?php echo $baseurl; ?>assets/images/project-details12.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/project-details12.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/project-details12.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/project-details12.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/project-details12.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/project-details12.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/project-details12.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/project-details12.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/project-details12.jpg" /></li>
                            </ul>
                        </div>

                    </article>
                    <article class="grid_6">
                        <div class="hello_box"><a href = "http://www.kontaktdata.se/" target="_blank">Kontakt Data</a></div>
                        <div id="accordion">
                            <h3> + Client</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Kontakt Data</li>
                                    <li>host30.cention</li>
                                    <li>Website : <a href = "http://www.kontaktdata.se/" target="_blank">Kontakt Data</a></li>
                                </ul>
                            </div>
                            <h3> + Skills Involved</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Framework : Codeigniter</li>
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
                                <p>Systemet är uppbyggt så att du själv mycket enkelt kan hantera alla steg gällande e-mail marketing. Samtliga nedanstående punkter kan du mycket enkelt hantera själv. Om du inte vill göra detta själv så kan vår supportorganisation hjälpa dig med nedanstående steg.</p>
                            </div>
                            <div id="tab-2">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Import av e-postadresser</li>
                                    <li>Genomförande av kampanj (utskick)</li>
                                    <li>Produktion av nyhetsbrev/utskick</li>
                                    <li>Statistik på dina kampanjer (utskick)</li>
                                    <li>Vårt system erbjuder en mängd olika möjligheter</li>
                                </ul>
                            </div>
                            <div id="tab-3">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Kontaktdata ingår i Svensk Företagsinformation AB, ett företag som sedan starten arbetat med e-postmarknadsföring och nyhetsbrev. Våra produkter och tjänster är välbeprövade och hjälper företag att på bästa sätt göra fler samt bättre affärer med andra företag. Kontaktdata har under årens lopp byggt upp Sveriges största databas med kontaktinformation till chefer/ansvariga inom B2B-företag.</li>
                                    <li>Genom att tillhandahålla tjänster och verktyg som effektiviserar och underlättar kommunikationen med andra företag hjälper vi företag att göra fler och bättre affärer på den Europeiska marknaden.</li>
                                    <li>Via Kontaktdata E-postmarknadsföring kan du hantera alla delar som ingår i en e-mail marketing-kampanj:
                                        - Skapa professionella nyhetsbrev.
                                        - Importera färdiga nyhetsbrev.
                                        - Importera egna e-postadresser.
                                        - Access till Sveriges största databas med e-postadresser över 900 000 chefer/ansvariga inom B2b-företag
                                        - Söka efter nya potentiella kunder - adresserna är sökbara på både bransch och geografi.
                                        - Koppla ihop valda adresser med valt utskick (nyhetsbrev).
                                        - Genomföra kampanjer.
                                        - Erhålla fullständig statistik på genomförda kampanjer.</li>
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