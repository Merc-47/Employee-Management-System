<?php include('dbConnection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Assinment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Employee Project Assinment</h1>
      </div>
      </div>
      <a class="btn btn-primary" role="button" href="http://localhost/EMS/View/AdminDashboard.php">Dashboard</a>
      <br><br>
    
            <form class="form1" action="ProjectAssinment.php" method="post">
            
              <label >Project Name</label>
              <input id="ProjectID" name="PName" type="text">
            
              <label>Employee ID</label>
              <input id="EmpID" name="Emp_ID" type="text">

              <label >User Name</label>
              <input id="UserName" name="UserName" type="text">
        
              <label>Department ID</label>
              <input id="DepID" name="Dep_ID" type="text">
        
              <label>Start Date</label>
              <input id="StartDate" name="StartDate" type="date">

              <label>End Date</label>
              <input id="EndDate" name="EndDate" type="date">

              <div class="text">
        <button id="buttonAdd"  name="buttonAdd" type="submit" value="UPDATE">Insert</button>
      </div>
            </form><br>
            <center>
      <?php
       if(isset($_GET['insert_msg'])){
        echo"<h4>".$_GET['insert_msg']."</h4>";
        }
        if(isset($_GET['delete_msg'])){
            echo"<h4>".$_GET['delete_msg']."</h4>";
            }
           
      ?>
      </center>
            <br>
      <table>
          <tr>
          <th>Project ID</th>
          <th>Project Name</th>
          <th>Emp ID</th>
          <th>UserName</th>
          <th>Deparrtment ID</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        
        <?php
       $sql="SELECT * FROM  project_assignment";
       
       $result=mysqli_query($conn,$sql);
       if(!$result){
           die("retreiving failed".mysqli_error($conn));
       }

       else{
           while($row=mysqli_fetch_assoc($result)){
                 ?>
           <tr>
                 <td><?php echo $row['Project_ID'];?></td>
                 <td><?php echo $row['PName'];?></td>
                 <td><?php echo $row['Emp_ID'];?></td>
                 <td><?php echo $row['UserName'];?></td>
                 <td><?php echo $row['Dep_ID'];?></td>
                 <td><?php echo $row['StartDate'];?></td>
                 <td><?php echo $row['EndDate'];?></td>
                 <td><a class="btn btn-primary" role="button" href="ProjectUpdate.php?Project_ID=<?php echo $row['Project_ID'];?>">Update</a></td>
                 <td><a class="btn btn-danger" role="button" href="ProjectDelete.php?Project_ID=<?php echo $row['Project_ID'];?>" >Delete</a></td>
                
           </tr>
     
      <center>
           <?php
           }
     }
     if(isset($_GET['update_msg'])){
      echo"<h4>".$_GET['update_msg']."</h4>";
      }
        ?>
</center>
<?php
      if(isset($_POST['buttonAdd'])){
        $PName= $_POST['PName'];
        $EmpID= $_POST['Emp_ID'];
        $UName= $_POST['UserName'];
        $DepID= $_POST['Dep_ID'];
        $StartDate= $_POST['StartDate'];
        $EndDate= $_POST['EndDate'];
        

        $sql="INSERT into project_assignment (PName,Emp_ID,UserName,Dep_ID,StartDate,EndDate)
        values('$PName','$EmpID','$UName','$DepID','$StartDate','$EndDate')";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("query failed".mysqli_error($conn));
        }else{
          header('location:ProjectAssinment.php?insert_msg=Data has been successfully Inserted!');
        }
      }
        ?>
      
</body>
</html>