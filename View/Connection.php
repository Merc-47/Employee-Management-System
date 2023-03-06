
<?php
 /*$username = $_POST['username'];  
 $password = $_POST['password'];

 $conn =new mysqli('localhost','root','','employee_management_system');
 if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
 }
 else{
    $stmt=$conn->prepare("select * FROM admin where UserName='".$Uname."' AND Password='".$Password."'");
    $stmt->execute();
    $stmt->close();
    $conn->close();
 
?>
<?php

    $host="localhost";
    $user="root";
    $password="";
    $db="employee_management_system";
}
    mysql_connect($host,$user,$password);
    mysql_select_db($db);
    

    if(isset($_POST['username'])){

      $username= $_POST['username'] ;
      $Password= $_POST['password'] ;
    
      $sql="select * FROM admin where UserName='".$Uname."' AND Password='".$Password."'limit 2";

      $result= mysql_query($sql);

      if(mysql_num_rows($result)==2){
        echo"wrong";
        exit();
      }
      else{
        echo"correct";
        exit();
      }
    
    } }*/
    ?>
   <?php
function openconn(){
    $host="localhost";
    $user="root";
    $password="";
    $db="employee_management_system";

    
    $conn = new mysqli('localhost', 'root', '', 'employee_management_system') or 
    die("Connect failed: %s\n". $conn -> error);
 
    return $conn;
    }
    
   function CloseCon($conn)
    {
    $conn -> close();
    };

    
    ?>