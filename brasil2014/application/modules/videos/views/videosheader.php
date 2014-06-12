<!--        Contenidos principales-->
<!-- Tab panes -->
<div class="tab-content contenedor-videos">
    <div class="tab-pane fade in active" id="videos-contenedorc">
        <div class="row">
            <div class="col-md-12">
                <div class="video ">
                    <script type="text/javascript">
                        var eventsPath = "http://static.elcanaldelfutbol.com";
                        var embedWidth = "100%";
                        var embedHeight = "390";
                        var allowfullscreen="false";
                        var option = 0;
                        $( document ).ready(function() {
                            var eventsPath = "http://static.elcanaldelfutbol.com";
                            $.getScript(eventsPath+"/events.js", function(data, textStatus, jqxhr) {

                                jQuery.support.cors = true;
                                jQuery.ajaxSetup({ cache: true });
                                streamId = <?php echo 241; ?>;
                                isLiveEmbed = getURLParameter('vod') == null;
                                $( "#container" ).html("<div id='player'></div>");
                                $( "#container" ).show();
                                loadPlayer();
                            });
                        });
                    </script>
                    <div id="container"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Nav tabs -->
<div class="video-text text-right botonpantalla movi-headline-regular"><a href="http://www4.movistar.com.ec/FIFAWorldCup/fs/">Ver Pantalla Completa</a></div>

<div id="contenido-exclusivo-carrousel" class="list_carousel_header hidden">
     <a id="prev6" class="prev" href="#"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <ul id="foo6" class="foo">
        <li><img class="media-object img-responsive" src="<?php echo base_url('imagenes/galerias/thum-galeria1-b.png'); ?>" alt="">
        </li>
    </ul>
    <a id="next6" class="next" href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>
    <div class="clearfix"></div>
</div>