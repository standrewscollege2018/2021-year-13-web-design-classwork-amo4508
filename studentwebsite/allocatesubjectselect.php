<?php

// select all students

$student_sql = "SELECT * FROM student";
$student_qry = mysqli_query($dbconnect, $student_sql);
$student_aa = mysqli_fetch_assoc($student_qry);

// select all subjects
$subject_sql = "SELECT * FROM subject";
$subject_qry = mysqli_query($dbconnect, $subject_sql);
$subject_aa = mysqli_fetch_assoc($subject_qry);

 ?>

<!-- form where the user selects the student and subjects -->
 <form class="" action="index.php?page=allocatesubject" method="post">

   <h2>Select student</h2>
    <select class="" name="studentID">
      <?php
      // display students in dropdown
      do {
        $studentID = $student_aa['studentID'];
        $firstname = $student_aa['firstname'];
        $lastname = $student_aa['lastname'];
        echo "<option value='$studentID'>$firstname $lastname</option>";

      // while loop to display all results
      } while ($student_aa = mysqli_fetch_assoc($student_qry));

       ?>

    </select>

   <h2>Select subject(s)</h2>

    <?php

      do {

        $subjectID = $subject_aa['subjectID'];
        $name = $subject_aa['name'];
        echo "<input type='checkbox' value='$subjectID' name='subjectID[]'>$name";
        echo "<br>";


      } while ($subject_aa = mysqli_fetch_assoc($subject_qry));


     ?>
     <button type="btn btn-outline-success my-2 my-sm-0" name="submit">Allocate subject</button>

 </form>
