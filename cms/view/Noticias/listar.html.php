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
                                <th colspan="2">Acciones</th>
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
                                        <a class="btn-floating modal-trigger  waves-effect waves-light teal editarNoticia" href="#editarCiudad" data-url="<?php echo crearUrl('Noticias','noticias', 'editar', array('noVista' => "noVista", 'id' => $noticia['id'])) ?>">
                                        <i class="mdi-content-create small"></i></a>
                                    </td>
                                    <td>
                                            <a class="btn-floating modal-trigger  waves-effect waves-light teal editarFoto" 
                                       href="#editarFoto" data-url="<?php echo crearUrl('Noticias', 'noticias', 'editarFoto', array('noVista' => "noVista", 'id' => $noticia['id'])) ?>">
                                                <i class="mdi-image-photo-camera small"></i>
                                            </a>
                                        </td>
                                    <td>
                                        <a class="btn-floating cyan darken-1 modal-trigger verDetalleNoticia" href="#detalleNoticia" data-url="<?php echo crearUrl('Noticias', 'noticias', 'detalle', array('noVista' => "noVista", 'id' => $noticia['id'])) ?>">
                                            <i class="mdi-action-find-in-page tiny"></i>
                                        </a>
                                    </td>  
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
        			<?php $paginado->render();  ?>
                </div>
            </div>
        </div>    
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

    <script type="text/javascript">
        $('.modal-trigger').leanModal({
            dismissible: false , // Modal can be dismissed by clicking outside of the modal
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