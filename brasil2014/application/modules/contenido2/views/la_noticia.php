<div class="row">
	<div class="row separadorTop sin-padding-laterales">
		<div class="col-md-12 cabecera-noticia-principal"></div>
	</div>
	<div class="row fondo-transparente padding-top padding-bottom">
		<div class="col-md-12"> 
		<?php
		$this->load->module ( "partidos" );
		foreach ( $noticias as $noticia ) {
			if (isset ( $noticia->imagenes->ftp_visu )) {
				?>	  
		       	<div class="col-md-6 imagen-la-noticia">
						<div class="row noticia ">
							<img class="img-responsive margin-bottom-20 "
								src="<?php echo $noticia->imagenes->ftp_visu?>"
								alt="<?php echo $noticia->titulo?>" width="285" />
						</div>
					</div>
					<div class="col-md-6 texto-la-noticia sin-padding-laterales">
						<a
							href="<?php echo base_url();?>site/noticia/<?php echo strtolower($this->partidos->_clearStringGion($noticia->titulo)).'/'.$noticia->id; ?>"
							class="titulo-noticia-link">
			         <?php echo $noticia->titulo?>
			         </a> </
						<p>
			            <?php echo substr($noticia->cuerpo, 0, 150)."..."; ?>
			         </p>		
					</div>		    
			<?php
				}
			}
			?>
		</div>
	</div>
</div>
