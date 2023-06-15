<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar rutinas</title>
    <style>
        body{
            background: url(../IMG/fondo-registrard.jpg);
        }
        h1{
            font-size: 50px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
        }
        .a{
            height: 1500px;
            width: 800px;
            border: solid 10px black;
            background: rgba(248, 116, 8, 0.466);
        }
        label{
            font-size: 30px;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }
        input{
            font-size: 20px;
            height: 30px;
            width: 700px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: rgb(255, 246, 118);
        }
        input::placeholder{
            text-align: center;
        }
        .b{
            width: 200px;
            height: 50px;
            color: white;
            background: rgb(95, 130, 146);
            transition: all .5s;
        }
        .b:hover{
            width: 250px;
            height: 55px;
            font-size: 25px;
            color: black;
            background: rgb(29, 142, 194);
            transition: all .5s;
        }
        select{
            width: 200px;
            height: 30px;
            font-size: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Registro de Rutina</h1>
    <center>
    <div class="a">
    <form action="../PHP/regrut.php">
        <label for="que">¿Para qué es?</label><br><br>
        <select name="opcion1" id="opcion1">
            <option value="Bajar">Bajar de Peso</option>
            <option value="Mantener">Mantener Peso</option>
            <option value="Subir Masa Muscular">Subir masa muscular</option>
        </select><br><br><br>
        
        
        <label for="cale">Calentamiento</label><br><br>
        <input type="text" name="calentamiento1" placeholder="Ejercicio 1"><br><br><br>
        <input type="text" name="calentamiento2" placeholder="Ejercicio 2"><br><br><br>
        <input type="text" name="calentamiento3" placeholder="Ejercicio 3"><br><br><br>
        
        <label for="me_desa">Ejercicios cardiovasculares</label><br><br>
        <input type="text" name="cardi1" placeholder="Ejercicio 1"><br><br><br>
        <input type="text" name="cardi2" placeholder="Ejercicio 2"><br><br><br>
        <input type="text" name="cardi3" placeholder="Ejercicio 3"><br><br><br>

        <label for="almu">Ejericios de fuerza</label><br><br>
        <input type="text" name="fuer1" placeholder="Ejercicio 1"><br><br><br>
        <input type="text" name="fuer2" placeholder="Ejercicio 2"><br><br><br>
        <input type="text" name="fuer3" placeholder="Ejercicio 3"><br><br><br>
        
        <label for="me_almu">Ejercicios de abdomen</label><br><br>
        <input type="text" name="abdo1" placeholder="Ejercicio 1"><br><br><br>
        <input type="text" name="abdo2" placeholder="Ejercicio 2"><br><br><br>
        <input type="text" name="abdo3" placeholder="Ejercicio 3"><br><br><br>

        <label for="cen">Enfriamiento</label><br><br>
        <input type="text" name="enfri1" placeholder="Ejercicio 1"><br><br><br>
    
        <input class="b" type="submit" name="registrar-dieta" value="Registrar">
    </form>
</div>
    </center>
</body>
</html>