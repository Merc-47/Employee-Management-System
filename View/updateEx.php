<style>
  .file-link {
    display: block;
    margin-bottom: 10px;
    color: #0077cc;
    font-size: 16px;
    text-decoration: none;
    text-transform: capitalize;
  }

  .file-link:hover {
    text-decoration: underline;
  }
</style>
<?php

// Define the directory to list
$dir = 'uploads/';

// Make sure the directory exists and is a subdirectory of the uploads folder
if (is_dir($dir) && strpos(realpath($dir), realpath('uploads')) === 0) {

  // Open the directory
  $dh = opendir($dir);

  // Loop through all the files in the directory
  while (($file = readdir($dh)) !== false) {

    // Ignore the current and parent directory markers
    if ($file != '.' && $file != '..') {

      // Display the filename as a link to download the file
      echo '<a href="' . $dir . $file . '">' . $file . '</a><br>';

    }

  }

  // Close the directory
  closedir($dh);

} else {

  // Display an error message if the directory doesn't exist or is not a subdirectory of uploads
  echo 'Directory not found or not allowed.';

}

?>

