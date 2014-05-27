<!-- Galería imágenes  -->
<div class="col-md-12 separador">
    <div class="row">
        <div class="col-md-12 cabecera-partidos">
            <h2>
                <div class="iconos sprite-galeria"></div>
                Galería
            </h2>
        </div>


        <?php

        foreach ($imagenes as $item) {
        
            ?>
            <!-- imagen  -->
            <div class="col-lg-4 col-sm-4 col-xs-6 margen5">
                <div class = "imagenes-galeria">
                <a title="<?php echo $item->nombre; ?>" href="<?php echo $item->visu; ?>" class="minigaleria"  data-toggle="lightbox"><img
                        src="<?php echo $item->thumb250; ?>"  height="98px"></a>
                </div>
            </div>
            <!-- Fin imagene  -->
        <?php  	 
        }
        ?>
    </div>

    <div class="row boton-more-fondo margen0">
        <a href="<?php echo base_url('site/galerias')?>" class="boton-more">Ver más ></a>
    </div>
</div>
<!-- Fin  Galería imágenes  -->