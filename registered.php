<html>
<head><title>View Registered Students</title>
  <link rel="stylesheet" href="css/bs.css">
  <script src="js/bs.js"></script>

</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="admin.php">Logout</a>
  </li>
</ul>
</div>
</nav>
<body>


<?php
session_start();



echo "<center><br><h3>Student Registerations for the Drive</h3><br>";

if(isset($_SESSION['admin'])){
    include "config.php";

if(isset($_GET['q'])){
$drid=$_GET['q'];
$event="select * from drive_reg where dr_id=".$drid;
$result = mysqli_query($sccon,$event);


echo "<table class='table table-striped table-bordered'> <tr><th>Student Name</th> <th>USN</th> <th>Branch</th>  <th>CGPA</th><th>Marks</th></tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['usn']."</td>";
    echo "<td>".$row['branch']."</td>";
    echo "<td>".$row['cgpa']."</td>";
    $t=$row['usn'];
    $drid=$row['dr_id'];
    echo "<td><a href='ups.php?rem=".$t."&drid=".$drid."'><button class='btn btn-danger'>REMOVE</button></td>";
    echo "</tr>";
}

mysqli_close($sccon);

}
}
else {
  session_destroy();
  header("Location:login.php");
}

?>
</table>
<a href='add.php'><button>Back</button></a></center>
</body>
</html>
