<?php
        $EmpID= $_POST['Emp_ID'];
        $Date= $_POST['Date'];
        $CheckIN= $_POST['Check_IN'];
        $CheckOUT= $_POST['Check_OUT'];

        $conn= new mysqli("localhost","root","","employee_management_system");
       if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
       }
       else{
             $stmt=$conn->prepare("insert into attendance(Emp_ID,Date,Check_IN,Check_OUT)
              values(?,?,?,?)");
              $stmt->bind_param("isss" ,$EmpID,$Date,$CheckIN,$CheckOUT);
              $stmt->execute();
              echo"Attendance Submitted successful";
              $stmt->Close();
              $conn->Close();
              
       }
        ?>
         <html>
            <link rel="stylesheet" href="EMDashboard.css">
            <div class="text">
            <button><a href="Attendance.php">Return to Employee Registration</a></button>
            </div>
            </html>
