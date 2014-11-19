<?php

include_once('samochod.php');
include_once('silnik.php');
include_once('samochodWyscigowy.php');

//$samochod = new Samochod();
//echo $samochod->helloSamochod();

function otoSamochod(Samochod $s)
{
	return "Witaj! To ja - Twój samochod: ".$s->getKolor()." ".$s->getMarka()." ".$s->getModel()."\n";
}

$mojSamochod = new Samochod("Fiat",1250, "126p", "rozowyy", "hatchback");
echo $mojSamochod->helloSamochod();

$innySamochod = new Samochod("Ford",1450, "Mondeo", "czarny", "combi");
echo $innySamochod->helloSamochod();

echo $innySamochod->getKolor()."\n";
$innySamochod->setKolor("zielony");
echo $innySamochod->getKolor()."\n";
echo $innySamochod->helloSamochod();

echo otoSamochod($innySamochod);
echo otoSamochod($mojSamochod);


echo 'SAMOCHOD WYSCIGOWY'."\n";


$silnikWyscigowy = new Silnik(130);
$samochodWyscigowy = new SamochodWyscigowy('Opel', 1550, 'Astra Burton', 'czerwony', 'sedean', $silnikWyscigowy);

echo $samochodWyscigowy->helloSamochod()."\n";
echo $samochodWyscigowy->getPredkoscMaksymalna()."\n";
echo $samochodWyscigowy->getPrzyspieszenie()."\n";


?>

