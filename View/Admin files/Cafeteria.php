<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Cafeteria Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Cafeteria</h1>
      </div>
      </div>
      
      <table>
      <tr>
          <th>Cafe_ID</th>
          <th>Emp_ID</th>
          <th>Item</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php
       $conn=mysqli_connect("localhost","root","","employee_management_system");
       if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
       }
        $sql="SELECT Cafe_ID,Emp_ID,Item,Quantity,Price FROM cafeteria";
        $result=$conn->query($sql); 
        if($result-> num_rows > 0){
            while($rows=$result->fetch_assoc()){
                echo"<tr><td>".$rows["Cafe_ID"]."</td><td>".$rows["Emp_ID"]."</td><td>".$rows["Item"]
                ."</td><td>".$rows["Quantity"]."</td><td>".$rows["Price"]."</td></tr>";
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