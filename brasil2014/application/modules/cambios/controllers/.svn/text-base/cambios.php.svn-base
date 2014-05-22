<?php
class Cambios extends MY_Controller{	
	
	public $model = 'mdl_cambios';

	public function __construct(){
		parent::__construct();
		$this->load->model( $this->model );
	}	
	
	function _insert( $data ){		
		$aux = $this->get( array( 'select' => '*',
				'where' => array(
						'sale_id' => $data['sale_id'],
						'partidos_id' => $data['partidos_id'],
						'entra_id' => $data['entra_id'],
						'minuto' => $data['minuto'] ) ), TRUE );
		if( !$aux ){
			$this->mdl_cambios->save( $data, NULL );
		}
		else{
			$this->mdl_cambios->save( $data, $aux->id );
		}
	}
	
	function getCambiosByPartidoAndEquipo( $partido, $equipo ){
		return $this->mdl_cambios->getAlineacionByPartidoAndEquipo( $partido, $equipo );
	}
}