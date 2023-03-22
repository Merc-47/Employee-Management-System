<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Employee Registration</title>
    
    
    <link rel="stylesheet" href="Dashboard.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Employee Registration</h1>
      </div>
      </div>

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
        <?php include('dbConnection.php');?>
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
                  <td><a href="RegUpdateEMP.php?Reg_ID=<?php echo $row['Reg_ID'];?>">Update</a></td>
                  <td><a href="RegDeleteEMP.php?Reg_ID=<?php echo $row['Reg_ID'];?>" >Delete</a></td>
                 
            </tr>
            <?php
            }
      }
     
        ?>
    </table> <br><br><br>
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
        <h1>Register Employees Profile</h1>
      </div>

      <div class="flex">
        <div class="regform">
      <form class="form1" action="RegInsertEMP.php" method="post" >
  
        <label>Employee ID</label>
        <input id="EmpID" name="Employee_ID" type="text">
  
        <label>First Name</label>
        <input id="FName" name="FName" type="text">
  
        <label>Last Name</label>
        <input id="LName" name="LName" type="text">
  
        <label>Email</label>
        <input id="Email" name="Email" type="email">
  
        <label>Department ID</label>
        <input id="DepID" name="Dep_ID" type="text">
  
        <label>Job Title</label>
        <input id="Title" name="Title" type="text">
  
        <label >User Name</label>
        <input id="UserName" name="UserName"  type="text">
  
        <label>Password</label>
        <input id="Password" name="Password" type="text">
        <div class="text">
        <button>Submit</button>
      </div>
      </form>
    </div>

    <div class="text">
        <br><a href="EmployeeDetails.php"><button>Employee details</button></a>
      </div>
    </div>
      
</body>
    
</html>