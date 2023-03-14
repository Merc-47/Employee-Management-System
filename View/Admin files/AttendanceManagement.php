<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Attendance Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Attendance Management</h1>
      </div>
      </div>
      
      <table>
      <tr>
          <th>Attendance_ID</th>
          <th>Emp_ID</th>
          <th>Date</th>
          <th>Check_IN</th>
          <th>Check_OUT</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php
       $conn=mysqli_connect("localhost","root","","employee_management_system");
       if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
       }
        $sql="SELECT Attendance_ID,Emp_ID,Date,Check_IN,Check_OUT FROM attendance";
        $result=$conn->query($sql); 
        if($result-> num_rows > 0){
            while($rows=$result->fetch_assoc()){
                echo"<tr><td>".$rows["Attendance_ID"]."</td><td>".$rows["Emp_ID"]."</td><td>".$rows["Date"]
                ."</td><td>".$rows["Check_IN"]."</td><td>".$rows["Check_OUT"]."</td></tr>";
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