<?php
require_once "app/main.php";

$tests = [
    [
        "arr" => [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21],
        "max" => 14,
        "expected" => 12,
    ],
    [
        "arr" => [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21],
        "max" => 4,
        "expected" => 3,
    ],
    [
        "arr" => [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21],
        "max" => 1,
        "expected" => -1,
    ],
    [
        "arr" => [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21],
        "max" => 19,
        "expected" => 17,
    ],
];

foreach ($tests as $test) {
    $result = findSmallest($test["arr"], $test["max"]);

    echo "should output ${test["expected"]}, received: ${result}\n";
}

?>
