<html>
    <body>
        <h1>
            <center>[Palindrome OR Not]</center>
        </h1>
        
        <?php
            $number=11;
            $X=0;
            $n=$number;
            
            while (floor($number))
            {
                $mod=$number%10;
                $X=$X*10+$mod;
                $number=$number/10;
            }
            if ($n==$X) {
                echo "$n is  palindrome........ ";
            }
 else {
                echo "$n is no palindrome.........";
}
        ?>
    </body>
</html>

