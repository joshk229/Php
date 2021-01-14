<?php

class programma {
    private $naam = "";
    private $omschrijving = "";
    private $liedjes = array();

    public function voegliedjetoe($liedje) {
        $this->liedjes[] = $liedje;
    }
    public function getliedjes() {
        return $this->liedjes;
    }

    public function getprogramma() {
        return array("naam" => $this -> naam, "omschrijving" => $this -> omschrijving);
    }
    public function setname($n) {
        if (strlen($n)>=2) {
            $this->naam = $n;
        }
    }
    public function setomschrijving($omschrijving) {
        $this->omschrijving = $omschrijving;
    }
    public function getname() {
        return $this -> naam;
    }
    public function getomschrijving() {
        return $this -> omschrijving;
    }
}