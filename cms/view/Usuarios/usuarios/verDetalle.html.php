
<div class="row">

    <div class="col s4">
        <label style="color: #448aff;"><h6>Login</h6></label> 
        <?php echo $usu['usu_usuario']; ?>
    </div>

    <div class="col s4">
        <label style="color: #448aff;"><h6>Estado</h6></label> 
        <?php echo $usu['usu_estado']; ?>
    </div>

    <div class="col s4">
        <label style="color: #448aff;"><h6>Rol</h6></label> 
        <?php echo $usu['rol_nombre']; ?>
    </div>

</div>
<br>
<div class="row">

    <div class="col s4">
        <label style="color: #448aff;"><h6>No. identificacion</h6></label> 
        <?php echo $usu['per_id']; ?>
    </div>

    <div class="col s4">
        <label style="color: #448aff;"><h6>Nombre</h6></label> 
        <?php echo $usu['per_nombre']; ?>
    </div>

    <div class="col s4">
        <label style="color: #448aff;"><h6>Apellido</h6></label> 
        <?php echo $usu['per_apellido']; ?>
    </div>
</div>
<br>
<div class="row">

    <div class="col s4">
        <label style="color: #448aff;"><h6>Telefono</h6></label> 
        <?php echo $usu['per_telefono']; ?>
    </div>

    <div class="col s4">
        <label style="color: #448aff;"><h6>Movil</h6></label> 
        <?php echo $usu['per_movil']; ?>
    </div>

    <div class="col s4">
        <label style="color: #448aff;"><h6>Email</h6></label> 
        <?php echo $usu['per_email']; ?>
    </div>
</div>
<br>
<div class="row">

    <div class="col s4">
        <label style="color: #448aff;"><h6>Direccion</h6></label> 
        <?php echo $usu['per_direccion']; ?>
    </div>

</div>
<br>
<div class="divider"></div>


<style>
    #modalDetalle{
        top: 2% !important;
        max-height: 100%;
        height: 90%;
    }
</style>