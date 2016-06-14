<?php
// if (!(session_status() == PHP_SESSION_ACTIVE)) {
//   header("location: index.php"); // Redirect to homepage
// }
require('includes/databaseconnect.php');
require('includes/user.php');
require('includes/assignments.php');

if($_SESSION['id'] == ''){
    header("location:index.php");
}

if($user['is_admin'] == 0) {
  header("location:viewgrades.php");
}

// Set dynamic page title
$title = 'Grades';

$formError = '';
$formSuccess = '';
$gradeError = '';
$gradeSuccess = '';

$userID = $user['id'];

$studentsQuery = mysqli_query($db, "SELECT *
                                   FROM `users`
                                  WHERE `tf`='$userID'");
$studentsRows = mysqli_num_rows($studentsQuery);
if($studentsRows > 0){
  $students = [];
  while ($student = $studentsQuery->fetch_assoc()) {
      $students[] = $student;
  }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['uid'])) {
  $uID = $_GET['uid'];
  $studentQuery = mysqli_query($db, "SELECT *
                                FROM `users`
                               WHERE `id` = '$uID'");
  $studentRows = mysqli_num_rows($studentQuery);
  if ($studentRows != 1) {
    $gradeError = "Invalid student ID.";
  } else {
    $studentInfo = mysqli_fetch_assoc($studentQuery);
    if ($studentInfo['is_admin'] == 1){
      $gradeError = "User is an administrator.";
    } else {
      $studentName = $studentInfo['fname'] . ' ' . $studentInfo['lname'];
    }
  }
}
elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && $_POST['submit'] == 'addStudent'){
  if ($_POST['email'] == ''){
    $formError = "Please enter a student's e-mail address.";
  }
  else {
    $studentEmail_cleaned = trim(strtolower($_POST['email']));
    $studentQuery = mysqli_query($db, "SELECT *
                                  FROM `users`
                                 WHERE `email` = '$studentEmail_cleaned'");
    $studentRows = mysqli_num_rows($studentQuery);
    if ($studentRows != 1) {
      $formError = "Invalid e-mail address.";
    } else {
      $studentInfo = mysqli_fetch_assoc($studentQuery);
      if ($studentInfo['is_admin'] == 1){
        $formError = "User is an administrator.";
      } else {
        mysqli_query($db, "UPDATE `users`
                              SET `tf`='$userID'
                            WHERE `email`='$studentEmail_cleaned'");
        $formError = '';
        $formSuccess = "Student was successfully added.";
        header("location: grades.php");
      }
    }
  }
}
elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && $_POST['submit'] == 'addStudents'){
    
    $errorReport = 'These emails could not be processed ';
    $errorCount = 0;
    
    if (strlen($_POST['emails']) < 0) {
        $formError = "Please add emails";
    }
    else {
        $studentEmails = str_getcsv($_POST['emails']);
        
        foreach ($studentEmails as $email) {
            $result = add_tf_to_student($db, $email, $userID);
            if($result){
                $errorReport += "$email "
                $errorCount += 1;
            }
        }
    }
    
    if($erroCount > 0){
        $formError = $errorReport;
    } else {
        $formSuccess = "All emails were added!";
    }
}
elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && $_POST['submit'] == 'addGrade'){
  $studentID = $_POST['studentID'];
  $psetName = $_POST['pset'];
  $psetType = $assignments[$psetName]['type'];
  $psetNumber = $assignments[$psetName]['number'];
  $psetGrade = $_POST['grade'];

  if($psetGrade < 0 || $psetGrade > $assignments[$psetName]['max']){
    $min = $assignments[$psetName]['min'];
    $max = $assignments[$psetName]['max'];
    $gradeError = "Grade range for this pset is between {$min} and {$max}";
  }

  $gradeQuery = mysqli_query($db, "SELECT *
                                     FROM grades
                                    WHERE id='$studentID'
                                      AND name='$psetName'");
  $gradeRows = mysqli_num_rows($gradeQuery);
  if ($gradeRows == 0) {
    mysqli_query($db, "INSERT INTO `grades` (`id`, `type`, `number`, `name`, `grade`)
                            VALUES ('$studentID', '$psetType', '$psetNumber', '$psetName', '$psetGrade')");
  }
  elseif ($gradeRows == 1) {
    mysqli_query($db, "UPDATE grades
                          SET grade='$psetGrade'
                        WHERE id='$studentID'
                          AND name='$psetName'");
  }

}


// Render templates
require('templates/head.php');
require('templates/navbar.php');
require('templates/grades-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');
?>
