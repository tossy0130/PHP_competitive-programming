<?php

// ===========================================================================================
//========================================== 構造体 ===========================================
// ===========================================================================================


// ========================================  01  ===========================================
/*

入力例1
1
koko 23 04/10 tokyo

出力例1
User{
nickname : koko
old : 23
birth : 04/10
state : tokyo
}

=======================

入力例2
3
mako 13 08/08 nara
megumi 14 11/02 saitama
taisei 16 12/04 nagano

出力例2
User{
nickname : mako
old : 13
birth : 08/08
state : nara
}
User{
nickname : megumi
old : 14
birth : 11/02
state : saitama
}
User{
nickname : taisei
old : 16
birth : 12/04
state : nagano
}

=======================

*/


// === fscanf だと値がとれなかった。
/*  
$get_num_01 = fgets(STDIN);

for ($i = 0; $i < $get_num_01; $i++) {

    fscanf(STDIN, "%d %d %d %d", $name, $old, $brith, $state);

    print("User{" . "\n");
    print("nickname : " . $name . "\n");
    print("old : " . $old . "\n");
    print("birth : " . $brith . "\n");
    print("state : " . $state);
}
*/

$get_num_01 = fgets(STDIN);
$arr_01 = [];
for ($i = 0; $i < $get_num_01; $i++) {

    $arr_01 = explode(" ", trim(fgets(STDIN)));

    print("User{" . "\n");
    print("nickname : " . $arr_01[0] . "\n");
    print("old : " . $arr_01[1] . "\n");
    print("birth : " . $arr_01[2] . "\n");
    print("state : " . $arr_01[3] . "\n");
    print("}" . "\n");
}


// ========================================  02  ===========================================


// === ２次元配列 初期化
$arr_02 = [[]];