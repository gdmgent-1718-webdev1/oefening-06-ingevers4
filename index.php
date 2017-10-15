<?php 

//schrijf een functie die de huidige maand en het seizoen op het scherm laat verschijnen
/*
* lente: 21 maart t.e.m. 20 juni;
* zomer: 21 juni t.e.m. 20 september;
* herfst: 21 september t.e.m. 20 december;
* winter: 21 december t.e.m. 20 maart.
*/


$month = date("m");
$date = date("d-m-y");

echo ("Datum van vandaag: ". $date. PHP_EOL. ("<br>"));


    function checkSeason($month) {
        if ($month >="3" && $month <="5") {
            $season = "het is lente";
            echo ($season);
        } else if ($month >="6" && $month <="8") {
            $season = "het is zomer";
            echo ($season);
        } else if ($month >="9" && $month <="11") {
            $season = "het is herfst";
            echo ($season);
        } else {
            $season = "het is winter";
            echo ($season);
        }
    }

    checkSeason("10");