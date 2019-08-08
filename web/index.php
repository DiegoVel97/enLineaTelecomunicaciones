<?php

session_start();
// Se incluye archivo para helper
include_once("../lib/php/helper.php");

// Se incluyen todas las variables globales del sitio
include_once("../lib/php/global.php");

//se incluye el paginado
include_once("../lib/php/PaginadoClass.php");

//if(!isset($modulo) && !isset($controller) && !isset($accion)){
if (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] == "/recordar") {
    
    include_once('templates/adminMaterialize/recordarPass/header.html.php');
    include_once('templates/adminMaterialize/recordarPass/recordarPass.html.php');
    include_once('templates/adminMaterialize/recordarPass/footer.html.php');

} elseif (!isset($_SERVER['PATH_INFO'])) {
        // Se carga el header de nuestra aplicación
        include_once('template/header.html.php');
        // Se carga la vista principal del aplicativo
        include_once('template/principal.html.php');
        // Se carga el footer de nuestra aplicación
        include_once('template/footer.html.php');
    } else {

        // /equipos/equipos/crear
        $cadena = explode("/", $_SERVER['PATH_INFO']);
//    dd($_SESSION);
        // Captura el nombre del modulo con la primer letra mayuscula
        $modulo = ucwords($cadena[1]);
        
        // Captura el nombre del controlador 
        $controller = $cadena[2];

        // Captura la funcion del controlador
        $accion = $cadena[3];

        // /equipos/equipos/crear/noVista
        if (!isset($cadena[4]) || $cadena[4] != "noVista") {

            // Se carga el header de nuestra aplicación
            include_once('template/header.html.php');
            echo "<div class='row'>";
        }

        // Se cargan los parametros
        $count = 4;
        while (isset($cadena[$count])) {
            $parametros[] = $cadena[$count];
            $count++;
        }

        $pathController = "../controller/" . $modulo . "/" . $controller . "Controller.php";

        $controllerClass = ucwords($controller) . "Controller";

        include_once($pathController);

        // ajustar
        $objController = new $controllerClass();

        if (!isset($parametros)) {
            $objController->$accion();
        } else {
            $objController->$accion($parametros);
        }

        if (!isset($cadena[4]) || $cadena[4] != "noVista") {
            echo "</div>";
            // Se carga el footer de nuestra aplicación
            include_once('template/footer.html.php');
        }
    }

?>