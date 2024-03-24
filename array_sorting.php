<?php

function searchInsertPosition($nums, $target) {
    $left = 0;
    $right = count($nums) - 1;

    while ($left <= $right) {
        $mid = $left + intdiv($right - $left, 2);

        if ($nums[$mid] == $target) {
            return $mid;
        } elseif ($nums[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return $left;
}

// Test cases
$test_cases = [
    [[1, 7, 3, 5, 6, 9, 15], 5],  // Expected output: 2
    [[5, 6, 1, 3], 2],             // Expected output: 1
    [[1, 3, 5, 6], 7]              // Expected output: 4
];

foreach ($test_cases as $test_case) {
    $nums = $test_case[0];
    sort($nums); // Sort the array before passing it to the function
    $target = $test_case[1];
    echo searchInsertPosition($nums, $target) . "\n";
}
?>
