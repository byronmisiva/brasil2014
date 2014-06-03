<?php
class Fases extends MY_Controller{	
	
	public $model = 'mdl_fases';

	public function __construct(){
		parent::__construct();				
	}
	
	function getFasebyGrupo( $id, $single = TRUE ){
		$query = array(
				'select' => 'fases.*',
				'where' => array( 'grupos.id' => $id ),
				'joins'	=> array( 'grupos' => array( 'grupos.fases_id = fases.id' ) )
				);
		return $this->get( $query, $single );		
	}
	
	
	function sync(){
		
		$xmlRankingDir = scandir(AFP_HARD_ROOT_FILE . "httpdocs");
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
				$this->importData('httpdocs/' . $xmlRanking[$i]);
				// echo "La cadena '$findme' fue encontrada en la cadena '$mystring'";
				//echo " y existe en la posición $pos";
			}
		}
		
		echo "<pre>";
		//$this->importData('WP2010/FootballCompetitions_ID56849371_en.xml');
		echo "</pre>";
	}
	
	function importData( $xml ){		
		$xml = AFP_XML . $xml; // formo los nombres de los archivos en base a los afp_id de los equipos
		$data = ($this->xmlimporter->load($xml)) ? $this->xmlimporter->parse() : FALSE; //Realizo el parseo del xml
		
		foreach ( $data as $node ){ //Itero en las Fases y guardo
			foreach ( $node->Competition as $row ){ //Itero en las Fases y guardo
				if($row->n_CompetitionID=='8'){
					foreach ( $row->Phase as $phase ){
						$isFase = (string)$phase->attributes()->IsMatrix;
						$faseAfpId = (string)$phase->n_PhaseID;
						$fasesName = (string)$phase->c_Phase;
						if( $isFase === 'false' ){
							$fase = array( 'afp_id' => $faseAfpId, 'nombre' => $fasesName );
							if( !$this->_check_exist( array('afp_id' => $faseAfpId ) ) ) {
								$this->_insert( $fase );
							}
						}
							
					}
				}
					
					
			}
		}
	}
}