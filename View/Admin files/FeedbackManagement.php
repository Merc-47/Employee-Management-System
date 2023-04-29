<?php include('dbConnection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin FeedBack Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>FeedBack Management</h1>
      </div>
      </div>
      
      <a class="btn btn-primary" role="button" href="http://localhost/EMS/View/AdminDashboard.php">Dashboard</a>
      <br><br>
      <form class="form-inline" method="post">
<label>Enter Employee ID</label>
<div class="form-group">
<input type="text" class="form-control" name="search">
</div>
<div class="form-group">
<input type="submit" class="form-control" name="submit" style="background-color:#337ab7; color:whitesmoke;">
</div>
</form>
<br>
<?php
 if (isset($_POST["submit"])) {
            $ID = $_POST["search"];
$sql="SELECT * FROM feedback WHERE Emp_ID = '$ID'";
        $result=mysqli_query($conn,$sql);
        if($row=mysqli_fetch_assoc($result)){
                  ?>
                  <table>
    <tr>
   
    <th>FeedBack ID</th>
          <th>Emp ID</th>
          <th>Feedback</th>
          <th>Date/Time</th>
          <th>Update</th>
          <th>Delete</th>
          </tr>
          
         
            <tr>
            <td><?php echo $row['FeedBack_ID'];?></td>
                 <td><?php echo $row['Emp_ID'];?></td>
                 <td><?php echo $row['Feedback'];?></td>
                 <td><?php echo $row['DateTime'];?></td>
                 <td><a class="btn btn-primary" role="button" href="FeedbackUpdate.php?FeedBack_ID=<?php echo $row['FeedBack_ID'];?>">Update</a></td>
                 <td><a class="btn btn-danger" role="button" href="FeedbackDelete.php?FeedBack_ID=<?php echo $row['FeedBack_ID'];?>" >Delete</a></td>
                
            </tr></table>`
            <br>
            
            <?php
            }
            else{
                echo "<center><h4>Employee Does not exist</h4></center>";
            }
        }
        ?><br>
      <table>
          <tr>
          <th>FeedBack ID</th>
          <th>Emp ID</th>
          <th>Feedback</th>
          <th>Date/Time</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        
        <?php
       $sql="SELECT * FROM feedback";
       
       $result=mysqli_query($conn,$sql);
       if(!$result){
           die("retreiving failed".mysqli_error($conn));
       }

       else{
           while($row=mysqli_fetch_assoc($result)){
                 ?>
           <tr>
                 <td><?php echo $row['FeedBack_ID'];?></td>
                 <td><?php echo $row['Emp_ID'];?></td>
                 <td><?php echo $row['Feedback'];?></td>
                 <td><?php echo $row['DateTime'];?></td>
                 <td><a class="btn btn-primary" role="button" href="FeedbackUpdate.php?FeedBack_ID=<?php echo $row['FeedBack_ID'];?>">Update</a></td>
                 <td><a class="btn btn-danger" role="button" href="FeedbackDelete.php?FeedBack_ID=<?php echo $row['FeedBack_ID'];?>" >Delete</a></td>
                
           </tr>
           <?php
           }
     }
        ?>
              </table><br>
              <center>
<?php 
if(isset($_GET['update_msg'])){
echo"<h4>".$_GET['update_msg']."</h4>";
}
if(isset($_GET['delete_msg'])){
    echo"<h4>".$_GET['delete_msg']."</h4>";
    }
   
?>
    </center>
              
</body>
</html>