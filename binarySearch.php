<?php
function binarySearch($array, $num){
    $low = 0;
    $high = count($array)-1;

    while ($low<=$high){
        $mid = floor(($high+$low)/2);
        $guess = $array[$mid];
        if ($guess>$num){
            $high = $mid-1;
        } elseif($guess<$num){
            $low = $mid+1;
        }
        else{
            return $mid;
            
        }
    }
}

echo binarySearch([1,2,3,4,6,9,11],6);