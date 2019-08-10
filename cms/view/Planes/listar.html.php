<div class="col s12 m6 l3" id="flight-card">
                <div class="input-field col s12">
                    <div class="input-field col s12">
                        <table class="striped" style="border:1px; border-color: black;">
                            <thead>
                                <tr>
                                    <th>Titulo plan</th>
                                    <th>Descripcion tiempo</th>
                                    <th>Descripcion del plan</th>
                                    <th>Valor del plan</th>
                                    <th colspan="3"><center>Acciones</center></th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <?php foreach ($consultaPlanes as $plan) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $plan['titulo_plan']; ?>
                                        </td>
                                        <td>
                                            <?php echo $plan['descripcion_del_plan_tiempo']; ?>
                                        </td>
                                        <td>
                                            <?php echo $plan['descripcion_plan']; ?>
                                        </td>
                                        <td>
                                            <?php echo $plan['valor_plan']; ?>
                                        </td>
                                        <!-- 
                                        <td>
                                            <a class="btn-floating modal-trigger  waves-effect waves-light teal editarplan" 
                                       href="#editarPlan" data-url="<?php /* echo crearUrl('planes', 'planes', 'editar', array('noVista' => "noVista", 'id' => $plan['id'])) */ ?>">
                                                <i class="mdi-content-create small"></i>
                                            </a>
                                        </td> */  -->
                                        <td>
                                            <a class="btn-floating waves-effect waves-light red eliminarPlan" data-url="<?php echo crearUrl('plans', 'plans', 'editarFoto', array('noVista' => "noVista", 'id' => $plan['id'])) ?>">
                                                <i class="mdi-action-delete small"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php $paginado->render();  ?>

                        <div id="editarPlan" class="modal modal-fixed-footer">
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