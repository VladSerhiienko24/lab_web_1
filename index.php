<?php
    echo "<p>Hello world!</p>";
    echo "<p>Пример работы с массивом</p>";

    $array = array(
        "1" => "Сдать 1 лабу",
        "2" => "Сдать 2 лабу",
        "3" => "Сдать 3 лабу",
        "4" => "Сдать 4 лабу",
    );

    echo "<p>Достичь ".count($array)." цели</p>";
    foreach ($array as $value) {
        echo "<p>".$value."</p>";
    }
?>