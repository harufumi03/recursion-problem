<?php
// 重力加速度を返す関数
function planetGravityMpss(string $planet): float{
    if($planet == "Earth"){
        return 9.8;
    } else if($planet == "Jupiter"){
        return 24.79;
    } else if($planet == "Mercury"){
        return 3.7;
    } else {
        return 0;
    }
}

// メートルをマイルに変換する関数
function metersToMiles(float $meter): int{
    return floor($meter * 0.000621371);
}

// 高さを計算する関数
function fallingDistance(string $planet, int $time): int{
    return metersToMiles(0.5 * planetGravityMpss($planet) * pow($time, 2));
}

