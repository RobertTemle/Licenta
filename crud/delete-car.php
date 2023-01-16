<?php 
include '../php/connect.php';


if(isset($_GET['deleteid']))
{
  $CarId=$_GET['deleteid'];

  $sql="DELETE from cars where CarId=$CarId";
  $result = mysqli_query($conn,$sql);
  if($result)
  {
   header('location:../car-display.php');
  }
  else
  {
    die(mysqli_error($conn));
  }


}
?>
