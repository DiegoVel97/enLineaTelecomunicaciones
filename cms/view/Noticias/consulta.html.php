<div class="card-panel">
    <div class="container">
        <h5 class="header2">LISTAR NOTICIA</h5>

        <!--Inicio rastro de miga-->
        <ol class="breadcrumbs">
            <li><a href="<?php echo addLib('index.php') ?>">Panel de control</a></li>
            <li><a href="<?php echo crearUrl("noticias","noticias","crear") ?>">Crear nueva Noticia</a></li>
            <li class="active">Listar Noticia</li>
        </ol>

        <!--Inicio mensaje de campos obligatorios-->
        <div id="card-alert" class="card teal">
            <div class="card-content white-text">
                <p><i class="mdi-action-info-outline"></i> IMPORTANTE : A continuaci&oacute;n podr&aacute; buscar una noticia por medio de su <code>codigo</code> o <code>Nombre</code>.</p>
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
                <input type="text" class="active" id="buscarNoticia" name='buscarNoticia' class="header-search-input z-depth-2" data-url="<?php echo crearUrl("noticias", "noticias", "buscarAjax", array('noVista' => "noVista")) ?>" />
                <label for="buscarNoticia" class="active">Digite el nombre y/o codigo del Equipo a Buscar</label>
            </div>
        </form>

        <div id="divNoticias">
            <div class="col s12 m6 l3" id="flight-card">
                <div class="input-field col s12">
                    <div class="input-field col s12">
                        <table class="striped" style="border:1px; border-color: black;">
                            <thead>
                                <tr>
                                    <th><center>Codigo</center></th>
                                    <th>Titulo noticia</th>
                                    <th>Fecha de publicaci&oacute;n</th>
                                    <th>Fecha de expiraci&oacute;n</th>
                                    <th>Estado</th>
                                    <th colspan="3"><center>Acciones</center></th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <?php foreach ($consultaNoticia as $noticia) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $noticia['id']; ?>
                                        </td>
                                        <td>
                                            <?php echo strip_tags($noticia['title_notice']); ?>
                                        </td>
                                        <td>
                                            <?php echo $noticia['publicate_date_notice']; ?>
                                        </td>
                                        <td>
                                            <?php echo $noticia['expirate_date_notice']; ?>
                                        </td>
                                        <td>
                                            <?php echo $noticia['estado_notice']; ?>
                                        </td>
                                        <td>
                                            <a class="btn-floating modal-trigger  waves-effect waves-light teal editarNoticia" 
                                       href="#editarCiudad" data-url="<?php echo crearUrl('Noticias', 'noticias', 'editar', array('noVista' => "noVista", 'id' => $noticia['id'])) ?>">
                                                <i class="mdi-content-create small"></i>
                                            </a>
                                        </td>   
                                        <td>
                                            <a class="btn-floating modal-trigger  waves-effect waves-light teal editarFoto" href="#editarFoto" data-url="<?php echo crearUrl('Noticias', 'noticias', 'editarFoto', array('noVista' => "noVista", 'id' => $noticia['id'])) ?>">
                                                <i class="mdi-image-photo-camera small"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn-floating modal-trigger  waves-effect waves-light teal verDetalleNoticia" href="#detalleNoticia" data-url="<?php echo crearUrl('Noticias', 'noticias', 'detalle', array('noVista' => "noVista", 'id' => $noticia['id'])) ?>">
                                                <i class="mdi-action-find-in-page tiny"></i>
                                            </a>
                                        </td>   
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php $paginado->render();  ?>

                        <div id="editarCiudad" class="modal modal-fixed-footer">
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