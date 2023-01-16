<?php

include 'php/connect.php';
include 'php/functions.php';
session_start();

  $userID=$_SESSION["userid"];
  $CarId=$_GET['CarId'];

  if (carCheck($conn, $CarId) !== false) {
    header("location: catalog-logged.php?error=cartaken");
  }


  else if(isset($_POST['submit'])){

    $Name=$_POST['Name'];
    $phoneNum=$_POST['phoneNum'];
    $DelAddress=$_POST['DelAddress'];
    $DelDate=$_POST['DelDate'];
    $ReturnAddress=$_POST['ReturnAddress'];
    $ReturnDate=$_POST['ReturnDate'];


    if (empty($Name) || empty($phoneNum) || empty($DelAddress) || empty($DelDate) || empty($ReturnAddress) || empty($ReturnDate)) {
      $NameErr = "Please fill in all fields before submiting!";
      echo $NameErr;
    }

    if (dateCheck($DelDate, $ReturnDate) !== false) {
    header("location: catalog-logged.php?error=entervaliddate");
    } 

    else {
      $sql = "INSERT INTO rezervari (userID, CarId, Name, phoneNum, DelAddress, DelDate, ReturnAddress, ReturnDate, Status)
      values('$userID', '$CarId' , '$Name' ,'$phoneNum' , '$DelAddress', '$DelDate', '$ReturnAddress', '$ReturnDate', '$Status')";

      $result=mysqli_query($conn,$sql);

    if($result){
      header('location:account.php?success');
    }
      else{
        die(mysqli_error($conn));
      }
  }
}