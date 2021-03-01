<?php

$student_sql = "SELECT * FROM student";
$student_qry = mysqli_query($dbconnect, $student_sql);
$student_aa = mysqli_fetch_assoc($student_qry);
echo "<div class='row col-lg-4'>";

do {
  echo "<div class='student'>";
  $studentID = $student_aa['studentID'];
  $firstname = $student_aa['firstname'];
  $lastname = $student_aa['lastname'];
  $photo = $student_aa['photo'];
  echo "<img src='images/$photo' class='photo img-fluid'>";
  echo "<a href='index.php?page=editdetailstudent&studentID=$studentID'>";
  echo "$firstname";
  echo "$lastname";
  echo "</a>";
  echo "</div>";

// while loop to display all results
} while ($student_aa = mysqli_fetch_assoc($student_qry));
echo "</div>";
 ?>
