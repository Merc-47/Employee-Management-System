<?php include("auth_session.php");?>
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
                        
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-2.webp"
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
                    <li data-rel="5"><button type="button" class="btn btn-primary">Edit</button></li>
                    </ul></nav>
                  </div>
                </div>  
          </div></div></div>
      <nav>
        <ul class="nav nav-pills nav-stacked"><br>
        
          <li data-rel="1" class="active"><a href="#section1">Dashboard</a></li><br><br>
          <li data-rel="2" ><a href="#section2">General</a></li><br><br>
          <li data-rel="3"><a href="#section3">Admin users</a></li><br><br>
          <li data-rel="4"><a href="#section4">Mail</a></li><br><br><br><br><br><br><br><br><hr>
          <li data-rel="5"><a href="#section5"><a href="logout.php">Logout</a></a></li><br>
        </ul>
      </nav>
      </div>
      </div>
      <section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
          <h1>Dashboard</h1>
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
        </div>

        <div class="flex">
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
   <div class="flex">
      <div class="paddingchart">
      <div class="chartbg"><canvas id="myChartPie" style="width:150px;height:100px;" ></canvas></div>
    </div>
      <div class="paddingchart">
      <div class="chartbg"><canvas id="myChartLine" style="width:150px;height: 100px;"></canvas></div>
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
            <a href="Admin files/ProjectAssinment.html"><img src="Images/project.jfif" alt="Avatar" style="width:150px;height:125px;"></a>
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
       $conn=mysqli_connect("localhost","root","","employee_management_system");
       if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
       }
        $sql="SELECT Admin_ID,FName,LName,UserName,Password,Authority FROM admin";
        $result=$conn->query($sql);
        if($result-> num_rows > 0){
            while($rows=$result->fetch_assoc()){
                echo"<tr><td>".$rows["Admin_ID"]."</td><td>".$rows["FName"]."</td><td>".$rows["LName"]
                ."</td><td>".$rows["UserName"]."</td><td>".$rows["Password"]."</td><td>".$rows["Authority"]."</td></tr>";
            }
            echo"</table>";
        }
        else{
             echo"0 reult";
        }
        $conn->close();
        ?>
    </table>
      </div>

    </section>
    <section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
          <h1>Mail</h1>
        </div>
        </div>
        
          <div class="regform">
            <form class="form1" action="">

              <label>Sender Email </label>
           <input id="SenderEmail" type="text">
           
            <label>Recipient Email </label>
           <input id="Recipient" type="text">

            <label>Subject </label>
           <input id="Subject" type="text">
            
             <label>Message</label>
            <textarea id="Reason" rows="5" cols="50"></textarea>

            <label for="myfile">Select files:</label>
            <input type="file" id="myfile" name="myfile" multiple>
            
            <div class="text">
              <button>Send</button>
              
            </div>
            
          </form>
          <div class="text">
            <br><br> <button>Inbox</button>
          </div>
          </div>
          
      </div>
    </section>
    
    <section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
          <h1>Profile Edit</h1>
        </div>
        </div></div>
    </section>
      </div>
      </div>

      <script src="dashboard.js"> </script>
</body>
</html>
