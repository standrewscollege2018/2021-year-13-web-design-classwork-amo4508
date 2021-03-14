<form action="index.php?page=enterstudent" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="firstname">Firstname</label>
      <input type="text" name="firstname" class="form-control" placeholder="Firstname">
    </div>
    <div class="form-group">
      <label for="lastname">Lastname</label>
      <input type="text" name="lastname" class="form-control" placeholder="Lastname">
    </div>
    <?php
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


     ?>
  <br>
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>


</form>
