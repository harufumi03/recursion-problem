<?php

// function screenViewMode(int $height, int $width): string{
//     // 関数を完成させてください
//     if($height >= $width) return "portrait";
//     else return "landscape";
// }


function screenViewMode(int $height, int $width): string{
    // 関数を完成させてください
    return $height >= $width ? "portrait" : "landscape";
}

echo screenViewMode(200,150) . PHP_EOL;
echo screenViewMode(120,100) . PHP_EOL;
echo screenViewMode(50,100) . PHP_EOL;
echo screenViewMode(60,60) . PHP_EOL;
