<?php /*
$x=0;
foreach($noticias as $noticia){		
	 if (isset($noticia->imagenes->ftp_visu)){
	 	$x++;?> 			
 	
	  <div class="col-md-6">
          <div class="row noticia ">
             <div class="col-sm-12 imagen-la-noticia">
                 <img class="img-responsive margin-bottom-20 " src="<?php echo $noticia->imagenes->ftp_visu?>" alt="<?php echo $noticia->titulo?>" width="285" />
              </div>              
          </div>
          <div class="row noticia ">
          <div class="col-sm-12 texto-la-noticia">
                  <h2><?php echo $noticia->titulo?></h2>
                  <p><?php echo $noticia->cuerpo?></p>
                   <a href="#" class=" pull-right">Ver más
                     <spam class="boton-more-mini">></spam>
                   </a>
               </div>
          </div>
     </div>
	 	<?php 	
	 	
	 }
	}
	*/
?>

<?php 
foreach ($noticias as $noticia){
	if (isset($noticia->imagenes->ftp_visu)){?>
	
		<div class="col-md-5">		
				<img src="<?php echo  $noticia->imagenes->ftp_visu?>" width="100%" />
			</div>
		<div class="col-md-8 sin-padding-laterales">
			<div class="titulo-mas-lieda"><?php echo  $noticia->titulo?></div>
			<div class="texto-mas-lieda"><?php echo  $noticia->cuerpo?></div>
			<div class="btn-ver-mas"></div>
		</div>
		
	<?php }?>			
<?php }	?>	
