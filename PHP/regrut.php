<?php
    $con = mysqli_connect("localhost", "root", "", "nutriologo") or die ("Problemas con la conexión");

    $opcion = $_REQUEST['opcion1'];
    $calentamiento1 = $_REQUEST['calentamiento1'];
    $calentamiento2 = $_REQUEST['calentamiento2'];
    $calentamiento3 = $_REQUEST['calentamiento3'];
    $cardio1 = $_REQUEST['cardi1'];
    $cardio2 = $_REQUEST['cardi2'];
    $cardio3 = $_REQUEST['cardi3'];
    $fuerza1 = $_REQUEST['fuer1'];
    $fuerza2 = $_REQUEST['fuer2'];
    $fuerza3 = $_REQUEST['fuer3'];
    $abdo1 = $_REQUEST['abdo1']; 
    $abdo2 = $_REQUEST['abdo2']; 
    $abdo3 = $_REQUEST['abdo3']; 
    $enfri = $_REQUEST['enfri1'];

    $sql_insert = "INSERT INTO rutinas (FUNCION, CALENTAMIENTO1, CALENTAMIENTO2, CALENTAMIENTO3, CARDIOVASCULARES1, CARDIOVASCULARES2, CARDIOVASCULARES3, FUERZA1, FUERZA2, FUERZA3, ABDOMEN1, ABDOMEN2, ABDOMEN3, ENFRIAMIENTO)
                   VALUES ('$opcion', '$calentamiento1', '$calentamiento2', '$calentamiento3', '$cardio1', '$cardio2', '$cardio3', '$fuerza1', '$fuerza2', '$fuerza3', '$abdo1', '$abdo2', '$abdo3', '$enfri')";
        if(mysqli_query($con, $sql_insert)){
            echo '<div class="successed">Registro exitoso.</div>';
        } else{
            echo "Problemas en el insert: " . mysqli_error($con);
        }  
    mysqli_close($con);         
?>