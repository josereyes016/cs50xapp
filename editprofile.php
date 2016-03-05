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
$currentSlack = $user['slack'];
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
elseif (!empty($_POST["submit"]) && $_POST["submit"] == "submit"){
  //Clean user input
  $fname_cleaned = ucfirst(strtolower(trim($_POST['fname'])));
  $lname_cleaned = ucfirst(strtolower(trim($_POST['lname'])));
  $email_cleaned = trim($_POST['email']);
  $newPhone = trim($_POST['phone']);
  $newSlack = strtolower(trim($_POST['slack']));
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
  if($newSlack != $currentSlack){
    mysqli_query($db, "UPDATE `profile` SET `slack`='$newSlack' WHERE `id`='$userID'");
    $user['slack'] = $newSlack;
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
  $currentpw = $_POST['currentpw'];
  $newpw = $_POST['newpw'];
  $confpw = $_POST['confpw'];

  if($currentpw != '' && $newpw != '' && $confpw != ''){
    $passwordQuery = mysqli_query($db, "SELECT *
                                  FROM `users`
                                 WHERE `id` = '$userID'");
    $pwrows = mysqli_num_rows($passwordQuery);
    if ($pwrows == 1) {
      $passwordInfo = mysqli_fetch_assoc($passwordQuery);
      if (password_verify($currentpw, $passwordInfo["password"])){
        if ($newpw == $confpw){
          $cryptNewpw = password_hash($newpw, PASSWORD_DEFAULT);

          mysqli_query($db, "UPDATE `users`
                                SET `password`=$cryptNewpw
                              WHERE `id`=$userID");
        }
      }
    }
  }
  // Redirect to Profile.php
  $_POST["submit"] == "";
  header("location: profile.php");
}

?>
