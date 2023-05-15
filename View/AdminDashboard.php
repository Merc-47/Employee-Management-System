<?php include("auth_session.php");?>
<?php include('conn.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <link rel="stylesheet"href="dashboard.css">
  <style>
    
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs">
        <div class="bg">
        <div class="col-sm-9">
          <div class="row">
            <div class="col-sm-4">
              <div class="width">
                <div class="d-flex align-items-center mb-4">
                        <br>
                  <img src="images/profile.png"
                    alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3"
                    style="width: 70px;">
                  <div class="d-flex flex-row align-items-center mb-2">
                    <p class="text-light bg-dark">Admin</p>
                    <div class="bg">
                    <p class="text-light bg-dark"><?php echo $_SESSION['UserName']; ?></p></p>
                  </div>
                    <p class="mb-0 me-2"></p>
                    <nav>
                      <ul class="nav nav-pills nav-stacked">
                    <li data-rel="4"><button type="button" class="btn btn-primary">Edit</button></li>
                    </ul></nav>
                  </div>
                </div>  
          </div></div></div>
      <nav>
        <ul class="nav nav-pills nav-stacked"><br>
        
          <li data-rel="1" class="active"><a href="#section1">Dashboard</a></li><br><br>
          <li data-rel="2" ><a href="#section2">General</a></li><br><br>
          <li data-rel="3"><a href="#section3">Admin users</a></li><br><br>
          <li data-rel="4"><a href="#section4"></a><br><br><br><br><br><br><br><hr>
          <li data-rel="5"><a href="#section5"><a href="logout.php">Logout</a></a></li><br><br><br>
          
        </ul>
      </nav>
      </div></div>
      </div>
      <section>
      <div class="col-sm-9">
      <div class="text">
        <div class="well">
          <h1>Dashboard</h1>
        </div>
        <?php
        $sql = "SELECT UserName,S_Assinments FROM progress ORDER BY S_Assinments DESC ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Prepare the chart data
$labels = array_column($data, 'UserName');
$values = array_column($data, 'S_Assinments');
$chart_data = array(
    'labels' => $labels,
    'datasets' => array(
        array(
            'label' => 'Most Successful Assinments',
            'backgroundColor' => '#3498db',
            'data' => $values,
        ),
    ),
);
?>
        <div class="banner">
        <canvas id="Allprogress" style="width:150px;height: 55px;"></canvas>
        <script>
        var ctx = document.getElementById('Allprogress').getContext('2d');
var chart_data = <?php echo json_encode($chart_data); ?>;
var Allprogress = new Chart(ctx, {
    type: 'bar',
    data: chart_data,
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
      </Script>
      </div>
        </div>

        
        <div class="flex">
          <div class="padding">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h3>Employee's Details</h3> 
              </div>
              <div class="flip-card-back">
                <a href="Admin files/EmployeeDetails.php"><img src="Images/employee.png" alt="Avatar" style="width:150px;height:125px;"></a>
              </div>
            </div>
          </div></div>

          <div class="padding">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h3>Register Employees</h3> 
              </div>
              <div class="flip-card-back">
                <a href="Admin files/RegisterEmployees.php"><img src="Images/registration.jfif" alt="Avatar" style="width:150px;height:125px;"></a>
              </div>
            </div>
          </div></div>

          <div class="padding">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h3>Departments</h3> 
              </div>
              <div class="flip-card-back">
                <a href="Admin files/Departments.php"><img src="Images/department.jfif" alt="Avatar" style="width:150px;height:125px;"></a>
              </div>
            </div>
          </div></div>      
        </div>

<div class="flex">
          <div class="padding">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h3>Attendance Management</h3> 
              </div>
              <div class="flip-card-back">
                <a href="Admin files/AttendanceManagement.php"><img src="Images/attendance.jfif" alt="Avatar" style="width:150px;height:125px;"></a>
              </div>
            </div>
          </div></div>

          <div class="padding">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h3>Leave Management</h3> 
              </div>
              <div class="flip-card-back">
                <a href="Admin files/LeaveManagement.php"> <img src="Images/leave.jfif" alt="Avatar" style="width:150px;height:125px;"></a>
              </div>
            </div>
          </div></div>

          <div class="padding">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h3>FeedBack Management</h3> 
              </div>
              <div class="flip-card-back">
                <a href="Admin files/FeedbackManagement.php"> <img src="Images/feedback.jfif" alt="Avatar" style="width:150px;height:125px;"></a>
              </div>
            </div>
          </div></div>  
          
          <div class="padding">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h3>Payroll</h3> 
              </div>
              <div class="flip-card-back">
                <a href="Admin files/Payroll.php"> <img src="Images/payroll.jfif" alt="Avatar" style="width:150px;height:125px;"></a>
              </div>
            </div>
          </div></div>
          
        </div>

      </div>
    </section>
    <section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
          <h1>General</h1>
        </div>
      </div>

      <?php
        $sql = "SELECT UserName,S_Assinments FROM progress ORDER BY S_Assinments ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Prepare the chart data
$labels = array_column($data, 'UserName');
$values = array_column($data, 'S_Assinments');
$chart_data = array(
    'labels' => $labels,
    'datasets' => array(
        array(
            'label' => 'Successful Assinments',
            'backgroundColor' => '#3498db',
            'data' => $values,
        ),
    ),
);
?>

<?php 
       
$result = $conn->query("SELECT (SELECT COUNT(*) FROM employee) AS total_employee_count, 
COUNT(Emp_ID) AS current_date_attendance_count FROM attendance 
RIGHT JOIN employee ON Emp_ID = Employee_ID AND Date = CURDATE()");

$row = $result->fetch_assoc();

$TEmpCount = $row['total_employee_count'];
$TAttendCount = $row['current_date_attendance_count'];

?>

   <div class="flex">
      <div class="paddingchart">
      <h4>Todays Attendance</h4>
      <div class="chartbg"><canvas id="attendance-pie-chart" style="width:150px;height:100px;" ></canvas>
      <script>
       var ctx = document.getElementById('attendance-pie-chart').getContext('2d');
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['Present', 'Absent'],
    datasets: [{
      data: [<?php echo $TAttendCount; ?>, <?php echo $TEmpCount - $TAttendCount ; ?>],
      backgroundColor: ['#36A2EB', '#FF6384'],
    }]
  }
});
    </script>
   
    </div>
    </div>
      <div class="paddingchart">
      <h4>Current Employee Progress</h4>
      <div class="chartbg"><canvas id="myChartprogress" style="width:150px;height: 100px;"></canvas>
      <script>
        var ctx = document.getElementById('myChartprogress').getContext('2d');
var chart_data = <?php echo json_encode($chart_data); ?>;
var myChartprogress = new Chart(ctx, {
    type: 'bar',
    data: chart_data,
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
      </Script>
    </div>
    </div>
    </div>
    <div class="flex">
      <div class="padding">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <h3>Generate Report</h3> 
          </div>
          <div class="flip-card-back">
            <a href="Admin files/GenerateReport.php"><img src="Images/generate.png" alt="Avatar" style="width:150px;height:125px;"></a>
          </div>
        </div>
      </div></div>

      <div class="padding">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <h3>Project Assinment</h3> 
          </div>
          <div class="flip-card-back">
            <a href="Admin files/ProjectAssinment.php"><img src="Images/project.jfif" alt="Avatar" style="width:150px;height:125px;"></a>
          </div>
        </div>
      </div></div>

      <div class="padding">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <h3>Employee Progress</h3> 
          </div>
          <div class="flip-card-back">
            <a href="Admin files/EmployeeProgress.php"><img src="Images/progress.jfif" alt="Avatar" style="width:150px;height:125px;"></a>
          </div>
        </div>
      </div></div>      
    </div>
    </div>
      
    </section>
    <section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
          <h1>Admin Users</h1>
        </div>
        </div>
       <br><br>
        <table>
      <tr>
      <th>Admin_ID</th>
            <th>FName</th>
            <th>LName</th>
            <th>UserName</th>
            <th>Password</th>
            <th>Authority</th>
        </tr>
       
        <?php
       $sql="SELECT * FROM admin";
       
       $result=mysqli_query($conn,$sql);
       if(!$result){
           die("retreiving failed".mysqli_error($conn));
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
                
           </tr>
           <?php
           }
     }
        ?>
    </table>
      </div>

    </section>
    
    
    <section>
      <div class="col-sm-9">
      <div class="text">
      <div class="well">
          <h1>Profile Edit</h1>
        </div>
        <img src="images/profile.png"
                    alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3"
                    style="width: 200px;height:200px;">
        </div>
        <?php
$UName= $_SESSION['UserName'];          
$sql="SELECT UserName,Password FROM admin where UserName='$UName'";
$result=mysqli_query($conn,$sql);
if(!$result){
  die("retreiving failed".mysqli_error($conn));
}

else{
  while($row=mysqli_fetch_assoc($result)){

?>

 <br><br><table>
    
          <tr>
          <th>UserName</th>
          <td><?php echo $row['UserName'];?></td></tr>
          <tr>
          <th>Password</th>
          <td><?php echo $row['Password'];?></td></tr>
 </table><br><br>
     
                  <div class="text">
                  <a class="btn btn-primary" role="button" href="ADProfileUpdate.php?UserName=<?php echo $row['UserName'];?> ">Update</a>
                  </div>
                  <br><br>
                  
                  <?php

  }
}
?>

<center>
<?php 
if(isset($_GET['update_msg'])){
echo"<h4>".$_GET['update_msg']."</h4>";
}?>
      </center>     </div>
    </section>
      </div>
      </div>

      <script src="dashboard.js"> </script>
</body>
</html>
