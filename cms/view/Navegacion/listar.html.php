<div class="card-panel">
    <div class="container">
        <h5 class="header2">LISTADO NAVEGACION SITIO WEB</h5>

        <!--Inicio rastro de miga-->
        <ol class="breadcrumbs">
            <li><a href="<?php echo addLib('index.php') ?>">Panel de control</a></li>
            <li class="active">Listado Navegacion</li>
        </ol>

        <!--Inicio mensaje de campos obligatorios-->
        <div id="card-alert" class="card teal">
            <div class="card-content white-text">
                <p><i class="mdi-action-info-outline"></i> IMPORTANTE : A continuaci&oacute;n podr&aacute; editar la navegacion.</p>
            </div>
            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <?php $error=getErrores(); ?>
                  <?php if (!$error=="") { ?>
                    <div id="card-alert" class="card red">
                        <div class="card-content white-text">
                            <p><i class="mdi-alert-error"></i> <?php echo $error; ?> </p>
                        </div>
                        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                <?php } ?>
         <div class="card red">
            <div id="cont_errors_ajax" class="card-content white-text">
            </div>
        </div>

        <div id="divContacto">
            <div class="col s12 m6 l3" id="flight-card">
            	<form class="form_navegacion" id="form_navegacion_id" data-action="<?php echo crearUrl("navegacion","navegacion","update", array('noVista')); ?>" enctype="multipart/form-data" method="post">
            		<?php foreach($busquedaNavegacion as $navegacion){ ?>
            			<div class="input-fiel col s12">
            				<input type="text" name="inputMenu<?php echo $navegacion['id_menu']; ?>" value="<?php echo $navegacion['descripcion']; ?>">
            			</div>
            		<?php } ?>
            		<br>
            		<h5><b>SUB MENU NAVEGACI&Oacute;N</b></h5>
            		<br>

            		<?php foreach($busquedaSubNavegacion as $subNavegacion){ ?> 
            			<div class="opcion col s12" style="border-bottom: 1px solid red; margin-bottom: 10px;">
                            <div class="input-fiel col s12">
                                <h6><b>Asignado al men&uacute; principal:</b> <?php echo $subNavegacion['descripcion']; ?> 
                                    <input type="hidden" name="opcionMenu<?php echo $subNavegacion['id_sub']; ?>" value="<?php echo $subNavegacion['id_menu_principal']; ?>"></h6>
                                    <select name="menu_principal_sub<?php echo $subNavegacion['id_sub']; ?>">
                                        <option value="0" disabled="" selected="">Cambiar selecci&oacute;n menu principal</option>
                                        <?php foreach($busquedaNavegacion as $navegacion){ ?>
                                            <option value="<?php echo $navegacion['id_menu']; ?>"><?php echo $navegacion['descripcion']; ?></option>
                                        <?php } ?>
                                    </select>
                            </div>
                            <div class="input-fiel col s12">
                                <label>Titulo sub menu:</label>
                				<input type="text" id="inputSub<?php echo $subNavegacion['id_sub']; ?>" name="inputSub<?php echo $subNavegacion['id_sub']; ?>" value="<?php echo $subNavegacion['descripcion_sub']; ?>">
                			</div>
                            <div class="input-fiel col s12">
                                <label>Link</label>
                                <input type="text" name="hrefInputSub<?php echo $subNavegacion['id_sub']; ?>" value="<?php echo $subNavegacion['href_sub']; ?>">
                            </div>
                            <div class="input-fiel col s12" style="margin-bottom: 60px;">
                                <select name="estadoSub<?php echo $subNavegacion['id_sub']; ?>">
                                    <option value="" disabled="" selected="">Seleccione un estado</option>
                                    <?php if($subNavegacion['estado_sub'] == 'activo') { ?>
                                        <option value="activo" selected="">Activo</option>
                                        <option value="inactivo">Inactivo</option>
                                    <?php }else{ ?> 
                                        <option value="activo">Activo</option>
                                        <option value="inactivo" selected="">Inactivo</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <br><br>
            		<?php } ?>
                    <center>
                        <button class="waves-light teal btn btn_submit_file" type="submit" id="btnActualizarNavegacion" style="position: fixed; bottom:30px; right: 60px;"> ACTUALIZAR</button>
                    </center>
            	</form>
                
            </div>  
        </div>
    </div>
</div>