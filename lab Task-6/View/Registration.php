<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Registration|City Gerden</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
</head>
<body>
   <style   >  
  body { 
  background:  lightblue  ; 
  background-image: url("../../assets/icon.png");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
   
}
</style>
    <!-- .................................Header Start..................... --> 
  
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="../index.php">Home</a>
            <a href="../loginType.php">Login</a>
            <a href="../regType.php">Registration</a>
            <a href="../aboutUS.php">About Us</a>
          </td>
        </tr>
      </table>
    </fieldset>
          <!-- ...............................Header Close....................... -->



          <!-- .................................Main Content..................... -->
    <fieldset>
  <form method="post" action="../../controller/RegCheck.php" >
    <fieldset>
    
        <legend><b> Registration</b></legend><br>
    
      
        <label>Name : </label>
        <input type="text" id="name" name="name" ><br>
        <hr><br>

        <label>Address : </label>
        <input type="text" id="address" name="address" ><br>
        <hr><br>
    
        <label>Email :</label>
        <input type="text" id="email" name="email" ><br>
        <hr><br>
    
        <label>User Name : </label>
        <input type="text" id="uname" name="username" ><br>
        <hr><br>
    
        <label>Password :  </label>
        <input type="password" id="pword" name="password" ><br>
        <hr><br>
    
        <label>Confirm Password : </label>
        <input type="password" id="conpword" name="confirmPassword" ><br>
        <hr><br>
    
        <label>Contract Number :</label>
        <input type="text" id="occupation" name="occupation" ><br>
        <hr><br>
    
        <fieldset>
    
        <legend>Gender</legend>
    
        
    
        <input type="radio" name="gender" value="Male">
        <label class="male">Male</label>
    
        <input type="radio" name="gender" value="Female">
        <label class="female">Female</label>
    
        <input type="radio" name="gender" value="Other">
        <label class="other">Other</label>
    
        </fieldset>
    
        <hr>
    
    
    
    <fieldset>
    
    <legend>Date Of Birth</legend>
    
    
    
    <input type="text" id="date" name="date" size="5"> /
    <input type="text" id="month" name="month" size="5"> /
    <input type="text" id="year" name="year" size="6"><i> (dd/mm/yyyy)</i>
    
    
    </fieldset>
    
        <hr>
    
        <input type="submit" name="submit" id="submit" value="Submit">
        
        <input type="reset" name="reset" id="reset" value="Reset"><br><br>
        </fieldset>
    </form>
</fieldset>
<fieldset>
    <!-- .................................Main Content..................... -->

    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">Copyright	&#169;2021</p>
    </fieldset>
    <!-- .................................Footer Close..................... -->
  

</body>
</html>