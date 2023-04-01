<?php include('dbConnection.php');?>
<?php
if(isset($_POST['buttonAdd'])){
        $EmpID= $_POST['Emp_ID'];
        $Type= $_POST['Type'];
        $Reason= $_POST['Reason'];
        $DateTimeFrom= $_POST['DateTimeFrom'];
        $DateTimeTo= $_POST['DateTimeTo'];
        

        $sql="INSERT into work_leave (Emp_ID,Type,Reason,DateTimeFrom,DateTimeTo)
        values('$EmpID','$Type','$Reason','$DateTimeFrom','$DateTimeTo')";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("query failed".mysqli_error($conn));
        }else{
          header('location:LeaveForm.php?insert_msg=Leave request has been submitted!');
        }
      }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Leave Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="EMDashboard.css">
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Leave Form</h1>
      </div>
      </div>
      
        <div class="regform">
      <form class="form1" action="LeaveForm.php" Method="post">
  
        <label>Employee ID</label>
        <input id="EmpID" name="Emp_ID" type="text">
  
        <label>Type</label>
        <Select name="Type" id="Type">
        <option value="Casual">Casual</option>
        <option value="Extended">Extended</option>
        </Select>

        <label>Reason</label>
        <textarea id="Reason" name="Reason" rows="5" cols="50"></textarea>
  
        <label>Date/Time From</label>
        <input id="DateTimeFrom" name="DateTimeFrom" type="date">
  
        <label>Date/Time To</label>
        <input id="DateTimeTo" name="DateTimeTo" type="date">
  
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