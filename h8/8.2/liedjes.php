<?php
class liedjes {
    private $titel;
    private $artiest;

    function __construct($titel, $artiest) {
        $this->titel = $titel;
        $this->artiest = $artiest;
    }

    public function gettitel() {
        return $this->titel;
    }
    public function settitel($titel) {
        $this->titel = $titel;
        return $this;
    }
    public function getartiest() {
        return $this->artiest;
    }
    public function setartiest($artiest) {
        $this->artiest = $artiest;
        return $this;
    }


}
