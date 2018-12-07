<!DOCTYPE HTML>
<html>
<head>
    <title>Placement Department Admin Panel</title>
    <link rel="stylesheet" href="css/bs.css">
    <script src="js/bs.js"></script>
</head>
<style>
body{
background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
}</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="index.php">Placement Dept. Home Page <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php">Login</a>
  </li>
</ul>
</div>
</nav>

<?php
session_start();
session_destroy();

if(isset($_POST['user']))
{
  include "config.php";
  $user=$_POST['user'];
  $pass=$_POST['pass'];
  $event="SELECT * FROM admin where user='".$user."' AND pass='".$pass."'";
  //echo $event;
  $result = mysqli_query($sccon,$event);
  if(mysqli_num_rows($result)>0)
  {
    session_start();
    $_SESSION['admin']="admin";
    header("Location:admin_panel.php");
  }
  else {
    echo "<br><center><font color='red'><b>Username or Password is Wrong</b></font></center>";
}
}

  ?>



 <body><center>
   <br><h3>Placement Officer Login</h3><br>
   <div class='container'>
     <div class='row justify-content-md-center'>
     <div class="col-4"><br>

  <form class="form-group" action="" method="POST">
    <input class="form-control" type="text" required placeholder="Username" name="user"><br><br>
    <input class="form-control" type="password" required placeholder="Password" name="pass"><br><br>
    <button class="btn btn-success" type="submit">Login</button>
  </form>
</div></div></div>
</center>
</body>
<!-- crshastri@gmail.com -->
</html>
