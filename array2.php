<?php
    //Associative arry
//key = value
//method - 1
$a[0] = 20;
$a['h'] = "hello";
$a['c'] = "computer";
$a['php'] = "WD";
$a[5] = "yes";
$a[30] = 20.3;

//method - 2
//always use this method to create array

$a = array(
    0 => 10,
    "c" => "computer",
    "php" => "WD"        
);
//print the value
echo "c for " .$a['c'];

foreach ($a as $value) {
    echo "</br>value is $value";
}

foreach ($a as $key => $value) {
    echo "</br>key is<b>$key</b>and value is <b> $value</b>";
}

 print_r($a);
       echo "</br><pre>";
       var_dump($a);
        echo "<pre>";
        



?>