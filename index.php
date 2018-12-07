<!DOCTYPE html>

<?php
error_reporting(0);
session_destroy();
 ?>
<html lang="en">
<head>
  <link rel="icon" href="favicon.ico" type="image/x-icon"/>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Alva's Placement Cell</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/mx.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="http://alvas.org" target="_blank">AEF</a></li>
        <li><a href="http://aiet.org.in" target="_blank">AIET</a></li>
        <li><a href="admin.php" target="_blank">Admin Login</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="http://alvas.org" target="_blank">AEF</a></li>
        <li><a href="http://aiet.org.in" target="_blank">AIET</a></li>
        <li><a href="http://aiet.org.in" target="_blank">Admin Login</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center" id="Title">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h2 class="orange-text">Alva's Placement Cell</h2>
          <p class="blue-text"> A Unit of Alva's Education Foundation</p>
        </div>
      </div>

    </div>
  </div>





  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br><br><br><br>
        <h1 class="header center teal-text text-lighten-2"><br></h1>
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>

        <div class="row center">
          <a href="student_reg.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Sign Up</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


      <!--   Login Section  -->
      <div class="container">

        <div class="content-form-page">

          <?php
          if(isset($_POST['usn']))
          {
            include "config.php";
            $user=strtoupper($_POST['usn']);
            $pass=$_POST['pass'];
            $event="SELECT * FROM students where usn='".$user."' AND pass='".$pass."'";
            //echo $event;
            $result = mysqli_query($sccon,$event);


            if(mysqli_num_rows($result)>0)
            {
              session_start();
              while($row = mysqli_fetch_array($result)) {
                $_SESSION['cgpa']=$row['aggregate'];
                $_SESSION['name']=$row['fname'];
                $_SESSION['branch']=$row['branch'];
              }
              $_SESSION['usn']=$user;
              header("Location:student_portal.php");
            }
            else {
              session_destroy();
              echo "<script>alert('USN or Password is Wrong..');</script>";
          }
          }


           ?>




          <div class="row">
            <div class="col-md-15 col-sm-7">
             <form class="form-horizontal" role="form" action="" method="post">
                <div class="form-group">
                  <label for="email" class="col-lg-4 control-label"><br><br>USN <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="email" name="usn" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="password" class="form-control" id="password" name="pass" required>
                  </div>
                </div>
                <div class="row">

                </div>
                <div class="row">
                  <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                  <center>  <button type="submit" class="btn btn-primary"><center>Login</center></button> </center>
                  </div>
                </div>

              </form><br/>

            </div>
    </div></div></div>

    </div>
  </div>






  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center" id="contact">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="blue-text">Alva's Institute of Engineering & Technology,<br>
Shobhavana Campus, Mijar,<br>
Moodbidri - 574 225, Mangalore,<br>
DK Karnataka State - INDIA<br>
Call us : +91 8971250414 / +91 8494934852<br>
Email: <a href="mailto:placement.alvas@gmail.com">placement.alvas@gmail.com</a><br></p>



        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br><br>
        <h1 class="header center teal-text text-lighten-2"></h1>
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>

        <div class="row center">
          <a href="ScView/aiet1.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1" target="_blank">Take 360 Tour</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>


              <div class="container" id="scrollerrr">
                <div class="row">
                  <div class="col s12 center" id="Title">
                    <h3 class="orange-text"><br><br>Our Recent Placements.</h3>
                    <p class="blue-text">with our Highly Reputed Recruiters.</p>
                  </div>
                </div>

                <div class="carousel">

                <a class="carousel-item" href="#two!"><img src="images/CompanyLogo/e%26y.png"></a>
                <a class="carousel-item" href="#three!"><img src="images/CompanyLogo/tie.png"></a>
                <a class="carousel-item" href="#four!"><img src="images/CompanyLogo/IBM-logo.png"></a>
                <a class="carousel-item" href="#five!"><img src="images/CompanyLogo/Amazon-logo.png"></a>
                <a class="carousel-item" href="#five!"><img src="images/CompanyLogo/caasp.png"></a>
                <a class="carousel-item" href="#five!"><img src="images/CompanyLogo/Cognizant_LOGO.png"></a>
                <a class="carousel-item" href="#five!"><img src="images/CompanyLogo/ess%26ess.png"></a>
              <a class="carousel-item" href="#five!"><img src="images/CompanyLogo/kpmg.png"></a>
              <a class="carousel-item" href="#five!"><img src="images/CompanyLogo/Ninjacart-Logo.png"></a>
              <a class="carousel-item" href="#five!"><img src="images/CompanyLogo/cigital.png"></a>
                <a class="carousel-item" href="#one!"><img src="images/CompanyLogo/airtel.png"></a>
              <a class="carousel-item" href="#five!"><img src="images/CompanyLogo/infosys.png"></a>
              <a class="carousel-item" href="#five!"><img src="images/CompanyLogo/indian-navy.png"></a>
              <a class="carousel-item" href="#five!"><img src="images/CompanyLogo/tcs.png"></a>
                </div>
</div>

                <footer class="page-footer teal">
                  <div class="container" id="about">
                    <div class="row center">

                        <h5 class="white-text">About Us</h5>
                        <p class="grey-text text-lighten-4">The backbone of any Institution is Academics and Placements. The placement track record of any Institution is an indication of the success of the Institution. Alva's Education Foundation had recognized this and from the beginning had made deliberate and positive step in making the Placement department very active and vibrant. The foundation organizes mass Placement Drives like Pragati which is an yearly event where organizations from different sectors like Manufacturing, IT, ITES, BFSI, Sales and Retails, take part attend the event. </p>


                      </div>

                        <h5 class="white-text"></h5>
                        <ul>

                        </ul>
                      </div>
                      <div class="col l3 s12">
                        <h5 class="white-text"></h5>
                        <ul>

                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="page-footer">
                    <div class="container">
                      <center>© Alva's Institute of Engineering & Technology. All Rights Reserved. <br>
                      <br></div>

                  </div>
                </footer>

<!--Designed & Developed by Chandan Shastri - crshastri@gmail.com -->

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/mx.min.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
