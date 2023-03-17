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
            <th>Admin_ID</th>
            <th>FName</th>
            <th>LName</th>
            <th>UserName</th>
            <th>Password</th>
            <th>Authority</th>
            <th>update</th>
            <th>delete</th>
        </tr>
        <?php 
       $conn=mysqli_connect("localhost","root","","employee_management_system");
       if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
       }
        $sql="SELECT Admin_ID,FName,LName,UserName,Password,Authority FROM admin";
       
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("query failed".mysqli_error($conn));
        }

        else{
            while($row=mysqli_fetch_assoc($result)){
                  ?>
            <tr>
                  <td><?php echo $row['Admin_ID'];?></td>
                  <td><?php echo $row['FName'];?></td>
                  <td><?php echo $row['LName'];?></td>
                  <td><?php echo $row['UserName'];?></td>
                  <td><?php echo $row['Password'];?></td>
                  <td><?php echo $row['Authority'];?></td>
                  <td><a href="example.php?id=<?php echo $row['Admin_ID'];?>">Update</a></td>
                  <td><a href="#" >Delete</a></td>
            </tr>
            <?php
            }
      }
        ?>
        
      
        

    </table>

      
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
       }*/
      ?>