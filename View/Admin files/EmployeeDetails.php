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
        <?php include('dbConnection.php');?>
        <?php
        $sql="SELECT * FROM employee";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("retreiving failed".mysqli_error($conn));
        }

        else{
            while($row=mysqli_fetch_assoc($result)){
                  ?>
            <tr>
                  <td><?php echo $row['Employee_ID'];?></td>
                  <td><?php echo $row['FirstName'];?></td>
                  <td><?php echo $row['LastName'];?></td>
                  <td><?php echo $row['Dep_ID'];?></td>
                  <td><?php echo $row['Dep_Name'];?></td>
                  <td><?php echo $row['DOB'];?></td>
                  <td><?php echo $row['Gender'];?></td>
                  <td><?php echo $row['PhoneNo'];?></td>
                  <td><?php echo $row['Email'];?></td>
                  <td><?php echo $row['JobTitle'];?></td>
                  <td><?php echo $row['Address'];?></td>
                  <td><?php echo $row['HireDate'];?></td>
                  <td><?php echo $row['Salary'];?></td>
                  <td><a href="EmpDetailUpdate.php?Employee_ID=<?php echo $row['Employee_ID'];?>">Update</a></td>
                  <td><a href="EmpDetailDelete.php?Employee_ID=<?php echo $row['Employee_ID'];?>" >Delete</a></td>
            </tr>
            <?php
            }
      }
      
        ?>
      
        </table>
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
    </center><br>
    <div class="flex">
        <div class="text">
        <button><a href="EmpDetailInsert.php">Insert New Employee</a></button><br>
        </div>&nbsp;&nbsp;
        <div class="text">
      <button><a href="RegisterEmployees.php">Create Employee Profile</a></button>
      </div>
    </div>
</body>
</html>