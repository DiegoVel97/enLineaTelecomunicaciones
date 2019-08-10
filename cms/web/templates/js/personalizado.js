$(document).ready(function(){

	$(document).on("click","#actualizarNosotros",function(){

		var data_url = $("#formNosotros").attr("data-action");
		var parametros = {
                "tituloNosotros" : CKEDITOR.instances['tituloNosotros'].getData(),
                "descripcionNosotros" : CKEDITOR.instances['descripcionNosotros'].getData()
        };
		
		$.ajax({
            url: data_url,
            type: 'POST',
            data: parametros,
        }).done(function (respuesta) {
            if(respuesta == 1){
            	 setTimeout(function() {
                      Materialize.toast('Actualizaci&oacuten exitosa.', 3000, 'rounded col green');
                  },1000);
               
                  setTimeout(function() {
                      window.location.reload();
                  },4000);
            	setInterval('refresh()',4000) ;
            }
        })
	})


    $(document).on("click","#actualizarVision",function(){
      var data_url = $("#formVision").attr("data-action");
      var parametros = {
                  "tituloVision" : CKEDITOR.instances['tituloVision'].getData(),
                  "descripcionVision" : CKEDITOR.instances['descripcionVision'].getData()
          };
      
          $.ajax({
              url: data_url,
              type: 'POST',
              data: parametros,
          }).done(function (respuesta) {
              if(respuesta == 1){
                 setTimeout(function() {
                        Materialize.toast('Actualizaci&oacuten exitosa.', 3000, 'rounded col green');
                    },1000);
                 
                    setTimeout(function() {
                        window.location.reload();
                    },4000);
                setInterval('refresh()',4000) ;
              }
          })
      })


    $(document).on("click","#actualizarMision",function(){
      var data_url = $("#formMision").attr("data-action");
      var parametros = {
                  "tituloMision" : CKEDITOR.instances['tituloMision'].getData(),
                  "descripcionMision" : CKEDITOR.instances['descripcionMision'].getData()
          };
      
          $.ajax({
              url: data_url,
              type: 'POST',
              data: parametros,
          }).done(function (respuesta) {
              if(respuesta == 1){
                 setTimeout(function() {
                        Materialize.toast('Actualizaci&oacuten exitosa.', 3000, 'rounded col green');
                    },1000);
                 
                    setTimeout(function() {
                        window.location.reload();
                    },4000);
                setInterval('refresh()',4000) ;
              }
          })
      })

	function refresh(){
		alert();
	}


  // NOTICIAS 

  //consulta Noticia
    $("#buscarNoticia").keyup(function () {

        var noticia = $("#buscarNoticia").val();
        if (noticia != "") {
            $('#pagina').val(1);
        }

          var pagina = $('#pagina').val();
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "POST",
            data: "busquedaNoticia=" + noticia + "&pagina" + pagina,
            success: function (data) {
                $("#divNoticias").html(data);
            }
        });
    });

    $(document).on("click", ".editarNoticia", function () {
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "get",
            success: function (data) {
                $("#editarCiudad > .modal-content").html(data);
            }
        });
    });



    $(document).on("click","#editarNoticiaForm",function(){
      document.getElementById("editarNoticiaForm").disabled = true;

      var data_url = $("#formEdicionNoticia").attr("data-action");
      var parametros = {
                  "tituloNoticia" : CKEDITOR.instances['tituloNoticia'].getData(),
                  "descripcionNoticia" : CKEDITOR.instances['descripcionNoticia'].getData(),
                  "fechaPublicacion" : $("#fechaPublicacion").val(),
                  "fechaExpiracion" : $("#fechaExpiracion").val(),
                  "estadoNoticia" : $("#estadoNoticia").val()
          };

          $.ajax({
              url: data_url,
              type: 'POST',
              data: parametros,
          }).done(function (respuesta) {
              if(respuesta == 1){
                 setTimeout(function() {
                        Materialize.toast('Actualizaci&oacuten exitosa.', 3000, 'rounded col green');
                    },1000);
                 
                    setTimeout(function() {
                        window.location.reload();
                    },4000);
                setInterval('refresh()',4000) ;
              }else{
                 setTimeout(function() {
                        Materialize.toast('Actualizaci&oacuten no exitosa.', 3000, 'rounded col ready');
                    },1000);
                 
                    setTimeout(function() {
                        window.location.reload();
                    },4000);
                setInterval('refresh()',4000) ;
              }
          })
      });


    $(document).on("click", ".editarFoto", function () {
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "get",
            success: function (data) {
                $("#editarFoto > .modal-content").html(data);
            }
        });
    });


    $(document).on("click", ".verDetalleNoticia", function () {
        var url = $(this).attr("data-url");
        $.ajax({
            url: url,
            type: "get",
            success: function (data) {
                $("#detalleNoticia > .modal-content").html(data);
            }
        });
    });


    $(document).on("click","#crearNoticia",function(){
        
        document.getElementById("crearNoticia").disabled = true;
        
        var titulo = CKEDITOR.instances['tituloNoticia'].getData();
        var descripcion = CKEDITOR.instances['descripcionNoticia'].getData();
        var fechaPublicacion = $("#fechaPublicacion").val();
        var fechaExpiracion = $("#fechaExpiracion").val();
        var estado = $("#estadoNoticia").val();


        if (titulo === "") {
          Materialize.toast('El campo Titulo no debe quedar vacio.', 3000, 'rounded col red');

          document.getElementById("crearNoticia").disabled = false;
        }else if(descripcion == ""){
          Materialize.toast('El campo Descripcion no debe quedar vacio.', 3000, 'rounded col red');

          document.getElementById("crearNoticia").disabled = false;
        }else if(fechaPublicacion == ""){
          Materialize.toast('El campo Fecha publicacion no debe quedar vacio.', 3000, 'rounded col red');

          document.getElementById("crearNoticia").disabled = false;
        }else if(fechaExpiracion == ""){
          Materialize.toast('El campo Fecha Expiracion no debe quedar vacio.', 3000, 'rounded col red');

          document.getElementById("crearNoticia").disabled = false;
        }else if(estado == "0"){
          Materialize.toast('El campo estado noticia no debe quedar vacio.', 3000, 'rounded col red');

          document.getElementById("crearNoticia").disabled = false;
        }else{

          var data_url = $("#formCrearNoticia").attr("data-action");
          var parametros = {
                    "tituloNoticia" : CKEDITOR.instances['tituloNoticia'].getData(),
                    "descripcionNoticia" : CKEDITOR.instances['descripcionNoticia'].getData(),
                    "fechaPublicacion" : $("#fechaPublicacion").val(),
                    "fechaExpiracion" : $("#fechaExpiracion").val(),
                    "estadoNoticia" : $("#estadoNoticia").val()
            };

            $.ajax({
                url: data_url,
                type: 'POST',
                data: parametros,
            }).done(function (respuesta) {
                if(respuesta == 1){
                   setTimeout(function() {
                          Materialize.toast('Actualizaci&oacuten exitosa.', 3000, 'rounded col green');
                      },1000);
                   
                      setTimeout(function() {
                          window.location.reload();
                      },4000);
                  setInterval('refresh()',4000) ;
                }else{
                   setTimeout(function() {
                          Materialize.toast('Actualizaci&oacuten no exitosa.', 3000, 'rounded col ready');
                      },1000);
                   
                      setTimeout(function() {
                          window.location.reload();
                      },4000);
                  setInterval('refresh()',4000) ;
                }
            })

        }

      });




    /* CONTACTO */

    $("#buscarContacto").keyup(function () {

        var contacto = $("#buscarContacto").val();
        if (contacto != "") {
            $('#pagina').val(1);
        }

        var pagina = $('#pagina').val();
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "POST",
            data: "busquedaContacto=" + contacto + "&pagina" + pagina,
            success: function (data) {
                $("#divContacto").html(data);
            }
        });
    });


    $(document).on("click", ".exportarPdf", function () {
      
        var url = $(this).attr("data-url");
        $.ajax({
            url: url,
            type: "post",
            success: function (data) {
                $("#detalleNoticia > .modal-content").html(data);
            }
        });
    });


    $(document).on("click","#btnUpdateMapa",function(){
        
        document.getElementById("btnUpdateMapa").disabled = true;
        
          
        if (inputMapa === "") {
          Materialize.toast('El campo Mapa no debe quedar vacio.', 3000, 'rounded col red');

          document.getElementById("btnUpdateMapa").disabled = false;
        }else{

          var data_url = $("#updateMapa").attr("data-action");
          var parametros = {
                    "mapa" : $("#inputMapa").val()
            };

            $.ajax({
                url: data_url,
                type: 'POST',
                data: parametros,
            }).done(function (respuesta) {
                if(respuesta == 1){
                   setTimeout(function() {
                          Materialize.toast('Actualizaci&oacuten exitosa.', 3000, 'rounded col green');
                      },1000);
                   
                      setTimeout(function() {
                          window.location.reload();
                      },4000);
                  setInterval('refresh()',4000) ;
                }else{
                   setTimeout(function() {
                          Materialize.toast('Actualizaci&oacuten no exitosa.', 3000, 'rounded col ready');
                      },1000);
                   
                      setTimeout(function() {
                          window.location.reload();
                      },4000);
                  setInterval('refresh()',4000) ;
                }
            })

        }

      });


    /* NAVEGACION */
      $(".form_navegacion").on('submit', function () {

        $('.btn_submit_file').prop('disabled', true);
        var url = $("#form_navegacion_id").attr("data-action");

        var options = {
            url: url,
            success: function (response) {
              
                var respuesta = $.parseJSON(response);

                if (respuesta.accion === true) {
                    Materialize.toast(respuesta.mensajes, 1500, 'rounded col green');
                    window.setTimeout("location.href='" + respuesta.redirect + "'", 1500);
                } else {
                    $('#cont_errors_ajax').html(respuesta.mensajes);
                    $('#cont_errors_ajax').css('display', 'block');
                    $('.btn_submit_file').prop('disabled', false);
                    $('.modal-content').animate({scrollTop: $('#cont_errors_ajax').position().top}, 'slow');
                }
            }
        };//options

        $(this).ajaxSubmit(options);
        return false;
    });






    /* BANNER CREAR*/
      $(".file-form-banner").on('submit', function () {

        $('.btn_submit_file_banner').prop('disabled', true);
        var url = $("#formBanner").attr("data-action");
        var parametros = {
                    "tituloBanner" : CKEDITOR.instances['tituloBanner'].getData(),
                    "descripcionBanner" : CKEDITOR.instances['descripcionBanner'].getData(),
                    "descripcionBoton" : CKEDITOR.instances['descripcionBoton'].getData(),                    
                    "linkBoton" : $("#linkBoton").val(),
                    "fechaPublicacion" : $("#fechaPublicacion").val(),
                    "fechaExpiracion" : $("#fechaExpiracion").val(),
                    "estadoBanner" : $("#estadoBanner").val()
            };

        var options = {
            url: url,
            data: parametros,
            success: function (response) {
                        
                var respuesta = $.parseJSON(response);

                if (respuesta.accion === true) {
                    Materialize.toast(respuesta.mensajes, 1500, 'rounded col green');
                    window.setTimeout("location.href='" + respuesta.redirect + "'", 1500);
                } else {
                    $('#cont_errors_ajax').html(respuesta.mensajes);
                    $('#cont_errors_ajax').css('display', 'block');
                    $('.btn_submit_file_banner').prop('disabled', false);
                    $('.modal-content').animate({scrollTop: $('#cont_errors_ajax').position().top}, 'slow');
                }
            }
        };//options

        $(this).ajaxSubmit(options);
        return false;
    });


      

    // =========== GALERIA - BANNER


  //consulta Noticia
    $("#buscarImagen").keyup(function () {

        var imagen = $("#buscarImagen").val();
        if (imagen != "") {
            $('#pagina').val(1);
        }

          var pagina = $('#pagina').val();
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "POST",
            data: "buscarImagen=" + imagen + "&pagina" + pagina,
            success: function (data) {
                $("#divBanner").html(data);
            }
        });
    });

    $(document).on("click", ".editarBanner", function () {
        var url = $(this).attr("data-url");
    
        $.ajax({
            url: url,
            type: "get",
            success: function (data) {

                $("#editarBanner > .modal-content").html(data);
            }
        });
    });

    /* ========= SERVICIOS ============ */

        //----------------------respuesta registro-------------------
    $(document).on('submit', '#formServicios', function (e) {
        e.preventDefault();
        var url = $('#formServicios').attr("data-url");
        var redirect = $('#formServicios').attr("data-redirect");
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


    /* ========= AGREGAR SERVICIOS ^============ */

    /* SERVICIOS CREAR*/
      $(".file-form-servicios").on('submit', function () {

        $('.btn_submit_file_servicios').prop('disabled', true);
        var url = $("#formServicios").attr("data-action");
        var parametros = {
                    "tituloServicios" : CKEDITOR.instances['tituloServicios'].getData(),
                    "descripcionServicios" : CKEDITOR.instances['descripcionServicios'].getData(),
                    "estadoBanner" : $("#estadoBanner").val(),
                    "posicionMenu" : $("#posicionMenu").val(),
                    "menuNavegacion" : $("#menuNavegacion").val()
            };

        var options = {
            url: url,
            data: parametros,
            success: function (response) {
                alert(response);
                var respuesta = $.parseJSON(response);

                if (respuesta.accion === true) {
                    Materialize.toast(respuesta.mensajes, 1500, 'rounded col green');
                    window.setTimeout("location.href='" + respuesta.redirect + "'", 1500);
                } else {
                    $('#cont_errors_ajax').html(respuesta.mensajes);
                    $('#cont_errors_ajax').css('display', 'block');
                    $('.btn_submit_file_servicios').prop('disabled', false);
                    $('.modal-content').animate({scrollTop: $('#cont_errors_ajax').position().top}, 'slow');
                }
            }
        };//options

        $(this).ajaxSubmit(options);
        return false;
    });


    $(document).on("change","#posicionMenu", function(){
      var valor = $(this).val();

      if(valor == "Si"){
        $("#inputNavegacion").css("display","block");  
      }
      
      if(valor == "No"){
        $("#inputNavegacion").css("display","none");  
      }

    });


  //consulta servicio
    $("#buscarServicio").keyup(function () {

        var servicio = $("#buscarServicio").val();
        if (servicio != "") {
            $('#pagina').val(1);
        }

          var pagina = $('#pagina').val();
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "POST",
            data: "buscarServicio=" + servicio + "&pagina" + pagina,
            success: function (data) {
                $("#divServicio").html(data);
            }
        });
    });

    $(document).on("click", ".editarServicio", function () {
        var url = $(this).attr("data-url");
    
        $.ajax({
            url: url,
            type: "get",
            success: function (data) {

                $("#editarServicio > .modal-content").html(data);
            }
        });
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

    /* ========= PLANES ========== */

    /* NAVEGACION */
      $(".file-form-planes").on('submit', function () {

        $('.btn_submit_file_planes').prop('disabled', true);
        var url = $("#formPlanes").attr("data-action");

        var options = {
            url: url,
            success: function (response) {
              alert(response);
                var respuesta = $.parseJSON(response);

                if (respuesta.accion === true) {
                    Materialize.toast(respuesta.mensajes, 1500, 'rounded col green');
                    window.setTimeout("location.href='" + respuesta.redirect + "'", 1500);
                } else {
                    $('#cont_errors_ajax').html(respuesta.mensajes);
                    $('#cont_errors_ajax').css('display', 'block');
                    $('.btn_submit_file_planes').prop('disabled', false);
                    $('.modal-content').animate({scrollTop: $('#cont_errors_ajax').position().top}, 'slow');
                }
            }
        };//options

        $(this).ajaxSubmit(options);
        return false;
    });



      /* ===================== PLANES ==========================*/


  //consulta Noticia
    $("#buscarplan").keyup(function () {

        var noticia = $("#buscarplan").val();
        if (noticia != "") {
            $('#pagina').val(1);
        }

        var pagina = $('#pagina').val();
        var url = $(this).attr("data-url");

        $.ajax({
            url: url,
            type: "POST",
            data: "busquedaPlan=" + noticia + "&pagina" + pagina,
            success: function (data) {
                $("#divplans").html(data);
            }
        });
    });

    $(document).on('click', '.eliminarPlan', function (e) {
        e.preventDefault();
        var url = $(this).attr('data-url');
        var rol_id = $(this).attr('data-rol_id');

        swal({title: "¿Realmente desea eliminar este registro?",
            text: "Una vez eliminado, no se podrá recuperar.",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "Red",
            confirmButtonText: "Sí, eliminar registro",
            closeOnConfirm: false
        },
        
        function () {
            $.ajax({
                url: url,
                type: 'post',
                data: {
                    rol_id: rol_id
                }
            }).done(function (data) {
              //alert(data);
                if(data==true){
                    swal("Eliminado!", "Registro eliminado.", "success");
                    window.setTimeout('location.reload()', 1000);
                }else{
                    swal("No se pudo eliminar", "Hubo un error a la hora de eliminar el registro.", "error");
                }
            });
        });
        $('#buscarplan').focus();
    });


});