<!--Genera la tabla de posiciones-->
<div class="col-md-12 separador"></div>
<div class="row">
    <?
    foreach ($ranking as $row) {
        echo ' <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 grupo">';
        echo '<div class="col-md-12 movi-headline-regular cabecera-grupos1"><span class="iconos sprite-icono-grupos"></span>' . $row->nombre . '</div>';
        ?>
        <hr class="lineaazul">
        <div class="col-md-12 movi-headline-regular cabecera-grupos2">
            <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5 margen2">Equipo</div>
            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">PJ</div>
            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">PG</div>
            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">PE</div>
            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">PP</div>
            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">PGF</div>
            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">GC</div>
            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">P</div>
        </div>
        <?php
        if (count($row->tabla) > 0) {
            foreach ($row->tabla as $equipo) {
                ?>
                <div class="col-md-12 movi-headline-regular cuerpo">
                    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5  margen2 nombre-equipo">
                        <a href="equipo/<?php echo $equipo->id; ?>"><?php echo $equipo->name; ?></a>
                    </div>
                    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">
                        <?php if (isset($equipo)) echo $equipo->n_partidos; ?>
                    </div>
                    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">
                        <?php if (isset($equipo)) echo $equipo->n_partidos_ganados; ?>
                    </div>
                    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">
                        <?php if (isset($equipo)) echo $equipo->n_partidos_perdidos; ?>
                    </div>
                    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">
                        <?php if (isset($equipo)) echo $equipo->n_goles; ?>
                    </div>
                    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">
                        <?php if (isset($equipo)) echo $equipo->n_goles_contra; ?>
                    </div>
                    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">
                        <?php if (isset($equipo)) echo $equipo->n_puntos_contra; ?>
                    </div>
                    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">
                        <?php if (isset($equipo)) echo $equipo->n_puntos; ?>
                    </div>
                </div>
            <?php
            }
        } else {
            //generamos el contenido pero vacio
            for ($i = 0; $i < 4; $i++) {
                ?>
                <div class="col-md-12 cuerpo">
                    <div class="row">
                        <div class="col-md-11 col-lg-11 col-sm-11 col-xs-11  margen2">
                            -
                        </div>
                        <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 pull-right margen2"
                             style="text-align:right">
                        </div>
                    </div>
                </div>
            <?php
            }
        }
        echo '</div>';
    }
    ?>
</div>
<!--Fin Genera la tabla de posiciones-->