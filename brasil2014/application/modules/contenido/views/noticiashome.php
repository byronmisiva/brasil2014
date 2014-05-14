<!--    Noticias Home -->
<div class=" panel-noticias">

        <div class="row">
            <div class="col-md-12">
                <h2>
                    <div class="iconos sprite-noticias"></div>
                    Noticias
                </h2>
                <hr class= "cabecera">

            </div>
            <div class="col-md-12">
            <div class="col-md-6">
                <div class="row noticia">
                    <div class="col-md-12 margen0l">
                        <img class="img-responsive margin-bottom-20" src="../imagenes/temp/content-notica-1.jpg" alt="">
                    </div>
                    <div class="col-md-12 margen0l pie-imagen-noticia">
                        Junio 12 / 2014 14h00
                    </div>
                    <div class="col-md-12 margen0l   ">
                        <h3>“Quiero jugar siete partidos"</h3>

                        <p>Reinaldo Rueda y la consigna de llegar a semis del Mundial con Ecuador.</p>
                        <p>Lorem ipsum dolor sit amssxad dffvet, consectetur adipisicing elit, sed diyso eiusmod tempor inciUt enim adhkjhie minim.
                        </p>
                        <a href="#" class=" pull-right">
                            <spam class="boton-more-mini">Ver más ></spam>
                        </a>

                    </div>
                </div>
            </div>
                <div class="col-md-6">
                    <div class="row noticia">
                        <div class="col-md-12 margen0r">
                            <img class="img-responsive margin-bottom-20" src="../imagenes/temp/content-notica-1.jpg" alt="">
                        </div>
                        <div class="col-md-12 margen0l pie-imagen-noticia pull-leftd">
                            Junio 12 / 2014 14h00
                        </div>

                        <div class="col-md-12 margen0r">
                            <h3>“Quiero jugar siete partidos"</h3>

                            <p>Reinaldo Rueda y la consigna de llegar a semis del Mundial con Ecuador.</p>
                            <p>Lorem ipsum dolor sit amssxad dffvet, consectetur adipisicing elit, sed diyso eiusmod tempor inciUt enim adhkjhie minim.
                            </p>

                        </div>
                    </div>

                </div>

            <?php
            for ($i = 0; $i < 3; $i++) {
                $cuerpo = "";
                if ($i > 0 ) $cuerpo = "hrcuerpo";
                ?>
                <div class="row">

                <div class="col-md-12">
                <div class="col-md-6">
                    <hr class="<?php echo $cuerpo ?>">
                    <div class="row noticia">
                        <div class="col-sm-4  margen5r">
                            <img class="img-responsive " src="../imagenes/temp/content-noticia-2.jpg"
                                 alt="">
                        </div>
                        <div class="col-sm-8   margen5l ">
                            <div class="col-md-12 margen0l mini-noticia-fecha">
                                Junio 12 / 2014 14h00
                            </div>
                            <h3>Cabecera Noticia. Lorem ipsum dolor</h3>

                            <p>Cras sit amet nibh libero, in gravida nulla.</p>
                            <a href="#" class=" pull-right">
                                <spam class="boton-more-mini">Ver más ></spam>
                            </a>

                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <hr class="<?php echo $cuerpo ?>">
                    <div class="row noticia">
                        <div class="col-sm-4  margen5r">
                            <img class="img-responsive " src="../imagenes/temp/content-noticia-2.jpg"
                                 alt="">
                        </div>
                        <div class="col-sm-8   margen5l ">
                            <div class="col-md-12 margen0l mini-noticia-fecha">
                                Junio 12 / 2014 14h00
                            </div>
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
                <div class="col-md-12 boton-more-fondo">
                    <a href="#" class="boton-more">Más noticias ></a>
                </div>
                <div class="clearfix"></div>
            </div>



        </div>




</div>
<!--    Fin Noticias Home -->
