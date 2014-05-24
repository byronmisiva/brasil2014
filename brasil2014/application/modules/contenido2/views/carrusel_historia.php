<div class="col-md-12">
	<div class="carrusel-historia">
		<div id="carrusel-historia">
	<?php foreach ($historias as $historia){?>
	<?php if (isset($historia->imagenes->thumb250)){?>
			<div class="slideEstadio" style="background-image: url('<?php echo  $historia->imagenes->thumb250?>');background-size:100% 100%; ">
					<div class="tituloSidebar">Historia</div>
					<div class="nombreSidebar"><?php echo $historia->titulo;?></div>				
			</div>
				<?php }?>
	<?php }	?>
		</div>
		
		
	</div>
	<div class="opcines-thumb-sidebar historia" >			  		
			<img class="img-responsive center-block flechaSidebar" id="siguienteHistoria" src="<?php echo base_url('assets/images/flecha_izquierda.png')?>" />
			<img class="img-responsive center-block flechaSidebar second" id="anteriorHistoria" src="<?php echo base_url('assets/images/flecha_derecha.png')?>" />
	</div>	
</div>


