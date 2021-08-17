<?php

// Create a function that accepts any string and returns the same value with added "codelex" by the end of it. Print this value out.

function codeAdd(string $str): string {
    return $str . " " . "codelex";
}

echo codeAdd('i love');