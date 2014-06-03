<?php
class Equipos_campeonato extends MY_Controller{	
	
	public $model = 'mdl_equipos_campeonato';

	public function __construct(){
		parent::__construct();				
	}
	
	public function index(){
						
	}

    public function viewEquiposBanderas(){
        $data['equipos'] = $this->mdl_equipos_campeonato->list_equipos ();
        return $this->load->view( 'view_banderas_equipo', $data, true );
    }
	
	function sync(){

		 $xmlRankingDir = scandir(AFP_HARD_ROOT_FILE . "httpdocs");
        $numXml = count($xmlRankingDir);
        for ($i = 0; $i < $numXml; $i++) {
            $mystring = $xmlRankingDir[$i];
            $findme = 'FootballTeams_Comp';
            $pos = strpos($mystring, $findme);
            // Nótese el uso de ===. Puesto que == simple no funcionará como se espera
            // porque la posición de 'a' está en el 1° (primer) caracter.
            if ($pos === false) {
                //echo "La cadena '$findme' no fue encontrada en la cadena '$mystring'";
            } else {
                $xmlRanking[$i] = $xmlRankingDir[$i];
                $this->importData('httpdocs/' . $xmlRanking[$i]);
                // echo "La cadena '$findme' fue encontrada en la cadena '$mystring'";
                //echo " y existe en la posición $pos";
            }
        }


		//echo "<pre>";
		//$this->importData('httpdocs/FootballTeams_Comp8_ID56666059_es.xml');
		//echo "</pre>";
	}
	
	function importData( $xml ){
		// Cargo los modulso que necesito		
		$pathXml = implode( "/", explode( "/", $xml, -1 ) ); //Extraigo el path para cuando envien el archivo sin path
		$xml = AFP_XML . $xml; //Inicializo de que seccion y que xml voy a sacar los datos
		$data = ( $this->xmlimporter->load($xml) ) ? $this->xmlimporter->parse() : FALSE; //Realizo el parseo del xml		
		$teams = $data->Teams->Team; //Limito mi objeto a los datos necesarios
		foreach( $teams as $team ){
			$teamData = $this->_check_exist( array( 'afp_id' => $team->n_TeamID ), TRUE );
			//echo (string)$team->c_PublicName."  ". (string)$team->c_PublicNameShort."<br>";
			if( !$teamData ){
				$team_insert = array( 'afp_id' => $team->n_TeamID, 'name' => (string)$team->c_PublicName, 'short_name' => (string)$team->c_PublicNameShort );				
				$this->_insert( $team_insert );
			}
		}
	}
}