<?php
   //Numirical arry
// M-1
$a[1] = 17;
$a[2] = 50;
$a[3] = 29.5;
$a[4] = "54";
$a[5] = "r";

//M-2 index will be Daynamic arry index is 0,1,2,3
//$a[] = 17;
//$a[] = 50;
//$a[] = 29.5;
//$a[] = "54";
//$a[] = "r";

// M-3 
//always use this method
//$a = array(10,29,40,"g",67.32)

        // print array value
       echo $a[5];
       //print all array
       for ($i = 0; $i < count($a);$i++) 
       {
           echo $a[$i];
    
       }
       foreach ($a as $value) {
    echo "</br>value is $value";
}

foreach ($a as $key => $value) {
    echo "</br>key is<b>$key</b>and value is <b> $value</b>";
}
   //sum function
       $sum = array_sum($a);
       echo $sum;
       
       // print three inbuilt function in array debug
       print_r($a);
       echo "<pre>";
       var_dump($a);
        echo "<pre>";
        
        
       
       
       
       
       
       
       
       

?>