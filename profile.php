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
$title = 'Profile';

if(!empty($_GET['uid'])){
  $otherUserId = $_GET['uid'];
  if($otherUserId != $user['id']){ // Checks if queried id == current user id
    $otherUserInfoQuery = mysqli_query($db, "SELECT *
                                           FROM `users`
                                          WHERE `id`=$otherUserId");
    $otherUserProfileQuery = mysqli_query($db, "SELECT *
                                           FROM `profile`
                                          WHERE `id`=$otherUserId");

    $otherUserInfoRows = mysqli_num_rows($otherUserInfoQuery);
    $otherUserProfileRows = mysqli_num_rows($otherUserProfileQuery);

    if ($otherUserInfoRows == 1 && $otherUserProfileRows == 1){
      $otherUserInfo = mysqli_fetch_assoc($otherUserInfoQuery);
      $otherUserProfile = mysqli_fetch_assoc($otherUserProfileQuery);

      $profileData = array(
        'id' => $otherUserInfo['id'],
        'email' => $otherUserInfo['email'],
        'fname' => $otherUserInfo['fname'],
        'lname' => $otherUserInfo['lname'],
        'is_admin' => $otherUserInfo['is_admin'],

        'phone' => $otherUserProfile['phone'],
        'slack' => $otherUserProfile['slack'],
        'bio' => $otherUserProfile['bio'],
        'facebook' => $otherUserProfile['facebook'],
        'twitter' => $otherUserProfile['twitter'],
        'google' => $otherUserProfile['google'],
        'linkedin' => $otherUserProfile['linkedin']
      );
    }
  }
  else {
    $profileData = array(
      'id' => $user['id'],
      'email' => $user['email'],
      'fname' => $user['fname'],
      'lname' => $user['lname'],
      'is_admin' => $user['is_admin'],

      'phone' => $user['phone'],
      'slack' => $user['slack'],
      'bio' => $user['bio'],
      'facebook' => $user['facebook'],
      'twitter' => $user['twitter'],
      'google' => $user['google'],
      'linkedin' => $user['linkedin']
    );
  }
}
else {
  $profileData = array(
    'id' => $user['id'],
    'email' => $user['email'],
    'fname' => $user['fname'],
    'lname' => $user['lname'],
    'is_admin' => $user['is_admin'],

    'phone' => $user['phone'],
    'slack' => $user['slack'],
    'bio' => $user['bio'],
    'facebook' => $user['facebook'],
    'twitter' => $user['twitter'],
    'google' => $user['google'],
    'linkedin' => $user['linkedin']
  );
}


// Render templates
require('templates/head.php');
require('templates/navbar.php');
require('templates/profile-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');
?>
