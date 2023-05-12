<?php include('conn.php');?>

<?php
$sql="SELECT UserName,Wage FROM payroll";
$result=mysqli_query($conn,$sql);
if($result-> num_rows > 0){
$uname= array();
$wage= array();
while($row=mysqli_fetch_assoc($result)){
$uname[]= $row["UserName"];
$wage[]= $row["Wage"];
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>



<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
//
<script>
  const uname=<?php echo json_encode($uname);?>;
  const wage=<?php echo json_encode($wage);?>;
  const row=<?php echo json_encode($row);?>;

const data={
labels: [],
      datasets: [{
        label: 'Employees',
        data: [<?php echo json_encode($wage);?>],
        borderWidth: 1
      },
      
]
	};
	const config={
		type: 'bar',
    data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
	};
	const myChart=new Chart(
		document.getElementById('myChart'),
		config
	);
	</script>


</body>
</html>