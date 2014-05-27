<?php
$this->load->module("partidos");
setlocale(LC_ALL, "es_ES");
if( 	$ajax ){
?>
  <div class="col-md-12">
                            <spam class="col-md-2 movi-headline-regular en-vivo-prox">Próximo Partido</spam>
                            <spam class="col-md-4 movi-headline-regular text-center cor-partidos margen0">
                            	<?php 
                            	echo strtoupper(substr($partidos['nombre_local'],0, 3)) . " - " . strtoupper(substr($partidos['nombre_visitante'],0, 3));
                            	//$mes = 13 - (int) strftime("%m", strtotime($partidos['fecha']));
                                //$fechaPartido=strftime("%Y,12-$mes,%d, %H, %M", strtotime($partidos['fecha']));
                                //$fecha=explode(',', $fechaPartido);
                          
                                ?>
                              </spam>
							<script>
								$(function () {
									
									var austDay = new Date(<?php echo strtotime($partidos['fecha'])*1000;?>);
									$('#defaultCountdown').countdown({until: austDay, format: 'dHM'});
								});
								</script>
						
							 <div id="defaultCountdown" class="col-md-6 movi-headline-regular en-vivo-mini text-center margen0"></div> 
                           
 </div>
  <? } ?>
<!-- Listado de partidos del Día-->