<?php

session_start();

include("dbconnect.php");

$username = $_POST['username'];
$password = $_POST['password'];

$user_sql = "SELECT * from password WHERE username='$username'";
$user_qry = mysqli_query($dbconnect, $user_sql);

// check if there are any records with that username
if(mysqli_num_rows($user_qry)==0) {
  header("Location:index.php?page=login&error=fail");
} else {
  $user_aa = mysqli_fetch_assoc($user_qry);

  $hash_password = $user_aa['password'];

  // check if password match
  if(password_verify($password, $hash_password)) {

    // start a SESSION
    $_SESSION['admin'] = $username;
    // redirect to admin panel
    header("Location: index.php");
  } else{
    header("Location:index.php?page=login&error=fail");


  }

}





 ?>
