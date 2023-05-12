
<?php
 include('conn.php');
// Retrieve your data
$sql = "SELECT UserName, S_Assinments, T_Assinments FROM progress GROUP BY S_Assinments";
$result = mysqli_query($conn, $sql);

// Format the data for use in Chart.js
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = array("x" => $row["UserName"] . " " . $row["S_Assinments"], "y" => $row["T_Assinments"]);
}

// Close the database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>chart example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Create a canvas element for the chart -->
<canvas id="myChart"></canvas>

<!-- Create a script to create the chart -->
<script>
var data = <?php echo json_encode($data); ?>;
var ctx = document.getElementById('myChart').getContext('2d');
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

</body>
</html>
