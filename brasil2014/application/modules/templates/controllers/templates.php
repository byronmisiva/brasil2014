<?php
class Templates extends MX_Controller{

	public function __construct(){
		parent::__construct();		
	}
	
	public function _index( $data = FALSE ){

		$this->load->view( 'index', $data );
	}


	public function demoTemplate( $data = FALSE ){
		$this->load->view( 'demo', $data );
	}


}