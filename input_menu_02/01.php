<?php

// ============================================= 01 ～ 10 まで記載

// ================================ 01
/*

入力例1
paiza

出力例1
paiza

入力例2
Paiza21

出力例2
Paiza21

*/

$num_01 = fgets(STDIN);
print($num_01);

// ================================ 02

/*

入力例1
paiza
gino

出力例1
paiza
gino

入力例2
heisei31
reiwa1

出力例2
heisei31
reiwa1

入力例3
2012021300
2020042218

出力例3
2012021300
2020042218

*/

$num_02_01 = fgets(STDIN);
$num_02_02 = fgets(STDIN);

print($num_02_01);
print($num_02_02);


// ================================ 03

/*

入力例1
abc
def
ghi

出力例1
abc
def
ghi

入力例2
line_1
line_2
line_3

出力例2
line_1
line_2
line_3

*/

$i = 0;
$arr_03 = [];
while ($i <= 2) {

    $arr[$i] = fgets(STDIN);
    print($arr[$i]);
    $i += 1;
}


// ================================ 04

/*

s_1, s_2, s_3, ... s_9, s_10 の 10 個の文字列が与えられます。
文字列を与えられた順番通りに出力してください。

 */

/*

 入力例1
one
two
three
four
five
six
seven
eight
nine
ten

出力例1
one
two
three
four
five
six
seven
eight
nine
ten

 */


$num_04 = 0;
$arr_04 = [];

// === １０行の要素を取得
while ($num_04 < 10) {

    // 値取得
    $arr_04[$num_04] = fgets(STDIN);
    // 出力
    print($arr_04[$num_04]);
    // index を１つ増やす
    $num_04 += 1;
}


// ================================ 05

/*

s_1, s_2, s_3, ... s_999, s_1000 の 1,000 個の文字列が与えられます。
文字列を与えられた順番通りに出力してください。

*/

$num_05 = 0;
$arr_05 = [];

// === 1000行の要素の取得
while ($num_05 < 1000) {

    // 配列に値格納
    $arr_05[$num_05] = fgets(STDIN);

    // 出力
    print($arr_05[$num_05]);

    $num_05 += 1;
}
