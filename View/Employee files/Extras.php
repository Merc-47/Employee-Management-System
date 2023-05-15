<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra Materials</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="EMDashboard.css">
    <style>
  body {
    font-family: Arial, sans-serif;
    margin: 20px;
  }

  #videoContainer {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }

  video {
    width: 300px;
  }
</style>
</head>
<body>
<div class="text">
      <div class="well">
         <h2>Extra Materials</h2></tr>
      </div>
      <div id="videoContainer"></div>

<script>
  // Retrieve the video links from local storage
  const videoLinks = JSON.parse(localStorage.getItem('videoLinks'));

  // Display the videos on the second page
  const videoContainer = document.getElementById('videoContainer');
  videoLinks.forEach(function(videoLink) {
    const videoElement = document.createElement('video');
    videoElement.src = videoLink;
    videoElement.controls = true;
    videoContainer.appendChild(videoElement);
  });
</script>
      </div> 
</body>
</html>
