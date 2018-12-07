<html>
    <head>
        <title>Placement Drive Manager</title>
       <link rel="stylesheet" href="css/bs.css">
        <script src="js/bs.js"></script>
    </head>

<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location:admin.php");
}

?>
<body><br><br><center>



<div class="container">
<br><br><hr><h3>Placement Drives</h3><br>

<?php
  include "config.php";
$event="SELECT * FROM drives";
$result = mysqli_query($sccon,$event);


echo "<table class='table table-striped'> <tr><th>Drive Name</th> <th>Date</th> <th>Time</th> <th>Location</th> <th>Registerations</th><th>Delete Drive</th></tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['drname']."</td>";
    $t=$row['dr_id'];
    echo "<td>".$row['drdate']."</td>";
    echo "<td>".$row['drtime']."</td>";
    echo "<td>".$row['drlocation']."</td>";
    echo "<td><a href='registered.php?q=".$t."'><button class='btn btn-success'>VIEW REGISTERED STUDENTS</button></td>";
    echo "<td><a href='ups.php?d=".$t."'><button class='btn btn-danger'>DELETE DRIVE</button></td>";
    echo "</tr>";
}
echo "</table><br>";
mysqli_close($sccon);

?>

<br><br><a href='admin_panel.php'><button class="btn btn-warning">Back</button></a></center>
</div></body>
</html>
