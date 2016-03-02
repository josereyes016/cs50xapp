<?php

require('includes/databaseconnect.php');

if($_SESSION['id'] == ''){
    header("location:index.php");
}

// Set dynamic page title
$title = 'Profile Edit';

$userID = $_SESSION['id'];
// Query profile table for profile info
$profileQuery = mysqli_query($db, "SELECT *
                             FROM `profile`
                            WHERE `id` = '$userID'");
$profileRows = mysqli_num_rows($profileQuery);
if ($profileRows == 1){
  $profileInfo = mysqli_fetch_assoc($profileQuery);
  $currentPhone = trim($profileInfo['phone']);
  $currentBio = $profileInfo['bio'];
  $currentFacebook = $profileInfo['facebook'];
  $currentTwitter = $profileInfo['twitter'];
  $currentGoogle = $profileInfo['google'];
  $currentLinkedin = $profileInfo['linkedin'];
}


if ($_SERVER["REQUEST_METHOD"] == "GET")
{
  // Render templates
  require('templates/head.php');
  require('templates/navbar.php');
  // Render form with default values from db
  require('templates/editprofile-form.php'); // Content container template
  require('templates/navigation.php');
  require('templates/footer.php');
}
elseif (!empty($_POST["submit"]) && $_POST["submit"] == "submit") {
  //Clean user input
  $fname_cleaned = ucfirst(strtolower(trim($_POST['fname'])));
  $lname_cleaned = ucfirst(strtolower(trim($_POST['lname'])));
  $email_cleaned = trim($_POST['email']);
  $newPhone = $_POST['phone'];
  $newBio = $_POST['bio'];
  $newFacebook = $_POST['facebook'];
  $newTwitter = $_POST['twitter'];
  $newGoogle = $_POST['google'];
  $newLinkedin = $_POST['linkedin'];
  // Check for profile changes and update database
  if($fname_cleaned != $_SESSION['fname'] && $fname_cleaned != ''){
    mysqli_query($db, "UPDATE `users` SET `fname`='$fname_cleaned' WHERE `id`='$userID'");
  }
  if($lname_cleaned != $_SESSION['lname'] && $lname_cleaned != ''){
    mysqli_query($db, "UPDATE `users` SET `lname`='$lname_cleaned' WHERE `id`='$userID'");
  }
  if($email_cleaned != $_SESSION['email'] && $email_cleaned != ''){
    mysqli_query($db, "UPDATE `users` SET `email`='$email_cleaned' WHERE `id`='$userID'");
  }
  if($newPhone != $currentPhone){
    mysqli_query($db, "UPDATE `profile` SET `phone`='$newPhone' WHERE `id`='$userID'");
  }
  if($newBio != $currentBio){
    mysqli_query($db, "UPDATE `profile` SET `bio`='$newBio' WHERE `id`='$userID'");
  }
  if($newFacebook != $currentFacebook){
    mysqli_query($db, "UPDATE `profile` SET `facebook`='$newFacebook' WHERE `id`='$userID'");
  }
  if($newTwitter != $currentTwitter){
    mysqli_query($db, "UPDATE `profile` SET `twitter`='$newTwitter' WHERE `id`='$userID'");
  }
  if($newGoogle != $currentGoogle){
    mysqli_query($db, "UPDATE `profile` SET `google`='$newGoogle' WHERE `id`='$userID'");
  }
  if($newLinkedin != $currentLinkedin){
    mysqli_query($db, "UPDATE `profile` SET `linkedin`='$newLinkedin' WHERE `id`='$userID'");
  }

  // Password change verification

  // Redirect to Profile.php
  header("location: profile.php");
}

?>
