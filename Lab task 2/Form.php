<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $bloodErr = $dateErr = $degreeErr=  $genderErr = "";
$name = $email = $blood = $date = $degree= $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["date"])) {
    $dateErr = " Date is required";
  } else {
    $date = $_POST["date"];
  }

  if (empty($_POST["blood"])) {
    $bloodErr = "Blood group is required";
  } else {
    $blood = $_POST["blood"];
  }
 
  if (empty($_POST["degree"])) {
    $degreeErr = "degree is required";
  } else {
    $degree = $_POST["degree"];
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }
}

?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date: <input type="date" name="date"  placeholder="dd-mm-yyyy" value=""min="1953-01-01" max="1998-12-31">
  <span class="error">*<?php echo $dateErr;?></span>
  <br><br>
  Blood Group: 
  <select name="blood">
  <option value="" selected>select..</option>
  <option value= "A+">A+</option>
  <option value= "A-">A-</option>
  <option value= "AB+">AB+</option>
  <option value= "AB-">AB-</option>
  <option value= "B+">B+</option>
  <option value= "B-">B-</option>
  <option value= "O+">O+</option>
  <option value= "O-">O-</option>
  <span class="error">*<?php echo $bloodErr;?></span>
</select>
  <br><br>
  DEGREE :
  
  <input type="checkbox" name="SSC" value="SSC">SSC
  <input type="checkbox" name="HSC" value="HSC" >HSC
  <input type="checkbox" name="BSc" value="BSc" >BSc
  <input type="checkbox" name="MSc"value="MSc" >MSc
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>


  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br> 
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $date;
echo "<br>";
echo $blood;
echo "<br>";
echo $degree;
echo "<br>";
echo $gender;
?>

</body>
</html>
