<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<!--Kaloriju skaiciavimas-->
<?php

include('./funkcijos/kalorijuSkaiciavimas.php');

$laikas = 3;
$greitis_kmh = 5;
$kalorijos_per_h = 100;

echo "Nueita - ". atstumas ($laikas,$greitis_kmh). " km<br>";
echo "Kalorijos per km - ". kiek_kaloriju_per_km ($laikas, $greitis_kmh, $kalorijos_per_h). " kcal<br>";
echo "Sudeginta kaloriju - ". kalorijos ($laikas, $kalorijos_per_h). " kcal<br>". "<br>";

?>


</body>
</html>