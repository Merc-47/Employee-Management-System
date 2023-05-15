<<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
</head>
<body>
	<h1>Upload File</h1>
	<form method="post" action="example.php" enctype="multipart/form-data">
		<label for="file">Select a file to upload:</label>
		<input type="file" name="file" id="file">
		<input type="submit" name="submit" value="Upload">
	</form>
	<form action="example.php" method="post">
    <label for="video-url">Video URL:</label>
    <input type="text" name="video-url" id="video-url">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $videoUrl = $_POST['video-url'];
    file_put_contents('video-urls.txt', $videoUrl . PHP_EOL, FILE_APPEND);
}
?>
</body>
</html>
<?php
if(isset($_POST["submit"])) {
	// Check if a file was uploaded
	if(isset($_FILES["file"])) {
		$file = $_FILES["file"];

		// Get the file name and type
		$file_name = $file["name"];
		$file_type = $file["type"];

		// Set the destination path for the uploaded file
		$destination_path = "uploads/";
		$file_path = $destination_path . $file_name;

		// Move the uploaded file to the destination path
		if(move_uploaded_file($file["tmp_name"], $file_path)) {
			// Redirect to the download page with the file name as a parameter
			header("Location: example.php?file=$file_name");
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