<div class="row fondo-noticia-abierta">
<?php 
foreach($noticias as $noticia){		
	 if (isset($noticia->imagenes->ftp_visu)){?>	 
       
        <div class="col-md-12 texto-la-noticia_abierta noticia">
       	 <img class="img-responsive margin-bottom-20 imagen-noticia-abierta" src="<?php echo $noticia->imagenes->ftp_visu?>" alt="<?php echo $noticia->titulo?>" width="285" />
			 <h2><?php echo $noticia->titulo?></h2>
	         <p>
	            <?php echo $noticia->cuerpo?>
	         </p>	     
        </div>
<?php	 	
	 }
	}	
?>
</div>