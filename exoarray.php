<?php
$notes = [];
for ($i = 0; $i < 35; $i++) {
    $notes[] = rand(0, 20);
}

echo "Notes des étudiants : ";
foreach ($notes as $note) {
    echo $note . " ";
}

echo "<br>";

$total = array_sum($notes);
$moyenne = $total / count($notes);

echo "Moyenne de la promotion : " . number_format($moyenne, 2) . "/20<br>";

if ($moyenne >= 12) {
    echo "<span style='color: green;'>La promotion est validée avec une moyenne de " . number_format($moyenne, 2) . "/20</span>";
} elseif ($moyenne >= 10 && $moyenne < 12) {
    echo "<span style='color: orange;'>La promotion est validée avec une moyenne de " . number_format($moyenne, 2) . "/20</span>";
} else {
    echo "<span style='color: red;'>La promotion est recalée avec une moyenne de " . number_format($moyenne, 2) . "/20</span>";
}
?>