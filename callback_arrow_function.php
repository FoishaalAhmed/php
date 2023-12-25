<?php

// $numbers = [3, 1, 4, 1, 5, 9];
// $sort = usort($numbers, function($a, $b) {
//     return $a .'/'. $b; // Custom sorting logic
// });
// // $sort = usort($numbers);

// print_r($sort);

function performOperation($value, callable $callback)
{
    return $callback($value);
}

$result = performOperation(5, function ($x) {
    return $x * 2; // Custom operation
});

print_r($result);

