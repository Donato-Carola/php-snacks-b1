<?php
/*Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite,
 punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60*/



//creiamo l'array
//




$partites = [
    [
        'squadra1' => 'milano',
        'squadra2' =>'Cantù',
        'punteggio1' => 55,
        'punteggio2' => 60
    ],
    [
        'squadra1' => 'napoli',
        'squadra2' =>'roma',
        'punteggio1' => 40,
        'punteggio2' => 22
    ],


];









?>

<ul>

<?php foreach ($partites as $partite) { ?>
    
   <li>
    <pre>
          <?php echo $partite['squadra1'] . ' - ' . $partite['squadra2'] . ' : ' . 
          $partite['punteggio1'] . ' - ' . $partite['punteggio1'];  ?>
   </pre>
</li>
 
     
<?php } ?>

</ul>