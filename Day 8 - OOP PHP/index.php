<?php
    require_once ("animal.php");
    require_once ("frog.php");
    require_once ("ape.php");
    
    $sheep = new animal("shaun");

    echo "name :" . $sheep->name. "<br>"; // "shaun"
    echo "legs :" . $sheep->legs. "<br>"; // 4
    echo "cold blooded :" . $sheep->cold_blooded. "<br> <br>"; // "no"
    
    $frog = new frog("buduk");

    echo "name :" . $frog->name. "<br>"; // "shaun"
    echo "legs :" . $frog->legs. "<br>"; // 4
    echo "cold blooded :" . $frog->cold_blooded. "<br>"; //
    echo "Jump :" . $frog->jump. "<br> <br>"; //

    $sungkong = new sungkong("kera sakti");

    echo "name :" . $sungkong->name. "<br>"; // "shaun"
    echo $sungkong->legs(2);
    echo "cold blooded :" . $sungkong->cold_blooded. "<br>"; //
    echo "Yell :" . $sungkong->yell. "<br>"; //
    
?>