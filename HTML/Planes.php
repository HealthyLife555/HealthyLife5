<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../IMG/Logo.png" type="image/x-icon">
    <title>Healthy Life</title>
    <link rel="stylesheet" href="../CSS/Estilos3.css">
</head>
<body>
    <div class="container">
        <div class="conten">
          <?php
          $respuesta=$_POST['pregunta6'];
          if ($respuesta=="Quiero desarrollar músculos") {
            echo("
            <center>
          <h1>Dieta para subir masa muscular</h1><br>
            <ul>
              <h2>Desayuno</h2> <br>
              3 claras de huevo. <br>
              1 taza de avena. <br>
              1 plátano. <br><br>
              <h2>Merienda Desayuno</h2><br>
              1 yogur griego. <br>
              1 puñado de nueces o almendras. <br><br>
              <h2>Almuerzo</h2><br>
              1 taza de arroz integral. <br>
              1 taza de frijoles negros o lentejas. <br>
              Agua natural o una bebida sin azúcar. <br><br>
              <h2>Merienda almuerzo</h2><br>
              1 plátano. <br>
              1 cucharada de mantequilla de cacahuete (maní). <br><br>
              <h2>Cena</h2><br>
              150-200 gramos de salmón o carne magra (como bistec etc) <br>
              1 taza de quinoa o pasta integral. <br>
              Ensalada verde con aguacate, tomate y aceite de oliva. <br><br>
              <h2>Merienda cena</h2><br>
              1 taza de requesón bajo en grasa <br>
              1 puñado de frutos secos. <br><br><br><br>
              <h1>Rutina de ejercicio para masa muscular</h1>
              <h2>Calentamiento</h2><br>
              Realiza movimientos articulares suaves para calentar <br>
              Saltar la cuerda durante 5 minutos <br><br> 
              <h2>Ejericicios cardiovasculares</h2><br>
              Burpees: Realiza 3 series de 10 repeticiones. <br>
              Saltos de tijera: Realiza 3 series de 20 repeticiones <br><br>
              <h2>Ejericicios de fuerza</h2><br>
              Sentadillas: Realiza 3 series de 12 repeticiones. <br>
              Flexiones de brazos: Realiza 3 series de 10 repeticiones <br>
              Zancadas: Realiza 3 series de 10 repeticiones <br><br>
              <h2>Ejercicios de abdomen</h2><br>
              Plancha: Mantén la posición de plancha durante 30 segundos. <br>
              Crunch abdominal: Realiza 3 series de 15 repeticiones <br> <br>
              <h2>Enfriamiento</h2><br>
              Estiramientos: Dedica al menos 5 minutos a estirar. <br><br>
            </ul>
          </center>
            ");
          }
          else if($respuesta=="Me siento perfecto con mi físico"){
            echo("
            <center>
            <h1>Dieta para mantener peso</h1><br>
            <ul>
            <h2>Desayuno</h2> <br>
            2 huevos revueltos con verduras (como espinacas, champiñones y tomates) <br>
            Una porción de frijoles refritos <br><br>
            <h2>Merienda desayuno</h2><br>
            Un puñado de almendras o nueces <br><br>
            <h2>Almuerzo</h2><br>
            Tacos de pescado a la plancha con tortillas de maíz <br>
            Ensalada de repollo <br>
            Salsa de yogur <br><br>
            <h2>Merienda almuerzo</h2><br>
            Palitos de zanahoria y apio con guacamole casero <br><br>
            <h2>Cena</h2><br>
            Sopa de tortilla con pollo desmenuzado <br>
            Aguacate <br>
            Crema agria baja en grasa <br><br>
            <h2>Merienda cena</h2><br>
            Una porción de frutas frescas (como piña, melón o sandía) <br><br><br><br>
            <h1>Rutina para mantener peso</h1><br>
            <h2>Calentamiento</h2><br>
            Caminar en el lugar: 3-5 minutos <br>
            Saltar a la cuerda: 2-3 minutos <br>
            Estiramientos suaves de todo el cuerpo: 5-10 repeticiones por cada estiramiento <br><br>
            <h2>Ejericicios cardiovasculares</h2><br>
            Saltos de tijera: 3 series de 30 segundos, descanso de 15 segundos entre series <br>
            Burpees: 3 series de 10 repeticiones, descanso de 30 segundos entre series <br>
            Saltos al cajón o escalones: 3 series de 12 repeticiones, descanso de 20 segundos entre series <br><br>
            <h2>Ejericicios de fuerza</h2><br>
            Sentadillas: 3 series de 12-15 repeticiones, descanso de 30 segundos entre series <br>
            Zancadas o lunges: 3 series de 10 repeticiones por pierna, descanso de 20 segundos entre series <br>
            Flexiones de brazos: 3 series de 10-12 repeticiones, descanso de 30 segundos entre series <br><br>
            <h2>Ejercicios de abdomen</h2><br>
            Crunches o abdominales: 3 series de 15-20 repeticiones, descanso de 15 segundos entre series <br>
            Plancha lateral: 2 series de 30-45 segundos por cada lado, descanso de 15 segundos entre series <br>
            Russian twists: 3 series de 15-20 repeticiones, descanso de 15 segundos entre series <br><br>
            <h2>Enfriamiento</h2><br>
            Caminar en el lugar a ritmo lento: 3-5 minutos <br><br>
          </ul>
          </center>
            ");
          }
          else if($respuesta=="Necesito bajar de peso"){
            echo("
            <center>
          <h1>Dieta para bajar de peso</h1><br>
            <ul>
              <h2>Desayuno</h2> <br>
              1 taza de yogur bajo en grasa con frutas frescas picadas (como fresas o plátano) <br>
              1 taza de té verde o café sin azúcar <br>
              2 rebanadas de pan integral tostado con una cucharadita de mermelada sin azúcar <br><br>
              <h2>Merienda Desayuno</h2><br>
              1 manzana o 1 puñado de nueces <br><br>
              <h2>Almuerzo</h2><br>
              1 porción de pechuga de pollo a la parrilla <br>
              1 taza de ensalada verde (lechuga, espinacas, pepino, tomate) <br>
              1 taza de agua de limón sin azúcar <br><br>
              <h2>Merienda almuerzo</h2><br>
              1 aguacate pequeño en rodajas <br>
              4 galletas de arroz o de maíz sin sal <br><br>
              <h2>Cena</h2><br>
              1 porción de pescado a la plancha (como salmón o tilapia) <br>
              1 taza de brócoli al vapor <br>
              1 taza de té de hierbas sin azúcar <br><br>
              <h2>Merienda cena</h2><br>
              1 yogur bajo en grasa <br>
              1 puñado de almendras <br><br><br><br>
              <h1>Rutina de ejercicio para bajar de peso</h1>
              <h2>Calentamiento</h2><br>
              Saltos de cuerda: 3 series de 1 minuto cada una <br>
              Saltos laterales: 3 series de 20 repeticiones cada una <br>
              Sentadillas: 3 series de 15 repeticiones cada una <br><br> 
              <h2>Ejericicios cardiovasculares</h2><br>
              Burpees: 3 series de 10 repeticiones cada una <br>
              Mountain climbers: 3 series de 20 repeticiones cada una <br>
              Saltos al cajón (puedes utilizar una silla resistente): 3 series de 10 repeticiones cada una <br><br>
              <h2>Ejericicios de fuerza</h2><br>
              Flexiones de pecho: 3 series de 10 repeticiones cada una <br>
              Sentadillas: 3 series de 15 repeticiones cada una <br>
              Zancadas (lunges): 3 series de 10 repeticiones cada una (5 repeticiones por pierna) <br><br>
              <h2>Ejercicios de abdomen</h2><br>
              Crunch abdominal: 3 series de 15 repeticiones cada una <br>
              Russian twists: 3 series de 20 repeticiones cada una <br>
              Plancha lateral: 3 series de 30 segundos cada una (15 segundos por lado) <br> <br>
              <h2>Enfriamiento</h2><br>
              Estiramientos estáticos para todo el cuerpo: dedica al menos 5 minutos a estirar los principales grupos musculares <br><br>
            </ul>
          </center>
            ");
          }
          ?>
        </div>
        
        <div class="grupo">
            <h1 class="title1"><i class="fa-brands fa-js-square"></i> Galeria de Ejericicios</h1>
            <div class="contvideos">   
                <div class="video">
                    Salto en cuerda
                    <iframe width="560" height="315" src="../Videos/istockphoto-1139180407-640_adpp_is.mp4" title="Si" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>                                         
                <div class="video">
                  Saltos Laterales
                    <iframe width="560" height="315" src="../Videos/SALTOS LATERALES.mp4" title="Si" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video">
                  Sentadillas
                    <iframe width="560" height="315" src="../Videos/Sentadillas.mp4" title="Si" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>                
                <div class="video">
                  Burpees
                    <iframe width="560" height="315" src="../Videos/BURPEES CORTO.mp4" title="Si" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
                <div class="video">
                  Mountain Climber
                    <iframe src="../Videos/Moutain climber.mp4" title="Si" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video">
                  Saltos al cajón
                    <iframe src="../Videos/Salto a cajon.mp4" title="Si" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video">
                  Flexiones de Pecho
                    <iframe src="../Videos/Fleciones-pecho.mp4" title="Si" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>  
                <div class="video">
                  Zancadas
                    <iframe width="560" height="315" src="../Videos/Zancadas.mp4" title="Si" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video">
                  Crunch Abdominal
                    <iframe width="560" height="315" src="../Videos/Crunch Abdominal.mp4" title="Si" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video">
                  Russian twists
                    <iframe width="560" height="315" src="../Videos/Russian twist.mp4" title="Si" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video">
                  Plancha Lateral
                    <iframe width="560" height="315" src="../Videos/Plancha Lateral.mp4" title="Si" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video">
                  Saltos de tijera
                    <iframe width="560" height="315" src="../Videos/Saltos en tijera.mp4" title="Si" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video">
                 Plancha
                    <iframe width="560" height="315" src="../Videos/Plancha.mp4" title="Si" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
    
            </div>
    
        </div>
    </div>
</body>
</html>