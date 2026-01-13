<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Formulaire Utilisateur</title>
</head>
<body>

<form method="get">
    <label>Nom :</label>
    <input type="text" name="nom" required><br><br>

    <label>Age :</label>
    <input type="number" name="age" required><br><br>

    <input type="radio" name="gender" value="homme" required>
    <label>Homme</label>

    <input type="radio" name="gender" value="femme" required>
    <label>Femme</label><br><br>

    <button type="submit" name="ok">OK</button>
</form>

<?php
if(isset($_GET['ok'])){
    $nom = $_GET['nom'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];

    if ($gender == "homme") {
        $titre = "Mr";
    } else {
        $titre = "Mme";
    }

    echo "<h3>Informations :</h3>";
    echo $titre . " " . ($nom) . " a " .($age) . " ans.";
}
?>
</body>
</html>
