<?php
require('includes/databaseconnect.php');
require('includes/user.php');
require('includes/assignments.php');

if($_SESSION['id'] == ''){
    header("location:index.php");
}

$title = "View Grades";

$userID = $user['id'];

$gradesQuery = mysqli_query($db,"SELECT *
                                   FROM grades
                                  WHERE id=$userID");
$grades = [];
while ($grade = $gradesQuery->fetch_assoc()) {
    $grades[] = $grade;
}

// Render templates
require('templates/head.php');
require('templates/navbar.php');
require('templates/viewgrades-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');
?>
