<?php

// menggunakan pengkondisian multiple IF
    $nilai=80;
    if($nilai>=85){
        $grade="A";
    } else if($nilai>=70){
        $grade="B";
    } else {
        $grade="C";
    }

    echo"<b>nilaiku saat ini adalah : $nilai termasuk dalam grade : $grade</b>";

?>