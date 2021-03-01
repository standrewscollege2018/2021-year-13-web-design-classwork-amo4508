<!-- homepage -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php

// connecting to database
  include("dbconnect.php");
// include code for navbar
  include("navbar.php");
  echo "<br>";

  if (isset($_GET['page'])) {
    $page = $_GET['page'];
    include("$page.php");

  }else {
    include("home.php");
  }

  if (isset($_GET['error'])) {
    echo "<div class='alert alert-primary' role='alert'>";
    echo "The tutor already exists";
    echo "</div>";
  } else {
  }
 ?>
