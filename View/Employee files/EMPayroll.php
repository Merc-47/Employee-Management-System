<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Payroll</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="EMDashboard.css">
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
          
        </tr>
        <?php include('dbConnection.php');?>
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
                 
            </tr>
            <?php
            }
      }
       ?>
        </table>
</body>
</html>