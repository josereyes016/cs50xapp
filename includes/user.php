<?php
require ("includes/databaseconnect.php");

if (isset($_SESSION['id'])){
  $userID = $_SESSION['id'];
  $userQuery = mysqli_query($db, "SELECT *
                                    FROM `users`
                                   WHERE `id`='$userID'");
  $userRows = mysqli_num_rows($userQuery);

  $profileQuery = mysqli_query($db, "SELECT *
                                       FROM `profile`
                                      WHERE `id`='$userID'");
  $profileRows = mysqli_num_rows($userQuery);

  if ($userRows == 1 && $profileRows == 1) {
    $userInfo = mysqli_fetch_assoc($userQuery);
    $profileInfo = mysqli_fetch_assoc($profileQuery);

    $user = array(
      'id' => $userInfo['id'],
      'email' => $userInfo['email'],
      'fname' => $userInfo['fname'],
      'lname' => $userInfo['lname'],
      'is_admin' => $userInfo['is_admin'],

      'phone' => $profileInfo['phone'],
      'bio' => $profileInfo['bio'],
      'facebook' => $profileInfo['facebook'],
      'twitter' => $profileInfo['twitter'],
      'google' => $profileInfo['google'],
      'linkedin' => $profileInfo['linkedin']
    );
  }

}

?>
