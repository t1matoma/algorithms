<?php 
$infinity = INF;
$graph = [
    "start" => ["A" => 6, "B" => 2],
    "A" => ["finish"=>1],
    "B" =>["A"=>3,"finish"=>5],
    "finish"=>[]
];
$costs = [
    "A" => 6,
    "B" => 2,
    "finish" => $infinity
];
$processed = [];
$parents = ["A" => "start", "B" => "start", "finish" => null];
function find_lowest_cost_node($costs){
    global $processed;
    $low_cost = INF;
    $low_cost_node = null;
    foreach($costs as $n=>$cost){
        if ($cost<$low_cost && !in_array($n,$processed)){
            $low_cost = $cost;
            $low_cost_node = $n;
        }
    }
    return $low_cost_node;
}
$node = find_lowest_cost_node($costs);
while ($node != null){
    $cost = $costs[$node];
    $neighbours = $graph[$node];
    foreach ($neighbours as $n=>$c){
        $new_cost = $cost + $c;
        if ($new_cost<$costs[$n]){
            $costs[$n] = $new_cost;
            $parents[$n] = $node;
            
        }
        
    }
    $processed[] = $node;
    $node = find_lowest_cost_node($costs);
}

print_r($costs);