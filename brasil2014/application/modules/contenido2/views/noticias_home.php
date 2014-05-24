
 <div class="row separadorTop sin-padding-laterales">
     <div class="col-md-12 cabecera-grupo">                        
      	<div class="flotar_iz">Más Noticias</div>
        </div>                
 </div>
  
  	<div class="row separadorTop fondo-transparente sin-padding-laterales">
     	<div class="col-md-12 sin-padding-laterales">    
			<?php 
			$this->load->module ( "partidos" );
			$x=0;
			foreach($noticias as $noticia){		
				 //if (isset($noticia->imagenes->ftp_visu)){
				 	$x++; 			
			 	//if($x==2 || $x==3){?>
				  <div class="col-md-6 sin-padding-laterales">
			          <div class="row noticia ">
			             <div class="col-sm-12 imagen-la-noticia sin-padding-laterales">
			                 <img class="img-responsive margin-bottom-20 " src="<?php echo $noticia->imagenes->ftp_visu?>" alt="<?php echo $noticia->titulo?>" width="285" />
			              </div>              
			          </div>
			          <div class="row noticia ">
			          <div class="col-sm-12 texto-la-noticia">
			             <a	href="<?php echo base_url();?>site/noticia/<?php echo strtolower($this->partidos->_clearStringGion($noticia->titulo)).'/'.$noticia->id; ?>"
							class="titulo-noticia-link"> <h2><?php echo $noticia->titulo?></h2></a>
			                  <p><?php echo substr($noticia->cuerpo, 0, 150)."..."; ?></p>
			                   <a	href="<?php echo base_url();?>site/noticia/<?php echo strtolower($this->partidos->_clearStringGion($noticia->titulo)).'/'.$noticia->id; ?>"
									class="titulo-noticia-link">Ver más
			                     <spam class="boton-more-mini">></spam>
			                   </a>
			               </div>
			          </div>
			     </div>
				 	<?php 	
				  	}				 	
				 //}
				//}				
			?>
 		</div>
   </div>
<!--    Noticias Home
<div class="panel panel-default panel-noticias">
    <div class="panel-body">

			<div class="col-md-12 cabecera-noticia">
				<div class="flotar_iz">Noticias</div>                
			</div>
			
            <?php
            for ($i = 0; $i < 4; $i++) {
                ?>
                <div class="col-md-6">
                    <div class="row noticia ">
                        <div class="col-sm-4  margen5r">
                            <img class="img-responsive " src="../imagenes/temp/content-noticia-2.jpg"
                                 alt="">
                        </div>
                        <div class="col-sm-8   margen5l ">
                            <h3>Cabecera Noticia. Lorem ipsum dolor</h3>

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                viverra.</p>
                            <a href="#" class=" pull-right">Ver más
                                <spam class="boton-more-mini">></spam>
                            </a>

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="col-md-12">
                <a href="#" class="boton-more">Ver todas las noticias</a>
            </div>
        </div>
    </div>
</div>
<!--    Fin Noticias Home -->
