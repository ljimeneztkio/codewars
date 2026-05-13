<?php

    /**
     * Implement a function that computes the difference between two lists. The function should remove all occurrences of elements from the first list (a) that are present in the second list (b). The order of elements in the first list should be preserved in the result.
     */

    function arrayDiff($a, $b) {
        $c = array();
        foreach($a as $key){
            if(!in_array($key, $b)){
                $c[] = $key;
            }
        }

        return $c;
    }

    print_r(arrayDiff([1,2],[1]));

    /**
     * Solucion optima
     * return array_values(array_diff($a, $b));
     */