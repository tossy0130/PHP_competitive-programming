<?php

/*

入力例1
440 442

出力例1
2

入力例2
104 100

出力例2
4

 */

// === 値を分割にして、取得
$input_03 = trim(fgets(STDIN));
$arr_03 = explode(" ", $input_03);

if($arr_03[0] > $arr_03[1]) {
    print($arr_03[0] - $arr_03[1]);
} else {
    print($arr_03[1] - $arr_03[0]);
}

