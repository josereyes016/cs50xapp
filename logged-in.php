<?php
// if (!(session_status() == PHP_SESSION_ACTIVE)) {
//   header("location: index.php"); // Redirect to homepage
// }
require('includes/databaseconnect.php');
require('includes/user.php');

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

// Render templates
require('templates/head.php');
require('templates/navbar.php');
require('templates/dashboard-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');
?>
