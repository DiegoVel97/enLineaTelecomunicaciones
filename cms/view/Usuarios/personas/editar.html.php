
<form id="form2" class="col s12 validat" data-url="<?php echo crearUrl("usuarios", "usuarios", "postEditar", array('noVista' => "noVista")) ?>" method="post" novalidate>
    <h4 class="header2">Modificar Persona</h4>

    <!--Inicio contenedor mensajes de error-->
    <div class="card red">
        <div id="cont_errors_ajax" class="card-content white-text">
        </div>
    </div>
    <!--Fin contenedor mensajes de error-->

    <div class="row">


    </div>
    <br>
    <div class="row">

        <div class="col s4">
            <label for="disabled">(*) Numero Identificacion</label>
            <input disabled id="disabled" type="text" class="validate" length="10" value="<?php echo $per['per_id'] ?>">
        </div>

        <div class="col s4">
            <label for="nombre">(*) Nombre</label>
            <input id="nombre" type="text" class="validate" length="20" name="nombre" value="<?php echo $per['per_nombre'] ?>" data-error=".errorTxt54">
            <div class="errorTxt54"></div>
        </div>

        <div class="col s4">
            <label for="apellido">(*) Apellido</label>
            <input id="apellido" type="text" class="validate" length="30" name="apellido" value="<?php echo $per['per_apellido'] ?>" data-error=".errorTxt55">
            <div class="errorTxt55"></div>
        </div>
    </div>

    <div class="row">

        <div class="col s4">
            <label for="telefono">(*) Telefono</label>
            <input id="telefono" type="tel" class="validate" length="10" name="telefono" value="<?php echo $per['per_telefono'] ?>" data-error=".errorTxt56">
            <div class="errorTxt56"></div>
        </div>

        <div class="col s4">
            <label for="movil">(*) Movil</label>
            <input id="movil" type="text" class="validate" length="10" name="movil" value="<?php echo $per['per_movil'] ?>" data-error=".errorTxt57">
            <div class="errorTxt57"></div>
        </div>

        <div class="col s4">
            <label for="email">(*) Email</label>
            <input id="email" type="email" class="validate" length="50" name="email" value="<?php echo $per['per_email'] ?>" data-error=".errorTxt58">
            <div class="errorTxt58"></div>
        </div>
    </div>

    <div class="row">

        <div class="col s4">
            <br>
            <label for="direccion">(*) Direccion</label>
            <input id="direccion" type="text" class="validate" length="40" name="direccion" value="<?php echo $per['per_direccion'] ?>" data-error=".errorTxt59">
            <div class="errorTxt59"></div>
        </div>

        


    </div>
    <br>
    <div class="divider"></div>
    
    
    <!-- Campo para almacenar el id del equipo -->
    <input type="hidden" name="id" value="<?php echo $per['per_id'] ?>">

    <div class="row">

        <div class="input-field col s5 offset-s5">
            <div class="input-field col s12">
                <button class="btn cyan waves-effect waves-light teal" type="submit"><i class="mdi-action-perm-identity"></i>Guardar</button>
            </div>
        </div>
    </div>
</form>

<style>
    #modalUpdate{
        top: 2% !important;
        max-height: 100%;
        height: 86%;
        width: 900px;
    }
</style>

<script>
    $(".select2").select2({});

    $(document).ready(function () {
        $('select').material_select('destroy');
        $('select').material_select();

        $(document).on('click', '.modal-close', function () {
            $("#modalUpdate").closeModal();
        });

    });
</script>

<script>
    //----------------- validaciones ---------------

    /* Incluimos un método para validar el campo nombre */

    jQuery.validator.addMethod("letra", function (value, element) {
        return this.optional(element) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test(value);
    });

    //----------------------validate editar----------------------------

    $(".validat").validate({
        rules: {
            departamento: {
                required: true
            },
            centro: {
                required: true
            },
            cargo: {
                required: true
            },
            nombre: {
                required: true,
                letra: true,
                minlength: 3,
                maxlength: 20
            },
            apellido: {
                required: true,
                letra: true,
                minlength: 5,
                maxlength: 30
            },
            telefono: {
                required: true,
                digits: true,
                minlength: 5,
                maxlength: 10
            },
            movil: {
                required: true,
                digits: true,
                minlength: 5,
                maxlength: 10
            },
            email: {
                required: true,
                email: true,
                minlength: 5,
                maxlength: 45
            },
            direccion: {
                required: true,
                minlength: 5,
                maxlength: 40
            },
            valorhora: {
                required: true,
                number: true,
                minlength: 3,
                maxlength: 10
            },
            cgender: "required",
            cagree: "required",
        },
        //For custom messages
        messages: {
            departamento: {
                required: "El departamento es obligatorio."
            },
            centro: {
                required: "El centro es obligatorio."
            },
            cargo: {
                required: "El cargo es obligatorio."
            },
            nombre: {
                required: "El nombre es obligatorio.",
                letra: "Solo se permiten letras",
                minlength: "Introduzca al menos 3 caracteres",
                maxlength: "Solo se permite introducir maximo 20 caracteres"
            },
            apellido: {
                required: "El apellido es obligatorio.",
                letra: "Solo se permiten letras",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 30 caracteres"
            },
            telefono: {
                required: "El telefono es obligatorio.",
                digits: "El valor debe ser numerico",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 10 caracteres"
            },
            movil: {
                required: "El movil es obligatorio.",
                digits: "El valor debe ser numerico",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 10 caracteres"
            },
            email: {
                required: "El email es obligatorio.",
                email: "El correo debe ser valido",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 45 caracteres"
            },
            direccion: {
                required: "La direccion es obligatorio.",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 40 caracteres"
            },
            valorhora: {
                required: "El valor hora es obligatorio.",
                number: "El valor debe ser numerico",
                minlength: "Introduzca al menos 3 caracteres",
                maxlength: "Solo se permite introducir maximo 10 caracteres"
            },
            curl: "Enter your website",
        },
        errorElement: 'div',
        errorPlacement: function (error, element) {
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append(error)
            } else {
                error.insertAfter(element);
            }
        }
    });

</script>
