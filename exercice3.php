<?php
$age = 25;

$category = match (true) {
    $age < 13 => 'Enfant',
    $age >= 13 && $age <= 17 => 'Adolescent',
    $age >= 18 && $age <= 64 => 'Adulte',
    $age >= 65 => 'Senior',
    default => 'Catégorie inconnue',
};

echo "La catégorie d'utilisateur est : " . $category;
