<?php

  define("BACKGROUND_COLOR", "#0069D9");
  define("H1_COLOR", "#F4F8F7");
  define("LINKS_COLOR", "87f2ac");

  $random_number1 = random_int(0, 100);
  $random_number2 = random_int(0, 100);

  $a = 2; $b = 3; $c = 1;

 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicios Prácticos de PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito|Raleway" rel="stylesheet">
  </head>

  <style media="screen">

    *{
      font-weight: bold;
      font-size: 1.2em;
      font-family: Nunito;
    }

    h1{
      font-size: 2em
    }

  </style>
  <?php echo "<body bgcolor='".BACKGROUND_COLOR."'>";

    echo "<h1><font color='".H1_COLOR."'></font>Título 1</h1>";
    echo "<a href=''><font color='".LINKS_COLOR."'>Links</font></a>";

    // Muestro por pantalla el resultado de las variables con su número aleatorio.
    echo "<p>Número Aleatorio 1: " . $random_number1 . "<br />Número Aleatorio 2: " . $random_number2 . "</p>";

    // Muestro el cálculo de ambas variables (suma, resta, multiplicación, división, raiz cuadrada y potencia)

    echo "<p>Suma: " . ($random_number1 + $random_number2)
         . "<br />Resta: " . ($random_number1 - $random_number2)
         . "<br />Multiplicación: " . ($random_number1 * $random_number2)
         . "<br />División: " . ($random_number1 / $random_number2)
         . "<br />Residuo: " . ($random_number1 % $random_number2)
         . "<br />Raiz Cuadrada del Número Aleatorio 1 (Redondeado a 2 decimales): " . round(sqrt($random_number1), 2)
         . "<br />Raiz Cuadrada del Número Aleatorio 2 (Redondeado a 2 decimales): " . round(sqrt($random_number2), 2)
         . "<br />Potencia del Número Aleatorio 1 ^2: " . pow($random_number1, 2)
         . "<br />Potencia del Número Aleatorio 2 ^2: " . pow($random_number2, 2) . "</p>";

    echo "<p>" . $a . "x^2 + " . $b . "x + " . $c . "<br />" . equacioSegonGrau($a, $b, $c) . "</p>";
  ?>
  </body>
</html>

<?php

  function equacioSegonGrau(int $a, int $b, int $c){
    $neg = -1;

    $menosb = $b * $neg;
    $oper1 = pow($b,2);
    $oper2 = 4*$a*$c;
    $resta = $oper1-$oper2;
    $raiz = pow($resta,(1/2));
    $dosa = 2*$a;

    $result1 = ($menosb + $raiz)/$dosa;
    $result2 = ($menosb - $raiz)/$dosa;

    $result = "El resultado es " . $result1 . " y " . $result2;
    return $result;
  }

 ?>
