<?php
function verifierMoyenne($note, $matiere, $prenom, $college = 'Collège de France') {
    if (!is_numeric($note)) {
        echo "La note doit être un nombre !"."<br>";
        return;
    }
    if ($note < 0 || $note > 20) {
        echo "La note doit être comprise entre 0 et 20 !"."<br>";
        return;
    }
    if (!is_string($prenom)) {
        echo "Le prénom doit être une chaîne de caractères !"."<br>";
        return;
    }
    if (!is_string($matiere)) {
        echo "La matière doit être une chaîne de caractères !"."<br>";
        return;
    }

    if ($note >= 17) {
        echo "Très bien ! "."<br>";
    }
    if ($note >= 10) {
        echo "Bravo $prenom ! Vous êtes reçu(e) au $college !"."<br>";
    } elseif ($note >= 8) {
        echo "Vous devez passer l'examen de rattrapage en $matiere !"."<br>";
    } else {
        echo "Désolé $prenom ! Vous êtes recalé(e) !"."<br>";
    }
}

verifierMoyenne(18, 'Mathématiques', 'Alice'); 
verifierMoyenne(9, 'Histoire', 'Bob'); 
verifierMoyenne(6, 'Physique', 'Charles'); 
verifierMoyenne('douze', 'Chimie', 'David'); 
verifierMoyenne(15, 'Anglais', 123); 
verifierMoyenne(15, 789, 'Emma'); 