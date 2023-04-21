<?php include('dbConnection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Employee Registration</title>
    
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Employee Registration</h1>
      </div>
      </div>
      <a class="btn btn-primary" role="button" href="http://localhost/EMS/View/AdminDashboard.php">Dashboard</a>
      <br>
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
$sql="SELECT * FROM registration WHERE Employee_ID = '$ID'";
        $result=mysqli_query($conn,$sql);
        if($row=mysqli_fetch_assoc($result)){
                  ?>
                  <table>
    <tr>
            <th>Reg ID</th>
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Department ID</th>
            <th>Title</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
          
         
            <tr>
            <td><?php echo $row['Reg_ID'];?></td>
                  <td><?php echo $row['Employee_ID'];?></td>
                  <td><?php echo $row['FName'];?></td>
                  <td><?php echo $row['LName'];?></td>
                  <td><?php echo $row['Email'];?></td>
                  <td><?php echo $row['Dep_ID'];?></td>
                  <td><?php echo $row['Title'];?></td>
                  <td><?php echo $row['UserName'];?></td>
                  <td><?php echo $row['Password'];?></td>
                  <td><a class="btn btn-primary" role="button" href="RegUpdateEMP.php?Reg_ID=<?php echo $row['Reg_ID'];?>">Update</a></td>
                  <td><a class="btn btn-danger" role="button" href="RegDeleteEMP.php?Reg_ID=<?php echo $row['Reg_ID'];?>" >Delete</a></td>
                 
            </tr></table>`
            <br>
            
            <?php
            }
            else{
                echo "<center><h4>Employee Does not exist</h4></center>";
            }
        }
        ?>
        
        <br>
      <table>
        <tr>
            <th>Reg ID</th>
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Department ID</th>
            <th>Title</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
       
        <?php 
        $sql="SELECT * FROM registration";
       
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("retreiving failed".mysqli_error($conn));
        }

        else{
            while($row=mysqli_fetch_assoc($result)){
                  ?>
            <tr>
                  <td><?php echo $row['Reg_ID'];?></td>
                  <td><?php echo $row['Employee_ID'];?></td>
                  <td><?php echo $row['FName'];?></td>
                  <td><?php echo $row['LName'];?></td>
                  <td><?php echo $row['Email'];?></td>
                  <td><?php echo $row['Dep_ID'];?></td>
                  <td><?php echo $row['Title'];?></td>
                  <td><?php echo $row['UserName'];?></td>
                  <td><?php echo $row['Password'];?></td>
                  <td><a class="btn btn-primary" role="button" href="RegUpdateEMP.php?Reg_ID=<?php echo $row['Reg_ID'];?>">Update</a></td>
                  <td><a class="btn btn-danger" role="button" href="RegDeleteEMP.php?Reg_ID=<?php echo $row['Reg_ID'];?>" >Delete</a></td>
                 
            </tr>
            <?php
            }
      }
     
        ?>
    </table> <br><br>
    <center>
      
<?php 
if(isset($_GET['update_msg'])){
echo"<h4>".$_GET['update_msg']."</h4>";
}
if(isset($_GET['delete_msg'])){
    echo"<h4>".$_GET['delete_msg']."</h4>";
    }
    
if(isset($_GET['insert_msg'])){
 echo"<h4>".$_GET['insert_msg']."</h4>";
    }
      
   
?>
    </center>
    <div class="text">
    <a class="btn btn-primary" role="button"href="RegInsertEMP.php">Add new Employee Profile</a>
      </div>

      

    <div class="text">
        <br><a class="btn btn-primary" role="button"href="EmployeeDetails.php">Employee details</a>
      </div>
    </div>
      
</body>
    
</html>