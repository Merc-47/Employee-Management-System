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
    
            <form class="form1" action="EmployeeProgress.php" method="post">
              <label>Employee ID</label>
              <input id="EmpID" name="Emp_ID" type="text">

              <label >User Name</label>
              <input id="UserName" name="UserName" type="text">

              <label >Current Assined Team</label>
              <input id="CurrentTeam" name="CurrentTeam" type="text">
        
              <label>Successful Assinments </label>
              <input id="SAssinments" name="S_Assinments" type="text">
        
              <label>Total Assinment</label>
              <input id="TAssinment" name="T_Assinments" type="text">

              <label>Supervisor Feedback</label>
              <textarea id="SFeedBack" name="S_Feedback" rows="5" cols="49"></textarea>

              <div class="text">
        <button id="buttonAdd"  name="buttonAdd" type="submit" value="UPDATE">Insert</button>
      </div>
            </form>
      
</body>
</html>