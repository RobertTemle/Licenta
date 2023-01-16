<?php 
include '../php/connect.php';


if(isset($_GET['deleteid']))
{
  $userId=$_GET['deleteid'];

  $sql="DELETE from users where userId=$userId";
  $result = mysqli_query($conn,$sql);
  if($result)
  {
   header('location:../user-display.php');
  }
  else
  {
    die(mysqli_error($conn));
  }


}
?>
