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

// Render templates
require('templates/head.php');
require('templates/navbar.php');
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
  // Render form with default values from db
  require('templates/editprofile-form.php'); // Content container template
}
elseif ($_SERVER["REQUEST_METHOD" == "POST"]) {
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
    mysqli_query($db, "UPDATE `users` SET `fname`=$fname_cleaned WHERE `id`=$userID");
    echo "First name updated.\n";
  }
  if($lname_cleaned != $_SESSION['lname'] && $fname_cleaned != ''){
    mysqli_query($db, "UPDATE `users` SET `lname`=$lname_cleaned WHERE `id`=$userID");
    echo "Last name updated.\n";
  }
  if($email_cleaned != $_SESSION['email'] && $email_cleaned != ''){
    mysqli_query($db, "UPDATE `users` SET `email`=$email_cleaned WHERE `id`=$userID");
    echo "E-mail updated.\n";
  }
  if($newPhone != $currentPhone && $newPhone != ''){
    mysqli_query($db, "UPDATE `profile` SET `phone`=$newPhone WHERE `id`=$userID");
    echo "Phone number updated.\n";
  }
  if($newBio != $currentBio && $newBio != ''){
    mysqli_query($db, "UPDATE `profile` SET `bio`=$newBio WHERE `id`=$userID");
    echo "Bio updated.\n";
  }
  if($newFacebook != $currentFacebook && $newFacebook != ''){
    mysqli_query($db, "UPDATE `profile` SET `facebook`=$newFacebook WHERE `id`=$userID");
    echo "Facebook URL updated.\n";
  }
  if($newTwitter != $currentTwitter && $newTwitter != ''){
    mysqli_query($db, "UPDATE `profile` SET `twitter`=$newTwitter WHERE `id`=$userID");
    echo "Twitter URL updated.\n";
  }
  if($newGoogle != $currentGoogle && $newGoogle != ''){
    mysqli_query($db, "UPDATE `profile` SET `google`=$newGoogle WHERE `id`=$userID");
    echo "Google+ URL updated.\n";
  }
  if($newLinkedin != $currentLinkedin && $newLinkedin != ''){
    mysqli_query($db, "UPDATE `profile` SET `linkedin`=$newLinkedin WHERE `id`=$userID");
    echo "LinkedIn URL updated.\n";
  }

  // Password change verification

  // Redirect to Profile.php
  header("location: editprofile.php");
}
require('templates/navigation.php');
require('templates/footer.php');

?>
