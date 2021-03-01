<?php
// if there is no tutorgroupID, go back to homepage
if(!isset($_GET['tutorgroupID'])) {
  header("Location: index.php");
} else {
  // get the tutorcode
  $tutorcode = $_GET['tutorcode'];
  $tutorgroupID = $_GET['tutorgroupID'];
  // get all information of students who in this tutor
  $tutor_sql = "SELECT * FROM student WHERE tutorgroupID=$tutorgroupID";
  $tutor_qry = mysqli_query($dbconnect, $tutor_sql);

// checking whthere there are any results
  if(mysqli_num_rows($tutor_qry)==0) {
    echo "<p>No students in $tutorcode</p>";
  } else {
    $tutor_aa = mysqli_fetch_assoc($tutor_qry);
    echo "<h1>$tutorcode</h1>";
// display results that matches to tutorcode
    do {

      $firstname = $tutor_aa['firstname'];
      $lastname = $tutor_aa['lastname'];
      $photo = $tutor_aa['photo'];

      echo "<img src='images/$photo' class=''>";
      echo "<p>$firstname $lastname</p>";
// while loop to display all results
    } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
  }
}

?>
