
<?php
$age = 17;

if ($age <= 20) {
 echo "vous etes majeur.";

}else {
 echo "vous etesmineur.";
}

$note = 14 ;
f ($note >= 16) {
 echo "tres bien";

}else if ($note >=10){
 echo "passable";

}else {
 echo "echec";
}

$jour = "vendredi";
switch ($jour){
 case "lundi":
 echo "debut d semaine";
 break;

 case "vendredi":
   echo "dernier jour avant le week-end";

          break;

   default :
          echo "jour normal";
}