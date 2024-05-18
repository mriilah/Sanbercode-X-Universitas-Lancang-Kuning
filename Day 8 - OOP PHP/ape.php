<?php
    require_once ("animal.php");

    class sungkong extends animal
    {
        public function legs($angka){
            return "legs :$angka "."<br>";
        }
        public $yell = "Auooooooo";
    }
?>