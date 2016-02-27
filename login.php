<?php
require ("includes/databaseconnect.php");

$email = "";
$password = "";
$formError = "";

// If submit button WAS clicked
if (!empty($_POST["submit"]) && $_POST["submit"] == "submit") {
  //TODO Clean Vars
  $email_cleaned = $_POST['email'];
  $password_cleaned = $_POST['password'];
  $isWorking = True;

  // Check form filled
  if (empty($_POST['email']) && empty($_POST['password'])) {
    $formError = "Please fill out form.";
    $isWorking = False;
  }

  // check for valid email
  // if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_cleaned) && $isWorking) {
  //   $formError = "Please enter valid email address.";
  //   $isWorking = False;
  // }

  // Check if account found & store user info
  if ($isWorking) {
    $query = mysqli_query($db, "SELECT *
                                  FROM `users`
                                 WHERE `email` = '$email_cleaned'
                                   AND `password` = '$password_cleaned'");
    $rows = mysqli_num_rows($query);
    if ($rows == 1) {
      $userInfo = mysqli_fetch_assoc($query);
      session_start();
      $_SESSION['email'] = $userInfo["email"];
      header("location: index.php"); // Redirect to homepage
    }
    else { // If account not found
      $formError = "Email & password combination not found";
    }
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Log In</title>
  </head>
  <body>
    <h1>Log In</h1>
    <?= $formError ?>
    <form action="login.php" method="post">
      <label>Email</label>
      <input type="email" name="email"><br>
      <label>Password</label>
      <input type="password" name="password">
      <input type="submit" name="submit" value="submit"/>
    </form>
  </body>
</html>
