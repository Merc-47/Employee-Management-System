<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Report</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet"href="Dashboard.css">

</head>
<body>
<?php include('dbConnection.php');?>
<div class="well">
              <div class="text">
              <h1>Generate Report</h1>
            </div>
            </div>
            <a class="btn btn-primary" role="button" href="http://localhost/EMS/View/AdminDashboard.php">Dashboard</a>
            <br><br>
            
           
            <?php 
             $sql="SELECT COUNT(*) as count FROM employee ";
             $result=mysqli_query($conn,$sql);
             $num_rows = mysqli_num_rows($result);
             if(!$result){
              die("retreiving failed".mysqli_error($conn));
          }
          else{
              while($row=mysqli_fetch_assoc($result)){
    ?>

    <form >
      <label>Total Employee count </label>
        <input id="TEmp" name="T_Emp" type="text" value="<?php echo $row['count'];?>">
    
            <!--<table class="center">
    <tr><th>Total No of Employess</th>
        <td><?php //echo $row['count'];?></td>
      </tr>
            </table> -->  
            <?php
         }
             }
                ?>

            <?php 
             $sql="SELECT SUM(T_Assinments) as sum FROM progress ";
             $result=mysqli_query($conn,$sql);
             $num_rows = mysqli_num_rows($result);
             if(!$result){
              die("retreiving failed".mysqli_error($conn));
          }
          else{
              while($row=mysqli_fetch_assoc($result)){
    ?>

    
      <label>Total Assinments</label>
        <input id="TAsn" name="T_Asn" type="text" value="<?php echo $row['sum'];?>">
   
            <!--<table>
    <tr><th>Total No of Assinments completed</th>
        <td><?php // echo $row['sum'];?></td>
      </tr>
            </table>-->
            <?php
         }
             }
                ?>


            <?php 
             $sql="SELECT SUM(S_Assinments) as sum FROM progress ";
             $result=mysqli_query($conn,$sql);
             $num_rows = mysqli_num_rows($result);
             if(!$result){
              die("retreiving failed".mysqli_error($conn));
          }
          else{
              while($row=mysqli_fetch_assoc($result)){
    ?>


      <label>Successful Assinments</label>
        <input id="TSAsn" name="TS_Asn" type="text" value="<?php echo $row['sum'];?>">

           <!-- <table>
    <tr><th>Total Successfull Assinments completed</th>
        <td><?php // echo $row['sum'];?></td>
      </tr>
            </table>-->
            <?php
         }
             }
                ?>

  <?php 
             $sql="SELECT COUNT(*) as count FROM attendance ";
             $result=mysqli_query($conn,$sql);
             $num_rows = mysqli_num_rows($result);
             if(!$result){
              die("retreiving failed".mysqli_error($conn));
          }
  
          else{
              while($row=mysqli_fetch_assoc($result)){
    ?>


      <label>Total Attendance </label>
        <input id="TAttend" name="T_Attend" type="text" value="<?php echo $row['count'];?>">
 
               <!--<table>
    <tr><th>Total number of Attendance</th>
        <td><?php //echo $row['count'];?></td>
      </tr>
            </table>-->
<?php
 }
  }
 ?>

<?php 
             $sql="SELECT COUNT(*) as count FROM  feedback";
             $result=mysqli_query($conn,$sql);
             $num_rows = mysqli_num_rows($result);
             if(!$result){
              die("retreiving failed".mysqli_error($conn));
          }
  
          else{
              while($row=mysqli_fetch_assoc($result)){
    ?>


      <label>Total Feedbacks</label>
        <input id="TFeed" name="T_Feed" type="text" value="<?php echo $row['count'];?>">
   
 <!--<table>
    <tr><th>Total Feedbacks submitted</th>
        <td><?php // echo $row['count'];?></td>
      </tr>
            </table>-->
            <?php
 }
  }
 ?>

            <?php 
             $sql="SELECT COUNT(*) as count FROM work_leave ";
             $result=mysqli_query($conn,$sql);
             $num_rows = mysqli_num_rows($result);
             if(!$result){
              die("retreiving failed".mysqli_error($conn));
          }
  
          else{
              while($row=mysqli_fetch_assoc($result)){
    ?>


      <label>Total Leave requests </label>
        <input id="TLeave" name="T_Leave" type="text" value="<?php echo $row['count'];?>">
    </form>
        <!-- <table>
    <tr><th>Total Leave Requests</th>
        <td><?php // echo $row['count'];?></td>
      </tr>
            </table> -->   
            <?php
 }
  }
 ?>    
            
</body>
</html>