<?php

  $studentID = $_POST['studentID'];
  $subject_list = $_POST['subjectID'];


  // loop through list of subjects
  foreach ($subject_list as $subjectID) {
    $sql = "INSERT INTO studentsubject (studentID, subjectID) VALUES ($studentID, $subjectID)";
    $qry = mysqli_query($dbconnect, $sql);
  }

 ?>
