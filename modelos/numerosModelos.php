<?php

class numerosModelos{

public static function mdlSuma($numero1,$numero2){
    

    $resultado=(int)$numero1+(int)$numero2;
    return $resultado;


}

public static function mdlResta($numero1,$numero2){
  
    $resultadoResta=(int)$numero1-(int)$numero2;
    return $resultadoResta;


}

public static function mdlMultiplicacion($numero1,$numero2){

    $resultadoMultiplicacion=(int)$numero1*(int)$numero2;
    return $resultadoMultiplicacion;

}

public static function mdlDivision($numero1,$numero2){

    $resultadoDivision=(int)$numero1/(int)$numero2;
    return $resultadoDivision;
}

}




