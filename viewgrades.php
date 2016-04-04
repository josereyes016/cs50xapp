<?php
require('includes/databaseconnect.php');
require('includes/user.php');
require('includes/assignments.php');

if($_SESSION['id'] == ''){
    header("location:index.php");
}

$title = "View Grades";

$userID = $user['id'];

if(isset($_GET['uid']) && $user['is_admin'] == 1) {
  $studentID = $_GET['uid'];
  $studentInfoQuery = mysqli_query($db,"SELECT *
                                          FROM users
                                         WHERE id=$studentID");
  $studentRows = mysqli_num_rows($studentInfoQuery);
  if($studentRows == 1){
    $studentInfo = mysqli_fetch_assoc($studentInfoQuery);
    $studentName = $studentInfo['fname'] . ' ' . $studentInfo['lname'];
  }

  $gradesQuery = mysqli_query($db,"SELECT *
                                     FROM grades
                                    WHERE id=$studentID");
  $grades = [];
  while ($grade = $gradesQuery->fetch_assoc()) {
      $grades[] = $grade;
  }
}
else {
  $gradesQuery = mysqli_query($db,"SELECT *
                                     FROM grades
                                    WHERE id=$userID");
  $grades = [];
  while ($grade = $gradesQuery->fetch_assoc()) {
      $grades[] = $grade;
  }
}

// Render templates
require('templates/head.php');
require('templates/navbar.php');
require('templates/viewgrades-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');
?>
