<?php
require ("includes/databaseconnect.php");

if (isset($_SESSION['id'])){
  $userID = $_SESSION['id'];
  // User info
  $userQuery = mysqli_query($db, "SELECT *
                                    FROM `users`
                                   WHERE `id`='$userID'");
  $userRows = mysqli_num_rows($userQuery);

  // Profile info
  $profileQuery = mysqli_query($db, "SELECT *
                                       FROM `profile`
                                      WHERE `id`='$userID'");
  $profileRows = mysqli_num_rows($userQuery);

  // Privacy info
  $privacyQuery = mysqli_query($db, "SELECT *
                                       FROM `privacy`
                                      WHERE `id`='$userID'");
  $privacyRows = mysqli_num_rows($privacyQuery);

  if ($userRows == 1 && $profileRows == 1 && $privacyRows == 1) {
    $userInfo = mysqli_fetch_assoc($userQuery);
    $profileInfo = mysqli_fetch_assoc($profileQuery);
    $privacyInfo = mysqli_fetch_assoc($privacyQuery);

    $user = array(
      'id' => $userInfo['id'],
      'email' => $userInfo['email'],
      'fname' => $userInfo['fname'],
      'lname' => $userInfo['lname'],
      'is_admin' => $userInfo['is_admin'],

      'phone' => $profileInfo['phone'],
      'slack' => $profileInfo['slack'],
      'bio' => $profileInfo['bio'],
      'facebook' => $profileInfo['facebook'],
      'twitter' => $profileInfo['twitter'],
      'google' => $profileInfo['google'],
      'linkedin' => $profileInfo['linkedin']
    );

    $privacy = array(
      'phone-admin' => $privacyInfo['phone'],
      'email-admin' => $privacyInfo['email'],
      'facebook-admin' => $privacyInfo['facebook'],
      'twitter-admin' => $privacyInfo['twitter'],
      'google-admin' => $privacyInfo['google'],
      'linkedin-admin' => $privacyInfo['linkedin'],
    );
  }

}

?>
