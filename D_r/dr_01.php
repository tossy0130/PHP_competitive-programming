<?php

// ================================= 01
/**
 * 入力例1
 *  paiza
 *
 *  出力例1
 *  paiza
 */

// === fgets １行取得
$input_line = fgets(STDIN);
echo $input_line;

// ================================= 02
/**
 * 
 * 入力例2
 *   5
 *
 * 出力例2
 * paiza
 * paiza
 * paiza
 * paiza
 * paiza
 *
 */

$num_01 = fgets(STDIN);

$idx = 0;
while ($num_01 > $idx) {
    print("paiza" . "\n");
    $idx++;
}

// ================================= 03

/***
 * 入力例2
 
3
10
5
39

出力例2
10
5
39
  
 */

$loop_num = fgets(STDIN);

for ($i = 0; $i < $loop_num; $i++) {
    $tmp = trim(fgets(STDIN));
    print($tmp . "\n");
}

// ================================= 04

/*
 *
入力例2
3
20
19
2

出力例2
20 
 */

$l_num_04 = fgets(STDIN);

$arr_04 = [];

for ($i = 0; $i < $l_num_04; $i++) {
    $arr_04[$i] = trim(fgets(STDIN));
}

# === 最大値　出力
print(max($arr_04));


// ================================= 05
/*

入力例2
3

出力例2
paiza paiza paiza

*/

$num_05 = fgets(STDIN);

for ($i = 0; $i < $num_05; $i++) {
    if ($i != $num_05 - 1) {
        print("paiza" . " ");
    } else {
        // === 最後の文字は、空白をつけない
        print("paiza");
    }
}

// ================================= 06

/*

入力例2
3
4 30 12

出力例2
4
30
12

*/

$num_06 = fgets(STDIN);
$str_06 = fgets(STDIN);

// === 文字列を配列へ
$arr_06 = explode(" ", $str_06);

$idx = 0;
while ($num_06 > $idx) {
    print($arr_06[$idx] . "\n");
    $idx++;
}

// ================================= 07

/*

入力例2

3
Tanaka 18
Sato 50
Suzuki 120

出力例2

Tanaka 19
Sato 51
Suzuki 121

*/

$num_07 = trim(fgets(STDIN));

$aa = [];
$bb = [];
for ($i = 0; $i < $num_07; $i++) {
    $tmp = fgets(STDIN);

    // === １行取得して　配列へ格納
    $arr_07 = explode(" ", $tmp);

    $a = $arr_07[0]; // 名前 
    $b = $arr_07[1]; // 年齢

    // === 年齢に 1をプラスして出力
    print($a . " " . $b + 1 . "\n");
}
