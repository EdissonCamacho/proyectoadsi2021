$(document).ready(function() {

    $("#btnSuma").click(function() {



        var numero1 = parseInt($("#txtNumero1").val());
        var numero2 = parseInt($("#txtNumero2").val());

        var objData = new FormData();
        objData.append("numSum1", numero1);
        objData.append("numSum2", numero2);



        $.ajax({
            url: "controladores/numerosControlador.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {

                alert(respuesta);
            }




        })


    })

    $("#btnResta").click(function() {



        var numero1 = parseInt($("#txtNumero1").val());
        var numero2 = parseInt($("#txtNumero2").val());



        var objData2 = new FormData();
        objData2.append("numRest1", numero1);
        objData2.append("numRest2", numero2);


        $.ajax({
            url: "controladores/numerosControlador.php",
            type: "post",
            dataType: "json",
            data: objData2,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {
                alert(respuesta);
            }

        })

    })

    $("#btnMulti").click(function() {
        var numero1 = parseInt($("#txtNumero1").val());
        var numero2 = parseInt($("#txtNumero2").val());

        var objData3 = new FormData();
        objData3.append("numMulti1", numero1);
        objData3.append("numMulti2", numero2);

        $.ajax({
            url: "controladores/numerosControlador.php",
            type: "post",
            dataType: "json",
            data: objData3,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {
                alert(respuesta);
            }

        })

    })

    $("#btnDivision").click(function() {
        var numero1 = parseInt($("#txtNumero1").val());
        var numero2 = parseInt($("#txtNumero2").val());

        var objData4 = new FormData();

        objData4.append("numDivision1", numero1);
        objData4.append("numDivision2", numero2);

        $.ajax({
            url: "controladores/numerosControlador.php",
            type: "post",
            dataType: "json",
            data: objData4,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {

                alert(respuesta);
            }



        })






    })












})