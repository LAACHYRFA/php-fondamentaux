for ($i = 1; $i <= 5; $i++) {
    echo "Compteur : $i <br>";
}

$i 1;
while ($i <= 5) {
 echo "compteur : $i <br>";
 $i++
}

$animaux =["chat", "chien", "lapin"];
foreach ($animaux as $animal){
    echo "animal : $animal <br>";
}

for ($i = 1; $i <=10; !i++) {
    if ($i ==5) continue;
    if ($i ==8) break;
    echo "valeur : $i <br>";
}