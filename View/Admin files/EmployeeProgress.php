<?php include('dbConnection.php');?>

<?php
      if(isset($_POST['buttonAdd'])){
        $EmpID= $_POST['Emp_ID'];
        $CurrentTeam= $_POST['CurrentTeam'];
        $SAssinments= $_POST['S_Assinments'];
        $TAssinments= $_POST['T_Assinments'];
        $SFeedback= $_POST['S_Feedback'];
        

        $sql="INSERT into progress (Emp_ID,CurrentTeam,S_Assinments,T_Assinments,S_Feedback)
        values('$EmpID','$CurrentTeam','$SAssinments',' $TAssinments','$SFeedback')";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("query failed".mysqli_error($conn));
        }else{
          header('location:EmployeeProgress.php?insert_msg=Data has been successfully Inserted!');
        }
      }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Employee Progress</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Employee Progress</h1>
      </div>
      </div>
   
    <div class="flex">
    <div class="paddingchart">
        <div class="chartbg"><canvas id="myChartLineOne" style="width:150px;height: 100px;"></canvas></div>
      </div>
   
      <div class="paddingchart">
        <div class="chartform">
            <form class="form1" action="EmployeeProgress.php" method="post">
              <label>Employee ID</label>
              <input id="EmpID" name="Emp_ID" type="text">

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
            
      <?php
       if(isset($_GET['insert_msg'])){
        echo"<h4>".$_GET['insert_msg']."</h4>";
        }
      ?>
      
        </div>

      </div>
      </div>
      <div class="text">
        <table><tr>
                <h2>Extra Materials</h2></tr>
                <td><label for="myfile">Select files:</label>
                       <input type="file" id="myfile" name="myfile" multiple></td>
                       <td><button>Submit</button></td>
                    </table>
                       </div>
        
      <script src="Dashboard.js"></script>
</body>
</html>