<?php

  if(!isset($_POST['search'])) {
    header("Location: search.php");
  }
  // get text to search using post
  $search = $_POST['search'];

// search for the text that user has entered
  $result_sql = "SELECT * FROM student WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'";

  $result_qry = mysqli_query($dbconnect, $result_sql);

// checking whether there are any results
  if(mysqli_num_rows($result_qry)==0) {
      echo "<h1>No results found</h1>";
    } else {
      $result_aa = mysqli_fetch_assoc($result_qry);
// displaying search results
      do {
        $firstname = $result_aa['firstname'];
        $lastname = $result_aa['lastname'];
        $photo = $result_aa['photo'];
        ?>


          <img src="images/<?php echo $photo; ?>" class="" alt="">
          <p><?php echo "$firstname $lastname"; ?></p>
      <?php
      // while loop to display all results that matches
        } while ($result_aa = mysqli_fetch_assoc($result_qry));


  }

 ?>
