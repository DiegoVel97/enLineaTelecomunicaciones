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