<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



<?php

include('dbconnect.php');

$tutor_sql = "SELECT * FROM tutorgroup";
$tutor_qry = mysqli_query($dbconnect, $tutor_sql);
$tutor_aa = mysqli_fetch_assoc($tutor_qry);

$subject_sql = "SELECT * FROM subject";
$subject_qry = mysqli_query($dbconnect, $subject_sql);
$subject_aa = mysqli_fetch_assoc($subject_qry);



 ?>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="index.php">St Andrew's College</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">

         <?php
         session_start();
         if(!isset($_SESSION['admin'])) {
           echo "<a class='nav-link' href='index.php?page=login'>Login</a>";

         } else {
           echo "<a class='nav-link' href='index.php?page=admin'>Admin</a>";


         }
?>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Tutor groups
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <?php
             do {
               $tutorgroupID = $tutor_aa['tutorgroupID'];
               $tutorcode = $tutor_aa['tutorcode'];

               echo "<a class='dropdown-item' href='index.php?page=tutorgroup&tutorgroupID=$tutorgroupID&tutorcode=$tutorcode'>$tutorcode</a>";

             } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
             ?>

         </div>
       </li>

       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Subjects
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <?php
              do {
                $subjectID = $subject_aa['subjectID'];
                $name = $subject_aa['name'];

                echo "<a class='dropdown-item' href='index.php?page=subject&subjectID=$subjectID'>$name</a>";

              } while ($subject_aa = mysqli_fetch_assoc($subject_qry));


        ?>
         </div>
       </li>

     </ul>
     <form class="form-inline my-2 my-lg-0" action="index.php?page=searchresults" method="post">
       <input class="form-control mr-sm-2" type="search" placeholder="Student name" aria-label="Search">
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
     </form>
   </div>
 </nav>



 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
