<?php
  require ("includes/databaseconnect.php");

  // User input
  $fname = "";
  $lname = "";
  $email = "";
  $password = "";
  $password2 = "";

  $adminkey = "adminkey";
  $studentkey = "studentkey";

  $formError = "";

  // if form submitted
  if (!empty($_POST["submit"]) && $_POST["submit"] == "submit") {

    // TODO Clean variables for SQL queries && fix capitalization

    $fname_cleaned = ucfirst(strtolower(trim($_POST['fname']))); // Strips white space, forces capitalization
    $lname_cleaned = ucfirst(strtolower(trim($_POST['lname'])));
    $email_cleaned = trim(strtolower($_POST['email'])); // Strips white space and removes capitalization
    $password_cleaned = $_POST['password'];
    $password2_cleaned = $_POST['password2'];
    $key = $_POST['key'];
    $tf = $_POST['tf'];

    $isWorking = True;

    // TODO if entries are NOT filled
    if (empty($fname_cleaned) || empty($lname_cleaned) || empty($email_cleaned) || empty($password_cleaned) || empty($password2_cleaned) || empty($key) || empty($tf)) {
      $formError = "Please fill out all required fields.";
      $isWorking = False;
    }

    // If not valid registration key
    if ($key != $studentkey && $key != $adminkey){
      $formError = "Invalid registration key.";
      $isWorking = False;
    }

    // if names aren't alphanumeric
    // if(!preg_match("/^[a-zA-Z]$/", $_POST['Fname']) &&
    //    !preg_match("/^[a-zA-Z]$/", $_POST['Lname'])) {
    //  $formError = "Name can only be composed of letters + numbers.";
    //  $isWorking = False;
    // }

    // if email is NOT valid
    // if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['email']) && $isWorking) {
    //   $formError = "Please enter valid email address.";
    //   $isWorking = False;
    // }

    // If passwords mismatch
    if ($_POST['password'] != $_POST['password2'] && $isWorking) {
      $formError = "Passwords must match.";
      $isWorking = False;
    }

    // Returns # of rows w/ given email
    $emailsearch = mysqli_query($db, "SELECT *
                                        FROM `users`
                                       WHERE `email` = '$email_cleaned'");
    $emailResultNum = mysqli_num_rows($emailsearch);
    if ($emailResultNum != 0 && $isWorking) {
      $formError = "Email already in use, please use another.";
      $isWorking = False;
    }

    $cryptpw = password_hash($_POST["password"], PASSWORD_DEFAULT);
    if ($cryptpw == false){
      $formError = "Failed to encrypt password.";
      $isWorking = False;
    }

    if ($key == $adminkey){
      $is_admin = 1;
    } else {
      $is_admin = 0;
    }

    // Saves info to users database
    if ($isWorking) {
      mysqli_query($db, "INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `is_admin`)
                              VALUES ('$fname_cleaned', '$lname_cleaned', '$email_cleaned', '$cryptpw', '$is_admin')");
      $query = mysqli_query($db, "SELECT *
                                    FROM `users`
                                   WHERE `email` = '$email_cleaned'");
      $userInfo = mysqli_fetch_assoc($query);
      $_SESSION['id'] = $userInfo['id'];
      $_SESSION['email'] = $userInfo["email"];
      $_SESSION['fname'] = $userInfo["fname"];
      $_SESSION['lname'] = $userInfo["lname"];
      $_SESSION['is_admin'] = $userInfo['is_admin'];

      // Insert into profile DB
      $userID = $_SESSION['id'];
      mysqli_query($db, "INSERT INTO `profile` (`id`)
                              VALUES ('$userID')");
      // Insert default privacy settings
      mysqli_query($db, "INSERT INTO `privacy` (`id`, `phone`, `email`,`facebook`,`twitter`, `google`, `linkedin`)
                              VALUES ('$userID', 0, 0, 0, 0, 0, 0)");
      header("location: index.php");
    }
  }
  // echo $formError;

  $title = 'Register'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      <?php
        if(isset($title)){
          echo $title . " | App50";
        }
        else {
          echo "App50";
        }
      ?>
    </title>

    <!-- MAKE MOBILE FRIENDLY -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
    <meta name="theme-color" content="#26a69a">
    <link rel="apple-touch-icon" href="img/CS50xMiami_Logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#26a69a">


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




    <!--SCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>

    <!-- Bootstrap Select -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>



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

		<!-- REGISTRATION FORM -->
		<!--===================================================-->
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
					<p class="pad-btm">Create an account</p>
					<form action="register.php" method="post">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-male"></i></div>
										<input type="text" class="form-control" placeholder="First name" name="fname">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-user"></i></div>
										<input type="text" class="form-control" placeholder="Last name" name="lname">
									</div>
								</div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                    <input type="text" class="form-control" placeholder="E-mail" name="email">
                  </div>
                </div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
										<input type="password" class="form-control" placeholder="Password" name="password">
									</div>
								</div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                    <input type="password" class="form-control" placeholder="Confirm password" name="password2">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-male"></i></div>
                    <input type="text" class="form-control" placeholder="Teaching Fellow" name="tf">
                  </div>
                </div>

                <select class="selectpicker" style="display: none;">
									<option>HTML</option>
									<option>CSS</option>
									<option>jQuery</option>
									<option>Javascript</option>
								</select>
                <div class="btn-group bootstrap-select dropdown open">
                  <button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" title="HTML" aria-expanded="false">
                    <span class="filter-option pull-left">HTML</span>&nbsp;<span class="caret"></span>
                  </button>
                  <div class="dropdown-menu open" style="max-height: 332px; overflow: hidden; min-height: 80px;">
                    <ul class="dropdown-menu inner selectpicker" role="menu" style="max-height: 330px; overflow-y: auto; min-height: 78px;">
                      <li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="HTML"><span class="text">HTML</span><span class="fa fa-check check-mark"></span></a></li>
                      <li data-original-index="1"><a tabindex="0" class="" data-normalized-text="CSS"><span class="text">CSS</span><span class="fa fa-check check-mark"></span></a></li>
                      <li data-original-index="2"><a tabindex="0" class="" data-normalized-text="jQuery"><span class="text">jQuery</span><span class="fa fa-check check-mark"></span></a></li>
                      <li data-original-index="3"><a tabindex="0" class="" data-normalized-text="Javascript"><span class="text">Javascript</span><span class="fa fa-check check-mark"></span></a></li>
                    </ul>
                  </div>
                </div>

                <hr />

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                    <input type="password" class="form-control" placeholder="Registration key" name="key">
                  </div>
                </div>

                <div id="error">
                  <p style="color:red;"><?=$formError?></p>
                </div>
							<!-- <div class="col-xs-8 text-left checkbox">
								<label class="form-checkbox form-icon">
									<input type="checkbox"> I agree with the <a href="#" class="btn-link">Terms and Conditions</a>
								</label>
							</div> -->
							<div class="col-xs-12">
								<div class="form-group text-center">
									<button class="btn btn-success text-uppercase" type="submit" name="submit" value="submit">Sign Up</button>
								</div>
							</div>

						<!-- <div class="mar-btm"><em>- or -</em></div>
						<button class="btn btn-primary btn-lg btn-block" type="button">
							<i class="fa fa-facebook fa-fw"></i> Sign Up with Facebook
						</button> -->
					</form>
				</div>
			</div>
			<div class="pad-ver">
				Already have an account ? <a href="login.php" class="btn-link mar-rgt">Sign In</a>
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
