<?php
function findSmallest($arr, $max)
{
    $result = array_filter($arr, function ($value) use ($max) {
        return $value < $max;
    });

    if (empty($result)) {
        return -1;
    }
    return end($result);
}
?>