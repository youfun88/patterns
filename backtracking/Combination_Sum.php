<?php

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

//     function combinationSum($candidates, $target) {
//         $this->res = [];
//         $this->subset = [];
//         $this->dfs(0, 0, $candidates, $target);
//         return $this->res;
//     }
//     function dfs($i, $total, $candidates, $target){
//         if($total==$target){
//             if(!(in_array($this->subset, $this->res))){
//                 array_push($this->res, $this->subset);
//             }
//         }
//         if($i>=count($candidates) || $total>$target)return;

//         array_push($this->subset, $candidates[$i]);
//         $this->dfs($i, $total+$candidates[$i], $candidates, $target);
//         array_pop($this->subset);

//         $this->dfs($i+1, $total, $candidates, $target);
//     }


//show print message
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

                echo $i . "--  Insert({$nums[$i]}) to Result Set  --\n";
                print_r($this->subset);
                echo "\n";

            }
        }
        if ($i >= count($candidates) || $total > $target) {
            return;
        }

        array_push($this->subset, $candidates[$i]);

        echo $i . "-- Insert({$candidates[$i]}) to subset --\n";
        print_r($this->subset);
        echo "\n";

        $this->dfs($i, $total + $candidates[$i], $candidates, $target);

        array_pop($this->subset);

        echo $i . "-- Pop({$nums[$i]}) from subset --\n";
        print_r($this->subset);
        echo "\n";

        $this->dfs($i + 1, $total, $candidates, $target);
    }

    //T: O(2^T) where T is the target value
    //S:
}