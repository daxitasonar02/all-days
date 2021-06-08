Associartive array
        

<?php
//method 1
$a[0] = "ten";
$a['c'] = 20.5;
$a['Daxita'] = "hello";
$a['php'] = 20;
$a[70] = "Daxita";
echo("using method 1:<br>");
echo"</br>"."$a[0]"."</br></br>";

//method 2
$a=array
(
	0 =>10,
	"Daxita"=>"hello Daxita....",
	"php"=>"welcome in php",
	19=>19.19,
	10=>"ten"
);
echo("using method 2:<br>");
foreach($a as $key=> $value)
{
	echo"</br> key is <b>$key</b> and value is<b>$value</b>";
}

?>
        
        
