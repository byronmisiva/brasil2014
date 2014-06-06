<head>
<title>Streaming Servisky</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>
<script type="text/javascript">
	var streamId = "2000";
	var useHLS = false;
	var embedPath = "http://origin.elcanaldelfutbol.com/embed";
	var turnOnDVR = true;
	if(useHLS == true) {
		turnOnDVR = false;
	}
	$.getScript(embedPath+"/embed.js");
</script>
</head>
<body>
Prueba
<div id="player"></div>
</body>