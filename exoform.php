<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    $ville = $_POST['ville'];
    $code_postal = $_POST['code-postal'];
    $adresse = $_POST['adresse'];
    if (empty($ville)){
        echo "veuillez entrer la ville";
    }
    elseif (empty($code_postal)) {
        echo "veuillez entrez votre code postal";
    }
    elseif (empty($adresse)) {
        echo "veuillez entrez votre votre adresse";
    }
    
    }else {
        echo "votre ville est $ville."."<br>"."votre code postal est $code_postal."."<br>"."votre adresse est $adresse.";

    }

?>








<form action="" method="POST">
    <label for="ville">ville:</label>
    <input type="text" name="ville">
    <label for="code-postal">code postal:</label>
    <input type="text" name="code-postal">
    <label for="adresse">adresse:</label>
    <input type="text" name="adresse">
    <input type="submit" value="valider">
</form>




























