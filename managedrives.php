<html>
    <head>
        <title>Placement Drive Manager</title>
       <link rel="stylesheet" href="css/bs.css">
        <script src="js/bs.js"></script>
    </head>

<?php
session_start();
if(isset($_SESSION['admin'])){
    include "config.php";
}
else{
  header("Location:admin.php");
}

?>
<body><br><br><center>



<div class="container">
<br><br><hr><h3>Manage Events</h3><br>

<?php

$event="SELECT * FROM Events";
$result = mysqli_query($sccon,$event);


echo "<table class='table table-striped'> <tr><th>Event Name</th> <th>Date</th> <th>Time</th> <th>Branch</th> <th>Brochure</th><th>Delete Event</th></tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['Event_Name']."</td>";
    $t=$row['Event_Name'];
    echo "<td>".$row['Event_Date']."</td>";
    echo "<td>".$row['Event_Time']."</td>";
    echo "<td>".$row['Branch']."</td>";
    echo "<td><a href='pdf.php?q=".$t."'><button class='btn btn-success'>DOWNLOAD BROCHURE</button></td>";
    echo "<td><a href='pdf.php?d=".$t."'><button class='btn btn-danger'>DELETE</button></td>";
    echo "</tr>";
}
echo "</table><br>";
mysqli_close($sccon);

?>
</center>
</div></body>
</html>
