<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
        
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
<!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"rel="stylesheet"/>
<!-- MDB -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"rel="stylesheet"/>
<!-- MDB -->
<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>  
<style>
 .adjust{
  padding-top: 50px;
  padding-bottom: 20px;
  text-align: center;
 }
</style>
    </head>
    <body>
    
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab-Admin" data-mdb-toggle="pill" href="#pills-Admin" role="tab"
      aria-controls="pills-Admin" aria-selected="true">Admin</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="tab-Employee" data-mdb-toggle="pill" href="#pills-Employee" role="tab"
      aria-controls="pills-Employee" aria-selected="false">Employee</a>
  </li>
</ul>

<div class="adjust">
  
    <img src="images/department.jfif"
       height="170px">
      </div>
       
      <div class="row mb-4">
        <div class="col d-flex justify-content-center">
          
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-Admin" role="tabpanel" aria-labelledby="tab-Admin">
  <?php
    require('conn.php');
    session_start();
    
    if (isset($_POST['UserName'])) {
        $UserName = stripslashes($_REQUEST['UserName']);   
        $UserName  = mysqli_real_escape_string($conn,  $UserName );
        $Password = stripslashes($_REQUEST['Password']);
        $Password = mysqli_real_escape_string($conn, $Password);
        
        $query    = "SELECT * FROM admin where UserName='".$UserName."' AND Password='".$Password."'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['UserName'] =  $UserName ;
           
            header("Location: http://localhost/EMS/View/AdminDashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username or password.</h3><br/>
                  <p class='link'>Click here to <a href='Admin_Login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>

    <form  method="POST" name="login">
      <div class="form-outline mb-4">
        <input type="text" name="UserName" id="loginName" class="form-control" style="background-color:rgba(0, 102, 255, 0.733);"/>
        <label class="form-label" for="loginName">Username</label>
      </div>

      <div class="form-outline mb-4">
        <input type="password" name="Password" id="loginPassword" class="form-control" style="background-color:rgba(0, 102, 255, 0.733);" />
        <label class="form-label" for="loginPassword">Password</label>
      </div>
      
      <button type="submit" class="btn btn-primary btn-block mb-4"value="Login" name="submit" >Log in</button>
      </form>
      <?php
    }
?>

  </div>
  <div class="tab-pane fade" id="pills-Employee" role="tabpanel" aria-labelledby="tab-Employee">
  <?php
    require('conn.php');
    
    
    if (isset($_POST['UserName'])) {
        $UserName = stripslashes($_REQUEST['UserName']);   
        $UserName  = mysqli_real_escape_string($conn,  $UserName );
        $Password = stripslashes($_REQUEST['Password']);
        $Password = mysqli_real_escape_string($conn, $Password);
        
        $query    = "SELECT * FROM registration where UserName='".$UserName."' AND Password='".$Password."'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['UserName'] =  $UserName ;
           
            header("Location: http://localhost/EMS/View/Employee%20Dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username or password.</h3><br/>
                  <p class='link'>Click here to <a href='EMS_Login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form method="POST" name="login">
     <div class="form-outline mb-4" >
      <input type="type" name="UserName" id="loginName" class="form-control" style="background-color:rgba(0, 102, 255, 0.733);" />
      <label class="form-label" for="loginName" > User Name</label>
    </div>

    <div class="form-outline mb-4">
      <input type="password" name="Password" id="loginPassword" class="form-control" style="background-color:rgba(0, 102, 255, 0.733);" />
      <label class="form-label" for="loginPassword">Password</label>
    </div>
      
      <button type="submit" class="btn btn-primary btn-block mb-3"value="Login" name="submit" >Log in</button>
    </form>
  </div>
</div>
<?php
    }
?>
      </div>
    </div>
    </body>
    </html>