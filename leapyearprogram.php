<html>
    <body> 
        <h2> This year is LeapYear or not .....<br/></h2>
        <?php
            $year=2030;
            if((0 == $year % 4)&(0 !=$year % 100)|(0 == $year % 400 ))
            {                echo "$year is a leapyear..";   }
            else 
            {       echo "$year is not a leapyear...";     }
            
        ?>  
    </body>
</html>

