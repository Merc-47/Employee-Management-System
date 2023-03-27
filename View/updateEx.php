<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Admin files/Dashboard.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
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
        <?php include('conn.php');?>
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
                  <td><a href="example.php?Reg_ID=<?php echo $row['Reg_ID'];?>">Update</a></td>
                  <td><a href="Delete.php?Reg_ID=<?php echo $row['Reg_ID'];?>" >Delete</a></td>
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
?>
    </center>
</body>
</html>
<?php
       
      /* $EmployeeID=$_POST['Employee_ID'];
        $FName=$_POST['FName'];
        $LName=$_POST['LName'];
        $Email=$_POST['Email'];
        $DepID=$_POST['Dep_ID'];
        $Title=$_POST['Title'];
        $UserName=$_POST['UserName'];
        $Password=$_POST['Password'];

        $conn= mysqli_connect("localhost","root","","employee_management_system");
       if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
       }
       else{
             $stmt=$conn->prepare("insert into registration(Employee_ID,FName,LName,Email,Dep_ID,Title,UserName,Password)
              values(?,?,?,?,?,?,?,?)");
              $stmt->bind_param("isssssss" ,$EmployeeID,$FName,$LName,$Email,$DepID,$Title,$UserName,$Password);
              $stmt->execute();
              echo"registration successful";
              $stmt->Close();
              $conn->Close();
       }
       */
      ?>
      