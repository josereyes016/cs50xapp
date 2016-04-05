<?php
require('includes/databaseconnect.php');
require('includes/functions.php');
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
  $pset0 = [];
  $pset1 = [];
  $pset2 = [];
  $pset3 = [];
  $pset4 = [];
  $pset5 = [];
  $pset6 = [];
  $pset7 = [];
  $pset8 = [];
  $quizzes = [];
  $project =[];
  while ($grade = $gradesQuery->fetch_assoc()) {
      if ($grade['type'] == 'pset' && $grade['number'] == 0){
        $pset0[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 1){
        $pset1[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 2){
        $pset2[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 3){
        $pset3[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 4){
        $pset4[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 5){
        $pset5[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 6){
        $pset6[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 7){
        $pset7[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 8){
        $pset8[] = $grade;
      }
      if ($grade['type'] == 'quiz'){
        $quizzes[] = $grade;
      }
      if ($grade['type'] == 'project'){
        $project[] = $grade;
      }
  }
}
else {
  $gradesQuery = mysqli_query($db,"SELECT *
                                     FROM grades
                                    WHERE id=$userID");
  $pset0 = [];
  $pset1 = [];
  $pset2 = [];
  $pset3 = [];
  $pset4 = [];
  $pset5 = [];
  $pset6 = [];
  $pset7 = [];
  $pset8 = [];
  $quizzes = [];
  $project =[];
  while ($grade = $gradesQuery->fetch_assoc()) {
      if ($grade['type'] == 'pset' && $grade['number'] == 0){
        $pset0[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 1){
        $pset1[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 2){
        $pset2[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 3){
        $pset3[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 4){
        $pset4[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 5){
        $pset5[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 6){
        $pset6[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 7){
        $pset7[] = $grade;
      }
      if ($grade['type'] == 'pset' && $grade['number'] == 8){
        $pset8[] = $grade;
      }
      if ($grade['type'] == 'quiz'){
        $quizzes[] = $grade;
      }
      if ($grade['type'] == 'project'){
        $project[] = $grade;
      }
  }
}

// Render templates
require('templates/head.php');
require('templates/navbar.php');
require('templates/viewgrades-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');
?>
