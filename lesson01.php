﻿<?php
// 以下をfor文を使用して表示してください。

// 1
// 21
// 321
for($x = 3 ; $x >= 0 ; $x --){
    for($y = 3 ; $y >= $x+1 ; $y --){
    echo $y-$x;
    }
    echo "\n";
}
?>