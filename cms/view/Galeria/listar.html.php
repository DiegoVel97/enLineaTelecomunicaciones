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
            <script type="text/javascript">
                
    $('.modal-trigger').leanModal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        in_duration: 300, // Transition in duration
        out_duration: 200, // Transition out duration
        ready: function () {
            //alert('Ready'); 
        }, // Callback for Modal open
        complete: function () {
            //alert('Closed'); 
        } // Callback for Modal close
    });
            </script>