<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Employee Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
            <div class="well">
              <div class="text">
              <h1>Employee Details</h1>
            </div>
            </div>
    <table>
    <tr>
          <th>Employee_ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Dep_ID</th>
          <th>Dep_Name</th>
          <th>DOB</th>
          <th>Gender</th>
          <th>PhoneNo</th>
          <th>Email</th>
          <th>JobTitle</th>
          <th>Address</th>
          <th>HireDate</th>
          <th>Salary</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php
       $conn=mysqli_connect("localhost","root","","employee_management_system");
       if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
       }
        $sql="SELECT Employee_ID, FirstName, LastName, Dep_ID, Dep_Name, DOB, Gender, PhoneNo, Email, JobTitle, Address, HireDate, Salary FROM employee";
        $result=$conn->query($sql); 
        if($result-> num_rows > 0){
            while($rows=$result->fetch_assoc()){
                echo"<tr><td>".$rows["Employee_ID"]."</td><td>".$rows["FirstName"]."</td><td>".$rows["LastName"]."</td>
                <td>".$rows["Dep_ID"]."</td><td>".$rows["Dep_Name"]."</td><td>".$rows["DOB"]."</td>
                <td>".$rows["Gender"]."</td><td>".$rows["PhoneNo"]."</td><td>".$rows["Email"]."</td><td>".$rows["JobTitle"]
                ."</td><td>".$rows["Address"]."</td><td>".$rows["HireDate"]."</td><td>".$rows["Salary"]."</td></tr>";
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
      <button><a href="RegisterEmployees.php">Insert</a></button>
      </div>
</body>
</html>