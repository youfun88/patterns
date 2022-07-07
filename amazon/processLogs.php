<?php

 //$logs = ["1 2 50", "1 7 70", "1 3 20", "2 2 17"];
 $logs = ["9 7 50", "22 7 20", "33 7 50", "22 7 30"];
 $threshold = 3;
 processLogs($logs, $threshold);

 function processLogs($logs, $threshold)
 {
     // Write your code here
     $map = [];
     foreach ($logs as $log) {
         $log_history = explode(" ", $log);
         if ($log_history[0] == $log_history[1]) {
             $map[$log_history[0]]++;
         } else {
             $map[$log_history[0]]++;
             $map[$log_history[1]]++;
         }
     }
     $ans_arr = [];
     foreach ($map as $key => $val) {
         if ($val >= $threshold) {
             array_push($ans_arr, $key);
         }
     }
     sort($ans_arr);
     print_r($ans_arr);
     return $ans_arr;
 }