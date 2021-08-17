<?php

// Create a 2D associative array in 2nd dimension with fruits and their weight.
// Create a function that determines if fruit has weight over 10kg.
// Create a secondary array with shipping costs per weight.
// Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
// Using foreach loop print out the values of the fruits and how much it would cost to ship this product.

$fruits = [
    ['waterlemon' => 12,
        'apple' => 0.1,
        'pear' => 0.1,
        'melon' => 11
        ]
    ];

$shippingCost = [
    '<10kg' => 1,
    '>10kg' => 2
];

function tenOrMore(array $arr, $fruit): bool {
 return $arr[0][$fruit] >= 10;
}


foreach ($fruits[0] as $fruit=>$weight) {
    if(tenOrMore($fruits, $fruit)) {
        echo $fruit . " weight is " . $weight . " Kg and shipping cost is " . $shippingCost['>10kg'] . " Eur" . "\n";
    } else {
        echo $fruit . " weight is " . $weight . " Kg and shipping cost is " . $shippingCost['<10kg'] . " Eur" . "\n";
    }
}