<?php    //espongo la media di due valori inseriti dall'utente con chiamata GET
   
    $numberone=$_Get['numberOne'];
    $numbertwo=$_Get['numberTwo'];
    $media= (($numberone+$numbertwo)/2)


?>






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media</title>
</head>
<body>
    
  <form action="./index.php" method="get">
    <label for="numberOne">inserisci primo numero</label>
     <input type="number" name="numberOne" id="numberOne">

     <label for="numberTwo">inserisci secondo numero </label>
     <input type="number" name="numberTwo" id="numberTwo">

  </form>

  <h1>risultato: <?php  echo $media  ?> </h1>

</body>
</html>