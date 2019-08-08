<div class="card-panel">
    <div class="container">
        <h5 class="header2">LISTADO FORMULARIO CONTACTANOS</h5>

        <!--Inicio rastro de miga-->
        <ol class="breadcrumbs">
            <li><a href="<?php echo addLib('index.php') ?>">Panel de control</a></li>
            <li class="active">Listado contacto</li>
        </ol>

        <!--Inicio mensaje de campos obligatorios-->
        <div id="card-alert" class="card teal">
            <div class="card-content white-text">
                <p><i class="mdi-action-info-outline"></i> IMPORTANTE : A continuaci&oacute;n podr&aacute; buscar un formulario de contacto.</p>
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
                <input type="text" class="active" id="buscarContacto" name='buscarContacto' class="header-search-input z-depth-2" data-url="<?php echo crearUrl("Contacto", "contacto", "buscarAjax", array('noVista' => "noVista")) ?>" />
                <label for="buscarContacto" class="active">Digite el nombre y/o  a Buscar</label>
            </div>
        </form>

        <div id="divContacto">
            <div class="col s12 m6 l3" id="flight-card">
                <div class="input-field col s12">
                    <div class="input-field col s12">
                        <table class="striped" style="border:1px; border-color: black;">
                            <thead>
                                <tr>
                                    <th><center>Id</center></th>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>Email</th>
                                    <th>Estado</th>
                                    <th><center>Acciones</center></th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <?php foreach ($consultaContacto as $contacto) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $contacto['id']; ?>
                                        </td>
                                        <td>
                                            <?php echo strip_tags($contacto['nombre']); ?>
                                        </td>
                                        <td>
                                            <?php echo $contacto['telefono']; ?>
                                        </td>
                                        <td>
                                            <?php echo $contacto['direccion']; ?>
                                        </td>
                                        <td>
                                            <?php echo $contacto['email']; ?>
                                        </td>
                                        <td>
                                            <a class="btn-floating  waves-effect waves-light teal" href="<?php echo crearUrl('contacto', 'contacto', 'exportPdf', array('noVista' => "noVista", 'id' => $contacto['id'])) ?>">
                                                <i class="mdi-file-file-download small"></i>
                                            </a>
                                        </td>  

                                        <!--
                                        <td>
                                            <a class="btn-floating modal-trigger  waves-effect waves-light teal verDetalleNoticia" href="#detalleNoticia" data-url="<?php /* echo crearUrl('Noticias', 'noticias', 'detalle', array('noVista' => "noVista", 'id' => $noticia['id']))  */ ?>">
                                                <i class="mdi-action-find-in-page tiny"></i>
                                            </a>
                                        </td>-->
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

                    </div>
                </div>
            </div>     
        </div>
    </div>
</div>