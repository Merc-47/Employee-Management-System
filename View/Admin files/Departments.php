<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Department</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
 
    <div class="well">
      <div class="text">
      <h1>Department</h1>
    </div>
    </div>
    
    <table>
    <tr>
          <th>Dep_ID</th>
          <th>DName</th>
          <th>Managers</th>
          <th>Employees</th>
          
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php
       $conn=mysqli_connect("localhost","root","","employee_management_system");
       if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
       }
        $sql="SELECT Dep_ID,DName,Managers,Employees FROM department";
        $result=$conn->query($sql); 
        if($result-> num_rows > 0){
            while($rows=$result->fetch_assoc()){
                echo"<tr><td>".$rows["Dep_ID"]."</td><td>".$rows["DName"]."</td><td>".$rows["Managers"]
                ."</td><td>".$rows["Employees"]."</td></tr>";
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