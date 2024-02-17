<?php 
$numbers = [2,3,4,52,123,45,55,62,14];
$dobrados = array_map(function($item){
    return $item * 2;
}, $numbers);
print_r($dobrados);


