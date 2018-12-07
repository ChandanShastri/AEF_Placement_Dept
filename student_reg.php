<html>
    <head>
        <title>Registeration for New Student</title>
       <link rel="stylesheet" href="css/bs.css">
        <script src="js/bs.js"></script>
    </head>

<?php
session_start();

    include "config.php";

if(isset($_POST['sname']))
{
$usn=strtoupper($_POST['usn']);

$event="INSERT INTO students VALUES ('".$_POST['sname']."','".$_POST['gender']."','".$_POST['dob']."','".$usn."','".$_POST['pass']."','".$_POST['branch']."','".$_POST['sslc']."','".$_POST['puc']."','".$_POST['cgpa']."','".$_POST['yop']."')";
//echo $event;
$result = mysqli_query($sccon,$event);
if($result==1)
{
    echo "<br><b><center><div class='container'><div class='card bg-dark text-white'><br>Successfully Registered...!<br><br>Sign in with your USN and Password. <br><br><a href='index.php'><button class='btn btn-success'>Login</button></a><br></div></div></center></b>";
}
else
echo "<br><b><center><div class='container'><div class='card bg-dark text-white'><br>USN Aleardy Exists...!!!<br><br></div></div></center></b>";


}


?>
<body><br><br><center>
  <div class="container"><div class="container">
  <div class="card bg-light"><br>
    <h3> Student Registeration </h3>
    <div class="card-body">
    <form class="form" action="" method="POST" enctype="multipart/form-data">
<h5><b>Personal Details</b></h5><hr>
        <div class="row"><div class='col'>
    &nbsp;<b>Student Name : </b><input class="form-control" name="sname" type="text" required placeholder="Enter your Full name properly as per Govt. Records."><br></div></div><br>
    <div class="row"><div class='col'><b>Gender : </b><select name="gender" class="form-control" required>
          <option value="Male" selected="selected">Male</option>
          <option value="Female">Female</option>
      </select></div>
      <div class='col'>
<b>Date of Birth : </b><input class="form-control" name="dob" type="date" required>
</div>
      <div class='col'><b>Branch : </b><select class="form-control" required name="branch">
            <option value="ISE" selected="selected">ISE</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="MEC">MECH</option>
            <option value="CIV">CIVIL</option>
        </select></div>

        <div class='col'>
<b>USN: </b><input class="form-control" name="usn" type="text" maxlength='10' required>
</div>
<div class='col'>
<b>Year of Passing: </b><input class="form-control" name="yop" type="number" min='2008' max='2100' required>
</div>

    </div>
<br><br><hr><h5><b>Academics</b></h5><br>
<div class="row">

  <div class='col'>
  <b>10th Score ( % ) : </b><input class="form-control" name="sslc" type="number" min='0' max='100' step=".01" required>
  </div>

  <div class='col'>
  <b>12th Score ( % ) : </b><input class="form-control" name="puc" type="number" min='0' max='100' step=".01" required>
  </div>

  <div class='col'>
  <b>B.E CGPA : </b><input class="form-control" name="cgpa" type="number" min='1' max='10' step=".01" required>
  </div>

</div>

<hr>
<div class="row"><div class="col"><br>
<h5><b><font color='red'>Password</font></b></h5><br>
<b>Enter New Password : </b><input class="form-control" name="pass" type="password" placeholder="Make sure that you do not forget it." required>
<br>Your Username will be your USN.</div></div>



    <br>
<hr>
    <button type="submit" class="btn btn-success">Register</button>

  </form>

    <a href="index.php"><button class='btn btn-warning'>Back</button></a><br></div>
</div></div></div>
<br><br>
</center>

</body>


    </html>
