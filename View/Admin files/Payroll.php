<?php include('dbConnection.php');?>
<?php
if(isset($_POST['buttonAdd'])){
       
       $EmpID= $_POST['Emp_ID'];
       $DepID= $_POST['Dep_ID'];
       $Wage= $_POST['Wage'];
       $Allowance= $_POST['Allowance'];
       $Deductions= $_POST['Deductions'];
       $Taxes= $_POST['Taxes'];
       $WorkHours= $_POST['WorkHours'];
       $Salary= $_POST['Salary'];

        $sql="INSERT into payroll (Emp_ID,Dep_ID,Wage,Allowance,Deductions,Taxes,WorkHours,Salary)
        values('$EmpID','$DepID','$Wage','$Allowance','$Deductions','$Taxes','$WorkHours','$Salary')";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("query failed".mysqli_error($conn));
        }else{
          header('location:Payroll.php?insert_msg=Payroll has been submitted!');
        }
      }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Payroll Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Payroll Management</h1>
      </div>
      </div>
      
      <table>
      <tr>
          <th>Payroll_ID</th>
          <th>Emp_ID</th>
          <th>Dep_ID</th>
          <th>Wage</th>
          <th>Allowance</th>
          <th>Deductions</th>
          <th>Taxes</th>
          <th>WorkHours</th>
          <th>Salary</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php
        $sql="SELECT * FROM payroll";
       
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("retreiving failed".mysqli_error($conn));
        }

        else{
            while($row=mysqli_fetch_assoc($result)){
                  ?>
            <tr>
                  <td><?php echo $row['Payroll_ID'];?></td>
                  <td><?php echo $row['Emp_ID'];?></td>
                  <td><?php echo $row['Dep_ID'];?></td>
                  <td><?php echo $row['Wage'];?></td>
                  <td><?php echo $row['Allowance'];?></td>
                  <td><?php echo $row['Deductions'];?></td>
                  <td><?php echo $row['Taxes'];?></td>
                  <td><?php echo $row['WorkHours'];?></td>
                  <td><?php echo $row['Salary'];?></td>
                  <td><a href="PayrollUpdate.php?Payroll_ID=<?php echo $row['Payroll_ID'];?>">Update</a></td>
                  <td><a href="PayrollDelete.php?Payroll_ID=<?php echo $row['Payroll_ID'];?>" >Delete</a></td>
                 
            </tr>
            <?php
            }
      }
       ?>
        </table>
        <center>
      <?php
       if(isset($_GET['delete_msg'])){
        echo"<h4>".$_GET['delete_msg']."</h4>";
        }
        if(isset($_GET['update_msg'])){
            echo"<h4>".$_GET['update_msg']."</h4>";
            }
      ?>
      </center> <br><br><br>
        <div class="text">
        <h1>Insert Payroll</h1>
      </div>
              <div class="regform">
      <form class="form1" action="Payroll.php" method="post">
  
        <label>Emp ID</label>
        <input id="EmpID" name="Emp_ID" type="text">
  
        <label>Dep ID</label>
        <input id="DepID" name="Dep_ID" type="text">

        <label>Wage</label>
        <input id="Wage" name="Wage" type="text">
  
        <label>Allowance</label>
        <input id="Allowance" name="Allowance" type="text">
  
        <label>Deductions</label>
        <input id="Deductions" name="Deductions" type="text">

        <label>Taxes</label>
        <input id="Taxes" name="Taxes" type="text">
  
        <label>Work Hours</label>
        <input id="WorkHours" name="WorkHours" type="text">

        <label>Salary</label>
        <input id="Salary" name="Salary" type="text">
  
        <div class="text">
        <button id="buttonAdd"  name="buttonAdd" type="submit" value="UPDATE">Submit</button>
          </div>
      </form>
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