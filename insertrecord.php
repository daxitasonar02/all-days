<?php

$connection = mysqli_connect("localhost", "root" , "" , "db_intenship");

    if($_POST)
    {
        $name = $_POST['txt1'];
        $gender = $_POST['txt2'];
        $mobile = $_POST['txt3'];
       
   
$q = mysqli_query($connection, "insert into tbl_user1 (user1_name,user1_gender,user1_mobile) values('$name','$gender','$mobile')") 
            or die("Error". mysqli_error($connection));
if($q){
    echo "<script>alert('Record added')</script>";
}
 }

?>
<html>
    <body>
        <form method="post">
            Name :<input type="text" name="txt1" />
            Gender :<select name="txt2">
                <option>Male</option>
                <option>Female</option>
            </select>
            Mobile no. <input type="number" name="txt3"/>
            <input type="submit"/>
            
            
        </form>
    </body>
</html>