<?php
    $con = mysqli_connect("localhost", "root", "", "nutriologo") or die("Problemas con la conexión");

    $opcion = $_REQUEST['opcion'];
    $desayuno1 = $_REQUEST['desayuno1'];
    $desayuno2 = $_REQUEST['desayuno2'];
    $desayuno3 = $_REQUEST['desayuno3'];
    $me_desa1 = $_REQUEST['me_desa1'];
    $me_desa2 = $_REQUEST['me_desa2'];
    $almuerzo1 = $_REQUEST['almuerzo1'];
    $almuerzo2 = $_REQUEST['almuerzo2'];
    $almuerzo3 = $_REQUEST['almuerzo3'];
    $me_almu1 = $_REQUEST['me_almu1'];
    $me_almu2 = $_REQUEST['me_almu2'];
    $cena1 = $_REQUEST['cena1'];
    $cena2 = $_REQUEST['cena2'];
    $cena3 = $_REQUEST['cena3'];
    $me_noc1 = $_REQUEST['me_noc1'];
    $me_noc2 = $_REQUEST['me_noc2'];

    $sql_insert = "INSERT INTO dietas (FUNCION, COMIDA1, COMIDA2, COMIDA3, MERIENDAD1, MERIENDAD2, ALMUERZO1, ALMUERZO2, ALMUERZO3, MERIENDAA1, MERIENDAA2, CENA1, CENA2, CENA3, MERIENDAN1, MERIENDAN2) 
                   VALUES ('$opcion', '$desayuno1', '$desayuno2', '$desayuno3', '$me_desa1', '$me_desa2', '$almuerzo1', '$almuerzo2', '$almuerzo3', '$me_almu1', '$me_almu2', '$cena1', '$cena2', '$cena3', '$me_noc1', '$me_noc2')";

    if(mysqli_query($con, $sql_insert)) {
        echo '<div class="success">Registro exitoso.</div>';
    } else {
        echo "Problemas en el insert: " . mysqli_error($con);
    }

    mysqli_close($con);
?>
