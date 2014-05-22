<?php $this->load->module("partidos"); ?>

<div class="row main-goleadores">
    <div class="col-md-7">
        <?php
        foreach ($fichaEquipo['imagenes'] as $imagen) {
            foreach ($imagen as $nodo) {
                $pos = strpos((string)$nodo->nombre, '1');
                if ($pos) {
                    echo "<img width='100%' class='img-responsive' src='".      $nodo->thumb250 . "'>";
                }
            }
        }
        ?>
    </div>
    <div class="col-md-5">
        <div class="col-md-12  margen0">
            <div class="col-md-5  margen0l">
                <div
                    class="iconos sprite-escudo-<?php echo strtolower($this->partidos->_clearStringGion($fichaEquipo['nombre_equipo'])); ?>"></div>
            </div>
            <div class="col-md-7 margen0  movi-headline-regular">
                <div class="col-md-12 separador"></div>

                <h1><?php echo $fichaEquipo['nombre_equipo']; ?></h1>
                <?php
                foreach ($fichaEquipo['ficha'] as $ficha) {
                    foreach ($ficha as $nodo) {
                        if ((string)$nodo->titulo == 'Participaciones en Copa del Mundo') {
                            $noParticipaciones = explode(" ", (string)$nodo->detalles);
                            echo $noParticipaciones[0] . " Participaciones";
                        }
                    }
                }
                ?>
            </div>
        </div>
        <div class="col-md-12 separador"></div>
        <div class="col-md-12 margen0">
            <?php
            echo "<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> ";
            ?>
        </div>
        <div class="col-md-12 separador"></div>

    </div>
</div>
<?php echo $noticias; ?>

<div class="row separador">

        <div class="col-md-12">
            <div class="col-md-12 margen0">
                <h2>
                    <div class="iconos sprite-icono-informacion"></div>
                    Información del equipo
                </h2>
                <hr class= "cabecera">

            </div>


            <div class="col-md-12  "><?php echo (string)$fichaEquipo['detalles'] ?></div>
        </div>

</div>