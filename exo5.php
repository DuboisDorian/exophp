<?php

for ($z = 1; $z <= 13; $z++) {
    if ($z === 1) {
        echo "\t",$z, ' ';
    }
    else
    {
        echo $z, ' ';
    }
}
echo '<br>';
for ($i = 1; $i <= 13; $i++) {
    echo $i, ' ';
    for ($j = 1; $j <= 13; $j++) {
        echo$i * $j, ' ';
    }
    echo '<br>';
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

