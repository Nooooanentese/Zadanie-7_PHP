<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 7</title>
</head>
<body>

<?php

$uczniowie = array(
    array("imie" => "Adam", "punkty" => 85),
    array("imie" => "Kasia", "punkty" => 92),
    array("imie" => "Marek", "punkty" => 48),
    array("imie" => "Ola", "punkty" => 67),
    array("imie" => "Tomek", "punkty" => 35)
);

function obliczProcent($punkty) {
    return $punkty;
}

function przyznajOcene($punkty) {

    if($punkty >= 90) {
        return 5;
    }
    elseif($punkty >= 80) {
        return 4;
    }
    elseif($punkty >= 60) {
        return 3;
    }
    elseif($punkty >= 40) {
        return 2;
    }
    else {
        return 1;
    }
}

function czyZdal($punkty) {

    if($punkty >= 40) {
        return true;
    }
    else {
        return false;
    }
}

echo "<h2>RAPORT WYNIKOW TESTU INFORMATYCZNEGO</h2>";

foreach($uczniowie as $uczen) {

    echo "<b>" . $uczen["imie"] . "</b><br>";

    echo "Punkty: " . $uczen["punkty"] . "<br>";

    echo "Procent: " . obliczProcent($uczen["punkty"]) . "%<br>";

    echo "Ocena: " . przyznajOcene($uczen["punkty"]) . "<br>";

    if(czyZdal($uczen["punkty"])) {
        echo "Status: ZALICZONY";
    }
    else {
        echo "Status: NIEZALICZONY";
    }

    echo "<br><br>";
}

$suma = 0;

for($i = 0; $i < count($uczniowie); $i++) {
    $suma = $suma + $uczniowie[$i]["punkty"];
}

$liczba = count($uczniowie);

$srednia = $suma / $liczba;

$zaliczyli = array();
$niezaliczyli = array();

foreach($uczniowie as $uczen) {

    if(czyZdal($uczen["punkty"])) {
        $zaliczyli[] = $uczen["imie"];
    }
    else {
        $niezaliczyli[] = $uczen["imie"];
    }
}

echo "<br>";

echo "<h2>PODSUMOWANIE KLASY</h2>";

echo "Liczba uczniow: " . $liczba . "<br>";

echo "Suma punktow: " . $suma . "<br>";

echo "Srednia punktow: " . $srednia . "<br>";

echo "Zaliczylo: " . count($zaliczyli) . "<br>";

echo "Nie zaliczylo: " . count($niezaliczyli) . "<br>";

echo "Uczniowie, ktorzy nie zaliczyli: ";

foreach($niezaliczyli as $imie) {
    echo $imie . " ";
}

echo "<br>";

echo "Komentarz: ";

switch(true) {

    case ($srednia < 40):
        echo "Bardzo slaby wynik klasy";
        break;

    case ($srednia >= 40 && $srednia < 60):
        echo "Wynik klasy jest niezadowalajacy";
        break;

    case ($srednia >= 60 && $srednia < 80):
        echo "Dobry wynik klasy";
        break;

    case ($srednia >= 80):
        echo "Bardzo dobry wynik klasy";
        break;
}

?>

</body>
</html>