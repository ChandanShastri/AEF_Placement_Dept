<?php
include 'config.php';
session_start();


if(isset($_GET['d'])){

if(isset($_SESSION['admin'])){
$drive=$_GET['d'];

$sql="DELETE FROM drives where dr_id=".$drive;
$r = mysqli_query($sccon,$sql);

header("Location:managedrives.php");
}

}

if(isset($_GET['rem'])){

if(isset($_SESSION['admin'])){
$drive=$_GET['drid'];
$usn=$_GET['rem'];

//echo $drive.$usn;

$sql="DELETE FROM drive_reg where dr_id=".$drive." AND usn='".$usn."'";
//echo $sql;
$r = mysqli_query($sccon,$sql);
$dir="'Location:registered.php?q=".$drive."'";
header('Location:registered.php?q='.$drive.'');
}

}

else if(isset($_GET['r'])){
  if(isset($_SESSION['usn'])){
    $drid=$_GET['r'];
    $sql="INSERT INTO drive_reg values('".$drid."','".$_SESSION['usn']."','".$_SESSION['name']."','".$_SESSION['branch']."','".$_SESSION['cgpa']."')";
    $r = mysqli_query($sccon,$sql);

    if($r){
      $_SESSION['y']='y';
      header("Location:student_portal.php");

    }else {
      $_SESSION['y']='n';
      header("Location:student_portal.php");
    }
  }
}
else{
  session_destroy();
  header("Location:admin.php");
}


?>
