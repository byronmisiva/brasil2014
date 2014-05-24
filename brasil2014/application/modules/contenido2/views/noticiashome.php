<!--    Noticias Home -->
<div class="panel panel-default panel-noticias">
    <div class="panel-body">
        <div class="row">            
            <div class="col-md-12">
                <div class="row noticia">
                    <div class="col-md-6 margen5r">
                        <img class="img-responsive margin-bottom-20" src="../imagenes/temp/content-notica-1.jpg" alt="">
                    </div>
                    <div class="col-md-6 margen5l">
                        <h3>Un día en la recuperación del Tigre Radamel Falcao.</h3>

                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                            viverra
                            turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                            felis in faucibus.</p>
                        <a href="#" class=" pull-right">Ver más
                            <spam class="boton-more-mini">></spam>
                        </a>
                    </div>
                </div>
            </div>
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
