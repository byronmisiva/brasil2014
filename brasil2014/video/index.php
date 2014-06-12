<head>
<title>Streaming Servisky</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"> </script>
<script type="text/javascript">
	var eventsPath = "http://static.elcanaldelfutbol.com";
                        var embedWidth = "100%";
                        var embedHeight = "80%";
                        $( document ).ready(function() {
                            var eventsPath = "http://static.elcanaldelfutbol.com";
                            $.getScript(eventsPath+"/events.js", function(data, textStatus, jqxhr) {

                                jQuery.support.cors = true;
                                jQuery.ajaxSetup({ cache: true });
                                streamId = <?php echo 241; ?>;
                                isLiveEmbed = getURLParameter('vod') == null;
                                $( "#container" ).html("<div id='player'></div>");
                                $( "#container" ).show();
                                loadPlayer();
                            });
                        });
</script>
</head>
<body>
 
<div id="player"></div>
<div id="brand"><div id="logo"></div></div>
</body>
<style TYPE="text/css">
	body {
		margin:0 ; padding :0
	}
	#brand {
		width: 100%;
		height: 97px;
		float: left;
		background: url("video-fullscreen.jpg") repeat-x scroll 0 0;
	}

	#logo {
		width: 178px;
		height: 39px;
		 
		margin: 30px auto;
		background: url("logo-movistar.png") ;
		 

	}
</style>