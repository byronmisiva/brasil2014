<!--    Noticias Home -->
<?php
setlocale(LC_ALL, "es_ES");
?>
<div class=" panel-noticias">

    <div class="row">
        <div class="separador"></div>
        <div class="col-md-12">
            <?php
            $this->load->module("partidos");
            $x = 0;
            foreach ($noticias as $noticia) {
            $x++;
            if ($x <= 1) {
            ?>
            <div class="col-md-12">
                <div class="row noticia">


                    <div class="col-md-12    margen0l   ">

                        <div class="col-md-6">
                            <div class="row">
                                <img class="img-responsive margin-bottom-20 margen15r"
                                     src="<?php echo $noticia->imagenes->ftp_visu ?>"
                                     alt="<?php echo strtotime($noticia->titulo) ?>">

                                <div class="col-md-12  pie-imagen-noticia">

                                    <?php echo ucfirst(strftime('%B %d / %Y  %Hh%M', strtotime($noticia->creado))); ?>
                                </div>
                            </div>
                        </div>
                        <h1 class="noticia-abierta"><?php echo $noticia->titulo ?></h1>

                        <p class="noticia-abierta"><?php echo $noticia->cuerpo; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 separador mar"></div>
                <div class="col-md-12 margen0">
                    <h2>
                        <div class="iconos sprite-noticias"></div>
                        Noticias
                    </h2>
                    <hr class="cabecera">

                </div>
            <?php
            } else {
                $cuerpo = "";
                if ($x > 3) $cuerpo = "hrcuerpo";
                ?>
                <div class="col-md-6 margen0l">
                    <hr class="<?php echo $cuerpo ?>">
                    <div class="row noticia">
                        <a href="<?php echo base_url() . "site/noticia/" . strtolower($this->partidos->_clearStringGion($noticia->titulo)) . '/' . $noticia->id; ?>"  >
                            <div class="col-sm-4  margen5r noticia2">
                                <img class="img-responsive "
                                     src="<?php if (isset($noticia->imagenes->ftp_visu)) echo $noticia->imagenes->ftp_visu ?>"
                                     alt="<?php echo strip_tags ( $noticia->titulo) ?>">
                            </div>
                            <div class="col-sm-8   margen5l altonews">
                                <div class="col-md-12 margen0l mini-noticia-fecha">
                                    <?php echo ucfirst(strftime('%B %d / %Y  %Hh%M', strtotime($noticia->creado))); ?>
                                </div>
                                <h3><?php echo $noticia->titulo ?></h3>

                                <p><?php echo substr(strip_tags ( $noticia->cuerpo), 0, 100) . "..."; ?></p>

                                <spam class="boton-more-mini">Ver más ></spam>

                            </div>
                        </a>
                    </div>
                </div>
            <?php
            }

                if ($x == 1){
                    echo ' <div class="clearfix"></div>';
                }

            }
            ?>

            <div class="col-md-12 boton-more-fondo">
                <a href="<?php echo "noticia" ?>" class="boton-more">Más noticias ></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--    Fin Noticias Home -->
