$(document).ready(function(){


        var lba = document.getElementsByClassName("social-button")

        function myPopup() {
            window.open(this.href, 'mywin',
                    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0');
            event.preventDefault();
            return false;
        }

        for (var i = 0; i < lba.length; i++) {
            lba[i].addEventListener("click", myPopup, false);
        }




    /* BANNER CREAR*/
      $(document).on('click', '.btn_submit_file_banner', function () {

        $('.btn_submit_file_banner').prop('disabled', true);
        var url = $("#formBanner").attr("data-action");
        var parametros = {
                    "name_complete" : $("#name_complete").val(),
                    "phone_complete" : $("#phone_complete").val(),
                    "address_complete" : $("#address_complete").val(),
                    "email_complete" : $("#email_complete").val(),
                    "textarea_complete" : $("#textarea_complete").val()
        };

        $.ajax({
            url: url,
            type: "POST",
            data: parametros,
            success: function (response) {
                if (response == 1) {
                    alert("REGISTRO EXITOSO!");
                } else if(response == 2){
                    
                    setTimeout(function(){ 
                        $('.alert-error-insercion').css('display', "block");
                        $('.alert-error-insercion').css('transition', "1s");
                    }, 1000);

                    setTimeout(function(){ 
                        $('.alert-error-insercion').css('display', "none");
                        $('.alert-error-insercion').css('transition', "1s");   
                        $('.btn_submit_file_banner').prop('disabled', false);  
                    }, 3000);

                }else{
                    

                    setTimeout(function(){ 
                        $('.alert-error').css('display', "block");
                        $('.alert-error').css('transition', "1s");
                    }, 1000);

                    setTimeout(function(){ 
                        $('.alert-error').css('display', "none");
                        $('.alert-error').css('transition', "1s");   
                        $('.btn_submit_file_banner').prop('disabled', false);  
                    }, 3000);
                }
            } 
        })
    });


    /* MOUSE */

var lastX=0;
var lastY=0;
document.onmousemove=function(e)
{
    $("body").css("cursor","pointer");
    var cadena="";
    if (!e) {e=event}

    if(lastX>e.clientX)
        $("#wireless").attr("style","transform: translate(26.9581px, 16.2719px); display: inline;  transition:1s;");        
    else 
        if(lastX<e.clientX)
            $("#nubeComputing").attr("style","transform: translate(30.9581px, 6.2719px); display: inline;  transition:1s;");
        else
            $("#nubeComputing").attr("style","transform: translate(-30.9581px, 12.000px); display: inline; transition:1s;");
    
    if(lastX>e.clientX)
        $("#mjeUno").attr("style","transform: translate(26.9581px, 16.2719px); display: inline;  transition:1s;");        
    else 
        if(lastX<e.clientX)
        $("#mjeUno").attr("style","transform: translate(36.9581px, 36.2719px); display: inline;  transition:1s;");        
        
        else
        $("#mjeUno").attr("style","transform: translate(36.9581px, 26.2719px); display: inline;  transition:1s;");        
    
    if(lastX>e.clientX)
        $("#mjeDos").attr("style","transform: translate(36.9581px, 26.2719px); display: inline;  transition:1s;");        
    else 
        if(lastX<e.clientX)
        $("#mjeDos").attr("style","transform: translate(26.9581px, 56.2719px); display: inline;  transition:1s;");        
        
        else
        $("#mjeDos").attr("style","transform: translate(46.9581px, 16.2719px); display: inline;  transition:1s;");        
        

    if(lastX>e.clientX)
        $("#asesores").attr("style","transform: translate(16.9581px, 1.2719px); display: inline;  transition:1s;");        
    else 
        if(lastX<e.clientX)
        $("#asesores").attr("style","transform: translate(26.9581px, 1.2719px); display: inline;  transition:1s;");        
        
        else
        $("#asesores").attr("style","transform: translate(6.9581px, 1.2719px); display: inline;  transition:1s;");        
    

     if(lastX>e.clientX)
        $("#fondoEscritorio").attr("style","transform: translate(16.9581px, 1.2719px); display: inline;  transition:1s;");        
    else 
        if(lastX<e.clientX)
        $("#fondoEscritorio").attr("style","transform: translate(26.9581px, 1.2719px); display: inline;  transition:1s;");        
        
        else
        $("#fondoEscritorio").attr("style","transform: translate(6.9581px, 1.2719px); display: inline;  transition:1s;");        
       
    if(lastX>e.clientX)
        $("#tuerca").attr("style","-webkit-transform: rotate(-180deg); -moz-transform: rotate(-180deg);  -ms-transform: rotate(-180deg);  -ms-transform: rotate(-180deg);");        
    else 
        if(lastX<e.clientX)
        $("#tuerca").attr("style","-webkit-transform: rotate(-180deg); -moz-transform: rotate(-180deg);  -ms-transform: rotate(-180deg);  -ms-transform: rotate(-180deg);");        
        
        else
        $("#tuerca").attr("style"," -webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);  -ms-transform: rotate(-90deg);  -ms-transform: rotate(-90deg);");        
       

    if(lastY>e.clientY)
         $("#router").attr("style","transform: translate(10.9581px, 12.000px); display: inline; transition:1s;");
    else if(lastY<e.clientY)
          $("#router").attr("style","transform: translate(20.9581px, 13.2719px); display: inline;  transition:1s;");

    else
        $("#wireless").attr("style","transform: translate(-58.9581px, 6.2719px); display: inline;  transition:1s;");



    

    if(lastX>e.clientX)
        $("#nubeNueva").attr("style","transform: translate(16.9581px, 6.2719px); display: inline;  transition:1s;");        
    else 
        if(lastX<e.clientX)
            $("#nubeNueva").attr("style","transform: translate(34.9581px, 16.2719px); display: inline;  transition:1s;");
        else
            $("#nubeNueva").attr("style","transform: translate(-10.9581px, 12.000px); display: inline; transition:1s;");
    


 
    lastX=e.clientX;
    lastY=e.clientY;
    
    console.log(cadena);
}



  $(".planUno").hover(function(){
$(this).css("-webkit-transform","scale(1.1)");
$(this).css("transform","scale(1.1)");

$(this).css("cursor","pointer");
     $(this).css("transition", "1s");


    }, function(){
        $(this).css("-webkit-transform","scale(1.0)");
$(this).css("transform","scale(1.0)");


  });


  $(".planDos").hover(function(){
        $(this).css("-webkit-transform","scale(1.1)");
        $(this).css("transform","scale(1.1)");
        $(this).css("cursor","pointer");
        $(this).css("transition", "1s");
    }, function(){
        $(this).css("-webkit-transform","scale(1.0)");
        $(this).css("transform","scale(1.0)");
  });

  $(".planTres").hover(function(){
        $(this).css("-webkit-transform","scale(1.1)");
        $(this).css("transform","scale(1.1)");
        $(this).css("cursor","pointer");
        $(this).css("transition", "1s");
    }, function(){
        $(this).css("-webkit-transform","scale(1.0)");
        $(this).css("transform","scale(1.0)");
  });



});