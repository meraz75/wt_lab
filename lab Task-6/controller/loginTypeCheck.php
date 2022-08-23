<?php 
if(isset( $_POST['submit'])){
  
  
    $type = $_POST['loginType'];
    
    if($type == "Admin"){
      
      header('location: ../View/Login.php');
      
     
    }
    if($type == "Menager"){
      
      header('location: ../View/Employee/employeeLogin.php');
     
    }
    if($type == "Castomer"){
      
      eader('location: ../View/Admin/adminLogin.php');
     
    }
    
    

    
  }


?>