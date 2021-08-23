<?php

$number = (int) readline("Enter number: ");

if ($number < 0) {echo "Invalid input!"; exit;}


echo count(str_split(strval($number)));