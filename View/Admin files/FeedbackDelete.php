<?php include('dbConnection.php');?>
<?php
 if(isset($_GET['FeedBack_ID'])){
  $FeedBackID=$_GET['FeedBack_ID'];
 
 
$sql="DELETE FROM feedback where FeedBack_ID='$FeedBackID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}
else{
    header('location:FeedbackManagement.php?delete_msg=Feedback has been deleted!');

}
 }
?>