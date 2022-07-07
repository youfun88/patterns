<?php


$n = ['a', 'b', 'c'];
$myans = new Solution();
$res = $myans->permute($n);
print("<pre>" . print_r($res, true) . "</pre>");

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */

//             []
//   1         2            3
//  2 3       1 3         1  2
// 3   2     3   1       2    1

//practice one //backtracking
    function permute($nums) {
        $this->res = [];
        $this->subnet = [];
        $this->dfs($nums);
        return $this->res;
    }

    function dfs($nums) {
        if (count($this->subnet) == count($nums)) {
            array_push($this->res, $this->subnet);
        }
        for ($i = 0; $i < count($nums); $i++) {
            if (in_array($nums[$i], $this->subnet)) {
                continue;
            }
            array_push($this->subnet, $nums[$i]);
            $this->dfs($nums);
            array_pop($this->subnet);
        }
    }


//    function permute($nums) {
//        $this->res = array();
//        $this->dfs($nums, array());
//
//        return $this->res;
//    }
//
//    function dfs($nums, $subset) {
//        if (count($subset) == count($nums)) {
//            array_push($this->res, $subset);
//
//            echo "----  insert to res  ----\n";
//            print_r($subset);
//            echo "\n";
//
//            return;
//        }
//        for ($i = 0; $i < count($nums); $i++) {
//
//            if (in_array($nums[$i], $subset)) {
//                echo "$i----  skip({$nums[$i]})  ----\n";
//                print_r($subset);
//                echo "\n";
//                continue;
//            }
//
//            array_push($subset, $nums[$i]);
//
//            echo "$i----  added nums({$nums[$i]}) to subset ----\n";
//            print_r($subset);
//            echo "\n";
//
//            $this->dfs($nums, $subset);
//
//            array_pop($subset);
//
//            echo "$i----  poped from subset  ----\n";
//            print_r($subset);
//            echo "\n";
//        }
//    }
}