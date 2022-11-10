<?php

function genCode($lenght)
{
    $number_material = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $text_material = [
        "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
    ];
    $mix_material = array_merge($number_material, $text_material);
    $temp_code = "";
    for ($i = 0; $i < $lenght; $i++) {
        shuffle($mix_material);
        $random_number = rand(0, sizeOf($mix_material) - 1);
        $temp_code .= $mix_material[$random_number];
    }

    return $temp_code;
}
// echo genCode(52);
