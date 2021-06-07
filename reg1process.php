<?php

$cn=$_POST['cn'];
$java=$_POST['java'];
$phpsub=$_POST['phpsub'];
$c=$_POST['c'];
$ml=$_POST['ml'];

//display marks
echo "<h3>Your Marks</h3><br/>";
echo "CN marks : $cn <br/>";
echo "JAVA marks : $java <br/>";
echo "PHP marks : $phpsub <br/>";
echo "C marks : $c <br/>";
echo "ML marks : $ml <br/>";

//total marks
$marks=$cn+$java+$phpsub+$c+$ml;
echo "<h3>Your Marks total</h3><br/>";
echo "TOTAL $marks ";

//percentage

echo "<h3>Your total percentage</h3><br/>";
echo "PERCENTAGE ".($marks/2);

//class condition

if($marks>=80){
    echo "<font color=green><h3>congratulations..you are first class</h3></font>";
}
elseif($marks>=70 && $marks<80){
    echo "<font color=orange><h3>congratulations..you are second class</h3></font>";
}
elseif($marks>=50 && $marks<70){
    echo "<font color=yellow><h3>congratulations..you are pass</h3></font>";
}
else{
    echo "<font color=red><h3>Sorry..you are fail</h3></font>";
}
?>