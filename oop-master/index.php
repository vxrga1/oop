<?php
include "hirek.php";
include "Page.php";
include "szponzoralt.php";

//echo "Friss hírek!";//statikus osztállyal iratjuk ki
\Page::PrintHeader(); //:: a hivatkozás az osztály eljárására, mert statikusan hoztam létre. -> hibát okoz
$napihirek1 = new \Hirek("Az első cikkem","tanulás");
//return this nélkül
//$napihirek1->setTartalom("Itt jeleneik eg az első cikkem tartalma...");
//$napihirek1->setTags("cikk")->setTags("tanulás");
//return this
$napihirek1->setTartalom("Itt jeleneik eg az első cikkem tartalma...")
    ->setTags("cikk")->setTags("tanulás");
//............................................................

$napihirek2 = new \Hirek("Ez a második  cikkem","szorakozás");
$napihirek2->setTartalom("Tanulás után jöhet a szórakozás...")
    ->setTags("cikk")->setTags("szorakozás");
//............................................................
$napihirek3 = new \szponzoralt("Ez a harmadi  cikkem, ami szponzorált","szorakozás");
$napihirek3->setTartalom("A szorakozáshoz ajálom a következő TV-ket...")
    ->setTags("cikk")->setTags("szorakozás")->setTags("TV")->setTags("OLED")->setUrl("https://www.alza.hu/televiziok/18849604.htm");


echo $napihirek1->HtmlEloNezet();
echo $napihirek2->HtmlEloNezet();
echo $napihirek3->HtmlEloNezet();