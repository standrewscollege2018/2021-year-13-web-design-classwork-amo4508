<?php

  $name = $_POST['name'];
  $code = $_POST['code'];

  $tutor_sql = "SELECT * FROM tutorgroup WHERE tutor='$name' and tutorcode='$code'";
  $tutor_qry = mysqli_query($dbconnect, $tutor_sql);
  $tutor_aa = mysqli_fetch_assoc($tutor_qry);



  if (mysqli_num_rows($tutor_qry)==0) {

    $enter_sql = "INSERT INTO tutorgroup (tutor,tutorcode,photo) VALUES ('$name','$code','') ";
    mysqli_query($dbconnect, $enter_sql);
    echo "Tutor successfully added";


  } else {
    header('Location:index.php?page=addtutor&error=duplicate');

  }




 ?>
