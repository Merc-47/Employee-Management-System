<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="session/style.css">
</head>
<body>
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
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="UserName" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="Password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
       
  </form>
<?php
    }
?>
</body>
</html>