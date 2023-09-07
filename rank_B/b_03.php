<?php

/*

入力例1
2
read

出力例1
e a

*/

# ======================================================== Q 01
# ========================  解答 01
$num = fgets(STDIN);
$str = trim(fgets(STDIN));

# 文字列の長さ
$str_num = mb_strlen($str, "UTF-8");

// === 最後の文字の場合は、出力が１つ
if ($str_num == $num) {
    exit();
} else {
    print($str[$num - 1] . " " . $str[$num]);
}

# ========================  解答 02

$n = trim(fgets(STDIN));
$s = trim(fgets(STDIN));

if ($n < mb_strlen($s)) {
    echo mb_substr($s, $n - 1, 1) . ' ' . mb_substr($s, $n, 1) . "\n";
}

# ======================================================== Q 02

/*

入力例1
AA
abdeeAAbAAAbfde

出力例1
3

入力例2
el
scale

出力例2
0

*/

// AA
$n_02 = trim(fgets(STDIN)); // 2
$s_02 = trim(fgets(STDIN)); // 15

for ($i = 0; $i < 15 - (2 + 1); $i++) {
}

// === 参考 アンサー ans
for ($i = 0; $i < mb_strlen($t) - mb_strlen($s) + 1; $i++) {
    if (mb_substr($t, $i, mb_strlen($s)) === $s) {
        $ans++;
    }
}

// ========= $n_02 を文字列へ格納

// === 文字列を配列へ格納　１：
$arr_02 = str_split($n_02);

// === 文字列を配列へ格納　２：

/*
$arr_02_tmp = [];
for($i = 0; $i < strlen($n_02); $i++) 
{
    $arr_02_tmp[$i] = $n_02[$i];
}
*/

$result_02 = 0;
// ========= $s_02  を文字列へ格納
$arr_02_02 = str_split($s_02);


for ($i = 1; $i < count($arr_02_02); $i++) {

    if ($arr_02[0] == $arr_02_02[$i - 1] && $arr_02[1] == $arr_02_02[$i]) {
        $result_02 = $result_02 + 1;
    }

}

print($result_02);
