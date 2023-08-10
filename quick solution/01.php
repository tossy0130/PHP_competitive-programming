<?php
/*

一般的に、n角形の内角の和は 180°×(n - 2) で求めることができます。

*/

$num_02 = trim(fgets(STDIN));

# 内角の和
$tmp = 180 * ($num_02 - 2);

# １角の値
print(floor($tmp / $num_02));
