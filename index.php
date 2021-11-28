<?php
    $numero = $_REQUEST["num"];

    if($numero != null) {
        $fibonacci = [0,1];
        for($i = 0; $i <= $numero; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        echo $fibonacci[$numero];
    }
?>