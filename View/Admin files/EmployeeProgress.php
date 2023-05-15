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
      <div class="well">
         <h2>Work Materials</h2></tr>
      </div>
        <form class="form1" method="post" action="EmployeeProgress.php"   enctype="multipart/form-data">
		<label for="file">Select a file to upload:</label>
		<input type="file" name="file" id="file">
		
        <div class="text">
        <button id="buttonAdd"  name="submit" type="submit" value="upload">Upload</button>
      </div>
	</form>
                       </div>
        <br><br><center>
        <?php
if(isset($_POST["submit"])) {
	// Check if a file was uploaded
	if(isset($_FILES["file"])) {
		$file = $_FILES["file"];

		// Get the file name and type
		$file_name = $file["name"];
		$file_type = $file["type"];

		// Set the destination path for the uploaded file
		$destination_path = "../uploads/";
		$file_path = $destination_path . $file_name;

		// Move the uploaded file to the destination path
		if(move_uploaded_file($file["tmp_name"], $file_path)) {
			// Redirect to the download page with the file name as a parameter
			header("Location: EmployeeProgress.php?file=$file_name");
			exit();
		}
		else {
			// Handle the error case
			echo "Failed to upload file.";
		}
	}
	else {
		// Handle the case where no file was uploaded
		echo "No file uploaded.";
	}
}
?>
<br>
</center>
<div class="text">
      <div class="well">
         <h2>Extra Materials</h2></tr>
      </div>
		<form class="form1">
      <input type="text" id="videoLinksInput" placeholder="Enter video links">
<button onclick="viewVideos()">Upload</button>
        </form>
<script>
  function viewVideos() {
    const videoLinks = document.getElementById('videoLinksInput').value.split('\n').map(link => link.trim());

    // Retrieve the previously stored video links from local storage
    let existingVideoLinks = JSON.parse(localStorage.getItem('videoLinks')) || [];

    // Append the new video links to the existing links
    existingVideoLinks = existingVideoLinks.concat(videoLinks);

    // Store the updated video links in local storage
    localStorage.setItem('videoLinks', JSON.stringify(existingVideoLinks));

   
  }
</script>
		
        
	
                       </div>
        <br><br>
</body>
</html>