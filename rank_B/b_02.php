<?php

// ============================================ 01

// === 配列一覧　出力

$arr_01 = ["Nara", "Shiga", "Hokkaido", "Chiba"];

$idx = 0;
$arr_01_max = count($arr_01); // 配列の長さ取得

foreach ($arr_01 as $a_01) {

    // === 配列の 長さと同じじゃなかったら、改行コードを付ける   
    if ($idx != $arr_01_max - 1) {
        print($a_01 . "\n");
    } else {
        print($a_01);
    }

    $idx++;
}


// ============================================ 02

/*

入力例1
input

出力例1
i
n
p
u
t

*/

$str_02 = fgets(STDIN);

$arr_02 = str_split($str_02);

foreach ($arr_02 as $a_02) {
    print($a_02 . "\n");
}
