<?php
$subjectID = $_GET['subjectID'];
$student_sql = "SELECT student. * FROM studentsubject JOIN student ON studentsubject.studentID=student.studentID WHERE studentsubject.subjectID =$subjectID";
$student_qry = mysqli_query($dbconnect, $student_sql);
$student_aa = mysqli_fetch_assoc($student_qry);

do {
  $firstname = $student_aa['firstname'];
  $lastname = $student_aa['lastname'];
  echo "<p> $firstname $lastname </p>";

} while ($student_aa = mysqli_fetch_assoc($student_qry));


 ?>
