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

else if(isset($_POST['subject'])){


}
else{
  session_destroy();
  header("Location:admin.php");
}


?>
