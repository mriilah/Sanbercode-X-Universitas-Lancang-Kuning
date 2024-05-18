<?php
    class animal{
        public $name = "shaun";
        public $legs = 4 ;
        public $cold_blooded = "no" ;
        public $jump = "Hop Hoop";
        public $yell = "Auooooooo";
        public function __construct($name){
            $this->name = $name;
        }
        public function legs($angka){
            return "legs :$angka "."<br>";
        }
    }
?>