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
<nav>
        <ul class="nav nav-pills nav-stacked"><br>
        
          <li data-rel="1" class="active"><a href="#section1">Dashboard</a></li><br><br>
          <li data-rel="2" ><a href="#section2">General</a></li><br><br>
          <li data-rel="3"><a href="#section3">Admin users</a></li><br><br>
          <li data-rel="4"><a href="#section4">Mail</a></li><br><br>
          <li data-rel="5"><a href="#section5">Logout</a></li><br>
        </ul>
      </nav>
<section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
            Total Employee Progress Report
          </div>
        </div>

      </div>
</section>
<section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
            Employee Salary Report
          </div>
        </div>

      </div>
</section>
<section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
            Employee Attendance Report
          </div>
        </div>

      </div>
</section>
<section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
            Employee Leave Report
          </div>
        </div>

      </div>
</section>
<section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
            Employee Project Report
          </div>
        </div>

      </div>
</section>
<section>
      <div class="col-sm-9">
        <div class="well">
          <div class="text">
            Employee Feedback Report
          </div>
        </div>

      </div>
</section>
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