<?php

    function countBy($x, $n) {
    for($i=0; $i<$n; $i++){
      $z[] = ($i * $x) + $x;
    }

    return $z;
}

print_r(countBy(4,10));
print_r(countBy(1,5));
print_r(countBy(2,5));