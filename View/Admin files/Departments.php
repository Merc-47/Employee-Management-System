<?php include('dbConnection.php');?>
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
    
    <a class="btn btn-primary" role="button" href="http://localhost/EMS/View/AdminDashboard.php">Dashboard</a>
    <br>
      <form class="form-inline" method="post">
<label>Enter Department ID</label>
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
$sql="SELECT * FROM department WHERE Dep_ID = '$ID'";
        $result=mysqli_query($conn,$sql);
        if($row=mysqli_fetch_assoc($result)){
                  ?>
                  <table>
    <tr>
    <th>Department_ID</th>
          <th>Department Name</th>
          <th>Managers</th>
          <th>Employees</th>
          <th>Update</th>
          <th>Delete</th>
          </tr>
          
         
            <tr>
                <td><?php echo $row['Dep_ID'];?></td>
                 <td><?php echo $row['DName'];?></td>
                 <td><?php echo $row['Managers'];?></td>
                 <td><?php echo $row['Employees'];?></td>
                 <td><a class="btn btn-primary" role="button" href="DepUpdate.php?Dep_ID=<?php echo $row['Dep_ID'];?>">Update</a></td>
                 <td><a class="btn btn-danger" role="button" href="DepDelete.php?Dep_ID=<?php echo $row['Dep_ID'];?>" >Delete</a></td>
            </tr></table>`
            <br>
            
            <?php
            }
            else{
                echo "<center><h4>Department Does not exist</h4></center>";
            }
        }
        ?>
    <table>
    <tr>
          <th>Department_ID</th>
          <th>Department Name</th>
          <th>Managers</th>
          <th>Employees</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php include('dbConnection.php');?>
      <?php
       $sql="SELECT * FROM department";
      
       $result=mysqli_query($conn,$sql);
       if(!$result){
           die("query failed".mysqli_error($conn));
       }

       else{
           while($row=mysqli_fetch_assoc($result)){
                 ?>
           <tr>
                 <td><?php echo $row['Dep_ID'];?></td>
                 <td><?php echo $row['DName'];?></td>
                 <td><?php echo $row['Managers'];?></td>
                 <td><?php echo $row['Employees'];?></td>
                 <td><a class="btn btn-primary" role="button" href="DepUpdate.php?Dep_ID=<?php echo $row['Dep_ID'];?>">Update</a></td>
                 <td><a class="btn btn-danger" role="button" href="DepDelete.php?Dep_ID=<?php echo $row['Dep_ID'];?>" >Delete</a></td>
           </tr>
           <?php
           }
     }
       ?>
        </table><br>

        <?php
      if(isset($_POST['buttonAdd'])){
        $DepID= $_POST['Dep_ID'];
        $DName= $_POST['DName'];
        $Managers= $_POST['Managers'];
        $Employees= $_POST['Employees'];
        

        $sql="INSERT into department (Dep_ID,DName,Managers,Employees)
        values('$DepID','$DName','$Managers','$Employees')";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("query failed".mysqli_error($conn));
        }else{
          header('location:Departments.php?insert_msg=Data has been successfully Inserted!');
        }
      }
        ?>
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
    <div class="text">
        <h1>Add New Department</h1>
      </div>

      <div class="flex">
        <div class="regform">
      <form class="form1" action="Departments.php" method="post" >
  
        <label>Department ID</label>
        <input id="DepID" name="Dep_ID" type="text">
  
        <label>Department Name</label>
        <input id="DName" name="DName" type="text">
  
        <label>Managers</label>
        <input id="Managers" name="Managers" type="text">
  
        <label>Employees</label>
        <input id="Employees" name="Employees" type="text">
  
        <div class="text">
        <button id="buttonAdd"  name="buttonAdd" type="submit" value="UPDATE">Insert</button>
      </div>
      </form>
    </div>
    </div>
    <center>
      <?php
       if(isset($_GET['insert_msg'])){
        echo"<h4>".$_GET['insert_msg']."</h4>";
        }
      ?>
      </center>
            
</body>
</html>