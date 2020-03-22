
<?php

$enrollment = $_GET['enrollment'];


if (!empty($enrollment)){ 
include 'config.php';

  $sql=" delete from details where enrollment=$enrollment";
  if($conn->query($sql)){
    header("location:details.php");
  }
  else
  {
    echo "data deletion fail";
  }
}
 else {
 echo "enroll no not reached";
}


 ?>