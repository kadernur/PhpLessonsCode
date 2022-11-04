<?php

$person=[
    'age' => 31,
    'hair'=>'brown',
    'career' =>'web developer'
];

echo '<pre>';
var_dump($person);
echo '</pre>';

//person array'den age nesnesini silecektir.'
unset($person['age']);

require 'arrayss.view.php';