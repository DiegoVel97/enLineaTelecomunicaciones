$(document).ready(function () {
    
    //----------------------respuesta registro-------------------
    $(document).on('submit', '#formValidatePersona', function (e) {
        e.preventDefault();
        var url = $('#formValidatePersona').attr("data-url");
        var redirect = $('#formValidatePersona').attr("data-redirect");
        $.ajax({
            type: "POST",
            url: url,
            data: $(this).serialize()
        }).done(function (respuesta) {
            console.log(respuesta);
            if (respuesta==true) {
                Materialize.toast("<i class= 'material-icons' ></i> Registro exitoso.", 2000, 'rounded col green');
                setTimeout(
                        function () {
                            window.location.href = (redirect);
                        }, 2000);
            }
            else {
                $('#cont_errors_ajax').html(respuesta);
                $('#cont_errors_ajax').css('display','block');
            }
        });
    });
    
    //------------mensaje respuesta actualizacion-----------------------
    $(document).on('submit', '#form2', function (e) {
        e.preventDefault();
        var url = $('#form2').attr("data-url");
        $.ajax({
            type: "POST",
            url: url,
            data: $(this).serialize()
        }).done(function (respuesta) {

            if (respuesta == true) {
                Materialize.toast("<i class= 'material-icons' ></i> Actualizacion exitosa.", 2000, 'rounded col green');
                setTimeout(
                    function () {
                        $("#modalUpdate").closeModal();
                        $('#cate').trigger('keyup');
                    }, 1400);
            }
            else {
                Materialize.toast("<i class= 'material-icons' ></i> Error en la actualización.", 3000, 'rounded col red');
                $('#cont_errors_ajax').html(respuesta);
                $('#cont_errors_ajax').css('display','block');
                $('.modal-content').animate({scrollTop:$('#cont_errors_ajax').position().top}, 'slow');
            }
        });
    });

    //----------------- validaciones ---------------
    
    /* Incluimos un método para validar el campo nombre */

    jQuery.validator.addMethod("letra", function(value, element) {
        return this.optional(element) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test(value);
    });
    
    $("#formValidate").validate({
        rules: {
            identificacion: {
                required: true,
                digits: true,
                minlength: 5,
                maxlength: 10
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
                email:true,
                minlength: 5,
                maxlength: 45
            },
            direccion: {
                required: true,
                minlength: 5,
                maxlength: 40
            },
            cgender:"required",
			cagree:"required",
        },
        //For custom messages
        messages: {
            identificacion:{
                required: "El numero de identificacion es obligatorio.",
                digits: "El valor debe ser numerico",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 10 caracteres"
            },
            nombre:{
                required: "El nombre es obligatorio.",
                letra: "Solo se permiten letras",
                minlength: "Introduzca al menos 3 caracteres",
                maxlength: "Solo se permite introducir maximo 20 caracteres"
            },
            apellido:{
                required: "El apellido es obligatorio.",
                letra: "Solo se permiten letras",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 30 caracteres"
            },
            telefono:{
                required: "El telefono es obligatorio.",
                digits: "El valor debe ser numerico",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 10 caracteres"
            },
            movil:{
                required: "El movil es obligatorio.",
                digits: "El valor debe ser numerico",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 10 caracteres"
            },
            email:{
                required: "El email es obligatorio.",
                email: "El correo debe ser valido",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 45 caracteres"
            },
            direccion:{
                required: "La direccion es obligatorio.",
                minlength: "Introduzca al menos 5 caracteres",
                maxlength: "Solo se permite introducir maximo 40 caracteres"
            },
            curl: "Enter your website",
        },
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
    });
    
    //-------------------------------------------
    $("#contrs").change(function () {
        var contrs = $("#contrs").val();
        var url = $(this).attr("data-url");
        $.ajax({
            url: url,
            type: "POST",
            data: "contrs=" + contrs,
            success: function (data) {
                $("#campos").html(data);
            }
        });
    });

    //----consulta ajax usuarios-----------
    $("#cate").keyup(function () {
        var usuario = $("#cate").val();
        
        if(usuario != ""){
            $('#pagina').val(1);
        }
        
        var pagina = $('#pagina').val();
        var url = $(this).attr("data-url");
        
        $.ajax({
            url: url,
            type: "POST",
            data: "usuario=" + usuario+"&pagina="+pagina,
            success: function (data) {
                $("#tabla").html(data);
            }
        });
    });
    $("#cate").trigger("keyup");


    //---------------funcion modal---------------------------
    
    $(document).on("click", ".editar", function () {

        var url = $(this).attr("data-url");
        $("#modalUpdate > .modal-content").html("Cargando ...");
        setTimeout(
            function () {
                $.ajax({
                    url: url,
                    type: "get",
                    success: function (data) {
                        $("#modalUpdate > .modal-content").html(data);
                    }
                });
            }, 950);
    });

    $(document).on("click", ".ver-detalle", function () {
        var url = $(this).attr("data-url");
        $("#modalDetalle > .modal-content").html("Cargando ...");
        setTimeout(
            function () {
                $.ajax({
                    url: url,
                    type: "get",
                    success: function (data) {
                        $("#modalDetalle > .modal-content").html(data);
                    }
                });
            }, 950);
    });

    $(document).on("click", ".agregar", function () {
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "get",
            success: function (data) {
                $("#modalAgregar > .modal-content").html(data);
            }
        });
    });

});