<?php

$tab_multi=[
    0 =>["prenom"=> "martin","nom"=>"COTTET","age"=>35],
    1 =>["prenom"=> "john","nom"=>"SMITH","age"=>29],
    2 =>["prenom"=> "paul","nom"=>"JOHNSON","age"=>25],
    3 =>["prenom"=> "guillaume","nom"=>"DUPONT","age"=>30],
];

echo "<br>";
echo $tab_multi[1]["nom"];
echo "<br>";


//todo

foreach ($tab_multi as $key => $value) {
    echo($value["prenom"])."<br>";
}



















