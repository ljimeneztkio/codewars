<?php

/**
 * Write a function that takes an integer as input, and returns the number of bits that are equal to one in the binary representation of that number. You can guarantee that input is non-negative.
 * Example: The binary representation of 1234 is 10011010010, so the function should return 5 in this case
 */

function countBits($n) 
{
    if($n>0){
        $count=0;
        $n = base_convert($n,10,2);
    
        for($a = 0; $a < strlen($n); $a++){
            if($n[$a]){
                $count++;
            }
        }
    
        return $count;
    }else{
        return 0;
    }
    
}

var_dump(countBits(0));
var_dump(countBits(4));
var_dump(countBits(7));
var_dump(countBits(9));
var_dump(countBits(10));

/** Solucion optima
 * function countBits(int $n):int 
 * {return substr_count(decbin($n), '1');}
 */