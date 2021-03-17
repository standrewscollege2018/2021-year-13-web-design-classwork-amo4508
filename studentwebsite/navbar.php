<?php

$tutor_sql = "SELECT * FROM tutorgroup";
$tutor_qry = mysqli_query($dbconnect, $tutor_sql);
$tutor_aa = mysqli_fetch_assoc($tutor_qry);

$subject_sql = "SELECT * FROM subject";
$subject_qry = mysqli_query($dbconnect, $subject_sql);
$subject_aa = mysqli_fetch_assoc($subject_qry);



 ?>
 <a href="index.php"><h1>St Andrew's College</h1></a>
 <h2>Tutor groups</h2>
 <?php
   do {
     $tutorgroupID = $tutor_aa['tutorgroupID'];
     $tutorcode = $tutor_aa['tutorcode'];

     echo "<a href='index.php?page=tutorgroup&tutorgroupID=$tutorgroupID&tutorcode=$tutorcode'>$tutorcode</a>";
     echo "<br>";

   } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
echo "<br>";
    do {
      $subjectID = $subject_aa['subjectID'];
      $name = $subject_aa['name'];

      echo "<a href='index.php?page=subject&subjectID=$subjectID'>$name</a>";
      echo "<br>";

    } while ($subject_aa = mysqli_fetch_assoc($subject_qry));

    echo "<br>";

 ?>
 <h2>Search for student</h2>
 <form class="" action="index.php?page=searchresults" method="post">
   <input required type="text" name="search" placeholder="Student name">
   <button type="submit" name="button">Search</button>
 </form>

<?php
session_start();
if(!isset($_SESSION['admin'])) {
  echo "<a href='index.php?page=login'>Login</a>";

} else {
  echo "<a href='index.php?page=admin'>Admin</a>";


}




 ?>
