<?php
class Contenido extends MY_Controller{	
	
	public $model = 'mdl_contenido';

	public function __construct(){
		parent::__construct();
	}


    public function banner_sidebar( $data = FALSE ){
        return $this->load->view( 'bannersidebar', $data, TRUE );
        //todo crear banner slideBar
    }
    public function view_banner_contenido( $data = FALSE ){
        return $this->load->view( 'bannercontenido', $data, TRUE );
        //todo crear banner viewBannerContenido
    }
    public function view_twitter( $data = FALSE ){
        return $this->load->view( 'twitter', $data, TRUE );
        //todo crear banner viewBannerContenido
    }

    public function view_sedes( $data = FALSE ){
        return $this->load->view( 'sedes', $data, TRUE );
        //todo crear banner viewSedes
    }

    public function view_estadios( $data = FALSE ){
        return $this->load->view( 'estadios', $data, TRUE );
        //todo crear banner viewEstadios
    }

    public function view_trivia( $data = FALSE ){
        return $this->load->view( 'trivia', $data, TRUE );
        //todo crear banner viewTrivia
    }

    public function view_goleadores( $data = FALSE ){
        return $this->load->view( 'goleadores', $data, TRUE );
        //todo crear banner viewGoleadores
    }

    public function view_historia_home( $data = FALSE ){
        return $this->load->view( 'noticiashome', $data, TRUE );
        //todo crear banner view_historia_home
    }

   public function view_noticias_equipo( $idequipo , $nombreEquipo){
       $data  = array("nombre_equipo"=>$nombreEquipo);
        return $this->load->view( 'noticiasequipo', $data, TRUE );
        //todo crear banner view_historia_home
    }


	

	
	public function view_historia(){
		$this->load->module('imagenes');
		$equipoQuery['select'] = '*';
		$equipoQuery['where'] = array( 'type' => 'historia' );
		$equipoQuery['paginate'] = TRUE;
		$equipoQuery['limit'] = $this->uri->segment(3);
		$equipoQuery['offset'] = 1;
		$this->mdl_contenido->page_config = array(
				'base_url'			=>	base_url('site/historias/'),
				'per_page'			=>	1,
				'num_links'			=>	1
		);
		$data['historia'] = $this->get( $equipoQuery, TRUE );
		$imagenesQuery['select'] = '*';
		$imagenesQuery['where'] = array( 'galerias_id' => $data['historia']->galerias_id );
		$imagenes = $this->imagenes->get($imagenesQuery);
		$data['historia']->imagenes = $imagenes;
		$data['links'] = $this->mdl_contenido->page_links;
		return $this->load->view( 'view_historia', $data, TRUE );
	}
	
	
	function sync_historias(){
		echo "<pre>";
		$this->data_model('WC/xml/es/histo/index');
		echo "</pre>";
	}
	
	private function data_model($xml){
		// Cargo los modulso que necesito
		$this->load->module('galerias');
		$this->load->module('imagenes');		
		$pathXml = implode( "/", explode( "/", $xml, -1 ) ); //Extraigo el path para cuando envien el archivo sin path		
		$xml = AFP_XML . $xml; //Inicializo de que seccion y que xml voy a sacar los datos
		$data = ( $this->xmlimporter->load($xml) ) ? $this->xmlimporter->parse() : FALSE; //Realizo el parseo del xml
		$data = $data->NewsItem->NewsComponent; //Limito mi objeto a los datos necesarios
		
		foreach( $data->NewsComponent as $node ){
			$type = (string) $node->DescriptiveMetadata->OfInterestTo->attributes();
			$titulocontenido = trim( (string) $node->NewsLines->HeadLine );
			//if( $type ==='Historia' ){							
				//Creo la galeria para la historia			
				if( !$this->galerias->_check_exist( array( 'nombre' => 'Historia - '.$titulocontenido ) ) ){
					$galeria = array( 'nombre' => 'Historia - '.$titulocontenido, 'publico' => 0 );				
					$galeria['id'] = $this->galerias->_insert( $galeria, NULL, FALSE );	 			
				}
				else{
					$galeria['id'] = $this->galerias->_check_exist( array( 'nombre' => 'Historia - '.$titulocontenido ), TRUE )->id;
				}				
				//Creo el contenido tipo historia
				if( !$this->mdl_contenido->get_by( array( 'titulo' => $titulocontenido ) ) ){
					$contenido = array( 'titulo' => $titulocontenido, 'galerias_id' => $galeria['id'], 'type' => 'historia' );				
					$idContenido = $this->mdl_contenido->save( $contenido, NULL, FALSE );
					$contenidoData = $this->_check_exist( array( 'titulo' => $titulocontenido ), TRUE );
				}
				else{
					$contenidoData = $this->_check_exist( array( 'titulo' => $titulocontenido ), TRUE );					
				}								
				$contenidoDetails = (string) $node->NewsItemRef->attributes();			
				
				$xml = AFP_XML.$pathXml.'/'.str_replace('.xml','',$contenidoDetails);			
				if( $this->xmlimporter->load( $xml ) ){					
					$data = $this->xmlimporter->parse();					
					$data = $data->NewsItem->NewsComponent;
					$fotos = 0;
					foreach ( $data->NewsComponent as $component ){
						if( isset($component->ContentItem->DataContent) ){
							$this->mdl_contenido->save( array( 'cuerpo' => implode( " ", (array)$component->ContentItem->DataContent->p ) ), $contenidoData->id, FALSE );												
						}
						else{
							$fotos++;
							$this->imagenes->_syncFotos( $component, array(
									'origen' => $pathXml.'/', //origen
									'destino' => strtolower( 'imagenes/contenido/' ), //destino
									'galerias_id' => $contenidoData->galerias_id, // id galeria
									'titulo' => "Historia - ".$titulocontenido." - ".$fotos // nombre de la foto
								)
							);							
						}						
					}
				}
			//}			
		}
	}	
	
	
	
	function sync_noticias(){
		echo "<pre>";
		$this->data_model_noticias('WC/xml/es/direct/news/FULLP/index');
		//$this->data_model_noticias('WC/xml/es/direct/news/BRA/index');
		//$this->data_model_noticias('WC/xml/es/direct/news/DEU/index');
		//$this->data_model_noticias('WC/xml/es/direct/news/XNG/index');
		echo "</pre>";
	}
	
	private function data_model_noticias($xml){
		// Cargo los modulso que necesito
		$this->load->module('galerias');
		$this->load->module('imagenes');
		$pathXml = implode( "/", explode( "/", $xml, -1 ) ); //Extraigo el path para cuando envien el archivo sin path
		$xml = AFP_XML . $xml; //Inicializo de que seccion y que xml voy a sacar los datos
		$data = ( $this->xmlimporter->load($xml) ) ? $this->xmlimporter->parse() : FALSE; //Realizo el parseo del xml
		echo "<pre>";
		//var_dump($data);
		echo "</pre>";
		$data = $data->NewsItem->NewsComponent; //Limito mi objeto a los datos necesarios	
		foreach( $data->NewsComponent as $node ){			
			$tituloNoticia = trim( (string) $node->NewsLines->HeadLine );
			
			//Creo la galeria para la noticia
			if( !$this->galerias->_check_exist( array( 'nombre' => 'Noticia - '.$tituloNoticia ) ) ){
				$galeria = array( 'nombre' => 'Noticia - '.$tituloNoticia, 'publico' => 0 );
				$galeria['id'] = $this->galerias->_insert( $galeria, NULL, FALSE );
			}
			else{
				$galeria['id'] = $this->galerias->_check_exist( array( 'nombre' => 'Noticia - '.$tituloNoticia ), TRUE )->id;
			}
			//Creo el contenido tipo noticia
			if( isset( $node->DescriptiveMetadata ) ){
				$shortName = $node->DescriptiveMetadata->Property;		
			
				foreach ( $shortName as  $row  ){
					if( (string) $row->attributes()->FormalName == "Sport" ){
						echo "<pre>";
						//var_dump((string)$row->attributes()->Value);
						$shortNameTeam=(string)$row->attributes()->Value;
						echo "</pre>";
					}	
				}	
			}

			
			if( !$this->mdl_contenido->get_by( array( 'titulo' => $tituloNoticia ) ) ){
				$contenido = array( 'titulo' => $tituloNoticia, 'galerias_id' => $galeria['id'], 'type' => 'noticia', 'ident_pais'=>$shortNameTeam );
				$idContenido = $this->mdl_contenido->save( $contenido, NULL, FALSE );
				$contenidoData = $this->_check_exist( array( 'titulo' => $tituloNoticia ), TRUE );
			}
			else{
				$contenidoData = $this->_check_exist( array( 'titulo' => $tituloNoticia ), TRUE );
			}
			$contenidoDetails = (string) $node->NewsItemRef->attributes();
			
			$xml = AFP_XML.$pathXml.'/'.str_replace('.xml','',$contenidoDetails);
			
			if( $this->xmlimporter->load( $xml ) ){
				$data = $this->xmlimporter->parse();
				$data = $data->NewsItem->NewsComponent;
				
				$fotos = 0;
				foreach ( $data->NewsComponent as $component ){
					
					if( isset($component->ContentItem->DataContent) ){
						$this->mdl_contenido->save( array( 'cuerpo' => implode( " ", (array)$component->ContentItem->DataContent->p ) ), $contenidoData->id, FALSE );
					}
					else{
						$fotos++;
						$this->imagenes->_syncFotos( $component, array(
								'origen' => $pathXml.'/', //origen
								'destino' => strtolower( 'imagenes/contenido/' ), //destino
								'galerias_id' => $contenidoData->galerias_id, // id galeria
								'titulo' => "Noticia - ".$tituloNoticia." - ".$fotos // nombre de la foto
						)
						);
					}
				}
			}
		}
	}
	
}