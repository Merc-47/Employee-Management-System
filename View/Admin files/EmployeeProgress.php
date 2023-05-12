<?php include('dbConnection.php');?>

<?php
      if(isset($_POST['buttonAdd'])){
        $EmpID= $_POST['Emp_ID'];
        $UserName= $_POST['UserName'];
        $CurrentTeam= $_POST['CurrentTeam'];
        $SAssinments= $_POST['S_Assinments'];
        $TAssinments= $_POST['T_Assinments'];
        $SFeedback= $_POST['S_Feedback'];
        

        $sql="INSERT into progress (Emp_ID,UserName,CurrentTeam,S_Assinments,T_Assinments,S_Feedback)
        values('$EmpID','$UserName','$CurrentTeam','$SAssinments',' $TAssinments','$SFeedback')";
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Employee Progress</h1>
      </div>
      </div>
      <a class="btn btn-primary" role="button" href="http://localhost/EMS/View/AdminDashboard.php">Dashboard</a>
      <br><br>

      <?php 
      $sql = "SELECT UserName, S_Assinments, T_Assinments FROM progress GROUP BY S_Assinments";
      $result = mysqli_query($conn, $sql);
      
      // Format the data for use in Chart.js
      $data = array();
      while ($row = mysqli_fetch_assoc($result)) {
          $data[] = array("x" => $row["UserName"] . "/" . $row["T_Assinments"], "y" => $row["S_Assinments"]);
      }
      
      // Close the database connection
      mysqli_close($conn);
      ?>
      
    <div class="flex">
    <div class="paddingchart">
        <div class="chartbg"><canvas id="myChartLine" style="width:150px;height: 100px;"></canvas>
        <script>
var data = <?php echo json_encode($data); ?>;
var ctx = document.getElementById('myChartLine').getContext('2d');
var chart = new Chart(ctx, {
    type: 'line',
    data: {
        datasets: [{
            label: 'Successful Assinments ',
            data: data,
            backgroundColor: 'rgba(0, 0, 255, 0.2)',
            borderColor: 'rgba(0, 0, 255, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            xAxes: [{
                type: 'time',
                time: {
                    parser: 'YYYY MM DD',
                    tooltipFormat: 'll',
                    unit: 'day',
                    displayFormats: {
                        day: 'MM/DD/YYYY'
                    }
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Date'
                }
            }],
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Value'
                }
            }]
        }
    }
});
</script>
      </div>
      </div>
   
      <div class="paddingchart">
        <div class="chartform">
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