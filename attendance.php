<?php
// if (!(session_status() == PHP_SESSION_ACTIVE)) {
//   header("location: index.php"); // Redirect to homepage
// }
require('includes/databaseconnect.php');
require('includes/user.php');
include('includes/phpqrcode/qrlib.php');


if($_SESSION['id'] == ''){
    header("location:index.php");
}

// Set dynamic page title
$title = 'Attendance';


// Get time
date_default_timezone_set("America/New_York"); // Miami time!
$t=time();
$currentDate = date("m/d/y", $t);
$currentTime = date("h:i:s");

// Text to be stored on QR code, in format for CSV file
$textForDisplay = $_SESSION['fname'] . "," . $_SESSION['lname'] . "," . $_SESSION['email'] . "," . $currentDate . "," . $currentTime;

// QR info
$size = 4;
$padding = 2;

// Set up directories + filepaths.
$qrDir = "qrcodes/" . date("m-d-y", $t) . "/";
$filePath = $qrDir . $_SESSION['fname'] . " " . $_SESSION['lname'] . ".png";
if (!file_exists($qrDir)) {
  mkdir($qrDir, 0777, true);
}

// Generate & display QR code. Saves QR to folder for backup.
QRcode::png($textForDisplay, $filePath, QR_ECLEVEL_H, $size, $padding);

// Render templates
require('templates/head.php');
require('templates/navbar.php');
require('templates/attendance-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');
?>
