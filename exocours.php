<?php
function meteo($saison,$temperature){
    if ($saison=="printemps"){
        if ($temperature==1 || $temperature==-1){
            return "nous somme au $saison et il fait $temperature degre.<br>";
        }else if($temperature>=18){
            return "nous somme au $saison et il fait $temperature degres et il fait chaud.<br>";
        }else{
            return "nous somme au $saison et il fait $temperature degres.<br>";
        }
    }else if($temperature==1 || $temperature==-1){
        return " nous sommes en $saison et il fait $temperature degre.<br>";
    }else if($temperature>=18){
        return " nous sommes en $saison et il fait $temperature degres et il fait chaud.<br>";
    }else{
        return "nous somme au $saison et il fait $temperature degres.<br>";
    }
}

echo meteo("printemps",19);


echo '<h2 class="subtitle">C- La portée des variables </h2>';

function jourSemaine(){
    $jour = "Lundi";
    return $jour;
}

echo jourSemaine();
echo "<br>";

$ville = "chartres";

function afficheVille(){
    global $ville;
    echo "la ville est $ville";
}

afficheVille();

echo '<h2 class="subtitle">D - Typages des paramètres et valeurs de retour</h2>';



function identique(string $nom,int $age){
    return "bonjour $nom,vous avez $age ans!<br>";
}


echo identique("martin",25);

function isMajeur(int $age) : bool {
    return $age>=18;
}

var_dump(isMajeur(25));

var_dump(isMajeur(15));




/*Écrivez une fonction appelée "verifierMoyenne" qui prend en paramètre une note , une matière , le prénom et le collège d'un élève et qui affiche la phrase suivante :
Si la moyenne est supérieure ou égale à 10, on affiche "Bravo [prénom] ! Vous êtes reçu(e) au [collège] !"
Si la moyenne est supérieure ou égale à 8 et inférieure à 10, on affiche "Vous devez passer l'examen de rattrapage en [matière] !"
Si la moyenne est inférieure à 8, on affiche "Désolé [prénom] ! Vous êtes recalé(e) !"

Si aucun nom de collège n'est passé en paramètre, alors le collège par défaut est "Collège de France"
Si la note de l'élève n'est pas un nombre, on affiche "La note doit être un nombre !"
Si la note de l'élève n'est pas comprise entre 0 et 20, on affiche "La note doit être comprise entre 0 et 20 !"
Si le prénom de l'élève n'est pas une chaîne de caractères, on affiche "Le prénom doit être une chaîne de caractères !"
Si la matière n'est pas une chaîne de caractères, on affiche "La matière doit être une chaîne de caractères !"

Si la note est comprise entre 17 et 20, on affiche "Très bien"*/


















