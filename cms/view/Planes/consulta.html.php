<div class="card-panel">
    <div class="container">
        <h5 class="header2">LISTADO PLANES</h5>

        <!--Inicio rastro de miga-->
        <ol class="breadcrumbs">
            <li><a href="<?php echo addLib('index.php') ?>">Panel de control</a></li>
            <li><a href="<?php echo crearUrl("planes","planes","agregar") ?>">Crear nuevo plan</a></li>
            <li class="active">Listar plan</li>
        </ol>

        <!--Inicio mensaje de campos obligatorios-->
        <div id="card-alert" class="card teal">
            <div class="card-content white-text">
                <p><i class="mdi-action-info-outline"></i> IMPORTANTE : A continuaci&oacute;n podr&aacute; buscar una plan por medio de su <code>codigo</code> o <code>Nombre</code>.</p>
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
                <input type="text" class="active" id="buscarplan" name='buscarplan' class="header-search-input z-depth-2" data-url="<?php echo crearUrl("planes", "planes", "buscarAjax", array('noVista' => "noVista")) ?>" />
                <label for="buscarplan" class="active">Digite el titulo del plan a Buscar</label>
            </div>
        </form>

        <div id="divplans">
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
                                            <a class="btn-floating waves-effect waves-light red eliminarPlan" data-url="<?php echo crearUrl('planes', 'planes', 'eliminarPlan', array('noVista' => "noVista", 'id' => $plan['id'])) ?>">
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
                        <div id="detalleplan" class="modal modal-fixed-footer">
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