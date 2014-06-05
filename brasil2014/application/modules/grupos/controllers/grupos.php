<?php
class Grupos extends MY_Controller{	
	
	public $model = 'mdl_grupos';

	public function __construct(){
		parent::__construct();				
	}
	function getTableByFase(){
		$tableByFase = $this->mdl_grupos->getTableByFase();
		
		return $this->load->view ("tableByFase", array ("grupos" =>$tableByFase), TRUE );
	}
	function getTableGroupOpen(){
		$tableByFase = $this->mdl_grupos->getTableByFase();		
		return $this->load->view ("tableGroupOpen", array ("grupos" =>$tableByFase), TRUE );
	}
	
	
	function sync(){
		
		$xmlRankingDir = scandir(AFP_HARD_ROOT_FILE . "httpdocs/afp");
		$numXml = count($xmlRankingDir);
		for ($i = 0; $i < $numXml; $i++) {
			$mystring = $xmlRankingDir[$i];
			$findme = 'FootballCompetitions_ID';
			$pos = strpos($mystring, $findme);
			// Nótese el uso de ===. Puesto que == simple no funcionará como se espera
			// porque la posición de 'a' está en el 1° (primer) caracter.
			if ($pos === false) {
				//echo "La cadena '$findme' no fue encontrada en la cadena '$mystring'";
			} else {
				$xmlRanking[$i] = $xmlRankingDir[$i];
				$this->importData('httpdocs/afp/' . $xmlRanking[$i]);
				// echo "La cadena '$findme' fue encontrada en la cadena '$mystring'";
				//echo " y existe en la posición $pos";
			}
		}
		
		echo "<pre>";
		//$this->importData('WP2010/FootballCompetitions_ID56849371_en.xml');
		echo "</pre>";
	}
	
	function importData( $xml ){
		$this->load->module('fases');
		$xml = AFP_XML . $xml; // formo los nombres de los archivos en base a los afp_id de los equipos
		$data = ($this->xmlimporter->load($xml)) ? $this->xmlimporter->parse() : FALSE; //Realizo el parseo del xml
		foreach ( $data as $node ){ //Itero en las Fases y guardo
	foreach ( $node->Competition as $row ){ //Itero en las Fases y guardo
			if($row->n_CompetitionID=='8'){
				foreach ( $row->Phase as $phase ){ 	
				$isFase = (string)$phase->attributes()->IsMatrix;
				$faseName = (string)$phase->c_Phase;	
				if( $faseName == 'Fase de Grupos' ){
					$faseAfpId = (string)$phase->n_PhaseID;	
				}
				$grupoAfpId = (string)$phase->n_PhaseID;
				$grupoName = (string)$phase->c_Phase;
				
				if( $isFase == 'true'  ){
						if( !$this->_check_exist( array('afp_id' => $grupoAfpId ) ) ) {
							
							$fasesId = $this->fases->get(array('select' => 'id', 'where' => array('afp_id' => (string)$faseAfpId)), TRUE)->id; // cosulto las fases
							if($fasesId){
								$grupo = array( 'nombre' => $grupoName, 'afp_id' => $grupoAfpId, 'fases_id' => $fasesId);
							$this->_insert( $grupo );
							}else{
								echo "fase no existe";
							}
					}
				}elseif ($isFase == 'false' && $faseName!="Fase de Grupos"){
					
					if( !$this->_check_exist( array('afp_id' => $grupoAfpId ) ) ) {
							
						$fasesId = $this->fases->get(array('select' => 'id', 'where' => array('afp_id' => (string)$grupoAfpId)), TRUE)->id; // cosulto las fases
						if($fasesId){
							$grupo = array( 'nombre' => $grupoName, 'afp_id' => $grupoAfpId, 'fases_id' => $fasesId);
							$this->_insert( $grupo );
						}else{
							echo "fase no existe";
						}
					}
				}
				
				}
			}

			}
		 }
	}
}