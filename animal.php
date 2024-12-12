<?php 
require_once("frog.php");
require_once("ape.php");
    class Animal {
        public $name;
        public $legs = 4;
        public $cold_blooded = "no";

        public function __construct($namaHewan,$jumlahkaki){
            $this->name = $namaHewan;
            $this->legs = $jumlahkaki;
        }
    }

?>