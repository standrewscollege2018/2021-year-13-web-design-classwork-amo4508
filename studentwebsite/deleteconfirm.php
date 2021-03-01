<?php

$firstname = $_GET['firstname'];
$lastname = $GET['lastname'];
$photo = $_GET['photo'];
$studentID = $_GET['studentID'];
echo "<div class='row'>";
echo $fistname;
echo $lastname;
echo "<img src='images/$photo'>";
echo "</div>";

echo "Are you sure you want to delete it?";
echo "<a href='index.php?page=deletestudent&studentID=$studentID'>";
echo "<br>";
echo "Yes";
echo "</a>";
echo "<br>";
echo "<a href='index.php?page=deletestudentselect'>";
echo "No";
echo "</a>";

 ?>
