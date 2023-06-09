<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>



    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
      
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: Cálcular la razón F0/F1</h2>
        <p>Descripción:</p>
        <p>La distancia media entre la Tierra y el Sol es 400 veces la distancia de la Luna a la Tierra. Denotando la fuerza entre la Tierra y el Sol como F0 y la fuerza entre la Tierra y la Luna como F1. Si la masa de la Tierra es aproximadamente 81 veces la de Luna y la Masa del Sol es 332,946 veces la masa de la Tierra, ¿cuál es la razón F0/F1?</p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/problema.png">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        F = G * (m1 * m2) / r^2<br>
        (F0 / F1) = (mT * mS * d1^2) / (mL * d0^2)
      </section>
      <section class="datos">
        <h2>Datos:</h2>
         Distancia media entre la Tierra y el Sol: d0 = 400 * d1 <br>
         Masa de la Tierra: mT = 81 * mL<br>
         Masa del Sol: mS = 332,946 * mT<br>
          
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <?php
            $mT = 81;
            $mL = 1;
            $mS = 332946 * $mT;
            $d1 = 1;
            $d0 = 400 * $d1;

            $razon = ($mT * $mS * pow($d1, 2)) / ($mL * pow($d0, 2));
        ?>
        <p>a) La razón F0/F1 es de: (F0 / F1) = (81 * mL * 332,946 * 400^2 * d1^2) / (mL * (400 * d1)^2)</p>
        <button onclick="document.getElementById('resultadoA').innerHTML = '<?php echo $razon; ?>';">Presiona para calcular</button>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
</footer> 
</section>
</body>
</html>
