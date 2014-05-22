<?php

class Mdl_partidos extends MY_Model
{

    public $table_name = "partidos";
    public $primary_key = "id";
    public $joins;
    public $select_fields;
    public $total_rows;
    public $page_links;
    public $current_page;
    public $num_pages;
    public $optional_params;
    public $order_by;
    public $form_values = array();

    public $estados_afp = array();
    public $estados_desc = array();
    public $local = array();
    public $posiciones = array();

    public function __construct()
    {
        parent::__construct();
        $this->local = array(1 => 'local', 2 => 'visitante');
        $this->estados_afp = array(
            'EMNCOXXXXX' => 0,
            'EMENCPMTP1' => 1,
            'EMPAUPMTP1' => 2,
            'EMENCPMTP2' => 3,
            'EMFINPMTP2' => 4,
            'EMPAUPMTP2' => 5,
            'EMENCPMPR1' => 6,
            'EMPAUPMPR1' => 7,
            'EMFNCPMPR2' => 8,
            'EMFINPMPGO' => 9,
            'EMFINPMPSI' => 10,
            'EMFINPMPR2' => 11,
            'EMPAUPMPR2' => 12,
            'EMENCPMTAB' => 13,
            'EMFINPMTAB' => 14
        );
        $this->estados_desc = array(
            0 => 'No iniciado',
            1 => 'Primer tiempo',
            2 => 'Medio tiempo',
            3 => 'Segundo tiempo',
            4 => 'Tiempo cumplido',
            5 => 'Receso tiempos extras',
            6 => 'Primer tiempo extra',
            7 => 'Receso',
            8 => 'Segundo tiempo extra',
            9 => 'Terminado gol de oro',
            10 => 'Terminado gol de plata',
            11 => 'Terminado en extras',
            12 => 'Espera antes de los penales',
            13 => 'Penales en progreso',
            14 => 'Terminado en penales'
        );
        $this->posiciones = array(
            'PSENT' => 0, //Entrenador
            'PSGOL' => 1, //Arquero
            'PSDEF' => 2, //Defensa
            'PSMIL' => 3, //Volante
            'PSAVA' => 4, //Delantero
            'PSRPJ' => 5, //Suplente que jugo
            'PSRPL' => 6 //Suplente sin jugar
        );
    }

    // Devuelve los partidos que se jugaran en el dia actual o el proximo dia
    //todo ver caso cuando mundial acabe
    function getAllByFecha()
    {
        $this->load->module('equipos');
        $this->load->module('estadios');
        $partidos = $this->get(array('select' => "partidos.id, DATE_FORMAT(partidos.fecha, '%Y-%c-%e') AS fecha, DATE_FORMAT(partidos.fecha, '%k:%i') AS hora, partidos.estado, nombre_estadio AS estadio_nombre, partidos.resultado, ( SELECT equipos_campeonato.short_name FROM equipos_campeonato WHERE equipos_campeonato.id = partidos. LOCAL ) AS local_corto, ( SELECT equipos_campeonato.short_name FROM equipos_campeonato WHERE equipos_campeonato.id = partidos.visitante ) AS visitante_corto, partidos.nombre_local, partidos.nombre_visitante, partidos.local, partidos.visitante",
            'order_by' => 'partidos.fecha ASC',
            'where' => "(SELECT  DATE_FORMAT(b.fecha, '%Y-%c-%e') from partidos b   WHERE DATE_FORMAT(b.fecha, '%Y-%c-%e')  > NOW() GROUP BY DATE_FORMAT(b.fecha, '%Y-%c-%e') LIMIT 1) =  DATE_FORMAT(partidos.fecha, '%Y-%c-%e')"
            ));

        $datos = array();
        foreach ($partidos as $partido) {
            if (isset($partido->resultado)) {
                $goles = explode('-', $partido->resultado);
                $partido->golesLocal = $goles[0];
                $partido->golesVisitante = $goles[1];
            } else {
                $partido->golesLocal = 0;
                $partido->golesVisitante = 0;
            }
            array_push($datos, $partido);
        }
        return $datos;
    }

    // Devuelve los partidos ordenamos por fecha
    function getAllByEquipo($idEquipo)
    {
        $this->load->module('equipos');
        $this->load->module('estadios');

        //query recupera el listado de todos los partidos ordenados por fecha
        $partidos = $this->get(array('select' => "partidos.id, DATE_FORMAT(partidos.fecha, '%Y-%c-%e') AS fecha, DATE_FORMAT(partidos.fecha, '%k:%i') AS hora, partidos.estado, nombre_estadio AS estadio_nombre, partidos.resultado, ( SELECT equipos_campeonato.short_name FROM equipos_campeonato WHERE equipos_campeonato.id = partidos. LOCAL ) AS local_corto, ( SELECT equipos_campeonato.short_name FROM equipos_campeonato WHERE equipos_campeonato.id = partidos.visitante ) AS visitante_corto, partidos.nombre_local, partidos.nombre_visitante",
            'where' => array("visitante"=>$idEquipo),
            'order_by' => 'partidos.fecha ASC'
        ));

        $partidosLocal = $this->get(array('select' => "partidos.id, DATE_FORMAT(partidos.fecha, '%Y-%c-%e') AS fecha, DATE_FORMAT(partidos.fecha, '%k:%i') AS hora, partidos.estado, nombre_estadio AS estadio_nombre, partidos.resultado, ( SELECT equipos_campeonato.short_name FROM equipos_campeonato WHERE equipos_campeonato.id = partidos. LOCAL ) AS local_corto, ( SELECT equipos_campeonato.short_name FROM equipos_campeonato WHERE equipos_campeonato.id = partidos.visitante ) AS visitante_corto, partidos.nombre_local, partidos.nombre_visitante",
            'where' => array("local"=>$idEquipo),
            'order_by' => 'partidos.fecha ASC'
        ));


        $datos = array();
        foreach ($partidos as $partido) {
            if (isset($partido->resultado)) {
                $goles = explode('-', $partido->resultado);
                $partido->golesLocal = $goles[0];
                $partido->golesVisitante = $goles[1];
            } else {
                $partido->golesLocal = 0;
                $partido->golesVisitante = 0;
            }
            array_push($datos, $partido);
        }
        foreach ($partidosLocal as $partido) {
            if (isset($partido->resultado)) {
                $goles = explode('-', $partido->resultado);
                $partido->golesLocal = $goles[0];
                $partido->golesVisitante = $goles[1];
            } else {
                $partido->golesLocal = 0;
                $partido->golesVisitante = 0;
            }
            array_push($datos, $partido);
        }
        return $datos;
    }

    // Devuelve los partidos ordenamos por fecha
    function getAllByToday()
    {
        $this->load->module('equipos');
        $this->load->module('estadios');

        //query recupera el listado de todos los partidos ordenados por fecha
        $partidos = $this->get(array('select' => "partidos.id, DATE_FORMAT(partidos.fecha, '%Y-%c-%e') AS fecha, DATE_FORMAT(partidos.fecha, '%k:%i') AS hora, partidos.estado, nombre_estadio AS estadio_nombre, partidos.resultado, ( SELECT equipos_campeonato.short_name FROM equipos_campeonato WHERE equipos_campeonato.id = partidos. LOCAL ) AS local_corto, ( SELECT equipos_campeonato.short_name FROM equipos_campeonato WHERE equipos_campeonato.id = partidos.visitante ) AS visitante_corto, partidos.nombre_local, partidos.nombre_visitante",
            'order_by' => 'partidos.fecha ASC'
            ));

        $datos = array();
        foreach ($partidos as $partido) {
            if (isset($partido->resultado)) {
                $goles = explode('-', $partido->resultado);
                $partido->golesLocal = $goles[0];
                $partido->golesVisitante = $goles[1];
            } else {
                $partido->golesLocal = 0;
                $partido->golesVisitante = 0;
            }
            array_push($datos, $partido);
        }
        return $datos;
    }

    // partido mas cercano que no este en estado 'No Iniciado'
    function getLastGames($limit)
    {
        $this->load->module('equipos');
        $query = array(
            'select' => '*, UNIX_TIMESTAMP(fecha) as fechas',
            'where' => array('estado != ' => 0),
            'order_by' => 'fecha desc',
            'limit' => $limit
        );
        $datos = array();
        $partidos = $this->get($query);
        foreach ($partidos as $partido) {
            $equipoLocal = $this->equipos->get(array('select' => 'id, nombre, bandera', 'where' => array('id' => $partido->local)), TRUE);
            $equipoVisitante = $this->equipos->get(array('select' => 'id, nombre, bandera', 'where' => array('id' => $partido->visitante)), TRUE);
            if ($equipoLocal && $equipoVisitante) {
                $partido->estadoDescripcion = $this->estados_desc[$partido->estado];
                $partido->local = $this->equipos->get(array('select' => 'id, nombre, bandera, continente, corto, bandera, uniforme, alterno', 'where' => array('id' => $partido->local)), TRUE);
                $partido->visitante = $this->equipos->get(array('select' => 'id, nombre, bandera, continente, corto, bandera, uniforme, alterno', 'where' => array('id' => $partido->visitante)), TRUE);
                $goles = explode('-', $partido->resultado);
                $partido->glocal = $goles[0];
                $partido->gvisitante = $goles[1];
                array_push($datos, $partido);
            }
        }
        return $datos;
    }

}