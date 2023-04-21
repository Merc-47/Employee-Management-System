<?php include('dbConnection.php');?>
<?php
if(isset($_POST['buttonAdd'])){
        $EmpID= $_POST['Emp_ID'];
        $Feedback= $_POST['Feedback'];
        $DateTime= $_POST['DateTime'];

        $sql="INSERT into Feedback (Emp_ID,Feedback,DateTime)
        values('$EmpID','$Feedback','$DateTime')";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("query failed".mysqli_error($conn));
        }else{
          header('location:FeedBackForm.php?insert_msg=Feedback has been submitted!');
        }
      }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee FeedBack Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="EMDashboard.css">
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>FeedBack Form</h1>
      </div>
      </div>
      <a class="btn btn-primary" role="button" href="http://localhost/EMS/View/Employee%20Dashboard.php">Dashboard</a>
      <br><br>
      
        <div class="regform">
      <form class="form1" action="FeedBackForm.php" method="post">
  
        <label>Employee ID</label>
        <input id="EmpID" name="Emp_ID" type="text">
  
        <label>FeedBack</label>
        <textarea id="FeedBack" name="Feedback" rows="5" cols="50"></textarea>
  
        <label>Date/time</label>
        <input id="Date/Time" name="DateTime" type="date">
  
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