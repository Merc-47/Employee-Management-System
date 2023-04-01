<?php include('dbConnection.php');?>
<?php
if(isset($_POST['buttonAdd'])){
        $EmpID= $_POST['Emp_ID'];
        $Date= $_POST['Date'];
        $CheckIN= $_POST['Check_IN'];
        $CheckOUT= $_POST['Check_OUT'];
        

        $sql="INSERT into attendance (Emp_ID,Date,Check_IN,Check_OUT)
        values('$EmpID','$Date','$CheckIN','$CheckOUT')";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("query failed".mysqli_error($conn));
        }else{
          header('location:Attendance.php?insert_msg=Attendance has been submitted!');
        }
      }
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Attendance</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="EMDashboard.css">
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Attendance</h1>
      </div>
      </div>
      
        <div class="regform">
      <form class="form1" action="Attendance.php" Method="post">
  
        <label>Employee ID</label>
        <input id="EmpID" name="Emp_ID" type="text">
  
        <label>Date</label>
        <input id="Date" name="Date" type="date">
  
        <label>Check In</label>
        <input id="CheckIN" name="Check_IN" type="time">
  
        <label>Check Out</label>
        <input id="CheckOUT" name="Check_OUT" type="time">
  
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