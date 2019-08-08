
<center>
    <b>
        <h5>DESCRIPCI&Oacute;N DEL SERVICIO SELECCIONADO</h5>
    </b>
</center>
<BR>
<div class="divider"></div>
<br>
<div class="row">
    <div class="col s4">
            <b style="color: #448aff;"><h6>Imagen del servicio</h6></b> 
            <?php $url_file = "media/img/Servicios/" . $servicio['imagen_servicio']; ?>
                                            <img src="<?php echo addLib($url_file); ?>" width="200px">
    </div>
    <div class="col s4">
        <b style="color: #448aff;"><h6>Titulo del servicio</h6></b> 
        <?php echo $servicio['titulo_servicios']; ?>
    </div>

    <div class="col s4">
        <b style="color: #448aff;"><h6>Descripci&oacute;n del servicio</h6></b> 
        <?php echo $servicio['descripcion_servicio']; ?>
    </div>

    

</div>
<br>
<div class="row">
<div class="col s4">
        <b style="color: #448aff;"><h6>¿Aparece en el header?</h6></b> 
        <?php echo $servicio['aparece_header']; ?>
    </div>
    
    <div class="col s6">
        <b style="color: #448aff;"><h6>Estado servicio</h6></b> 
        <?php echo $servicio['estado_servicio']; ?>
    </div>

</div>

<div class="divider"></div>


<style>
    #modalDetalle{
        top: 2% !important;
        max-height: 100%;
        height: 90%;
    }
</style>    