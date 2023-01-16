<?php

include 'php/connect.php';

if(isset($_POST['submit'])){

  $userID=$_POST['userID'];
  $CarId=$_POST['CarId'];
  $Name=$_POST['Name'];
  $phoneNum=$_POST['phoneNum'];
  $DelAddress=$_POST['DelAddress'];
  $DelDate=$_POST['DelDate'];
  $ReturnAddress=$_POST['ReturnAddress'];
  $ReturnDate=$_POST['ReturnDate'];
  $Status=$_POST['Status'];



$sql = "INSERT INTO rezervari (userID, CarId, Name, phoneNum, DelAddress, DelDate, ReturnAddress, ReturnDate, Status)
values('$userID', '$CarId' , '$Name' ,'$phoneNum' , '$DelAddress', '$DelDate', '$ReturnAddress', '$ReturnDate', '$Status')";

$result=mysqli_query($conn,$sql);

if($result){
  header('location:booking-display.php');
}
  else{
    die(mysqli_error($conn));
  }
}

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/splide.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/select2.min.css">
  <link rel="stylesheet" href="css/main.css">

  <!-- Bootstrap stuff -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon" href="icon/favicon-32x32.png">

  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <title>Cararo – Car Add</title>

</head>

<body>

  <?php

  include 'header-logged.php'; 

  ?>

  <div class="container my-5">

    <br><br><br>

    <form method="post">

      <div class="form-group">
          <label>User ID</label>
          <input type="text" class="form-control"  placeholder="Enter User ID" name="userID">
        </div>

        <div class="form-group">
          <label>CarId</label>
          <input type="text" class="form-control"  placeholder="Enter Car ID" name="CarId">
        </div>

        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control"  placeholder="Enter Client Name" name="Name">
        </div>

        <div class="form-group">
          <label>Phone Number</label>
          <input type="text" class="form-control"  placeholder="Enter Client Phone" name="phoneNum">
        </div>

        <div class="form-group">
          <label>Delivery Address</label>
          <input type="text" class="form-control"  placeholder="Enter Delivery Address" name="DelAddress">
        </div>

        <div class="form-group">
          <label>Delivery Date</label>
          <input type="date" class="form-control"  placeholder="Enter Delivery Date" name="DelDate">
        </div>

        <div class="form-group">
          <label>Return Adress</label>
          <input type="text" class="form-control"  placeholder="Enter Pick Up Adress" name="ReturnAddress">
        </div>

        <div class="form-group">
          <label>Return Date</label>
          <input type="date" class="form-control"  placeholder="Enter Pick Up Date" name="ReturnDate">
        </div>

        <div class="form-group">
          <label>Status</label>
          <input type="text" class="form-control"  placeholder="Enter Booking Status" name="Status">
        </div>


        <br><br>
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
    </form>
  </div>
</body>