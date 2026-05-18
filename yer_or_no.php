<?php

/**
 * Complete the method that takes a boolean value and return a "Yes" string for true, or a "No" string for false.
 */

function boolToWord(bool $bool):string{
    return $bool?'Yes':'No';
}

var_dump(boolToWord(True));
var_dump(boolToWord(False));
var_dump(boolToWord(False));
var_dump(boolToWord(True));
var_dump(boolToWord(False));