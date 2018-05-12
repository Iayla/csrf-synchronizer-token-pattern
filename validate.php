<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assignment 1 </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 510px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 11px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ABC</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <?php
              if(!isset($_COOKIE['session_cookie'])) {
                echo "<li><a href='index.php'>Home</a></li>";
              }

         ?>
        <?php
              if(isset($_COOKIE['session_cookie'])) {
                echo "<li><a href='profile.php'></t>Profile</t></a></li>";
              }
            ?>

            <?php
              if(!isset($_COOKIE['session_cookie'])) {
                echo "<li><a href='login.php'> Log In </a></li>";
              }
            ?>

          </ul>
          <ul class="nav navbar-nav navbar-right">



          <?php
            if(isset($_COOKIE['session_cookie'])) {
              echo "<li><a href='user-logout.php'> Log Out </a></li>";
            }
          ?>


        <li><a href="#">About</a></li>


      </ul>

    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-left">
      <h1>Cross-Site Forgery Protection</h1>
      <h> Using Synchronizer Token Pattern </h>
      <p>  </p>
      <hr>
      <h3></h3>
      <p>

        <div class="container">
            <div class="row" align="center" style="padding-top: 100px;">
                <div class="col-12">

                    <div class="card">
                      <h5 class="card-header">Profile Details</h5>
                      <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">


        						<?php
        						if(isset($_COOKIE['session_cookie']))
        						{


        							session_start();
        							if ($_POST['csrf_Token'] == $_SESSION['CSRF_Token'])
        							{
        								$fname=$_POST['name'];
        								$university=$_POST['university'];
        								$degree=$_POST['degree'];
        								$year=$_POST['year'];

        								echo "<div class='alert alert-primary' role='alert'>".$fname."</div>";
        								echo "<div class='alert alert-secondary' role='alert'>".$university."</div>";
        								echo "<div class='alert alert-success' role='alert'>".$degree."</div>";
        								echo "<div class='alert alert-info' role='alert'>".$year."</div>";

        							}
        							else
        							{
        								echo "<script>alert('WARNING :: CSRF Found !!!')</script>";
        							}

        						}
        						?>


                                </div>
                                <div class="col-sm-2"></div>
                            </div>



   </p>
    </div>
    <div class="col-sm-2 sidenav">


      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Protect my website</p>
</footer>

</body>
</html>
