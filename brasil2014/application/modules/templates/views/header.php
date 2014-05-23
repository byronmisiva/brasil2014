<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/brasil.css') ?>" rel="stylesheet">

    <!-- ColorBox -->
    <link rel="stylesheet" href="<?php echo base_url('assets/js/colorbox/colorbox.css') ?>"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php base_url('site/historias/'); ?>
<body>
<div class="header">
    <div class="container ">
        <div class="row fondo-header ">
            <!--Logos y slogan-->
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 ">
                <div class="slogan"><img src="<?php echo base_url('assets/images/slogan-movistar.png'); ?>"></div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 text-right">
                <div class="logo"><a href=""><img src="<?php echo base_url('assets/images/logo-movistar.png'); ?>"></a></div>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12  margen0">
                <div class="col-md-4    margen0">
                    <div class="slogan activemenu"><a href="<?php echo base_url('site/home')?>"> <img src="<?php echo base_url('assets/images/botonhome.png'); ?>"></a></div>
                    <div class="margen0 en-vivo">
                        <div class="col-md-12 en-vivo-content margen0">
                            <spam class="col-md-3 movi-headline-regular en-vivo-prox">Próximo Partido</spam>
                            <spam class="col-md-6 movi-headline-regular text-center">BRA - CRO</spam>
                            <spam class="col-md-3 movi-headline-regular en-vivo-mini text-center margen0">08:24:36
                            </spam>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 margen0">
                    <div class="row">
                        <div id="header-tabs" class="col-md-12 nav nav-tabs movi-headline-regular tab-videos ">

                                <div class="col-md3  col-md-3 menu margen0 ">
                                    <a href="#otros-partidos" data-toggle="tab">
                                    <div class="opcion-menu col-md-12">
                                        <div class="menu-texto">
                                            <div class="iconos sprite-icono_partidos"></div>
                                            Partidos
                                        </div>
                                    </div>
                                    </a>
                                </div>


                                <div class="col-md3  col-md-3 menu margen0 ">
                                    <a href="#otros-partidos" data-toggle="tab">
                                    <div class="opcion-menu center-block col-md-12">
                                        <div class="menu-texto">
                                            <div class="iconos sprite-icono_goles"></div>
                                            Goles
                                        </div>
                                    </div>
                                    </a>
                                </div>

                                <div class="col-md3  col-md-3 menu margen0 ">
                                    <a href="#otros-partidos" data-toggle="tab">
                                    <div class="opcion-menu center-block col-md-12">
                                        <div class="menu-texto">
                                            <div class="iconos sprite-icono_contenido-exclusivo"></div>
                                            Especiales
                                        </div>
                                    </div>
                                    </a>
                                </div>

                                <div class="col-md3  col-md-3 menu margen0 ">
                                    <a href="<?php echo base_url('site/calendario')?>" >
                                    <div class="opcion-menu center-block col-md-12">
                                        <div class="menu-texto">
                                            <div class="iconos sprite-icono-calendario"></div>
                                            Calendario
                                        </div>
                                    </div>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
