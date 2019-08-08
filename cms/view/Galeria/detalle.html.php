
<center>
    <b>
        <h5>DESCRIPCI&Oacute;N DEL BANNER SELECCIONADO</h5>
    </b>
</center>
<BR>
<div class="divider"></div>
<br>
<div class="row">
    <div class="col s4">
            <b style="color: #448aff;"><h6>Imagen del Banner</h6></b> 
            <?php $url_file = "media/img/Galeria/" . $consultaBanner['imagen']; ?>
                                            <img src="<?php echo addLib($url_file); ?>" width="200px">
    </div>
    <div class="col s4">
        <b style="color: #448aff;"><h6>Titulo del Banner</h6></b> 
        <?php echo $consultaBanner['titulo']; ?>
    </div>

    <div class="col s4">
        <b style="color: #448aff;"><h6>Descripci&oacute;n del Banner</h6></b> 
        <?php echo $consultaBanner['descripcion']; ?>
    </div>

    

</div>
<br>
<div class="row">
<div class="col s4">
        <b style="color: #448aff;"><h6>Descripci&oacute;n boton del Banner</h6></b> 
        <?php echo $consultaBanner['descripcion_boton']; ?>
    </div>
    <div class="col s4">
        <b style="color: #448aff;"><h6>Fecha de publicaci&oacute;n del banner</h6></b> 
        <?php echo $consultaBanner['fecha_publicacion']; ?>
    </div>

    <div class="col s4">
        <b style="color: #448aff;"><h6>Fecha de expiraci&oacute;n del banner</h6></b> 
        <?php echo $consultaBanner['fecha_expiracion']; ?>
    </div>

    
</div>
<br>
<div class="row">
    <div class="col s6">
        <b style="color: #448aff;"><h6>Hipervinculo boton</h6></b> 
        <?php echo $consultaBanner['hipervinculo_boton']; ?>
    </div>
    <div class="col s6">
        <b style="color: #448aff;"><h6>Estado banner</h6></b> 
        <?php echo $consultaBanner['estado']; ?>
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