Numeric array


<?php

//numeric array
//method 1
$a[0] = 10;
$a[1] = 20.5;
$a[2] = "hello";
$a[3] = 20;
$a[4] = "Mahi...";
echo("using method 1:");
echo"<br>"."$a[0]";

//method 2
echo"<br><br>";
$a[] = 10;
$a[] = 20.5;
$a[] = "hello";
$a[] = 20;
$a[] = "Vidhi....";
echo("using method 2:");
echo "<br>"."$a[4]"."<br><br>";


//method 3
$a=array("c",10,20.5,45,"Vidhi.....");
echo("using method 3:");
for($i=0;$i< count($a);$i++)
{	
	echo"<br>".$a[$i];

}


?>

