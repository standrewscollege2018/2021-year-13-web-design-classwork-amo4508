<?php

$studentID = $_GET['studentID'];

$delete_sql = "DELETE FROM student WHERE studentID = $studentID";
$delete_qry = mysqli_query($dbconnect, $delete_sql);
$delete_aa = mysqli_fetch_assoc($delete_qry);

echo "Student successfuly deleted";

 ?>
