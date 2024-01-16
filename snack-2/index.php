



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="./index.php" method="get">
   
<label for="name"> inserisci nome</label>
<input type="text" name="name" id="name">

<label for="email"> inserisci mail</label>
<input type="email" name="email" id="email">

<label for="age"> inserisci age</label>
<input type="number" name="age" id="age">
    
<button type="submit"> invia</button>

</form>

</body>
</html>


<?php

/*Con un form passare come parametri GET name, mail e age e 
verificare (cercando i metodi che non conosciamo nella 
documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia 
un numero. Se tutto è ok stampare "Accesso riuscito", 
altrimenti "Accesso negato"*/ 




?>