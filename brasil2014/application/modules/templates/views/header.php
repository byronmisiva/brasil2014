<!DOCTYPE html>
<html lang="en-us" xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <?php header ('Content-type: text/html; charset=utf-8');?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Facebook TAGS-->
    <meta property="og:title" content="Movistar Mundialista"/>
    <meta property="og:url" content="http://www4.movistar.com.ec/FIFAWorldCup/"/>
    <meta property="og:site_name" content="JefeQuieroVerElFútbol"/>
    <meta property="og:type" content="site"/>
    <meta property="og:image" content="http://www4.movistar.com.ec/FIFAWorldCup/assets/images/logo-movistar.png"/>

    <!--SEO TAGS-->
    <meta name="Title" content="Movistar Mundialista">
    <meta name="description" content="Movistar, Compartida, la vida es más, y ahora puedes disfrutar del Mundial Brasil 2014 con partidos en vivo, noticias, goles, resultados. Vive la experiencia Mundialista">
    <meta name="keywords" content="Movistar, Movistar Ecuador,Mundial, Brasil, Mundial Brasil, Partidos, Partidos Ecuador, Football Ecuador, Partidos en Vivo, Futbol, Mundialista, Movistar Mundialista, Jefe, Ver futbol, futbol online">

    <title><?php echo $pageTitle ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/brasil.css') ?>" rel="stylesheet">
     <link href="<?php echo base_url('assets/css/jquery.countdown.css') ?>" rel="stylesheet">

    <!-- ColorBox -->
    <link rel="stylesheet" href="<?php echo base_url('assets/js/colorbox/colorbox.css') ?>"/>

    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico') ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <script>
     var baseUrl="<?php echo base_url(); ?>";
    </script>

    <script type='text/javascript'>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
        (function() {
            var gads = document.createElement('script');
            gads.async = true;
            gads.type = 'text/javascript';
            var useSSL = 'https:' == document.location.protocol;
            gads.src = (useSSL ? 'https:' : 'http:') +
                '//www.googletagservices.com/tag/js/gpt.js';
            var node = document.getElementsByTagName('script')[0];
            node.parentNode.insertBefore(gads, node);
        })();
    </script>

    <script type='text/javascript'>
        googletag.cmd.push(function() {

            googletag.defineSlot('/1022247/650x90_MOVISTAR_MUDIAL2', [650, 90], 'div-gpt-ad-1401308050240-1').addService(googletag.pubads());
            googletag.defineSlot('/1022247/650X90_MOVISTAR_MUNDIAL', [650, 90], 'div-gpt-ad-1401308050240-2').addService(googletag.pubads());



            googletag.defineSlot('/1022247/320X50_MOVISTAR_MUNDIAL_BOTTOM', [320, 50], 'div-gpt-ad-1401400694784-0').addService(googletag.pubads());
            googletag.defineSlot('/1022247/320x50_MOVISTAR_MUNDIAL_TOP', [320, 50], 'div-gpt-ad-1401400694784-1').addService(googletag.pubads());


            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });
    </script>
</head>
<?php base_url('site/historias/'); ?>
<body>