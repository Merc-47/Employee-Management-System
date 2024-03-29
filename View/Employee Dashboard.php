<?php include("auth_session.php");?>
<?php include('conn.php');?>
<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Dashboard</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <link rel="stylesheet"href="dashboard.css">
  <link rel="stylesheet" href="Mail.css">
  
</head>
<body>
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs">
        
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
                    <p class="text-light bg-dark">Employee</p>
                    <div class="bg">
                    <p class="text-light bg-dark"><?php echo $_SESSION['UserName']; ?></p>
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
          <li data-rel="2" ><a href="#section2">Progress</a></li><br><br>
          <li data-rel="3"><a href="#section3">Work Material</a></li><br><br>
          <li data-rel="4"><a href="#section4"></a><br><br><br><br><br><br><br><hr>
          <li data-rel="5"><a href="#section5"><a href="logout.php">Logout</a></a></li><br><br><br>
        </ul>
      </nav>
      </div>
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
                <h3>Attendance</h3> 
              </div>
              <div class="flip-card-back">
                <a href="Employee files/Attendance.php"><img src="Images/attendance.jfif" alt="Avatar" style="width:150px;height:125px;"></a>
              </div>
            </div>
          </div></div>

          <div class="padding">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h3>Leave Form</h3> 
              </div>
              <div class="flip-card-back">
                <a href="Employee files/LeaveForm.php"><img src="Images/leave.jfif" alt="Avatar" style="width:150px;height:125px;"></a>
              </div>
            </div>
          </div></div>

          
        </div>

<div class="flex">

<div class="padding">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h3>FeedBack Form</h3> 
              </div>
              <div class="flip-card-back">
                <a href="Employee files/FeedBackForm.php"><img src="Images/feedback.jfif" alt="Avatar" style="width:150px;height:125px;"></a>
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
                <a href="Employee files/EMPayroll.php"><img src="Images/payroll.jfif" alt="Avatar" style="width:150px;height:125px;"></a>
              </div>
            </div>
          </div></div>

          

          <div class="padding">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h3>Extras</h3> 
              </div>
              <div class="flip-card-back">
                <a href="Employee files/Extras.php"> <img src="Images/generate.png" alt="Avatar" style="width:150px;height:125px;"></a>
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
          <h1>Progress</h1>
        </div>
      </div>
      <?php 
      $UserName= $_SESSION['UserName'];
$result = $conn->query("SELECT T_Assinments,S_Assinments FROM progress Where UserName='$UserName'");
$row = $result->fetch_assoc();
$totalAssinments = $row['T_Assinments'];
$successfulAssinments = $row['S_Assinments'];
?><div class="text">
<h2>Assinment Completion</h2>
  </div>
   <div class="flex"> 
      <div class="paddingchart">
      <div class="chartbg"><canvas id="pie-chart" style="width:150px;height:100px;"></canvas>
      
      <script>
        var ctx = document.getElementById('pie-chart').getContext('2d');
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['Completed', 'Failed'],
    datasets: [{
      data: [<?php echo $successfulAssinments; ?>, <?php echo $totalAssinments - $successfulAssinments ; ?>],
      backgroundColor: ['#36A2EB', '#FF6384'],
    }]
  }
});
    </script>
   
    </div>
    </div>
 
   </div>
      
      
<?php

$UserName= $_SESSION['UserName'];
$sql="SELECT * FROM progress WHERE UserName = '$UserName'";
        $result=mysqli_query($conn,$sql);
        if($row=mysqli_fetch_assoc($result)){
                  ?>
                  <table>
    <tr>
        <th>Employee ID</th>
        <th>User Name</th>
        <th>Current Assined Team</th>
        <th>Successful Assinments</th>
        <th>Total Assinments</th>
          </tr>
          
         
            <tr>
                 <td><?php echo $row['Emp_ID'];?></td>
                 <td><?php echo $row['UserName'];?></td>
                 <td><?php echo $row['CurrentTeam'];?></td>
                 <td><?php echo $row['S_Assinments'];?></td>
                 <td><?php echo $row['T_Assinments'];?></td>
                  
            </tr></table>`
            <br>
      <table>
      <tr><th>Supervisor feedback</th>
        <td><?php echo $row['S_Feedback'];?></td></tr>
    </table>
            
            <?php
            }
            else{
                echo "<center><h4>Employee Progress Details not Available</h4></center>";
            }
        
      
 
        ?>
      <br>
    </div>
      
    </section>
    <section>
      <div class="col-sm-9">
      <div class="text">
        <div class="well">
          <h1>Work Material</h1>
        </div><br><br>
        <h2>Download Files Here</h2>
        <br><br><table style="border: 1px solid #337ab7;"><tr><th></th><td>
        <?php


$dir = 'uploads/';
if (is_dir($dir) && strpos(realpath($dir), realpath('uploads')) === 0) {

  $dh = opendir($dir);

  while (($file = readdir($dh)) !== false) {

    if ($file != '.' && $file != '..') {

      echo '<a href="' . $dir . $file . '">' . $file . '</a><br>';

    }

  }

  closedir($dh);

} else {
  echo 'Directory not found or not allowed.';
}

?>
</td></tr>
</table>
<p><h3>Download the corresponding  work materials according to your needs</h3></p>
</div>
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
$sql="SELECT Email,UserName,Password FROM registration where UserName='$UName'";
$result=mysqli_query($conn,$sql);
if(!$result){
  die("retreiving failed".mysqli_error($conn));
}

else{
  while($row=mysqli_fetch_assoc($result)){

?>
 <br><br><table>
    <tr>
          <th>Email</th>
          <td><?php echo $row['Email'];?></td></tr>
          <tr>
          <th>UserName</th>
          <td><?php echo $row['UserName'];?></td></tr>
          <tr>
          <th>Password</th>
          <td><?php echo $row['Password'];?></td></tr>
 </table><br><br>
     
                  <div class="text">
                  <a class="btn btn-primary" role="button" href="EMProfileUpdate.php?UserName=<?php echo $row['UserName'];?> ">Update</a>
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
      </center>     
        </div>
    </section>
      </div>
      </div>

      <script src="dashboard.js"> </script>
</body>
</html>