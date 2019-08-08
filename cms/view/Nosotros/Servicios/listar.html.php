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


    $(document).on("click", ".verDetalleServicio", function () {
        var url = $(this).attr("data-url");
    
        $.ajax({
            url: url,
            type: "get",
            success: function (data) {
                $("#detalleServicio > .modal-content").html(data);
            }
        });
    });



            </script>