
	<div class="row separadorTop sin-padding-laterales">
		<div class="col-md-12 sin-padding-laterales">
			<div class="carousel-noticias">
				<div id="carousel-Noticias">
	<?php 
		foreach($noticias as $noticia){
			if (isset($noticia->imagenes->ftp_visu)){?>			
				<img class="img-responsive center-block" src="<?php echo $noticia->imagenes->ftp_visu ?>" />
		<?php }
		}?>			
	</div>
				<div id="opcines-thumb">
		<?php
		$x=0; 
		foreach($noticias as $noticia){
			if (isset($noticia->imagenes->ftp_visu)){?>	  		
			<img class="img-responsive center-block thumbNoticia"
						id="item-<?php echo $x;?>" width="100px"
						src="<?php echo $noticia->imagenes->ftp_visu ?>" />
		<?php }
		$x++;
		}?>
	</div>
			</div>

		</div>
	</div>


