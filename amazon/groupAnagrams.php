<?php

 $strs = ["eat", "tea", "tan", "ate", "nat", "bat"];
 groupAnagrams($strs);

 function groupAnagrams($strs)
 {
     $inputArray = ["eat", "tea", "tan", "ate", "nat", "bat"];
     $output = [];
     foreach ($inputArray as $input) {
         $stringParts = str_split($input);
         sort($stringParts);
         $sortedString =  implode('', $stringParts);

         echo "++   " . $sortedString . "<br>";

         $output[$sortedString][] = $input;
     }
     print_r($output);
 }
