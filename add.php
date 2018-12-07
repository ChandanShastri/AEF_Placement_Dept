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

if(isset($_POST['drname']))
{

$event="INSERT INTO drives (drname,drdetails,drdate,drtime,drlocation,drtype,drbranch,drcutoff) VALUES ('".$_POST['drname']."','".$_POST['drdetails']."','".$_POST['drdate']."','".$_POST['drtime']."','".$_POST['dloc']."','".$_POST['drtype']."','".$_POST['drbranch']."','".$_POST['drcgpa']."')";
//echo $event;
$result = mysqli_query($sccon,$event);
if($result==1)
{
    echo "<br><b><center><div class='container'><div class='card bg-dark text-white'><br>Successfully Added the New Drive...!<br><br></div></div></center></b>";
}
else
echo "<br><b><center><div class='container'><div class='card bg-dark text-white'><br>Something Went Wrong<br><br></div></div></center></b>";


}
}
else {
  session_destroy();
  header("Location:admin.php");
}
?>
<body><br><br><center>
  <div class="container"><div class="container">
  <div class="card bg-light"><br>
    <h3> Add a Placement Drive </h3>
    <div class="card-body">
    <form class="form" action="" method="POST" enctype="multipart/form-data">

        <div class="row">
    &nbsp;<b>Drive Name : </b><input class="form-control" id='en' name="drname" type="text" required><br></div><br>
  <div class="row"><br> <b> &nbsp;Drive Details :</b><textarea class="form-control" name="drdetails"></textarea></div><br><br>
    <div class="row"><div class='col'><b>Drive Date : </b><input class="form-control" name="drdate" type="date" required></div>
  <div class='col'><b>Drive Time : </b><input class="form-control input-inline" name="drtime" type="time" required></div>
<div class='col'><b>Drive Location : </b><input class="form-control input-inline" name="dloc" type="text" required></div>
</div><br><br>
  <div class="row"><div class='col'><b>Job Type : </b><select class="form-control" required name="drtype">
        <option value="Technical">Technical</option>
        <option value="Support Engineer">Support Engineer</option>
        <option value="Support Engineer">Support Engineer</option>
    </select></div><div class='col'>
    <b>Drive Branch : </b><select class="form-control" required name="drbranch">
        <option value="ISE">ISE</option>
        <option value="CSE">CSE</option>
        <option value="CSE / ISE">CSE / ISE</option>
        <option value="ECE">ECE</option>
        <option value="CSE / ISE / ECE">CSE / ISE / ECE</option>
        <option value="MECH">MECH</option>
        <option value="CIVIL">CIVIL</option>
        <option value="ALL">OPEN FOR ALL</option>
    </select></div>
<div class='col'>
<b>Drive Cut-off : </b><input type="number" step=".01" class="form-control" name='drcgpa' min="3" max="10" placeholder="Enter CGPA">
</div>
  </div><br>
<hr>
    <button type="submit" class="btn btn-success">Add Event </button>

  </form>

    <a href="admin_panel.php"><button class='btn btn-warning'>Back</button></a><br></div>
</div></div></div>
<br><br>
</center>

</body>


    </html>
