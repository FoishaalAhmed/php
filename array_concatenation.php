<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getConcatenation($nums)
    {
        $count = count($nums);
        $ans = [];

        for ($i = 0; $i < $count; $i++) {
            $ans[] = $nums[$i];
        }

        return array_merge($ans, $nums);
    }
}

$nums = [1, 2, 1];

$solution = new Solution();

print_r($solution->getConcatenation($nums));




