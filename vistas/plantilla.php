<?php

include_once "vistas/modulos/cabecera.php";

if (isset($_GET["ruta"])) {
  
    if ($_GET["ruta"]== "ejercicio1" || 
   $_GET["ruta"]== "ejercicio2" || 
   $_GET["ruta"]== "ejercicio3" ||
   $_GET["ruta"]== "calculadora" ) {
       
      
    include_once "vistas/modulos/".$_GET["ruta"].".php";

   }

}

include_once "vistas/modulos/pie.php";