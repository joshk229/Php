<?php
include_once("programma.php");
include_once("liedjes.php");

$ditprogramma = new programma();
$ditprogramma->setname("Mijn eerste programma");
$ditprogramma->setomschrijving("laten we testen");

foreach ($ditprogramma->getprogramma() as $p) {
    echo $p."<br>";
}

$nieuwliedje = new liedjes("Laat je gaan", " Gio Swikker" );

$ditprogramma->voegliedjetoe($nieuwliedje);

foreach ($ditprogramma->getliedjes() as $liedjes) {
    echo $liedjes->gettitel()." -".$liedjes->getArtiest()."<br>";
}