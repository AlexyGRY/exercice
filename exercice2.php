<?php

const STATUT_EN_ATTENTE ="en attente";
const STATUT_EXPEDIEE= "expédiée";
const STATUT_LIVREE= "livrée";
const STATUT_ANNULEE= "annulée";

$statut_commande = STATUT_EXPEDIEE; 

switch ($statut_commande) {
    case STATUT_EN_ATTENTE:
        echo "Votre commande est en attente de traitement.";
        break;
    case STATUT_EXPEDIEE:
        echo "Votre commande a été expédiée.";
        break;
    case STATUT_LIVREE:
        echo "Votre commande a été livrée.";
        break;
    case STATUT_ANNULEE:
        echo "Votre commande a été annulée.";
        break;
    default:
        echo "Statut de commande inconnu.";
        break;
}