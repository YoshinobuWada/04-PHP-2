﻿<?php
// 以下をfor文を使用して表示してください。
// ヒント: forの中でforを３回使用

// ***1
// **121
// *12321
// 1234321
for($a = 1; $a <= 4; $a++){
    for($b = 1;$b <= 4 - $a;$b++){
        echo "*";
    }
    for($c = 1;$c <= $a;$c++){
        echo $c;
    }
    for($d = $a - 1;$d >= 1;$d--){
        echo $d;
    }
    echo "\n";
}
?>