<?php

require('includes/databaseconnect.php');
require('includes/user.php');

if($_SESSION['id'] == ''){
    header("location:index.php");
}

// Set dynamic page title
$title = 'Profile Edit';

$userID = $_SESSION['id'];

$currentPhone = $user['phone'];
$currentBio = $user['bio'];
$currentFacebook = $user['facebook'];
$currentTwitter = $user['twitter'];
$currentGoogle = $user['google'];
$currentLinkedin = $user['linkedin'];


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
    $_SESSION['fname'] = $fname_cleaned;
    $user['fname'] = $fname_cleaned;
  }
  if($lname_cleaned != $_SESSION['lname'] && $lname_cleaned != ''){
    mysqli_query($db, "UPDATE `users` SET `lname`='$lname_cleaned' WHERE `id`='$userID'");
    $_SESSION['lname'] = $lname_cleaned;
    $user['lname'] = $lname_cleaned;
  }
  if($email_cleaned != $_SESSION['email'] && $email_cleaned != ''){
    mysqli_query($db, "UPDATE `users` SET `email`='$email_cleaned' WHERE `id`='$userID'");
    $_SESSION['email'] = $email_cleaned;
    $user['email'] = $email_cleaned;
  }
  if($newPhone != $currentPhone){
    mysqli_query($db, "UPDATE `profile` SET `phone`='$newPhone' WHERE `id`='$userID'");
    $user['phone'] = $newPhone;
  }
  if($newBio != $currentBio){
    mysqli_query($db, "UPDATE `profile` SET `bio`='$newBio' WHERE `id`='$userID'");
    $user['bio'] = $newBio;
  }
  if($newFacebook != $currentFacebook){
    mysqli_query($db, "UPDATE `profile` SET `facebook`='$newFacebook' WHERE `id`='$userID'");
    $user['facebook'] = $newFacebook;
  }
  if($newTwitter != $currentTwitter){
    mysqli_query($db, "UPDATE `profile` SET `twitter`='$newTwitter' WHERE `id`='$userID'");
    $user['twitter'] = $newTwitter;
  }
  if($newGoogle != $currentGoogle){
    mysqli_query($db, "UPDATE `profile` SET `google`='$newGoogle' WHERE `id`='$userID'");
    $user['google'] = $newGoogle;
  }
  if($newLinkedin != $currentLinkedin){
    mysqli_query($db, "UPDATE `profile` SET `linkedin`='$newLinkedin' WHERE `id`='$userID'");
    $user['linkedin'] = $newLinkedin;
  }

  // Password change verification

  // Redirect to Profile.php
  $_POST["submit"] == "";
  header("location: profile.php");
}

?>
