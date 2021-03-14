
<?php
// check to see if user is logged in
if(!isset($_SESSION['admin'])) {

// not logged in, redirect back to index page
header("Location: index.php");

}


 ?>



<p><a href="index.php?page=addtutor">Add tutor</a></p>

<p><a href="index.php?page=addstudent">Add student</a></p>

<p><a href="index.php?page=deletestudentselect">Delete student</a></p>

<p><a href="index.php?page=editstudentselect">Edit student</a></p>

<p><a href="logout.php">Logout</a></p>
