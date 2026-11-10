<?php
session_start();
//Pagina riepilogativa che mostra i dati utente, il dettaglio del carrello con quantità multiple, il calcolo dei subtotali,

$listino = $_SESSION('listino');

$Qcavallo = (int) $_POST['cavallo'] ?? 0;
$Qmouse = (int) $_POST['mouse'] ?? 0;
$Qcronometro = (int) $_POST['cronometro'] ?? 0;
$Qferrari = (int) $_POST['ferrari'] ?? 0;
$Qbottiglia = (int) $_POST['bottiglia'] ?? 0;


$QUANTITIES = [

    $Qcavallo,
    $Qmouse,
    $Qcronometro,
    $Qferrari,
    $Qbottiglia,



];


function calcolo_prodotto($p)
{
    global $QUANTITIES,$listino;
    return $listino[$p]['prezzo'] * $QUANTITIES[$p];
}

function calcolo_tot()
{
    global $QUANTITIES;
    $tot = 0;
    for ($i = 0; $i < count(array_keys($QUANTITIES)); $i++) {
        $tot += calcolo_prodotto($i);
    }

    return $tot;

}
function calcolo_spedizione()
{
    if (calcolo_tot() < 50) {
        return 4.99;
    }

    return 0;

}

function totale_complessivo()
{

    return calcolo_tot() + calcolo_spedizione();

}





?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riepilogo ordine</title>
</head>
<body>
    <h1>Riepilogo ordine</h1>

    <p>
        Utente:
        <?= htmlspecialchars($username, ENT_QUOTES, 'UTF-8') ?>
    </p>

    <h2>Dettaglio carrello</h2>

    <table>
        <thead>
            <tr>
                <th>Prodotto</th>
                <th>Prezzo unitario</th>
                <th>Quantità</th>
                <th>Subtotale</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carrello as $prodotto): ?>
                <?php if ($prodotto['quantita'] > 0): ?>
                    <tr>
                        <td><?= htmlspecialchars($prodotto['nome'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td>€ <?= number_format($prodotto['prezzo'], 2, ',', '.') ?></td>
                        <td><?= $prodotto['quantita'] ?></td>
                        <td>€ <?= number_format($prodotto['subtotale'], 2, ',', '.') ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>Totale prodotti: € <?= number_format($totaleProdotti, 2, ',', '.') ?></p>
    <p>Spese di spedizione: € <?= number_format($spedizione, 2, ',', '.') ?></p>
    <p><strong>Totale complessivo: € <?= number_format($totaleComplessivo, 2, ',', '.') ?></strong></p>
</body>
</html>
