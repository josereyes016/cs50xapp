<body>
	<div id="container" class="effect mainnav-lg navbar-fixed">

		<!--NAVBAR-->
		<!--===================================================-->
		<header id="navbar">
			<div id="navbar-container" class="boxed">

				<!--Brand logo & name-->
				<!--================================-->
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand">
						<img src="img/CS50xMiami_Logo.png" alt="CS50xMiami Logo" class="img-circle brand-icon">
						<div class="brand-title">
							<span class="brand-text">CS50xMiami</span>
						</div>
					</a>
				</div>
				<!--================================-->
				<!--End brand logo & name-->


				<!--Navbar Dropdown-->
				<!--================================-->
				<div class="navbar-content clearfix">
					<ul class="nav navbar-top-links pull-left">

						<!--Navigation toogle button-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li class="tgl-menu-btn">
							<a class="mainnav-toggle" href="#">
								<i class="fa fa-navicon fa-lg"></i>
							</a>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End Navigation toogle button-->

					</ul>
					<ul class="nav navbar-top-links pull-right">

						<!--User dropdown-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li id="dropdown-user" class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
								<span class="pull-right">
									<img class="img-circle img-user media-object" src="img/av1.png" alt="Profile Picture">
								</span>
								<div class="username">
									<?php
										if (isset($_SESSION['fname']) && isset($_SESSION['lname'])) {
											echo $_SESSION['fname'] . " " . $_SESSION['lname'];
										}
									?>
								</div>
							</a>


							<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right with-arrow panel-default">
								<!-- User dropdown menu -->
								<ul class="head-list">
									<li>
										<a href="profile.php">
											<i class="fa fa-user fa-fw fa-lg"></i> Profile
										</a>
									</li>
									<!-- <li>
										<a href="#">
											<span class="badge badge-danger pull-right">9</span>
											<i class="fa fa-envelope fa-fw fa-lg"></i> Messages
										</a>
									</li> -->
									<li>
										<a href="settings.php">
											<i class="fa fa-gear fa-fw fa-lg"></i> Settings
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-question-circle fa-fw fa-lg"></i> Help
										</a>
									</li>
								</ul>
								<!-- Dropdown footer -->
								<div class="pad-all text-center">
									<a href="log-out.php" class="btn btn-primary">
										<i class="fa fa-sign-out fa-fw"></i> Logout
									</a>
								</div>
							</div>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End user dropdown-->

					</ul>
				</div>
				<!--================================-->
				<!--End Navbar Dropdown-->

			</div>
		</header>
		<!--===================================================-->
		<!--END NAVBAR-->
