<?php
// if (!(session_status() == PHP_SESSION_ACTIVE)) {
//   header("location: index.php"); // Redirect to homepage
// }
require('includes/databaseconnect.php');
require('includes/user.php');

$sections = [
  'Marlise' => 'Saturday Afternoon, 12pm-2pm',
  'Dylan'   => 'Saturday Morning, 9am-11am',
  'Daniel'  => 'Monday Afternoon, 12pm-2pm',
  'Jose'    => 'Wednesday Afternoon, 12pm-2pm',
];

if($_SESSION['id'] == ''){
    header("location:index.php");
}

// Set dynamic page title
$title = 'Dashboard';

// Fetch announcements
$announcementsQuery = mysqli_query($db, "SELECT *
                              FROM `announcements`
                              WHERE 1");

$announcementRows = mysqli_num_rows($announcementsQuery);
if($announcementRows > 0){
  $announcements = [];
  while ($announcement = $announcementsQuery->fetch_assoc()) {
      $announcements[] = $announcement;
  }
}

$tf = $_SESSION['tf'];
if ($_SESSION['tf'] != NULL) {
  $tfQuery = mysqli_query($db, "SELECT `fname`, `lname`
                                FROM `users`
                                WHERE `id`=$tf");
  $tfInfo =mysqli_fetch_assoc($tfQuery);

  $section = $sections[$tfInfo['fname']];
}

// Render templates
require('templates/head.php');
require('templates/navbar.php');
require('templates/dashboard-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');
?>
