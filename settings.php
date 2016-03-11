<?php

require('includes/databaseconnect.php');
require('includes/user.php');

if($_SESSION['id'] == ''){
    header("location:index.php");
}

// Set dynamic page title
$title = 'Settings';


$userID = $_SESSION['id'];

if ($_SERVER['REQUEST_METHOD'] == "POST"){
  if (isset($_POST['phone'])){
    $p_phone = 1;
  } else {
    $p_phone = 0;
  }
  if ($p_phone != $privacy['phone-admin']){
    mysqli_query($db, "UPDATE `privacy` SET `phone`='$p_phone' WHERE `id`='$userID'");
    $privacy['phone-admin'] = $p_phone;
  }

  if (isset($_POST['email'])){
    $p_email = 1;
  } else {
    $p_email = 0;
  }
  if ($p_email != $privacy['email-admin']){
    mysqli_query($db, "UPDATE `privacy` SET `email`='$p_email' WHERE `id`='$userID'");
    $privacy['email-admin'] = $p_email;
  }

  if (isset($_POST['facebook'])){
    $p_facebook = 1;
  } else {
    $p_facebook = 0;
  }
  if ($p_email != $privacy['facebook-admin']){
    mysqli_query($db, "UPDATE `privacy` SET `facebook`='$p_facebook' WHERE `id`='$userID'");
    $privacy['facebook-admin'] = $p_facebook;
  }

  if (isset($_POST['twitter'])){
    $p_twitter = 1;
  } else {
    $p_twitter = 0;
  }
  if ($p_twitter != $privacy['twitter-admin']){
    mysqli_query($db, "UPDATE `privacy` SET `twitter`='$p_twitter' WHERE `id`='$userID'");
    $privacy['twitter-admin'] = $p_twitter;
  }

  if (isset($_POST['google'])){
    $p_google = 1;
  } else {
    $p_google = 0;
  }
  if ($p_google != $privacy['google-admin']){
    mysqli_query($db, "UPDATE `privacy` SET `google`='$p_google' WHERE `id`='$userID'");
    $privacy['google-admin'] = $p_google;
  }

  if (isset($_POST['linkedin'])){
    $p_linkedin = 1;
  } else {
    $p_linkedin = 0;
  }
  if ($p_linkedin != $privacy['linkedin-admin']){
    mysqli_query($db, "UPDATE `privacy` SET `linkedin`='$p_linkedin' WHERE `id`='$userID'");
    $privacy['linkedin-admin'] = $p_linkedin;
  }
  
}

// Render templates
require('templates/head.php');
require('templates/navbar.php');
require('templates/settings-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');

?>
