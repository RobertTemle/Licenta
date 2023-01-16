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

  <meta name="description" content="Home Page">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <title>Cararo – User Search</title>

</head>

  <body>

    <?php
      include 'header-logged.php';
    ?>
    </br>
    <div class="container my-5">
      </br></br></br>
      <form method="post" action="user-search-action.php">

        <div class="form-group" >
          <label>Name</label>
          <input type="text" class="form-control"  placeholder="Enter username" name="Name">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control"  placeholder="Enter email" name="Email">
        </div>

        <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
        <button class="btn btn-primary my-5"><a href="user-display.php" class="text-light">Back to Database</a></button>
        
      </form>
    </div>
  </body>
</html>