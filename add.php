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

if(isset($_POST['dname']))
{

$event="INSERT INTO Events VALUES ('".$_POST['Ename']."','".$_POST['EDate']."','".$_POST['Etime']."','".$_POST['EDetails']."','".$_POST['Branch']."','".$_POST['Etype']."','".$pdf."')";
//echo $event;
$result = mysqli_query($sccon,$event);
if($result==1)
{
    echo "<br><b>&nbsp;Successfully Added the New Drive...!</b>";
}
else
echo "<br>&nbsp;<b>Something Went Wrong.</b>";

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
    &nbsp;<b>Drive Name : </b><input class="form-control" id='en' name="Ename" type="text" required><br></div><br>
  <div class="row"><br> <b> &nbsp;Drive Details :</b><textarea class="form-control" name="EDetails"></textarea></div><br><br>
    <div class="row"><div class='col'><b>Drive Date : </b><input class="form-control" name="EDate" type="date" required></div>
  <div class='col'><b>Drive Time : </b><input class="form-control input-inline" name="Etime" type="time" required></div></div><br><br>
  <div class="row"><div class='col'><b>Job Type : </b><select class="form-control" required name="Etype">
        <option value="Technical">Technical</option>
        <option value="Support Engineer">Support Engineer</option>
        <option value="Support Engineer">Support Engineer</option>
    </select></div><div class='col'>
    <b>Drive Branch : </b><select class="form-control" required name="Branch">
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
<b>Drive Cut-off : </b><input type="number" class="form-control" name='cgpa' min="3" max="10" placeholder="Enter CGPA">
</div>
  </div><br><br>

   <br>
<hr>
    <button type="submit" class="btn btn-success">Add Event </button>

  </form>

    <a href="admin_panel.php"><button class='btn btn-warning'>Back</button></a><br></div>
</div></div></div>
<br><br>
</center>

</body>


    </html>
