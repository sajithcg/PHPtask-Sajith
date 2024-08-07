<?php
$points = [
    'A' => 0,
    'B' => 0,
    'C' => 0];
function addPoints(&$points, $personA, $personB, $personC = null) 
{
    $points[$personA] += 10;
    if ($personC) {
        $points[$personA] += 20;
        $points[$personB] += 10;
    }
}

function subtractPoints(&$points, $personA, $personB) 
{
    $points[$personA] -= 8;
    $points[$personB] -= 7;
}

addPoints($points, 'A', 'B');
addPoints($points, 'A', 'B', 'C');
subtractPoints($points, 'A', 'B');
addPoints($points, 'A', 'B', 'C');

print_r($points);
?>
