<html>
    <body>
        <h2> <center>Marks's of student's </center> </h2>

<?php
    $marks=25;
       
    if ($marks>=60) {
        $grade="First Division..";
    }
    elseif ($marks>=45) {
        $grade="Second Division..";
    }
     elseif ($marks>=31) {
        $grade="Third Division..";
    }
 else {
        $grade="Fail..";
    }
    echo "Student grade:$grade <br/>marks is:-$marks";
?>
    </body>
</html>