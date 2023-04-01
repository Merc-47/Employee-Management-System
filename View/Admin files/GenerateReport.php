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
  
<div class="well">
<div class="left">
            <button > <a href="http://localhost/EMS/View/AdminDashboard.php">Dashboard</a></button>
            </div>
        </div>

<div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs">
        
      <div class="col-sm-9">
          <div class="row">
            <div class="col-sm-4">
              <div class="width">
                <div class="d-flex align-items-center mb-4">
                <div class="d-flex flex-row align-items-center mb-2">
                    
                    <div class="bg">
                    <h2>Generate Reports</h2>
                  </div>
                </div>
<nav>
        <ul class="nav nav-pills nav-stacked"><br>
        
          <li data-rel="1"><a href="#section1">Total Employee Progress Report</a></li><br><br>
          <li data-rel="2"><a href="#section2">Employee Salary Report</a></li><br><br>
          <li data-rel="3"><a href="#section3"> Employee Attendance Report</a></li><br><br>
          <li data-rel="4"><a href="#section4">Employee Leave Report</a></li><br><br>
          <li data-rel="5"><a href="#section5">Employee Project Report</a></li><br><br>
          <li data-rel="6"><a href="#section6">Employee Feedback Report</a></li><br><br>
        </ul>
      </nav>
      </div>
    </div>
    </div>

          </div>
        </div>
        </div>
        </div>
  </div>

  <section >
  
          <div class="pushdown">
          <h1>Dashboard1</h1>
          </div>
  </div>
  </div>  
  </section>
  <section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
          <h1>Dashboard2</h1>
        </div>
        </div>
      </div>
  </section>
  <section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
          <h1>Dashboard3</h1>
        </div>
        </div>
      </div>
  </section>
  <section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
          <h1>Dashboard4</h1>
        </div>
        </div>
      </div>
  </section>
  <section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
          <h1>Dashboard5</h1>
        </div>
        </div>
      </div>
  </section>
  <section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
          <h1>Dashboard6</h1>
        </div>
        </div>
      </div>
  </section>
</div>


  


<script>
        (function($) {
    $('nav li').click(function() {
      $(this).addClass('active').siblings('li').removeClass('active');
      $('section:nth-of-type('+$(this).data('rel')+')').stop().fadeIn(400, 'linear').siblings('section').stop().fadeOut(400, 'linear'); 
    });
  })(jQuery);
      </script>   
</body>
</html>