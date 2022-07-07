<?php

//Given an array of distinct integers candidates and a target integer target, return a list of all unique combinations of candidates where the chosen numbers sum to target. You may return the combinations in any order.
//
//The same number may be chosen from candidates an unlimited number of times. Two combinations are unique if the frequency of at least one of the chosen numbers is different.
//
//It is guaranteed that the number of unique combinations that sum up to target is less than 150 combinations for the given input.


//Example 1:
//
//Input: nums = [1, 2, 3]
//Output: [[1, 2, 3], [1, 3, 2], [2, 1, 3], [2, 3, 1], [3, 1, 2], [3, 2, 1]]
//Example 2:
//
//Input: nums = [0, 1]
//Output: [[0, 1], [1, 0]]
//Example 3:
//
//Input: nums = [1]
//Output: [[1]]

$candidates = [2, 3, 6, 7];
$target = 7;

$myans = new Solution();
$res = $myans->combinationSum($candidates, $target);
print("<pre>" . print_r($res, true) . "</pre>");


class Solution
{

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */

    function combinationSum($candidates, $target) {
        $this->res = [];
        $this->subset = [];
        $this->dfs(0, 0, $candidates, $target);
        return $this->res;
    }

    function dfs($i, $total, $candidates, $target) {
        if ($total == $target) {
            if (!(in_array($this->subset, $this->res))) {
                array_push($this->res, $this->subset);
            }
        }
        if ($i >= count($candidates) || $total > $target) return;

        array_push($this->subset, $candidates[$i]);
        $this->dfs($i, $total + $candidates[$i], $candidates, $target);
        array_pop($this->subset);

        $this->dfs($i + 1, $total, $candidates, $target);
    }


    //show print message
//    function combinationSum($candidates, $target) {
//
//        $this->res = [];
//        $this->subset = [];
//        $this->dfs(0, 0, $candidates, $target);
//        return $this->res;
//    }
//
//    function dfs($i, $total, $candidates, $target) {
//        if ($total == $target) {
//            if (!(in_array($this->subset, $this->res))) {
//                array_push($this->res, $this->subset);
//
//                echo $i . "--  Insert({$nums[$i]}) to Result Set  --\n";
//                print_r($this->subset);
//                echo "\n";
//
//            }
//        }
//        if ($i >= count($candidates) || $total > $target) {
//            return;
//        }
//
//        array_push($this->subset, $candidates[$i]);
//
//        echo $i . "-- Insert({$candidates[$i]}) to subset --\n";
//        print_r($this->subset);
//        echo "\n";
//
//        $this->dfs($i, $total + $candidates[$i], $candidates, $target);
//
//        array_pop($this->subset);
//
//        echo $i . "-- Pop({$nums[$i]}) from subset --\n";
//        print_r($this->subset);
//        echo "\n";
//
//        $this->dfs($i + 1, $total, $candidates, $target);
//    }

    //T: O(2^T) where T is the target value
    //S:
}