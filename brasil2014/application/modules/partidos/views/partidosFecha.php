<?php
$this->load->module("partidos");
setlocale(LC_ALL, "es_ES");
?>
<!-- Listado de partidos del Día-->
<div class="col-md-12 margen0  separador" id="partidos-del-dia">
    <div class="row partido-dia">
        <!-- Listado de partidos del Día-->
        <div class="col-md-12 list_partido_dia">
            <div class="col-md-12 cabecera-partidos">
                <h2>
                    <div class="iconos sprite-partidodeldia"></div>
                    Partidos del día
                </h2>
            </div>
            <!-- Partido del Día-->
            <div class="list_partido_dia carousel slide">

                <div class="carousel-inner">
                    <?php
                    $fechaTemp = "";
                    $numero = 0;
                    foreach ($fechas as $row) {
                        $fecha = $row->fecha;
                        if ($fecha != $fechaTemp) {
                            $numero++;
                            echo '<div class="col-md-12 conten-partidos"><b>Día ' . $numero . ' - ' . ucfirst(strftime('%A %d de %B', strtotime($row->fecha))) . '</b></div>';
                            $fechaTemp = $fecha;
                        }
                        ?>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <a href="<?php echo base_url();?>site/calendario/<?php echo $fechas[0]->id; ?>#<?php echo ucfirst(strftime('%m-%d', strtotime($row->fecha))) ?>"
                               alt="<?php echo $row->nombre_local ?>" title="<?php echo $row->nombre_local . " vs" . $row->nombre_visitante ?>">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 cuerpo">


                                    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5 margen2">

                                <span  class="iconos sprite-<?php echo strtolower($this->partidos->_clearStringGion($row->nombre_local)) ?>"></span><?php echo $row->nombre_local ?>

                                        </div>
                                    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 margen2 text-center ">
                                        <span class="right"><?php //echo $row->golesLocal ."-".  $row->golesVisitante;
                                            echo "vs"; ?></span>
                                    </div>
                                    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5 margen2 text-right pull-right">

                                <span
                                    class="iconos sprite-<?php echo strtolower($this->partidos->_clearStringGion($row->nombre_visitante)) ?>"></span><?php echo $row->nombre_visitante ?>

                                    </div>



                            </div>
                            </a>
                        </div>

                        <div class="col-md-12 conten-partidos">
                            <?php echo '<b>' . $row->hora . '</b> - ' . $row->estadio_nombre ?>
                             <hr>
                        </div>
                        <div class="clearfix"></div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Fin partido del Día-->
    </div>
    <div class="col-md-12 boton-more-fondo">
        <a href="<?php echo base_url();?>site/calendario" class="boton-more">Calendario completo ></a>
    </div>
</div>
<!-- Listado de partidos del Día-->