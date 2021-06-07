<html>
    <boby>
        <h2>
            <b>Registration Form</b>
        </h2>
        <h4><p>Please fill  the details.... </p></h4>
        <form action="reg_process.php" method="post">
            <table>
<tr> 
<td>Enter your Name </td>
<td><input type="text" name="txt1" required /></td>
</tr>
          <tr>
              <td>Enter your Age</td>
              <td><input type="text" name="txt2" required /></td>
          </tr> 
          
          <tr>
<td>Enter your email</td>
<td><input type="email" name="em1"  required/></td>
</tr>

<tr>
<td>Enter your mobile</td>
<td><input type="number" name="mo1"  required/></td>
</tr>
          
          
<tr>
<td>Enter your address</td>
<td><textarea rows="8" cols="20" name="add1"  required></textarea></td>
</tr>

          
<tr>
<td>Select your gender</td>
<td>male<input type="radio" name="g" value="m" />
    female<input type="radio" name="g" value="f" />
</td>
</tr>
          
<tr>
<td>Select your State</td>
<td>
<select name="State">
<option value="" selected="selected" disabled="disabled" name="st1">Select your State</option>
<option value="1">Gujarat</option>
<option value="2">MP</option>
<option value="2">UP</option>
<option value="2">Maharashtra</option
<option value="2">Rajasthan</option>
<option value="2">Aasam</option>
</select>
</td>
</tr>
 
<tr>
<td>Enter your password</td>
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
