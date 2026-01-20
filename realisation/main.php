<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>realisation</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
 <form method="get">
    <input type="text" name="titre" placeholder="Titre du livre">
    <button>Rechercher</button>
</form>

 <?php

$livres = [

    [

        "titre" => "Apprendre PHP",

        "auteur" => "Fatine Chebab",

        "annee" => 2024,

        "prix" => 120,

        "disponible" => true

    ],

    [

        "titre" => "JavaScript pour débutants",

        "auteur" => "Ali Ahmed",

        "annee" => 2023,

        "prix" => 100,

        "disponible" => false

    ],

    [

        "titre" => "HTML & CSS",

        "auteur" => "Sara Benali",

        "annee" => 2022,

        "prix" => 80,

        "disponible" => true

    ]


];
if (isset)
$total = 0 ; 
foreach ($livres as $livre);
if ($livre ['disponible']) {
 echo "<div>";
echo "<P> {$livre['titre']} </P>";
echo"<P>  {$livre['auteur']}  </P>";
echo"<P>  {$livre['annee']}  </P>";
echo"<P>  {$livre['prix']} dh </P>";
echo"<P>  disponible </P>";

$total += $livre['prix'];


echo "</div>";
}
echo "<P> total des livres dispo est : $total dh </P>";

















?>



</body>
</html>















