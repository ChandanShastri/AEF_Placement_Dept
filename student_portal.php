<html>
    <head>
        <title>Student Panel</title>
        <link rel="stylesheet" href="css/bs.css">
        <script src="js/bs.js"></script>
    </head>
    <?php
    error_reporting(0);
    session_start();
    if(!isset($_SESSION['usn'])){
      session_destroy();
      header('index.php');
    }

    if($_SESSION['y']=='y'){
      echo "<script>alert('Successfully Registred for the Drive');</script>";
    }
    else if($_SESSION['y']=='n'){
      echo "<script>alert('You have already Registred for the Drive');</script>";
    }
$_SESSION['y']='z';
      ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Student Portal<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Logout</a>
      </li>
    </ul>
  </div>
    </nav>

    <body><br><br><center>
      <img src='images/1.jpg' width='100%' height="200px"><br><br>
        <h1>Upcoming Drives</h1><br>
        <br>
</center>
        <?php

        include "config.php";

        $event="SELECT * FROM drives where drcutoff <=".$_SESSION['cgpa'];
        //echo $event;
        $result = mysqli_query($sccon,$event);


        echo "<div class='container'>";

        while($row = mysqli_fetch_array($result)) {
            echo "<div class='card'><center><h3><b></b></h3></center>";
            echo "<div class='card-header bg-dark text-white'><h4><b>Drive Details : </b>".$row['drname']."</h4></div>";
            echo "<div class='card-body'><p>".$row['drdetails']."</p>";
            $t=$row['dr_id'];
            echo "<br><b>Date : </b>".$row['drdate']."<b> Time : </b>".$row['drtime'];

            echo "<br><b>Branch : </b>".$row['drbranch'];
            echo "<br><b>Cut-off CGPA : </b>".$row['drcutoff'];
            echo "<br><br><center><a href='ups.php?r=".$t."'><button class='btn btn-warning'>Register</button></a></center><br>";
            echo "<br><div class='card-footer bg-dark text-white'><b>Job Type : </b>".$row['drtype']."</div>";
            echo "</div></div><br><br>";
        }
        echo "</div>";
        mysqli_close($sccon);

        ?>





          </center>







    </body>

    </html>
