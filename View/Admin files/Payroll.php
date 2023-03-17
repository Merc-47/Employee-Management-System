<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Payroll Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Payroll Management</h1>
      </div>
      </div>
      
      <table>
      <tr>
          <th>Payroll_ID</th>
          <th>Emp_ID</th>
          <th>Dep_ID</th>
          <th>Wage</th>
          <th>Allowance</th>
          <th>Deductions</th>
          <th>Taxes</th>
          <th>Attendance_ID</th>
          <th>WorkHours</th>
          <th>Salary</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php
       $conn=mysqli_connect("localhost","root","","employee_management_system");
       if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
       }
        $sql="SELECT Payroll_ID,Emp_ID,Dep_ID,Wage,Allowance,Deductions,Taxes,Attend_ID,WorkHours,Salary FROM payroll";
        $result=$conn->query($sql); 
        if($result-> num_rows > 0){
            while($rows=$result->fetch_assoc()){
                echo"<tr><td>".$rows["Payroll_ID"]."</td><td>".$rows["Emp_ID"]."</td><td>".$rows["Dep_ID"]
                ."</td><td>".$rows["Wage"]."</td><td>".$rows["Allowance"]."</td><td>".$rows["Deductions"]."</td><td>".$rows["Taxes"]
                ."</td><td>".$rows["Attend_ID"]."</td><td>".$rows["WorkHours"]."</td><td>".$rows["Salary"]."</td></tr>";
            }
            echo"</table>";
        }
        else{
             echo"0 reult";
        }
        $conn->close();
        ?>
              </table><br>
              <div class="text">
              <button>Insert</button>
            </div>
</body>
</html>