<?php
    $a = 50;
    function soma($b){
        global $a;
        return $a + $b;
    }

    echo soma(35);
?>