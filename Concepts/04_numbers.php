<?php

    $redius = 5.343;
    define("PI", 3.1415);

    $area = PI * ($redius**2);
    
    echo "Area(increament): $area <br>";

    // increament
    $area++;
    echo "Area(increament): $area <br>";
    
    // decreament
    $area--;
    $area--;
    echo "Area(decreament): $area <br>";

    echo "Floor: " .floor($redius). "<br>";
    echo "Ceil: " .ceil($redius). "<br>";
    echo "Round: " .round($redius). "<br>";

    // build in
    echo "Buildin PI value: " .pi();

?>