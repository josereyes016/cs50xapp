<?php

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Slide-in Navigation | Nifty - Responsive admin template.</title>


	<!--STYLESHEET-->
	<!--=================================================-->

	<!--Open Sans Font [ OPTIONAL ] -->
 	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">


	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="css/bootstrap.min.css" rel="stylesheet">


	<!--Nifty Stylesheet [ REQUIRED ]-->
	<link href="css/nifty.min.css" rel="stylesheet">


	<!--Font Awesome [ OPTIONAL ]-->
	<link href="css/font-awesome.min.css" rel="stylesheet">




	<!--SCRIPT-->
	<!--=================================================-->

	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="css/pace.min.css" rel="stylesheet">
	<script src="js/pace.min.js"></script>



	<!--

	REQUIRED
	You must include this in your project.

	RECOMMENDED
	This category must be included but you may modify which plugins or components which should be included in your project.

	OPTIONAL
	Optional plugins. You may choose whether to include it in your project or not.


	Detailed information and more samples can be found in the document.

	-->


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="effect slide mainnav-out">

        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">
                        <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">Nifty</span>
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



                        <!--Notification dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="fa fa-bell fa-lg"></i>
                                <span class="badge badge-header badge-danger">5</span>
                            </a>

                            <!--Notification dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md">
                                <div class="pad-all bord-btm">
                                    <p class="text-lg text-muted text-thin mar-no">You have 3 messages.</p>
                                </div>
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#">
                                                    <div class="clearfix">
                                                        <p class="pull-left">Progressbar</p>
                                                        <p class="pull-right">70%</p>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div style="width: 70%;" class="progress-bar">
                                                            <span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									                <div class="media-left">
									                    <span class="icon-wrap icon-circle bg-primary">
									                        <i class="fa fa-comment fa-lg"></i>
									                    </span>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">Circle Icon</div>
									                    <small class="text-muted">15 minutes ago</small>
									                </div>
									            </a>
									        </li>

									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									        <span class="badge badge-success pull-right">90%</span>
									                <div class="media-left">
									                    <span class="icon-wrap icon-circle bg-danger">
									                        <i class="fa fa-hdd-o fa-lg"></i>
									                    </span>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">Circle icon with badge</div>
									                    <small class="text-muted">50 minutes ago</small>
									                </div>
									            </a>
									        </li>

									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									                <div class="media-left">
									                    <span class="icon-wrap bg-info">
									                        <i class="fa fa-file-word-o fa-lg"></i>
									                    </span>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">Square Icon</div>
									                    <small class="text-muted">Last Update 8 hours ago</small>
									                </div>
									            </a>
									        </li>

									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									        <span class="label label-danger pull-right">New</span>
									                <div class="media-left">
									                    <span class="icon-wrap bg-purple">
									                        <i class="fa fa-comment fa-lg"></i>
									                    </span>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">Square icon with label</div>
									                    <small class="text-muted">Last Update 8 hours ago</small>
									                </div>
									            </a>
									        </li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Dropdown footer-->
                                <div class="pad-all bord-top">
                                    <a href="#" class="btn-link text-dark box-block">
                                        <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End notifications dropdown-->



                        <!--Mega dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="mega-dropdown">
                            <a href="#" class="mega-dropdown-toggle">
                                <i class="fa fa-th-large fa-lg"></i>
                            </a>
                            <div class="dropdown-menu mega-dropdown-menu">
                                <div class="clearfix">
                                    <div class="col-sm-12 col-md-3">

                                        <!--Mega menu widget-->
                                        <div class="text-center bg-purple pad-all">
                                            <h3 class="text-thin mar-no">Weekend shopping</h3>
                                            <div class="pad-ver box-inline">
                                                <span class="icon-wrap icon-wrap-lg icon-circle bg-trans-light">
                                                    <i class="fa fa-shopping-cart fa-4x"></i>
                                                </span>
                                            </div>
                                            <p class="pad-btm">
                                                Members get <span class="text-lg text-bold">50%</span> more points. Lorem ipsum dolor sit amet!
                                            </p>
                                            <a href="#" class="btn btn-purple">Learn More...</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header">Pages</li>
									        <li><a href="#">Profile</a></li>
									        <li><a href="#">Search Result</a></li>
									        <li><a href="#">FAQ</a></li>
									        <li><a href="#">Sreen Lock</a></li>
									        <li><a href="#" class="disabled">Disabled</a></li>
									        <li class="divider"></li>
									        <li class="dropdown-header">Icons</li>
									        <li><a href="#"><span class="pull-right badge badge-purple">479</span> Font Awesome</a></li>
									        <li><a href="#">Skycons</a></li>
                                        </ul>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header">Mailbox</li>
									        <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
									        <li><a href="#">Read Message</a></li>
									        <li><a href="#">Compose</a></li>
									        <li class="divider"></li>
									        <li class="dropdown-header">Featured</li>
									        <li><a href="#">Smart navigation</a></li>
									        <li><a href="#"><span class="pull-right badge badge-success">6</span>Exclusive plugins</a></li>
									        <li><a href="#">Lot of themes</a></li>
									        <li><a href="#">Transition effects</a></li>
                                        </ul>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header">Components</li>
									        <li><a href="#">Tables</a></li>
									        <li><a href="#">Charts</a></li>
									        <li><a href="#">Forms</a></li>
									        <li class="divider"></li>
                                            <li>
                                                <form role="form" class="form">
                                                    <div class="form-group">
                                                        <label class="dropdown-header" for="demo-megamenu-input">Newsletter</label>
                                                        <input id="demo-megamenu-input" type="email" placeholder="Enter email" class="form-control">
                                                    </div>
                                                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End mega dropdown-->

                    </ul>
                    <ul class="nav navbar-top-links pull-right">

                        <!--Language selector-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a class="lang-selector dropdown-toggle" href="#" data-toggle="dropdown">
                                <span class="lang-selected">
                                    <img class="lang-flag" src="img/flags/united-kingdom.png" alt="English">
                                    <span class="lang-id">EN</span>
                                    <span class="lang-name">English</span>
                                </span>
                            </a>

                            <!--Language selector menu-->
                            <ul class="head-list dropdown-menu">
						        <li>
						            <!--English-->
						            <a href="#" class="active">
						                <img class="lang-flag" src="img/flags/united-kingdom.png" alt="English">
						                <span class="lang-id">EN</span>
						                <span class="lang-name">English</span>
						            </a>
						        </li>
						        <li>
						            <!--France-->
						            <a href="#">
						                <img class="lang-flag" src="img/flags/france.png" alt="France">
						                <span class="lang-id">FR</span>
						                <span class="lang-name">Fran&ccedil;ais</span>
						            </a>
						        </li>
						        <li>
						            <!--Germany-->
						            <a href="#">
						                <img class="lang-flag" src="img/flags/germany.png" alt="Germany">
						                <span class="lang-id">DE</span>
						                <span class="lang-name">Deutsch</span>
						            </a>
						        </li>
						        <li>
						            <!--Italy-->
						            <a href="#">
						                <img class="lang-flag" src="img/flags/italy.png" alt="Italy">
						                <span class="lang-id">IT</span>
						                <span class="lang-name">Italiano</span>
						            </a>
						        </li>
						        <li>
						            <!--Spain-->
						            <a href="#">
						                <img class="lang-flag" src="img/flags/spain.png" alt="Spain">
						                <span class="lang-id">ES</span>
						                <span class="lang-name">Espa&ntilde;ol</span>
						            </a>
						        </li>
                            </ul>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End language selector-->



                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
                                    <img class="img-circle img-user media-object" src="img/av1.png" alt="Profile Picture">
                                </span>
                                <div class="username hidden-xs">John Doe</div>
                            </a>


                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                                <!-- Dropdown heading  -->
                                <div class="pad-all bord-btm">
                                    <p class="text-lg text-muted text-thin mar-btm">750Gb of 1,000Gb Used</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" style="width: 70%;">
                                            <span class="sr-only">70%</span>
                                        </div>
                                    </div>
                                </div>


                                <!-- User dropdown menu -->
                                <ul class="head-list">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user fa-fw fa-lg"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="badge badge-danger pull-right">9</span>
                                            <i class="fa fa-envelope fa-fw fa-lg"></i> Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-success pull-right">New</span>
                                            <i class="fa fa-gear fa-fw fa-lg"></i> Settings
                                        </a>
                                    </li>
                                </ul>

                                <!-- Dropdown footer -->
                                <div class="pad-all text-right">
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

		<div class="boxed">

			<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div id="content-container">

				<!--Page Title-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<div id="page-title">
					<h1 class="page-header text-overflow">Slide-in Navigation</h1>

					<!--Searchbox-->
					<div class="searchbox">
						<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search..">
							<span class="input-group-btn">
								<button class="text-muted" type="button"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</div>
				</div>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End page title-->


				<!--Breadcrumb-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Library</a></li>
					<li class="active">Data</li>
				</ol>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End breadcrumb-->




				<!--Page content-->
				<!--===================================================-->
				<div id="page-content">


					<!-- QUICK TIPS -->
					<!-- ==================================================================== -->
					<h3>Your content here...</h3>
					<br>
					<a href="index.html" class="btn btn-dark">Back</a>
					<br><br><br>
					<h3>Quick Tips</h3>
					<p>You may remove all ID or Class names which contain <code>demo-</code>, they are only used for demonstration.</p>
					<br>

					<h4>Navigation</h4>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td style="width:70ex">Show the navigation by default</td>
									<td>Add <code>.mainnav-in.slide </code> to the <code>#container</code>.</td>
								</tr>

								<tr>
									<td style="width:70ex">Hide the navigation by default</td>
									<td>Add <code>.mainnav-out.slide </code> to the <code>#container</code>.</td>
								</tr>

								<tr>
									<td>Fixed navigation</td>
									<td>Add <code>.mainnav-fixed</code> to the <code>#container</code>.</td>
								</tr>
								<tr>
									<td>Create a ToggleButton for navigation</td>
									<td>Add <code>.mainnav-toggle.slide</code> to the button.</td>
								</tr>
								<tr>
									<td></td>
									<td>
										<button class="btn btn-lg btn-primary mainnav-toggle slide">Toggle Navigation</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

					<h4>Aside</h4>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td style="width:70ex">Make Aside visible by default</td>
									<td>Add <code>.aside-in</code> to the <code>#container</code>.</td>
								</tr>
								<tr>
									<td>Fixed aside</td>
									<td>Add <code>.aside-fixed</code> to the <code>#container</code>.</td>
								</tr>
								<tr>
									<td>Aside on the left side</td>
									<td>Add <code>.aside-left</code> to the <code>#container</code>.</td>
								</tr>
								<tr>
									<td>Use the bright color theme</td>
									<td>Add <code>.aside-bright</code> to the <code>#container</code>.</td>
								</tr>
								<tr>
									<td>Create a ToggleButton for aside</td>
									<td>Add <code>.aside-toggle</code> to the button.</td>
								</tr>
								<tr>
									<td></td>
									<td>
										<button class="btn btn-success btn-lg aside-toggle">Toggle Aside</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h4>Navbar</h4>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td style="width:70ex">Fixed navbar</td>
									<td>Add <code>.navbar-fixed</code> to the <code>#container</code>.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h4>Footer</h4>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td style="width:70ex">Fixed footer</td>
									<td>Add <code>.footer-fixed</code> to the <code>#container</code>.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h4>Color Themes</h4>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td style="width:70ex">Apply a different color theme</td>
									<td>You can change whole color theme of your website by adding a color theme stylesheet into the <code>&lt;head></code>.</td>
								</tr>
								<tr>
									<td></td>
									<td><pre>&lt;head><br>	...<br>	&lt;link href="path-to-the-color-theme.css" rel="stylesheet"><br>&lt;/head></pre></td>
								</tr>
							</tbody>
						</table>
					</div>
					<h4>Animation</h4>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td style="width:70ex">Remove animation</td>
									<td>Remove the class <code>.effect</code> from <code>#container</code>.</td>
								</tr>
								<tr>
									<td>Add different slide transitions to the Navigation and Aside</td>
									<td>
										Add <code>.effect</code> to the <code>#container</code> and then combined with the class name of the transition function.
										<br>
										<br>
										<table>
											<thead>
												<tr>
													<th style="width: 250px;">Transition function</th>
													<th>Class name</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>easeInQuart</td>
													<td><code>.easeInQuart</code></td>
												</tr>
												<tr>
													<td>easeOutQuart</td>
													<td><code>.easeOutQuart</code></td>
												</tr>
												<tr>
													<td>easeInBack</td>
													<td><code>.easeInBack</code></td>
												</tr>
												<tr>
													<td>easeOutBack</td>
													<td><code>.easeOutBack</code></td>
												</tr>
												<tr>
													<td>easeInOutBack</td>
													<td><code>.easeInOutBack</code></td>
												</tr>
												<tr>
													<td>steps</td>
													<td><code>.steps</code></td>
												</tr>
												<tr>
													<td>jumping</td>
													<td><code>.jumping</code></td>
												</tr>
												<tr>
													<td>rubber</td>
													<td><code>.rubber</code></td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- ==================================================================== -->
					<!-- END QUICK TIPS -->



				</div>
				<!--===================================================-->
				<!--End page content-->


			</div>
			<!--===================================================-->
			<!--END CONTENT CONTAINER-->



			<!--MAIN NAVIGATION-->
			<!--===================================================-->
			<nav id="mainnav-container">
				<div id="mainnav">

					<!--Shortcut buttons-->
					<!--================================-->
					<div id="mainnav-shortcut">
						<ul class="list-unstyled">
							<li class="col-xs-4" data-content="Shortcut 1">
								<a class="shortcut-grid" href="#">
									<i class="fa fa-car"></i>
								</a>
							</li>
							<li class="col-xs-4" data-content="Shortcut 2">
								<a class="shortcut-grid" href="#">
									<i class="fa fa-taxi"></i>
								</a>
							</li>
							<li class="col-xs-4" data-content="Shortcut 3">
								<a class="shortcut-grid" href="#">
									<i class="fa fa-bus"></i>
								</a>
							</li>
						</ul>
					</div>
					<!--================================-->
					<!--End shortcut buttons-->


					<!--Menu-->
					<!--================================-->
					<div id="mainnav-menu-wrap">
						<div class="nano">
							<div class="nano-content">
								<ul id="mainnav-menu" class="list-group">

									<!--Category name-->
									<li class="list-header">Link List</li>

									<!--Menu list item-->
									<li class="active-link">
										<a href="#">
											<i class="fa fa-plane"></i>
											<span class="menu-title">Active state</span>
										</a>
									</li>

									<!--Menu list item-->
									<li>
										<a href="#">
											<i class="fa fa-dashboard"></i>
											<span class="menu-title">
												<strong>Bolder</strong>
											</span>
										</a>
									</li>

									<!--Menu list item-->
									<li>
										<a href="#">
											<i class="fa fa-tag"></i>
											<span class="menu-title">
												With label
												<span class="label label-success pull-right">New</span>
											</span>
										</a>
									</li>

									<!--Menu list item-->
									<li>
										<a href="#">
											<i class="fa fa-rocket"></i>
											<span class="menu-title">
												With badge
												<span class="pull-right badge badge-purple">7</span>
											</span>
										</a>
									</li>

									<li class="list-divider"></li>

									<!--Category name-->
									<li class="list-header">Submenus</li>

									<!--Menu list item-->
									<li class="active-sub">
										<a href="#">
											<i class="fa fa-th"></i>
											<span class="menu-title">Active State</span>
											<i class="arrow"></i>
										</a>

										<!--Submenu-->
										<ul class="collapse in">
											<li><a href="#">Link</a></li>
											<li class="active-link"><a href="#">Active link</a></li>
											<li><a href="#">Another link</a></li>
											<li><a href="#">Some else here</a></li>
											<li class="list-divider"></li>
											<li><a href="#">Separate link</a></li>

										</ul>
									</li>

									<!--Menu list item-->
									<li>
										<a href="#">
											<i class="fa fa-taxi"></i>
											<span class="menu-title">
												<strong>Bolder</strong>
											</span>
											<i class="arrow"></i>
										</a>

										<!--Submenu-->
										<ul class="collapse">
											<li><a href="#">Link</a></li>
											<li><a href="#">Another link</a></li>
											<li><a href="#">Some else here</a></li>
											<li class="list-divider"></li>
											<li><a href="#">Separate link</a></li>

										</ul>
									</li>

									<!--Menu list item-->
									<li>
										<a href="#">
											<i class="fa fa-road"></i>
											<span class="menu-title">
												With label
												<span class="label label-danger pull-right">Hot</span>
											</span>
										</a>

										<!--Submenu-->
										<ul class="collapse">
											<li><a href="#">Link</a></li>
											<li><a href="#">Another link</a></li>
											<li><a href="#">Some else here</a></li>
											<li class="list-divider"></li>
											<li><a href="#">Separate link</a></li>

										</ul>
									</li>

									<!--Menu list item-->
									<li>
										<a href="#">
											<i class="fa fa-plug"></i>
											<span class="menu-title">
												With badge
												<span class="pull-right badge badge-success">3</span>
											</span>
										</a>

										<!--Submenu-->
										<ul class="collapse">
											<li><a href="#">Link</a></li>
											<li><a href="#">Another link</a></li>
											<li><a href="#">Some else here</a></li>
											<li class="list-divider"></li>
											<li><a href="#">Separate link</a></li>

										</ul>
									</li>

									<li class="list-divider"></li>

									<!--Category name-->
									<li class="list-header">Multi level</li>

									<!--Menu list item-->
									<li>
										<a href="#">
											<i class="fa fa-plus-square"></i>
											<span class="menu-title">Menu Level</span>
											<i class="fa arrow"></i>
										</a>

										<!--Submenu-->
										<ul class="collapse">
											<li><a href="#">Second Level Item</a></li>
											<li><a href="#">Second Level Item</a></li>
											<li><a href="#">Second Level Item</a></li>
											<li class="list-divider"></li>
											<li>
												<a href="#">Third Level<i class="arrow"></i></a>

												<!--Submenu-->
												<ul class="collapse">
													<li><a href="#">Third Level Item</a></li>
													<li><a href="#">Third Level Item</a></li>
													<li><a href="#">Third Level Item</a></li>
													<li><a href="#">Third Level Item</a></li>
												</ul>
											</li>
											<li>
												<a href="#">Third Level<i class="arrow"></i></a>

												<!--Submenu-->
												<ul class="collapse">
													<li><a href="#">Third Level Item</a></li>
													<li><a href="#">Third Level Item</a></li>
													<li><a href="#">Third Level Item</a></li>
													<li class="list-divider"></li>
													<li><a href="#">Third Level Item</a></li>
													<li><a href="#">Third Level Item</a></li>
												</ul>
											</li>
										</ul>
									</li>

								</ul>


								<!--Widget-->
								<!--================================-->
								<div class="mainnav-widget">

									<!-- Show the button on collapsed navigation -->
									<div class="show-small">
										<a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
											<i class="fa fa-desktop"></i>
										</a>
									</div>

									<!-- Hide the content on collapsed navigation -->
									<div id="demo-wg-server" class="hide-small mainnav-widget-content">
										<ul class="list-group">
											<li class="list-header pad-no pad-ver">Widget on Navigation Menu</li>
											<li class="mar-btm">
												<span class="label label-primary pull-right">15%</span>
												<p>CPU Usage</p>
												<div class="progress progress-sm">
													<div class="progress-bar progress-bar-primary" style="width: 15%;">
														<span class="sr-only">15%</span>
													</div>
												</div>
											</li>
											<li class="mar-btm">
												<span class="label label-purple pull-right">75%</span>
												<p>Bandwidth</p>
												<div class="progress progress-sm">
													<div class="progress-bar progress-bar-purple" style="width: 75%;">
														<span class="sr-only">75%</span>
													</div>
												</div>
											</li>
											<li class="pad-ver"><a href="#" class="btn btn-success btn-bock">View Details</a></li>
										</ul>
									</div>
								</div>
								<!--================================-->
								<!--End widget-->

							</div>
						</div>
					</div>
					<!--================================-->
					<!--End menu-->

				</div>
			</nav>
			<!--===================================================-->
			<!--END MAIN NAVIGATION-->

			<!--ASIDE-->
			<!--===================================================-->
			<aside id="aside-container">
				<div id="aside">
					<div class="nano">
						<div class="nano-content">

							<!--Nav tabs-->
							<!--================================-->
							<ul class="nav nav-tabs nav-justified">
								<li class="active">
									<a href="#demo-asd-tab-1" data-toggle="tab">
										<i class="fa fa-comments"></i>
										<span class="badge badge-purple">7</span>
									</a>
								</li>
								<li>
									<a href="#demo-asd-tab-2" data-toggle="tab">
										<i class="fa fa-info-circle"></i>
									</a>
								</li>
								<li>
									<a href="#demo-asd-tab-3" data-toggle="tab">
										<i class="fa fa-wrench"></i>
									</a>
								</li>
								<li>
									<a href="#demo-asd-tab-4" data-toggle="tab">
										<i class="fa fa-shield"></i>
										<span class="label label-success">New</span>
									</a>
								</li>
							</ul>
							<!--================================-->
							<!--End nav tabs-->



							<!-- Tabs Content -->
							<!--================================-->
							<div class="tab-content">

								<!--First tab-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="tab-pane fade in active" id="demo-asd-tab-1">
									<h4 class="pad-hor text-thin">
										First tab
									</h4>
									<div class="pad-all">

									Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
									sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
									ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
									velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
									et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.

									</div>

								</div>
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--End first tab-->


								<!--Second tab-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="tab-pane fade" id="demo-asd-tab-2">
									<h4 class="pad-hor text-thin">
										Second tab
									</h4>
									<div class="pad-all">

									Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
									sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
									ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
									velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
									et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.

									</div>
								</div>
								<!--End second tab-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


								<!--Third tab-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="tab-pane fade" id="demo-asd-tab-3">
									<h4 class="pad-hor text-thin">
										Third tab
									</h4>
									<div class="pad-all">

									Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
									sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
									ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
									velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
									et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.

									</div>

								</div>
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--Third tab-->

								<!--Fourth tab-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="tab-pane fade" id="demo-asd-tab-4">
									<h4 class="pad-hor text-thin">
										Fourth tab
									</h4>
									<div class="pad-all">

									Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
									sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
									ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
									velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
									et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.

									</div>

								</div>
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--Third tab (Settings)-->

							</div>
						</div>
					</div>
				</div>
			</aside>
			<!--===================================================-->
			<!--END ASIDE-->

		</div>



        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pull-right">
                <ul class="footer-list list-inline">
                    <li>
                        <p class="text-sm">SEO Proggres</p>
                        <div class="progress progress-sm progress-light-base">
                            <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                        </div>
                    </li>

                    <li>
                        <p class="text-sm">Online Tutorial</p>
                        <div class="progress progress-sm progress-light-base">
                            <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                    </li>
                </ul>
            </div>



            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">Currently v2.3</div>



            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2015 Your Company</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL TOP BUTTON -->
        <!--===================================================-->
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
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
	<script src="js/fastclick.min.js"></script>


	<!--Nifty Admin [ RECOMMENDED ]-->
	<script src="js/nifty.min.js"></script>


	<!--

	REQUIRED
	You must include this in your project.

	RECOMMENDED
	This category must be included but you may modify which plugins or components which should be included in your project.

	OPTIONAL
	Optional plugins. You may choose whether to include it in your project or not.


	Detailed information and more samples can be found in the document.

	-->


</body>
</html>
