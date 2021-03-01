<?php

$studentID = $_GET['studentID'];

$student_sql = "SELECT * FROM student WHERE studentID = $studentID";
$student_qry = mysqli_query($dbconnect, $student_sql);
$student_aa = mysqli_fetch_assoc($student_qry);

$firstname = $student_aa['firstname'];
$lastname = $student_aa['lastname'];
$photo = $student_aa['photo'];
$tutorID = $student_aa['tutorgroupID'];

echo "<form action='index.php?page=editstudent' method='post' enctype='multipart/form-data'>";

echo "<div class='form-group'>";
echo "<label for='name'>First name</label>";
echo "<input type='text' name='firstname' class='form-control' value='$firstname'>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label for='name'>Last name</label>";
echo "<input type='text' name='lastname' class='form-control' value='$lastname'>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label for='code'>Tutor code</label>";
$tutor_sql = "SELECT * FROM tutorgroup";
$tutor_qry = mysqli_query($dbconnect, $tutor_sql);
$tutor_aa = mysqli_fetch_assoc($tutor_qry);
echo "<select name='code'>";

do {
  $tutorgroupID = $tutor_aa['tutorgroupID'];
  $tutorcode = $tutor_aa['tutorcode'];
  echo "<option value='$tutorcode'>";
  echo $tutorcode;
  echo "</option>";

} while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));

echo "</select>";
echo "Select image to upload:";
echo "<input type='file' name='fileToUpload' id='fileToUpload'>";
echo "<button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Submit</button>";
echo "</form>";


 ?>
