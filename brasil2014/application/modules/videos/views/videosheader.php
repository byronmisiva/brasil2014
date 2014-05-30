
<div class="tab-content contenedor-videos">
     <script type="text/javascript">

        $( document ).ready(function() {
            var streamId = "2000";
            var useHLS = false;
            var embedPath = "http://origin.elcanaldelfutbol.com/embed";
            var turnOnDVR = true;
            if(useHLS == true) {
                turnOnDVR = false;
            }
            $.getScript(embedPath+"/embed.js");
        });
    </script>
    <div id="player"></div>
</div>