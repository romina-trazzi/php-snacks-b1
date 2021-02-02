<?php

/*

ISTRUZIONI:
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60

PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/

$matches = [
    "Squadre di casa" => 
        [ "Roma", "Juventus", "Fiorentina" ],
    
    "Squadre ospiti" =>
        [ "Genoa", "Napoli", "Verona"],

    "Punti di casa" =>
        [ 2, 3, 2 ],
    
    "Punti di ospiti" =>
        [  3, 1, 0]

    ];  

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php Snacks</title>
    </head>
    <body>
        <h1>Tabellone partite - Snack 1</h1>
        
        <div>
            <p>
                <?php
                    $number_matches = count($matches["Squadre di casa"]);

                    for ($i = 0; $i < $number_matches; $i++) { 
                        echo $matches["Squadre di casa"][$i] . " - ";
                        echo $matches["Squadre ospiti"][$i] . " " . " | "; 
                        echo $matches["Punti di casa"][$i]. " - ";
                        echo $matches["Punti di ospiti"][$i] . " <br> ";
                    };
                
                ?>
            </p>
        </div>
        

        

    </body>
</html>


 
 
 
