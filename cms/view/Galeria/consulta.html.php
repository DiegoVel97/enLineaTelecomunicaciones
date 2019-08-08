<div class="card-panel">
    <div class="container">
        <h5 class="header2">IMAGENES EN EL BANNER</h5>

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
        
        <div id="card-alert" class="card red">
            <div class="card-content white-text">
                <p><i class="mdi-action-info-outline"></i> IMPORTANTE : Debe dejar por lo menos <code>3 slider</code> con estado <b><code>ACTIVO</code></b> para una correcta visualizaci&oacute;n en la web.</p>
            </div>
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
                <input type="text" class="active" id="buscarImagen" name='buscarImagen' class="header-search-input z-depth-2" data-url="<?php echo crearUrl("Banner", "galeria", "buscarAjax", array('noVista' => "noVista")) ?>" />
                <label for="buscarImagen" class="active">Digite el titulo y/o descripci&oacute;n del Banner</label>
            </div>
        </form>

        <div id="divBanner">
            <div class="col s12 m6 l3" id="flight-card">
                <div class="input-field col s12">
                    <div class="input-field col s12">
                        <table class="striped" style="border:1px; border-color: black;">
                            <thead>
                                <tr>
                                    <th><center>Imagen</center></th>
                                    <th>Titulo </th>
                                    <th>Fecha de publicaci&oacute;n</th>
                                    <th>Fecha de expiraci&oacute;n</th>
                                    <th>Estado</th>
                                    <th colspan="3"><center>Acciones</center></th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <?php foreach ($consultaBanner as $banner) { ?>
                                    <tr>
                                        <td>
                                        	<?php $url_file = "media/img/Galeria/" . $banner['imagen']; ?>
                                            <img src="<?php echo addLib($url_file); ?>" width="200px">
                                        </td>
                                        <td>
                                            <?php echo strip_tags($banner['titulo']); ?>
                                        </td>
                                        <td>
                                            <?php echo $banner['fecha_publicacion']; ?>
                                        </td>
                                        <td>
                                            <?php echo $banner['fecha_expiracion']; ?>
                                        </td>
                                        <td>
                                            <?php echo $banner['estado']; ?>
                                        </td>
                                        <td>
                                            <a class="btn-floating modal-trigger  waves-effect waves-light teal editarBanner" 
                                       href="#editarBanner" data-url="<?php echo crearUrl('Banner', 'galeria', 'editar', array('noVista' => "noVista", 'id' => $banner['id'])) ?>">
                                                <i class="mdi-content-create small"></i>
                                            </a>
                                        </td>   
                                        
                                        <td>
                                            <a class="btn-floating modal-trigger  waves-effect waves-light teal verDetalleNoticia" href="#detalleNoticia" data-url="<?php echo crearUrl('Banner', 'galeria', 'detalle', array('noVista' => "noVista", 'id' => $banner['id'])) ?>">
                                                <i class="mdi-action-find-in-page tiny"></i>
                                            </a>
                                        </td>   
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php $paginado->render();  ?>

                        <div id="editarBanner" class="modal modal-fixed-footer">
                            <div class="modal-content"></div>
                            <div class="modal-footer">
                                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">cerrar</a>
                            </div>
                        </div>
                        <div id="detalleNoticia" class="modal modal-fixed-footer">
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