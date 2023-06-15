<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro dietas</title>
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
            height: 1700px;
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
    <h1>Registro de Dieta</h1>
    <center>
    <div class="a">
    <form action="../PHP/regdiet.php" >
        <label for="que">¿Para qué es?</label><br><br>
        <select name="opcion" id="opcion">
            <option value="Bajar">Bajar de Peso</option>
            <option value="Mantener">Mantener Peso</option>
            <option value="Subir">Subir masa muscular</option>
        </select><br><br><br>
        
        
        <label for="desa">Desayuno</label><br><br>
        <input type="text" name="desayuno1" placeholder="Comida 1"><br><br><br>
        <input type="text" name="desayuno2" placeholder="Comida 2"><br><br><br>
        <input type="text" name="desayuno3" placeholder="Comida 3"><br><br><br>
        
        <label for="me_desa">Merienda Desayuno</label><br><br>
        <input type="text" name="me_desa1" placeholder="Comida 1"><br><br><br>
        <input type="text" name="me_desa2" placeholder="Comida 2"><br><br><br>

        <label for="almu">Almuerzo</label><br><br>
        <input type="text" name="almuerzo1" placeholder="Comida 1"><br><br><br>
        <input type="text" name="almuerzo2" placeholder="Comida 2"><br><br><br>
        <input type="text" name="almuerzo3" placeholder="Comida 3"><br><br><br>
        
        <label for="me_almu">Merienda Almuerzo</label><br><br>
        <input type="text" name="me_almu1" placeholder="Comida 1"><br><br><br>
        <input type="text" name="me_almu2" placeholder="Comida 2"><br><br><br>

        <label for="cen">Cena</label><br><br>
        <input type="text" name="cena1" placeholder="Comida 1"><br><br><br>
        <input type="text" name="cena2" placeholder="Comida 2"><br><br><br>
        <input type="text" name="cena3" placeholder="Comida 3"><br><br><br>
        
        <label for="me_noc">Merienda Nocturna</label><br><br>
        <input type="text" name="me_noc1" placeholder="Comida 1"><br><br><br>
        <input type="text" name="me_noc2" placeholder="Comida 2"><br><br><br>

        <input class="b" type="submit" name="registrar-dieta" value="Registrar">
    </form>
    </div>
    </center>
</body>
</html>