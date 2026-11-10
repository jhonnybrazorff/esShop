<?php
session_start();
$cavallo = [

    "idProdotto" => "1",
    "descrizione" => "Cavallo da corsa",
    
    "prezzo" => 12,


];


$mouse = [

    "idProdotto" => "2",
    "descrizione" => "periferica pc",
    
    "prezzo" => 5,


];


$cronometro = [

    "idProdotto" => "3",
    "descrizione" => "strumento contaggio tempo",
    
    "prezzo" => 2,


];


$ferrari = [

    "idProdotto" => "4",
    "descrizione" => "Macchina lenta",
    
    "prezzo" => 1000,


];


$bottiglia = [

    "idProdotto" => "5",
    "descrizione" => "oggetto per bere",
    
    "prezzo" => 23,


];

$listino = [

    "1" => $cavallo,
    "2" => $mouse,
    "3" => $cronometro,
    "4" => $ferrari,
    "5" => $bottiglia,

];

$_SESSION['listino'] = $listino;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATALOGO</title>
</head>

<body>

<form action="checkout.php" method="POST"> 
    <h3>cavallo</h3>
    <p>12$</p>
    <input type="number" name="cavallo" min="0" max="1000">
    <h3>Mouse</h3>
    <p>5$</p>
    <input type="number" name="mouse" min="0" max="1000">
    <h3>Cronometro</h3>
    <p>2$</p>
    <input type="number" name="cronometro" min="0" max="1000">
    <h3>Ferrari</h3>
    <p>1000$</p>
    <input type="number" name="ferrari" min="0" max="1000">
    <h3>Bottiglia</h3>
    <p>23$</p>
    <input type="number" name="bottiglia" min="0" max="1000">
</form>
   

    <br>
    <button type="submit">Invia</button>
    <br>
    
    <a href="checkout.php">Andare al Checkout</a>
    <a href="logout.php">Andare al Logout</a>

</body>

</html>