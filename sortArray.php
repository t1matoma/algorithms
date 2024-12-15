<?php
function getSmallestIndex($array){
    $smallestElement = $array[0];
    $smallestIndex = 0;
    for ($i=0;$i<count($array);$i++){
        if ($smallestElement<$array[$i]){
            $smallestElement = $array[$i];
            $smallestIndex = $i;
        }
    }
    return $smallestIndex;
}

function sortTheArray($array){
    $newArray = [];
    while (count($array)>0){
        $smallestIndex = getSmallestIndex($array);
        $newArray[] = $array[$smallestIndex];
        array_splice($array, $smallestIndex, 1);
    }
    return $newArray;
}

print_r(sortTheArray([1,2,0,7,5,2,9]));