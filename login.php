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
  if (empty($_POST['email']) || empty($_POST['password'])) {
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
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App50 | Log In</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ] -->
     <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="css/nifty.min.css" rel="stylesheet">


    <!--Font Awesome [ OPTIONAL ]-->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="css/demo/nifty-demo.min.css" rel="stylesheet">




    <!--SCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>



	<!--

	REQUIRED
	You must include this in your project.

	RECOMMENDED
	This category must be included but you may modify which plugins or components which should be included in your project.

	OPTIONAL
	Optional plugins. You may choose whether to include it in your project or not.

	DEMONSTRATION
	This is to be removed, used for demonstration purposes only. This category must not be included in your project.

	SAMPLE
	Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


	Detailed information and more samples can be found in the document.

	-->


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="cls-container">

		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay" class="bg-img img-balloon"></div>


		<!-- HEADER -->
		<!--===================================================-->
		<div class="cls-header cls-header-lg">
			<div class="cls-brand">
				<a class="box-inline" href="index.php">
					<!-- <img alt="Nifty Admin" src="img/logo.png" class="brand-icon"> -->
					<span class="brand-title">CS50x<span class="text-thin">Miami</span></span>
				</a>
			</div>
		</div>
		<!--===================================================-->


		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
					<p class="pad-btm">Sign In to your account</p>
					<form action="login.php" method="post">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="email" class="form-control" name="email" placeholder="E-mail">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
								<input type="password" class="form-control" name="password" placeholder="Password">
							</div>
						</div>
						<div class="row">
              <div id="error">
                <p><?= $formError ?></p>
              </div>
							<!-- <div class="col-xs-8 text-left checkbox">
								<label class="form-checkbox form-icon">
								<input type="checkbox"> Remember me
								</label>
							</div> -->
							<div class="col-xs-12">
								<div class="form-group text-center">
								<button class="btn btn-success text-uppercase" type="submit" name="submit" value="submit">Log In</button>
								</div>
							</div>
						</div>
						<div class="mar-btm"><em>- or -</em></div>
						<button class="btn btn-primary btn-lg btn-block" type="button">
							<i class="fa fa-facebook fa-fw"></i> Login with Facebook
						</button>
					</form>
				</div>
			</div>
			<div class="pad-ver">
				<a href="password-reminder.php" class="btn-link mar-rgt">Forgot password ?</a>
				<a href="register.php" class="btn-link mar-lft">Create a new account</a>
			</div>
		</div>
		<!--===================================================-->



	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->



    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="js/jquery-2.1.1.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="js/bootstrap.min.js"></script>


    <!--Fast Click [ OPTIONAL ]-->
    <script src="plugins/fast-click/fastclick.min.js"></script>


    <!--Nifty Admin [ RECOMMENDED ]-->
    <script src="js/nifty.min.js"></script>


    <!--Background Image [ DEMONSTRATION ]-->
    <script src="js/demo/bg-images.js"></script>


	<!--

	REQUIRED
	You must include this in your project.

	RECOMMENDED
	This category must be included but you may modify which plugins or components which should be included in your project.

	OPTIONAL
	Optional plugins. You may choose whether to include it in your project or not.

	DEMONSTRATION
	This is to be removed, used for demonstration purposes only. This category must not be included in your project.

	SAMPLE
	Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


	Detailed information and more samples can be found in the document.

	-->


</body>
</html>
