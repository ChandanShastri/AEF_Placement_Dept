<html>
    <head>
        <title>Student Panel</title>
        <link rel="stylesheet" href="css/bs.css">
        <script src="js/bs.js"></script>
    </head>
    <?php
    //error_reporting(0);
    session_start();
    if(!isset($_SESSION['usn'])){
      session_destroy();
      header('index.php');
    }


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
        <h1>Upcoming Drives</h1><br>
        <img src='images/1.jpg' width='100%' height="200px"><br><br>
        <a href="add.php"><button class="btn btn-primary">Add a new Drive</button></a>&nbsp;
        <a href="managedrives.php"><button class="btn btn-success">View Registered Students</button></a><br><br>
        </center>







    </body>

    </html>
