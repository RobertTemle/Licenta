<?php 
include '../php/connect.php';


if(isset($_GET['deleteid']))
{
  $IdRezervare=$_GET['deleteid'];

  $sql="DELETE from rezervari where IdRezervare=$IdRezervare";
  $result = mysqli_query($conn,$sql);
  if($result)
  {
   header('location:../booking-display.php');
  }
  else
  {
    die(mysqli_error($conn));
  }


}
?>
