<?php

require_once('../../Model/Model.php');

    session_start();

if ( isset ( $_POST [ 'submit' ] ) ) {

	$name = $_POST [ 'name' ];
  $address= $_POST['address'];
	$email =$_POST [ 'email' ];
	$username =$_POST [ 'username' ];
	$password =$_POST [ 'password' ];
	$confirmPassword = $_POST [ 'confirmPassword' ];
  $occupation = $_POST ['occupation'];
	$gender = $_POST ['gender'];
	
  $day    =   $_POST [ 'date'] ;
  $month  = $_POST [ 'month'];
  $year   = $_POST [ 'year' ] ;
  $dateOfBirth = $day."/".$month."/".$year;
 

    if(strlen($_POST['password'])<8)
    {
			echo 'Password must not be less than eight (8) characters <a href="../../View/Login.php">Go Back</a>';
		}

    if(strlen($_POST['password'])>=8)
    {
      $checkpass = false;
		  for ($i=0; $i < strlen($_POST['password']); $i++) 
      { 
			    if($_POST['password'][$i] === '@' || $_POST['password'][$i] === '#' || $_POST['password'][$i] === '$' || $_POST['password'][$i] === '%')
		    	{
				    $checkpass = true;
			    	break;
				
		    	}
		  }
      if ($checkpass === false)
      {
         echo 'Password must contain at least one of the special characters (@, #, $, %) <a href="../../View/Registration.php">Go Back</a>';

      }

    }

    if ( $name == "" || $email == "" || $username == "" || $password == "" || $confirmPassword == ""|| $day == "" || $month == "" || $year == "" || $occupation == "" || $address == "") {
 	echo 'field is empty please Fill up the form properly <a href="../../view/Registration.php">Reload Registration Form</a> ';
 }
 elseif ( $password != $confirmPassword) {
 	echo 'Password did not match <a href="../../view/Registration.php">Reload Registration Form</a> ';
 }
 else{
 	$donnerData = [	
			                'name'=>$name,
                      'address'=>$address, 
                      'email'=> $email,
                      'username'=>$username, 
                      'password'=>$password, 
                      'gender'=> $gender,
                      'dateOfBirth'=> $dateOfBirth,
                      'occupation'=> $occupation,
                      

						];

            $data = insertDonnerData($donnerData);
            if($data){
              header('location: ../../View/Login.php');
            }
            else{
              echo "File didn't updated";
            }
  
 }
 
}
 
?>