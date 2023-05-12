<?php include("conn.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-data-adapter.min.js"></script>
  <style type="text/css">
    html,
    body,
    #container {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>-->
</head>
<body>
  <?php /* 
  

$sql="SELECT  UserName, Wage FROM payroll";
       
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("retreiving failed".mysqli_error($conn));
        }

        else{
            $data = array();

            for ($x = 0; $x < mysqli_num_rows($result); $x++) {
              $data[] = mysqli_fetch_assoc($result);
            }
          // encode data to json format
echo json_encode($data);  
        }
    */              
  ?><!--
<div id="container"></div>
  <script>
    anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("charteg.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data);
        chart.container("container");
        chart.draw(data);
      });
    });
  </script>-->

  <?php
 
 $sql="SELECT UserName,Wage FROM payroll";
       
 $result=mysqli_query($conn,$sql);
 foreach($result as $data){
  $UserName[]=$data['UserName'];
  $Wage[]=$data['Wage'];
 }
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: <?php echo json_encode($UserName)?>
	},
	axisY: {
		title: "Gold Reserves (in tonnes)"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($Wage, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>            
  
</body>
</html>