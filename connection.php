<!--  static  -->

<?php
    $host = "localhost";
    $username = "root";
    $passwd = "";
    $dbname = "db_intenship";
    
    
    //connection function
    
    
$connection = mysqli_connect($host, $username, $passwd, $dbname);

    $q = mysqli_query($connection,
                       "insert into tbl_user1(user1_name,user1_gender,user1_mobile) values('darshan','male','485852')") 
            or die("Error". mysqli_error($connection));

    if($q)
    {
        echo "<script>alert('record added');</script>";
    }

?>