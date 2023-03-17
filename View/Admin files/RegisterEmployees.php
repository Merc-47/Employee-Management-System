<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Employee Registration</title>
    
    
    <link rel="stylesheet" href="Dashboard.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Employee Registration</h1>
      </div>
      </div>
      <div class="flex">
        <div class="regform">
      <form class="form1" action="RegInsertEMP.php" method="post" >
  
        <label>Employee ID</label>
        <input id="EmpID" name="Employee_ID" type="text">
  
        <label>First Name</label>
        <input id="FName" name="FName" type="text">
  
        <label>Last Name</label>
        <input id="LName" name="LName" type="text">
  
        <label>Email</label>
        <input id="Email" name="Email" type="email">
  
        <label>Department ID</label>
        <input id="DepID" name="Dep_ID" type="text">
  
        <label>Job Title</label>
        <input id="Title" name="Title" type="text">
  
        <label >User Name</label>
        <input id="UserName" name="UserName"  type="text">
  
        <label>Password</label>
        <input id="Password" name="Password" type="text">
        <div class="text">
        <button>Submit</button>
      </div>
      </form>
    </div>

    <div class="text">
        <br><a href="EmployeeDetails.php"><button>Employee details</button></a>
      </div>
    </div>
      
      

</body>
</html>