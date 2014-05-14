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
        for ($i = 0; $i < 9; $i++) {
            ?>
            <!-- imagen  -->
            <div class="col-lg-4 col-sm-4 col-xs-6 margen5">
                <a title="Lorem ipsum dolor" href="../imagenes/temp/banner3-high.png" class="minigaleria"><img
                        src="<?php echo base_url('imagenes/temp/banner3.jpg') ?>" width="100%"></a>
            </div>
            <!-- Fin imagene  -->
        <?php
        }
        ?>
    </div>


</div>
<!-- Fin  Galería imágenes  -->