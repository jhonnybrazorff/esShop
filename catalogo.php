<?php
session_start();
//Area riservata con l'elenco di almeno 5 prodotti. 
// Ciascun prodotto è accompagnato da un elemento di input che permette all'utente di specificare la quantità desiderata prima di aggiungerlo al carrello. 

$cavallo = [

    "idProdotto" => "1456367",
    "descrizione" => "Cavallo da corsa",
    "quantità" => 0,
    "prezzo" => 12,


];


$mouse = [

    "idProdotto" => "543234545",
    "descrizione" => "periferica pc",
    "quantità" => 0,
    "prezzo" => 5,


];


$cronometro = [

    "idProdotto" => "98744323",
    "descrizione" => "strumento contaggio tempo",
    "quantità" => 0,
    "prezzo" => 2,


];


$ferrari = [

    "idProdotto" => "6493765",
    "descrizione" => "Macchina lenta",
    "quantità" => 0,
    "prezzo" => 1000,


];


$bottiglia = [

    "idProdotto" => "1034645",
    "descrizione" => "oggetto per bere",
    "quantità" => 0,
    "prezzo" => 23,


];

$listino = [

    "1456367" => $cavallo,
    "543234545" => $mouse,
    "98744323" => $cronometro,
    "6493765" => $ferrari,
    "1034645" => $bottiglia,

];

$_SESSION['listino'] = $listino;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATALOG</title>
</head>

<body>

    <form action="checkout.php" method="POST"></form>
    <h3>cavallo</h3>
    <p>12$</p>
    <input type="number" name="cavallo">
    <h3>Mouse</h3>
    <p>5$</p>
    <input type="number" name="mouse">
    <h3>Cronometro</h3>
    <p>2$</p>
    <input type="number" name="cronometro">
    <h3>Ferrari</h3>
    <p>1000$</p>
    <input type="number" name="ferrari">
    <h3>Bottiglia</h3>
    <p>23$</p>
    <input type="number" name="bottiglia">

    <br>
    <button type="submit">Invia</button>
    <br>
    
    <a href="checkout.php">Andare al Checkout</a>
    <a href="logout.php">Andare al Logout</a>

</body>

</html>