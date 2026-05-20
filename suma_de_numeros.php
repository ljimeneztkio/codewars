<?php
  
function summation(int $n): int {
    $sum = 0;
    for($i=1; $i<=$n; $i++){
        $sum += $i;
    }
    return $sum; 
}

var_dump(summation(8));
var_dump(summation(5));
var_dump(summation(10));
var_dump(summation(120));

/*
::: SOLUCIÓN OPTIMA :::
function summation($n) {
  return array_sum(range(1, $n));
}

/*/