<?php
function quickSort($array){
    if (count($array)<2){
        return $array;
    } else {
        $pivot = $array[0];
        $less = [];
        $high = [];
        for($i=1; $i<count($array); $i++){
            if ($pivot<=$array[$i]){
                $high[] = $array[$i];
            } else{
                $less[] = $array[$i];
            }
        }
        return array_merge(quickSort($less), [$pivot], quickSort($high));
    }
}
print_r(quickSort([1,0,3,9,4,8,5,7,6]));