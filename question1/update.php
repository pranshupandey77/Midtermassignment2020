	<?php
$unenrollment = $_POST['uenrollment'];
$ubranch = $_POST['ubranch'];
$ucourse = $_POST['ucourse'];
$uname = $_POST['uname'];
$uage = $_POST['uage'];
$ucontact = $_POST['ucontact'];
$uemail = $_POST['uemail'];
$enroll=$_GET['enroll'];


if (!empty($uname) || !empty($uage) ||  !empty($ucontact)  || !empty($uemail)|| !empty($unenrollment)|| !empty($ubranch)|| !empty($ucourse)) {
include 'config.php';

  $sql="UPDATE details SET  branch='$ubranch',course='$ucourse', enrollment='$unenrollment', name = '$uname',age='$uage',contact='$ucontact',email='$uemail' WHERE enrollment=$enrollment;";
  if($conn->query($sql)){
    header("location:details.php");
  }
  else
  {
    echo "data updation fail";
  }
  }
 else {
 echo "All field are required";
}


 ?>