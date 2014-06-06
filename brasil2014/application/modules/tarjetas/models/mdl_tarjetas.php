<?php
class Mdl_tarjetas extends MY_Model{
	
	public $table_name = "tarjetas";	
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

	public function __construct(){
		parent::__construct();		
	}
	
	function getTarjetasByPartidoAndEquipo( $partido, $equipo ){	
		$query = array(
				'select' => '*',
				'where' => array( 'partidos_id' => $partido, 'equipos_campeonato_id' => $equipo ),
				'order_by' => 'minuto asc' );	
		return $this->get( $query );
	}
}