<?php
        $EmployeeID= $_POST['Employee_ID'];
        $FName= $_POST['FName'];
        $LName= $_POST['LName'];
        $Email= $_POST['Email'];
        $DepID= $_POST['Dep_ID'];
        $Title= $_POST['Title'];
        $UserName= $_POST['UserName'];
        $Password= $_POST['Password'];

        $conn= new mysqli("localhost","root","","employee_management_system");
       if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
       }
       else{
             $stmt=$conn->prepare("insert into registration(Employee_ID,FName,LName,Email,Dep_ID,Title,UserName,Password)
              values(?,?,?,?,?,?,?,?)");
              $stmt->bind_param("isssssss" ,$EmployeeID,$FName,$LName,$Email,$DepID,$Title,$UserName,$Password);
              $stmt->execute();
              echo"registration successful";
              $stmt->Close();
              $conn->Close();
              
       }
        ?>
         <html>
            <link rel="stylesheet" href="Dashboard.css">
            <div class="text">
            <button><a href="RegisterEmployees.php">Return to Employee Registration</a></button>
            </div>
            </html>