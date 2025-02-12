<?php
$total_achats = 75;

if ($total_achats < 50) {
    echo "Ajoutez encore quelques articles pour bénéficier d'une livraison gratuite.";
} elseif ($total_achats <= 100) {
    echo "Félicitations ! La livraison est offerte.";
} else {
    $total_achats_reduit = $total_achats * 0.90; 
    echo "Merci pour votre commande ! Vous bénéficiez d'un bon d'achat de 10 € pour votre prochaine commande.";
    echo " Le montant total après réduction est de " . $total_achats_reduit . " €.";
}

