<!-- Galería estadios  -->
<div class="col-md-6 margen0 estadios">
    <div class="col-md-12 margen0l">
        <h2>
            <div class="iconos sprite-icono_estadios"></div>
            Estadios
        </h2>
        <hr class="cabecera">
    </div>
    <div class="clearfix"></div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Controls -->
        <a  href="#carousel-example-generic" data-slide="prev" data-slide-to="1">
            <div class="col-md-6 gris">
                <
            </div>
        </a>
        <a  href="#carousel-example-generic" data-slide="next"data-slide-to="1">
            <div class="col-md-6 text-right gris">
                >
            </div>
        </a>
        <div class="clearfix"></div>
          <!-- Wrapper for slides -->
        <div class="carousel-inner">
        <?php 
          $cont=0;
          foreach ($datosEstadio as $row){ 
          if($cont==0){?>
            <div class="item active">
	              <?php 
		              foreach ($row['imagenes'] as $imag){ 
			               if(!empty($imag[0])){?>
			                <img src="<?php echo $imag[0]->ftp_visu;?>" alt="<?php echo $row['nombre'];?>" class="img-responsive margin-bottom-20">
			                <?php }else{ 
			                  echo "no imagen";
			                 }
		                }  
	                 ?>
	             <!-- Controls -->
         <div class="col-md-6 gris"><a  href="#carousel-example-generic" data-slide="prev" data-slide-to="1"><</a></div>
        <div class="col-md-6 text-right gris"><a  href="#carousel-example-generic" data-slide="next"data-slide-to="1">></a> </div>  
                <div class="col-md-12 margen0l conten">
                    <h3><?php echo $row['nombre'];?></h3>
                   Ubicado en la ciudad de <?php echo $row['ciudad'];?>, cuenta con la capacidad máxima de <?php echo $row['capacidad'];?> personas y pertenece al club deportivo <?php echo $row['club'];?>
                </div>
            </div>
           <?php }else{ ?>
           	<div class="item">
           	<?php
           	foreach ($row['imagenes'] as $imag){
           				               if(!empty($imag[0])){?>
           				                <img src="<?php echo $imag[0]->ftp_visu;?>" alt="<?php echo $row['nombre'];?>" class="img-responsive margin-bottom-20">
           				                <?php }else{ 
           				                  echo "no imagen";
           				                 }
           			                }  
           		                 ?>
           		                  <!-- Controls -->
         <div class="col-md-6 gris"><a  href="#carousel-example-generic" data-slide="prev" data-slide-to="1"><</a></div>
        <div class="col-md-6 text-right gris"><a  href="#carousel-example-generic" data-slide="next"data-slide-to="1">></a> </div>  
           	                <div class="col-md-12 margen0l conten">
           	                    <h3><?php echo $row['nombre'];?></h3>
           	                    Ubicado en la ciudad de <?php echo $row['ciudad'];?>, cuenta con la capacidad máxima de <?php echo $row['capacidad'];?> personas y pertenece al club deportivo <?php echo $row['club'];?>
                </div>
           	            </div>
          <?php  }
           $cont++;
          }
          ?>
        </div>
    </div>
</div>
<div class="separador col-md-12"></div>
