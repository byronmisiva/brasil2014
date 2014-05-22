 <div class="row separadorTop">
     <div class="col-md-12 cabecera-grupo">                        
      	<div class="flotar_iz">Lo más leido</div>
        </div>                
  </div>
 <div class="row separadorTop">
<?php 
foreach ($noticias as $noticia){
	if (isset($noticia->imagenes->ftp_visu)){?>
	<div class="row noticia-mas-leida-fila">
		<div class="col-md-4 imagen-mas-leido">		
				<img src="<?php echo  $noticia->imagenes->ftp_visu?>" width="100%" />
		</div>
		<div class="col-md-8 sin-padding-laterales">
			<div class="titulo-mas-lieda">
			 <a	href="<?php echo base_url();?>site/noticia/<?php echo strtolower($this->partidos->_clearStringGion($noticia->titulo)).'/'.$noticia->id; ?>"
							class="titulo-noticia-link">
							<?php echo  $noticia->titulo?></a>
			</div>
			<div class="texto-mas-lieda"><?php echo substr($noticia->cuerpo, 0, 100)."...";?></div>
			<a	href="<?php echo base_url();?>site/noticia/<?php echo strtolower($this->partidos->_clearStringGion($noticia->titulo)).'/'.$noticia->id; ?>"
							class="titulo-noticia-link btn-ver-mas">
			</a>
			
		</div>
	</div>	
	<?php }?>			
<?php }	?>			
</div>

