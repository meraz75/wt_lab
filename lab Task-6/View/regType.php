<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Registration Type</title>
  <link rel="shortcut icon" href="../assets/icon.png">
</head>
<body>
    <!-- .................................Header Start..................... --> 
  
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="./index.php">Home</a>
            <a href="./loginType.php">Login</a>
            <a href="./regType.php">Registration</a>
            <a href="./aboutUS.php">About Us</a>
          </td>
        </tr>
      </table>
    </fieldset>
          <!-- ...............................Header Close....................... -->



          <!-- .................................Main Content..................... -->
    <fieldset>

      
        <form action="../view/Registration.php" method="post">
          <fieldset>
            <legend>Registration as</legend>
            <br>
            
            <input type="radio" name="regType" value="Employee">
            <label class="Employee">Employee</label>
            <input type="radio" name="regType" value="Donner">
            <label class="Donner">castomer</label>
            
            <br>
            <br>
            <input type="submit" name="submit" value="Go">
          
          </fieldset>
        </form>
      
        <br><br>
    </fieldset>
    <!-- .................................Main Content..................... -->

    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>
    <!-- .................................Footer Close..................... -->
  

</body>
</html>