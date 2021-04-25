<?php

include_once "../modelos/numerosModelos.php";
class numeros{

public $numero1;
public $numero2;

public function ctrSuma(){

    $objrespuesta=numerosModelos::mdlSuma($this->numero1,$this->numero2);
    echo json_encode($objrespuesta);


}

public function ctrResta(){

    $objRespuestaResta=numerosModelos::mdlResta($this->numero1,$this->numero2);
    echo json_encode($objRespuestaResta);
}

public function ctrMulti(){

    $objRespuestaMulti=numerosModelos::mdlMultiplicacion($this->numero1,$this->numero2);
    echo json_encode($objRespuestaMulti);

}

public function ctrDivision(){

    $objRespuestaDivision=numerosModelos::mdlDivision($this->numero1,$this->numero2);
    echo json_encode($objRespuestaDivision);

}






}

if (isset($_POST["numSum1"]) && isset($_POST["numSum2"]) ) {
 $objNumSum = new numeros();
 $objNumSum->numero1=$_POST["numSum1"];
 $objNumSum->numero2=$_POST["numSum2"];
 $objNumSum->ctrSuma();
 
 



}elseif (isset($_POST["numRest1"]) && isset($_POST["numRest2"])){
   
    $objRest = new numeros();
    $objRest->numero1=$_POST["numRest1"];
    $objRest->numero2=$_POST["numRest2"];
    $objRest->ctrResta();

}elseif (isset($_POST["numMulti1"]) && isset($_POST["numMulti2"])) {
    $objMulti = new numeros();
    $objMulti->numero1=$_POST["numMulti1"];
    $objMulti->numero2=$_POST["numMulti2"];
    $objMulti->ctrMulti();

}elseif (isset($_POST["numDivision1"]) && isset($_POST["numDivision2"])) {
    $objDivision = new numeros();
    $objDivision->numero1=$_POST["numDivision1"];
    $objDivision->numero2=$_POST["numDivision2"];
    $objDivision->ctrDivision();
    
}