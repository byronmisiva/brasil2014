<?php
$this->load->module("partidos");
setlocale(LC_ALL, "es_ES");
?>
<div class="btn-group btn-group-justified calendar-dia">
    <div class="btn-group ">
        <button type="button" class="btn btn-default jueves">12</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default viernes">13</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default sabado">14</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default domingo">15</button>
    </div>

    <div class="btn-group">
        <button type="button" class="btn btn-default lunes">16</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default martes">17</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default miercoles">18</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default jueves">19</button>
    </div>

    <div class="btn-group">
        <button type="button" class="btn btn-default viernes">20</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default sabado">21</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default domingo">22</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default lunes">23</button>
    </div>

    <div class="btn-group">
        <button type="button" class="btn btn-default martes">24</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default miercoles">25</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default jueves">26</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default viernes">27</button>
    </div>

</div>


<div class="btn-group btn-group-justified calendar-dia">
    <div class="btn-group">
        <button type="button" class="btn btn-default sabado">28</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default domingo">29</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default lunes">30</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default martes">01</button>
    </div>

    <div class="btn-group">
        <button type="button" class="btn btn-default miercoles">02</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default jueves">03</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default viernes">04</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default sabado">05</button>
    </div>

    <div class="btn-group">
        <button type="button" class="btn btn-default domingo">06</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default lunes">07</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default martes">08</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default miercoles">09</button>
    </div>

    <div class="btn-group">
        <button type="button" class="btn btn-default jueves">10</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default viernes">11</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default sabado">12</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-default domingo">13</button>
    </div>

</div>

<div class="clearfix"></div>
<div class="panel-group" id="accordion">
<?php
$fechaTemp = "";
foreach ($partidos as $key => $partido) {
    $fecha = $partido->fecha;
    if ($fecha != $fechaTemp) {

        echo '<div class="col-md-12 separador"></div><div class="col-md-12 movi-headline-regular minuto-a-minuto-fecha">'  . ucfirst(strftime('%A %d de %b. %Y', strtotime($partido->fecha))) . '</div>';
        $fechaTemp = $fecha;
    }
    ?>
    <?php $in = '' ?>
    <div class="panel panel-default">
        <div class="panel-heading movi-headline-regular panel-minute">
            <a data-toggle="collapse" data-parent="#accordion"
               href="<?php echo '#partido' . $partido->id ?>"
               name="<?php echo 'partido' . $partido->id ?>">
                <div class="row minuto-header">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">

                                    <div class="col-md-10 text-right margen5l">
                                                    <span
                                                        class="sprite-bandera-<?php echo strtolower($this->partidos->_clearStringGion($partido->nombre_local)) ?>"></span>
                                                        <span
                                                            class="margen5l"><? echo $partido->nombre_local ?></span>
                                    </div>
                                    <div class="col-md-2 text-right marcador">
                                        <? echo $partido->golesLocal ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">

                                    <div class="col-md-2 text-right marcador">
                                        <? echo $partido->golesVisitante ?>
                                    </div>
                                    <div class="col-md-10 text-left margen0">
                                            <span
                                                class="left"><? echo $partido->nombre_visitante ?></span>
                                            <span
                                                class="right sprite-bandera-<?php echo strtolower($this->partidos->_clearStringGion($partido->nombre_visitante)) ?>"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="col-md-12 text-center minuto-horario">
                                    <?php echo '<b>' . $partido->hora . '</b> - ' . $partido->estadio_nombre ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 opciones">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <span class="iconos sprite-icono_video text-right"></span> Ver Video
                            </div>
                            <div class="col-md-12 text-right">
                                <span class="iconos sprite-icono_minutoaminuto text-right"></span> Minuto a minuto
                            </div>
                        </div>
                    </div>

                </div>


            </a>
        </div>

        <?php if ($partidoOpen === FALSE) { ?>
            <?php if ($key == 0) { ?>
                <?php $in = 'in' ?>
            <?php } ?>
        <?php
        } else {
            ?>
            <?php if ($partidoOpen == $partido['partidoResumen']->id) { ?>
                <?php $in = 'in' ?>
            <?php } ?>
        <?php
        }
        /* ?>
        <div id="<?php echo 'partido' . $partido['partidoResumen']->id ?>"
             class="panel-collapse collapse <?php echo $in; ?>">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td><b>Alineaci&oacute;n</b></td>
                        <td>
                            <div class="text-right"><b>Alineaci&oacute;n</b></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-6">
                            <table class="table table-striped">
                                <?php $title = 0; ?>
                                <? foreach ($partido['alineacion_local'] as $row) { ?>
                                    <?php if ($title == 11) { ?>
                                        <tr>
                                            <td colspan="3">
                                                <b>Suplentes</b>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td>
                                            <?php foreach ($row->eventos as $row2) { ?>
                                                <? if ($row2['accion'] == 1) { ?>
                                                    <img
                                                        src="<?= base_url('imagenes/partido/c' . $row2['tipo'] . '.png') ?>"
                                                        title="<?= $row2['minuto'] . '\' ' . $row2['corto'] ?>"/>
                                                <?php } ?>
                                                <?php if ($row2['accion'] == 2) {
                                                    if ($row2['tipo'] == 2) {
                                                        $extra = 'Autogol - ';
                                                    } else {
                                                        $extra = '';
                                                    }?>
                                                    <img
                                                        src="<?= base_url() . 'imagenes/partido/g' . $row2['tipo'] . '.png' ?>"
                                                        title="<?= $extra . $row2['minuto'] . '\'' ?>"/>
                                                <?php } ?>
                                                <?php if ($row2['accion'] == 3) { ?>
                                                    <img
                                                        src="<?= base_url() . 'imagenes/partido/t' . $row2['tipo'] . '.png' ?>"
                                                        title="<?= $row2['minuto'] . '\'' ?>"/>
                                                <?php } ?>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?= $row->corto ?>
                                        </td>
                                        <td>
                                            <?= $row->numero ?>
                                        </td>
                                    </tr>
                                    <?php $title = $title + 1; ?>
                                <?php } ?>
                            </table>
                        </td>
                        <td class="col-md-6">
                            <table class="table table-striped">
                                <?php $title = 0; ?>
                                <? foreach ($partido['alineacion_visitante'] as $row) { ?>
                                    <?php if ($title == 11) { ?>
                                        <tr>
                                            <td colspan="3">
                                                <div class="text-right"><b>Suplentes</b></div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td>
                                            <?= $row->numero ?>
                                        </td>
                                        <td>
                                            <div class="text-right"> <?= $row->corto ?></div>
                                        </td>
                                        <td>
                                            <?php foreach ($row->eventos as $row2) { ?>
                                                <? if ($row2['accion'] == 1) { ?>
                                                    <img
                                                        src="<?= base_url() . 'imagenes/partido/c' . $row2['tipo'] . '.png' ?>"
                                                        title="<?= $row2['minuto'] . '\' ' . $row2['corto'] ?>"/>
                                                <? } ?>
                                                <?if ($row2['accion'] == 2) {
                                                    if ($row2['tipo'] == 2) {
                                                        $extra = 'Autogol - ';
                                                    } else {
                                                        $extra = '';
                                                    }?>
                                                    <img
                                                        src="<?= base_url() . 'imagenes/partido/g' . $row2['tipo'] . '.png' ?>"
                                                        title="<?= $extra . $row2['minuto'] . '\'' ?>"/>
                                                <? } ?>
                                                <? if ($row2['accion'] == 3) { ?>
                                                    <img
                                                        src="<?= base_url() . 'imagenes/partido/t' . $row2['tipo'] . '.png' ?>"
                                                        title="<?= $row2['minuto'] . '\'' ?>"/>
                                                <? } ?>
                                            <? } ?>
                                        </td>
                                    </tr>
                                    <?php $title = $title + 1; ?>
                                <?php } ?>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
      */
        ?>


    </div>
<?php } ?>
</div>


