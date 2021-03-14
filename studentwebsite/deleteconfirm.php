<?php

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$photo = $_GET['photo'];
$studentID = $_GET['studentID'];
echo "<div class='row'>";
echo $firstname;
echo $lastname;
echo "<br>";

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
