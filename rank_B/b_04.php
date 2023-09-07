<?php

# ================================================================ Q1

/*

入力例1
4
S 1
F 2
E 5
Y 6

出力例1
1
2
5
6

入力例2
3
S -3
G -5
R -35

出力例2
-3
-5
-35

入力例3
6
A 12
E 42
G -8
R -7
Y 56
E 22

出力例3
12
42
-8
-7
56
22

*/

$get_num = trim(fgets(STDIN));

$a = [];
$b = [];

// === 連想配列に格納するパターン
$dim_arr_01 = [];

// ========= 値取得
for ($i = 0; $i < $get_num; $i++) {
    list($a[$i], $b[$i]) = explode(" ", fgets(STDIN));
    $dim_arr_01[$a[$i]] = $b[$i];
}

$idx = 0;

# print_r($dim_arr_01);

#print(count($arr_01));

// === パターン list　と 、 explode で配列を２つに分ける
/*
   while($get_num > $idx) {
        print($b[$idx]);
        $idx = $idx + 1;
    }
    */

// === ２次元配列で出力
foreach ($dim_arr_01 as $key => $val) {
    print($val);
}


/** ======== 参考　解答　 ========== */
$n = trim(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    [$s, $d] = explode(' ', trim(fgets(STDIN)));
    echo $d . "\n";
}
/** ======== 参考　解答 END ========== */

# ================================================================ Q1 END

# ================================================================ Q2

# ２行目の値を、昇順に出力する。
/*

入力例1
8
90 777 8888 121 333 4 29 2

出力例1
2
4
29
90
121
333
777
8888

入力例2
10
10 9 8 7 6 5 4 3 2 1

出力例2
1
2
3
4
5
6
7
8
9
10

入力例3
1
3

出力例3
3

*/

// ================== ソート 

$get_num_02 = fgets(STDIN);
$get_num_02_01 = fgets(STDIN);

// === 配列へ格納
$arr_02 = explode(' ', $get_num_02_01);

// print_r($arr_02);

do {
    $loop_flg = false;

    for ($i = 0; $i < count($arr_02) - 1; $i++) {

        if ($arr_02[$i] > $arr_02[$i + 1]) {
            $tmp = $arr_02[$i];
            //   print($tmp . "tmp" . "\n");
            $arr_02[$i] = $arr_02[$i + 1];
            $arr_02[$i + 1] = $tmp;
            $loop_flg = true;
        }
    }
} while ($loop_flg);

// === 空白を削除して出力
foreach ($arr_02 as $val) {
    print(trim($val) . "\n");
}

# ================================================================ Q2 END

# ================================================================ Q3

/*

1行目に行数を表す整数 n、続く n 行の各行で「文字」と「整数」の組が空白区切りで入力されます。
n 個の組を、「整数」の値で昇順に並べ変え、「文字」を出力してください。


入力例1
2
A 1
B 2

出力例1
A
B

入力例2
3
G 0
S 3
E -2

出力例2
E
G
S

入力例3
5
H -2
R 0
W -5
A -1
E -20

出力例3
E
W
H
A
R

*/

$get_num_03 = fgets(STDIN);

$arr_03 = [];

// === １列目を key , ２列目を value で key value で取得
for ($i = 0; $i < $get_num_03; $i++) {
    list($aa[$i], $bb[$i]) = explode(' ', fgets(STDIN));
    $arr_03[$aa[$i]] = $bb[$i];
}

// === key , value の　value の値で昇順にソート
asort($arr_03);

// === key 出力
foreach ($arr_03 as $key => $val) {
    print($key . "\n");
}
