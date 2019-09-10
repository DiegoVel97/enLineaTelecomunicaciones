<?php

include_once('../model/Contacto/contactoModel.php');

class contactoController {

    function contacto() {
        include_once("../view/Contacto/contacto.html.php");
    }

    function registro(){

    	$objContacto = new contactoModel();

		$errores = array();	

    	
    	
    	if (!isset($_POST["name_complete"]) or $_POST["name_complete"] == "" or !isset($_POST["phone_complete"]) or $_POST["phone_complete"] == "" or !isset($_POST["address_complete"]) or $_POST["address_complete"] == "" or !isset($_POST["email_complete"]) or $_POST["email_complete"] == "" or !isset($_POST["textarea_complete"]) or $_POST["textarea_complete"] == "") {
            
            echo 0;

        }else{

        $name_complete = $_POST["name_complete"];
		$phone_complete = $_POST["phone_complete"];
		$address_complete = $_POST["address_complete"];
		$email_complete = $_POST["email_complete"];
		$textarea_complete = $_POST["textarea_complete"];


        	$sql_contacto = "INSERT INTO pag_contacto (nombre,telefono,direccion,email,mensaje,estado) VALUES ('$name_complete','$phone_complete','$address_complete','$email_complete','$textarea_complete','activo')";
        	$insercion = $objContacto->insertar($sql_contacto);

        	if(isset($insercion)){
        		echo 1;
        	}else{
        		echo 2;
        	}

        	
        }

        $objContacto->cerrar();

    }


    function envioEmail(){
        $name_complete = $_POST["name_complete"];
        $phone_complete = $_POST["phone_complete"];
        $address_complete = $_POST["address_complete"];
        $email_complete = $_POST["email_complete"];
        $textarea_complete = $_POST["textarea_complete"];


        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "comunicaciones@tecnoshare.com.co";
        $to = $address_complete;
        $subject = "Checking PHP mail";
        $message = "PHP mail works just fine";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
        
        echo true;
    }
}

