                    Array function


<?php
//array count()
$arr = array('php','c','c++','java','Android');
echo count($arr);



//array_count_value()
$arr = array("C","php","c","android","php","java");
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) {
echo "<br/>$key - <strong>$value</strong> ";
}

//array_sum()
$myarray = array(1,2,3,4,5);
echo array_sum($myarray);

//array_product()
$myarray = array(1,2,3,4,5);
echo array_product($myarray);

//arrar_reverse()
$arr = array('c', 'c++', 'java', 'android', 'php');
$revarr = array_reverse($arr);
print_r($revarr);

//in_array()
$arr = array('c', 'c++', 'java', 'android', 'php');
$temp = in_array('php',$arr);
echo $temp;

//array_rand()
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr);//Returns Array Index 
echo $arr[$indexofarray];

//array_unique()
$arr = array('c', 'c++','android', 'java', 'android', 'php');
print_r(array_unique($arr));

//array_merge()
$arr1 = array('c','c++','android','java','php');
$arr2 = array(10,20,30,40,50);
$NewArr = array_merge($arr1,$arr2);
print_r($NewArr);

//array_search()
$myarr = array('c', 'c++','android', 'java', 'php');
$check = array_search('android', $myarr);
echo $check; // Return Index

//array_range()
$arr = range("11", "20");
foreach($arr as $key => $value)
{
echo "<br /> $key - $value ";
}


//sort()
$arr = array(80,60,50,40,8,74);
sort($arr);
print_r($arr);


//rsort()
$arr = array(80,60,50,40,8,74);
rsort($arr);
print_r($arr);

//asort()
$arr = array(80,60,50,40,8,74);
asort($arr);
print_r($arr);


//ksort()
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
ksort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}



//krsort()
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
krsort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}


//shuffle()
$myArray = array("Football", "Baseball", "Hockey", "Tennis", 
"Boxing");
shuffle($myArray); // Shuffle the array
foreach ($myArray as $key => $value) {
echo "<br /> $value ";
}



//array_key_exists()
$arr = array("a" => "apple", "b" => "banana");
echo array_key_exists('a',$arr);


//array_change_key_case()
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
$uppercase = array_change_key_case($arr,CASE_UPPER);
print_r($uppercase);


//array_combine()
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red", "Green");
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);



//end()
$myarr = array('c', 'c++','android', 'java', 'php');
echo end($myarr);


//compact()
$name = "akash";
$subject = "php";
$arr = compact("name", "subject");
print_r($arr);


//array_flip()
$arr = array("a" => "akash", "b" => "banana", "c" => "computer");
$fliparray = array_flip($arr);
print_r($fliparray);


//array_diff()
$a=array("akash","c","c++","java","php","android");
$b=array("akash","c","java","php");
$diff = array_diff($a, $b);
print_r($diff);


//array_intersects()
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));


//array_values()
$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}

//push()
$a=array("c","c++");
array_push($a,"java","php");
print_r($a);


//pop()
$a = array("c", "c++", "Java", "PHP", "ASP");
array_pop($a); //Remove
print_r($a);
array_pop($a); //Remove
print_r($a);


//explode()
$mystring = "I Love PHP Language";
$arr = explode(" ",$mystring);
print_r($arr);



//implode()
$arr = array("i","love","php","language");
$mystring = implode(" ", $arr);
echo $mystring;
?>



        