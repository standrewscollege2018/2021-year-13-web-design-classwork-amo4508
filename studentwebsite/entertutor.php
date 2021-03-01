<?php
include 'dbconnect.php';

  $name = $_POST['name'];
  $code = $_POST['code'];

  $tutor_sql = "SELECT * FROM tutorgroup WHERE tutor=$name and tutorcode=$code";
  $tutor_qry = mysqli_query($dbconnect, $tutor_sql);
  $tutor_aa = mysqli_fetch_assoc($tutor_qry);



  if (mysqli_num_rows($tutor_qry)==0) {

    header("index.php?page=addtutor&error=duplicate");
  } else {
    $enter_sql = "INSERT INTO tutorgroup (tutor,tutorcode,photo) VALUES ('$name','$code','') ";
    mysqli_query($dbconnect, $enter_sql);

  }




 ?>
