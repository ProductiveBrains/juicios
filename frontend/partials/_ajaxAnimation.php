<!-- //Waiting ajax -->
<img src="img/loading.gif" id="loading-indicator" style="display:none" />
<h1 id="cargando" style="display:none;color:yellow;">Esperando al Servidor</h1>

<style>
    #loading-indicator {
        position: absolute;
        z-index: 100;
        top: 50%;
        text-align: center;
        margin-top: -320px;

        /* display: block; */
        height: 100%;
        width: 100%;
        object-fit: cover;
        /* margin: 0; */
    }

    #cargando {
        position: absolute;
        z-index: 101;
        top: 50%;
        text-align: center;

        width: 100%;
    }
</style>

<script>
    $(document).ajaxSend(function (event, request, settings) {
        // $('#cuerpo').hide();
        $('#loading-indicator').show();
        $('#cargando').show();
    });

    $(document).ajaxStop(function (event, request, settings) {
        // $('#cuerpo').show();
        $('#loading-indicator').hide();
        $('#cargando').hide();
    });
</script>