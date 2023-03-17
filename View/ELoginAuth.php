<?php
include 'Connection.php';
$conn = openconn();

$username = $_POST['Username'];  
    $password = $_POST['Password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from registration where UserName='".$username."' AND Password='".$password."'";

        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){   
            header("Location: http://localhost/EMS/View/Employee%20Dashboard.php");
             exit();
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }  
         
CloseCon($conn);
?>