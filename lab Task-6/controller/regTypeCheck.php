<?php 
if(isset( $_POST['submit'])){
  
  
    $type = $_POST['regType'];
    
    
    if($type == "Employee"){
      
      header('location: ../View/Employee/employeeRegistration.html');
     
    }
    if($type == "castomer"){
      
      header('location: ../View/Registration.html');
     
    }

    

    
  }


?>