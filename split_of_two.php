<?php

    /**
     * Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').
     */

    function solution($str){
        $array = array();
        
        if(strlen($str)%2==1){
            $str.="_";
        }

        if(!empty($str)){
            $array = str_split($str,2);
        }

        return $array;
    }

    print_r(solution(""));

    /** Shorter Solution
     * function solution($str) {
     *      return strlen($str) ? str_split($str . (strlen($str) & 1 ? "_" : ""), 2) : [];
     * }
     */
?>