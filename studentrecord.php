

 //<?php

$connection = mysqli_connect("localhost", "root" , "" , "db_student");

    if($_POST)
    {
                $name = $_POST['txt1'];
                
                $mobile = $_POST['txt2'];
                $age = $_POST['txt3']
           
                $pincodeno = $_POST['txt6']
                $address = $_POST['txt7']
                $email = $_POST['txt8']
                
       
   
$q = mysqli_query($connection, "insert into tbl_student (st_name,st_gender,st_mobile, st_age, st_area, st_pincodno, st_address, st_email,st_password ,) values('$name','$gender','$mobile','$age','$area','$pincodeno','$address','$emeil','$password')") 
            or die("Error". mysqli_error($connection));
if($q){
    echo "<script>alert('Record added')</script>";
}
 }

?>



<html>
    <boby>
        <h2>
            <b>STUDENT FORM</b>
        </h2>
        
        <form method="post">
            <table>
<tr> 
<td> Name </td>
<td><input type="text" name="txt1" required /></td>
</tr>

<tr>
<td> Gender</td>
<td>male<input type="radio" name="g" value="m" />
    female<input type="radio" name="g" value="f" />
</td>
</tr>
       <tr>
<td> mobile no.</td>
<td><input type="number" name="txt2"  required/></td>
</tr>
<tr>
              <td> Age</td>
              <td><input type="number" name="txt3" required /></td>
            </tr> 

          
          
       <tr>
<td>Area</td>
<td>
<select name="State">
<option value="" selected="selected" disabled="disabled" >Select your State</option>
<option value="1">Dindoli</option>
<option value="2">Althan</option>
<option value="2">Udhnaa</option>
<option value="2">Maroli</option
<option value="2">Adajan</option>
<option value="2">Amroli</option>
</select>
</td>
</tr>   
          

          
          <tr>
<td> code</td>
<td><input type="number" name="txt6"  required/></td>
</tr>

          
          
<tr>
<td>Address</td>
<td><textarea rows="8" cols="20" name="txt7"  required></textarea></td>
</tr>

          

            
          <tr>
<td> Email</td>
<td><input type="email" name="txt8"  required/></td>
</tr>        

 
<tr>
<td>Password</td>
<td><input type="password" name=" "  required/></td>
</tr>
          <tr>
              <td><input type="submit" /></td>
              <td><input type="reset" /></td>
          </tr>
        </table>   
       </form> 
    </boby>
</html>

