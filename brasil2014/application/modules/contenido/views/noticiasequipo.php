<!--    Noticias Home -->
<div class=" panel-noticias">

        <div class="row">
            <div class="col-md-12">
                <h2>
                    <div class="iconos sprite-noticias"></div>
                    Noticias de <?php echo $nombre_equipo; ?>
                </h2>
                <hr class= "cabecera">

            </div>
            <div class="col-md-12">

            <?php
            for ($i = 0; $i < 2; $i++) {
                $cuerpo = "";
                if ($i > 0 ) $cuerpo = "hrcuerpo";
                ?>
                <div class="row">

                <div class="col-md-12">
                <div class="col-md-6">

                    <div class="row noticia">
                        <div class="col-sm-4  margen5r">
                            <img class="img-responsive " src="<?php echo base_url('imagenes/temp/content-noticia-2.jpg') ?>"
                                 alt="">
                        </div>
                        <div class="col-sm-8   margen5l ">

                            <h3>Cabecera Noticia. Lorem ipsum dolor</h3>

                            <p>Cras sit amet nibh libero, in gravida nulla.</p>
                            <a href="#" class=" pull-right">
                                <spam class="boton-more-mini">Ver más ></spam>
                            </a>

                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="row noticia">
                        <div class="col-sm-4  col-xs-5 margen5r">
                            <img class="img-responsive " src="<?php echo base_url('imagenes/temp/content-noticia-2.jpg') ?>"
                                 alt="">
                        </div>
                        <div class="col-sm-8  col-xs-7  margen5l ">

                            <h3>Cabecera Noticia. Lorem ipsum dolor</h3>
                            <p>Cras sit amet nibh libero, in gravida nulla.Cras sit amet nibh libero, in gravida nulla.Cras
                                sit amet nibh libero, in gravida nulla.</p>
                            <a href="#" class=" pull-right">
                                <spam class="boton-more-mini">Ver más ></spam>
                            </a>
                        </div>
                    </div>

                </div>
                </div>
                </div>

            <?php
            }
            ?>
<!--                <div class="col-md-12 boton-more-fondo">-->
<!--                    <a href="#" class="boton-more">Más noticias ></a>-->
<!--                </div>-->
                <div class="clearfix"></div>
            </div>



        </div>




</div>
<!--    Fin Noticias Home -->
