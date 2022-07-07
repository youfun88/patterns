<?php


 $s = "GGLLGG";
 function isRobotBounded($s){
     // Write your code here

     //one pass solution
         //T: O(n)
         //S: O(1)
         $finalDirection = 'N';
         $finalX = 0;
         $finalY = 0;

         for ($i = 0; $i < strlen($instructions); $i++) {
             echo $instructions[$i]."  **  ".$finalDirection."  **  ".$finalX."  **  "."  **  ".$finalY."\n";
             switch ($instructions[$i]) {
                 case 'G':
                     if ($finalDirection == 'N') { $finalY++; }
                     if ($finalDirection == 'S') { $finalY--; }
                     if ($finalDirection == 'E') { $finalX++; }
                     if ($finalDirection == 'W') { $finalX--; }
                     break;
                 case 'L':
                     if ($finalDirection == 'N') { $finalDirection = 'W'; continue; }
                     if ($finalDirection == 'S') { $finalDirection = 'E'; continue; }
                     if ($finalDirection == 'E') { $finalDirection = 'N'; continue; }
                     if ($finalDirection == 'W') { $finalDirection = 'S'; continue; }
                     break;
                 case 'R':
                     if ($finalDirection == 'N') { $finalDirection = 'E'; continue; }
                     if ($finalDirection == 'S') { $finalDirection = 'W'; continue; }
                     if ($finalDirection == 'E') { $finalDirection = 'S'; continue; }
                     if ($finalDirection == 'W') { $finalDirection = 'N'; continue; }
                     break;
             }
         }

         echo $finalDirection."  **  ".$finalX."  **  "."  **  ".$finalY."\n";

         if ($finalDirection != 'N' || ($finalX == 0 && $finalY == 0)) {
             return true;
         } else {
             return false;
         }
 }