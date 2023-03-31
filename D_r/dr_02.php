<?php

// ================================== 01

/*

入力例1
2
10
100

出力例1
2
3

入力例2
3
1234
0
99

出力例2
4
1
2

*/

$num_01 = trim(fgets(STDIN));

for ($i = 0; $i < $num_01; $i++) {

    $tmp = trim(fgets(STDIN));

    // === 文字の長さを出力
    print(mb_strlen($tmp) . "\n");
}
