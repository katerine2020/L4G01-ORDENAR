<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1+1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  $edad =24;
  if($edad >100
  ){
      echo "mayor de edad";
  }else {
      echo "menor de edad";
  }
echo "<br>";
  echo $edad>20? "mayor":"menor";   //simplifica la condicion del if anterior--operador ternario
  
?>  <br>

<?=1+20?> <!--- forma de acortar la etiqueta PHP-->
</body>
</html>