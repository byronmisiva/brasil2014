<!DOCTYPE html>
<html lang="en-us" xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            googletag.defineSlot('/1022247/300X250_MOVISTAR_MUNDIAL', [300, 250], 'div-gpt-ad-1401308050240-0').addService(googletag.pubads());
            googletag.defineSlot('/1022247/650x90_MOVISTAR_MUDIAL2', [650, 90], 'div-gpt-ad-1401308050240-1').addService(googletag.pubads());
            googletag.defineSlot('/1022247/650X90_MOVISTAR_MUNDIAL', [650, 90], 'div-gpt-ad-1401308050240-2').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });
    </script>
</head>
<?php base_url('site/historias/'); ?>
<body>