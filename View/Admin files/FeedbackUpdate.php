<?php include('dbConnection.php');?>
<?php 
 if(isset($_GET['FeedBack_ID'])){
  $FeedBackID=$_GET['FeedBack_ID'];
 
 
$sql="SELECT Emp_ID,Feedback,DateTime FROM feedback where FeedBack_ID='$FeedBackID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}
else{
$row=mysqli_fetch_assoc($result);

}
 }
?>

      <?php
if(isset($_POST['Update_EMP'])){
  if(isset($_GET['FeedBack_ID'])){
  $UPFeedbackID=$_GET['FeedBack_ID'];
  }
$Feedback=$_POST['Feedback'];
$DateTime=$_POST['DateTime'];
  
$sql="UPDATE feedback SET Feedback='$Feedback',DateTime='$DateTime' WHERE FeedBack_ID='$UPFeedbackID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}else{
  header('location:FeedbackManagement.php?update_msg=Successfully updated!');
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update FeedBack </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Update FeedBack</h1>
      </div>
      </div>
      
        <div class="regform">
      <form class="form1" action="FeedbackUpdate.php?FeedBack_ID=<?php echo $FeedBackID;?>" method="post">
  
        <label>Employee ID</label>
        <input id="EmpID" name="Emp_ID" type="text" value="<?php echo $row['Emp_ID'];?>">
  
        <label>FeedBack</label>
        <textarea id="FeedBack" name="Feedback" rows="5" cols="50" value="<?php echo $row['Feedback'];?>"></textarea>
  
        <label>Date/time</label>
        <input id="Date/Time" name="DateTime" type="date" value="<?php echo $row['DateTime'];?>">
  
        <div class="text">
        <button id="Update_EMP"  name="Update_EMP" type="submit" value="UPDATE">Insert</button>
          </div>
      </form>
      </div>
      
</body>
</html>