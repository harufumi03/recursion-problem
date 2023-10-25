<?php

// function interestsPaid(int $initialLoan, bool $didPayOnTime): float{
//     $FEE = 2.5;
//     $DEFAULT_LATE = 1.02;
//     $HIGH_LATE = 1.15;
//     $total = $initialLoan;

//     if ($didPayOnTime) {
//        return ($total *= $DEFAULT_LATE) + $FEE;
//     } else {
//         return ($total *= $HIGH_LATE) + $FEE;
//     }
// }

function interestsPaid(int $initialLoan, bool $didPayOnTime): float{
    $FEE = 2.5;
    $DEFAULT_LATE = 1.02;
    $HIGH_LATE = 1.15;
    $total = $initialLoan;

    return $didPayOnTime ? ($total *= $DEFAULT_LATE) + $FEE : ($total *= $HIGH_LATE) + $FEE;
}

echo interestsPaid(100,true) . PHP_EOL;
echo interestsPaid(830,false) . PHP_EOL;
echo interestsPaid(100,false)  . PHP_EOL;
echo interestsPaid(225,true) . PHP_EOL;
echo interestsPaid(225,false) . PHP_EOL;

