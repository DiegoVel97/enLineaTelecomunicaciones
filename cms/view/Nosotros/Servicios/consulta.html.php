<div class="card-panel">
    <div class="container">
        <h5 class="header2">NUESTROS SERVICIOS</h5>

        <!--Inicio rastro de miga-->
        <ol class="breadcrumbs">
            <li><a href="<?php echo addLib('index.php') ?>">Panel de control</a></li>
            <li><a href="<?php echo crearUrl("Banner","galeria","crear") ?>">Agregar nueva imagen</a></li>
            <li class="active">Listar Imagenes del Banner</li>
        </ol>

        <!--Inicio mensaje de campos obligatorios-->
        <div id="card-alert" class="card teal">
            <div class="card-content white-text">
                <p><i class="mdi-action-info-outline"></i> IMPORTANTE : A continuaci&oacute;n podr&aacute; buscar una imagen del banner por medio de su <code>codigo</code> o <code>Descripci&oacute;n</code>.</p>
            </div>
            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>


        <?php
        $errores = getErrores();
        if (!$errores == "") {
            ?>
            <div id="card-alert" class="card red">
                <div class="card-content white-text">
                    <p><i class="mdi-alert-error"></i> 
                        <?php echo $errores ?>
                    </p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <?php } 

        $errores = getErrores();
        if (!$errores == "") {
            ?>
            <div id="card-alert" class="card green">
                <div class="card-content white-text">
                        <?php echo $errores ?>
                    </p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <?php } ?>
        <!--Fin mensaje de campos obligatorios-->
        <form class="col s12">
            <div class="input-field">
                <i class="mdi-action-search prefix"></i>
                <input type="text" class="active" id="buscarServicio" name='buscarServicio' class="header-search-input z-depth-2" data-url="<?php echo crearUrl("Nosotros", "nosotros", "buscarAjax", array('noVista' => "noVista")) ?>" />
                <label for="buscarServicio" class="active">Digite el titulo y/o descripci&oacute;n del Banner</label>
            </div>
        </form>

        <div id="divServicio">
            <div class="col s12 m6 l3" id="flight-card">
                <div class="input-field col s12">
                    <div class="input-field col s12">
                        <table class="striped" style="border:1px; border-color: black;">
                            <thead>
                                <tr>
                                    <th><center>Imagen</center></th>
                                    <th>Titulo </th>
                                    <th>¿Aperece en el menu navegac&oacute;n?</th>
                                    <th>Estado</th>
                                    <th colspan="3"><center>Acciones</center></th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <?php foreach ($consultaServicios as $servicio) { ?>
                                    <tr>
                                        <td>
                                        	<?php $url_file = "media/img/Servicios/" . $servicio['imagen_servicio']; ?>
                                            <img src="<?php echo addLib($url_file); ?>" width="200px">
                                        </td>
                                        <td>
                                            <?php echo strip_tags($servicio['titulo_servicios']); ?>
                                        </td>
                                        <td>
                                            <?php echo $servicio['aparece_header']; ?>
                                        </td>
                                        
                                        <td>
                                            <?php echo $servicio['estado_servicio']; ?>
                                        </td>
                                        <td>
                                            <a class="btn-floating modal-trigger  waves-effect waves-light teal editarServicio" 
                                       href="#editarServicio" data-url="<?php echo crearUrl('Nosotros', 'nosotros', 'edicionServicio', array('noVista' => "noVista", 'id' => $servicio['id'])) ?>">
                                                <i class="mdi-content-create small"></i>
                                            </a>
                                        </td>   
                                        
                                        <td>
                                            <a class="btn-floating modal-trigger  waves-effect waves-light teal verDetalleServicio" href="#detalleServicio" data-url="<?php echo crearUrl('Nosotros', 'nosotros', 'detalle', array('noVista' => "noVista", 'id' => $servicio['id'])) ?>">
                                                <i class="mdi-action-find-in-page tiny"></i>
                                            </a>
                                        </td>   
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php $paginado->render();  ?>

                        <div id="editarServicio" class="modal modal-fixed-footer">
                            <div class="modal-content"></div>
                            <div class="modal-footer">
                                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">cerrar</a>
                            </div>
                        </div>
                        <div id="detalleServicio" class="modal modal-fixed-footer">
                            <div class="modal-content"></div>
                            <div class="modal-footer">
                                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">cerrar</a>
                            </div>
                        </div>
                        <div id="editarFoto" class="modal modal-fixed-footer">
                            <div class="modal-content"></div>
                            <div class="modal-footer">
                                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">cerrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
    </div>
</div>