<?php
$graph = [
    "you" => ["Emma", "Tom", "Ken"],
    "Emma" => ["Tima", "Andrey","Zamir"],
    "Tom" => ["Andrey", "Pasha", "Bilal"],
    "Ken" => ["Bilal","Nurtay"],
    "Tima"=> ["noone"],
    "Andrey" => ["Vlad", "Pasha", "Alexandr"]
];
function search($name){
    global $graph;
    $deque = new SplDoublyLinkedList;
    $searched = [];
    foreach($graph[$name] as $i){
        $deque->push($i);
    }
    while (!$deque->isEmpty()){
        $person = $deque->shift();
        if (!in_array($person, $searched)){
            if ($person === "Vlad"){
                echo "We found Vlad!";
                return True;
            } if (isset($graph[$person])){
                foreach ($graph[$person] as $i){
                    $deque->push($i);
                }
            }
            $searched[] = $person;
        }
    }
    return false;
}

search("you");