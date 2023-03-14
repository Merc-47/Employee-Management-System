<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
          <th>FeedBack_ID</th>
          <th>Emp_ID</th>
          <th>Feedback</th>
          <th>Date/Time</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php
       $conn=mysqli_connect("localhost","root","","employee_management_system");
       if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
       }
        $sql="SELECT FeedBack_ID,Emp_ID,feedback,Date/Time FROM feedback";
        $result=$conn->query($sql); 
        if($result-> num_rows > 0){
            while($rows=$result->fetch_assoc()){
                echo"<tr><td>".$rows["FeedBack_ID"]."</td><td>".$rows["Emp_ID"]."</td><td>".$rows["Feedback"]
                ."</td><td>".$rows["Date/Time"]."</td></tr>";
            }
            echo"</table>";
        }
        else{
             echo"0 reult";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>