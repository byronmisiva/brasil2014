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
                                     alt="<?php echo $noticia->titulo ?>">

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
            <div class="col-md-12 separador"></div>
            <div class="col-md-12 margen0">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12 margen0">
                            <h2 class="noticia-abierta">
                                <div class="iconos sprite-noticias"></div>
                                Más noticias
                            </h2>

                        </div>


                        <?php
                        } else {

                            ?>
                            <div class="col-md-6">

                                <div class="row noticia">
                                    <a href="<?php echo base_url() . "site/noticia/" . strtolower($this->partidos->_clearStringGion($noticia->titulo)) . '/' . $noticia->id; ?>">
                                        <div class="col-sm-5  margen5r noticia2">
                                            <img class="img-responsive "
                                                 src="<?php if (isset($noticia->imagenes->ftp_visu)) echo $noticia->imagenes->ftp_visu ?>"
                                                 alt="<?php echo $noticia->titulo ?>">
                                        </div>
                                        <div class="col-sm-7   margen5l  ">
                                            <div class="col-md-12 margen0l mini-noticia-fecha">
                                                <?php echo ucfirst(strftime('%B %d / %Y  %Hh%M', strtotime($noticia->creado))); ?>
                                            </div>
                                            <h3><?php echo $noticia->titulo ?></h3>

                                            <p><?php echo substr($noticia->cuerpo, 0, 100) . "..."; ?></p>

                                            <spam class="boton-more-mini">Ver más ></spam>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12 boton-more-fondo">
                <a href="<?php echo "noticia" ?>" class="boton-more">Paginación Cambiar ></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--    Fin Noticias Home -->
