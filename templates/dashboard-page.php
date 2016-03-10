<div class="boxed">

  <!--CONTENT CONTAINER-->
  <!--===================================================-->
  <div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
      <h1 class="page-header text-overflow"><?= $title ?></h1>

      <!--TODO Searchbox-->
      <!-- <div class="searchbox">
        <div class="input-group custom-search-form">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="text-muted" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </div> -->
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">


      <div class="col-sm-12 col-xs-12">
        <div class="panel panel-mint">
        <!-- Panel heading -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <div class="panel-heading">
            <h3 class="panel-title">Announcements</h3>
          </div>
          <!-- Panel body -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <div class="panel-body">
              <!-- Content here -->
              <div id="carousel" class="carousel slide" data-ride="carousel">

									<!--Indicators-->
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
									<ol class="carousel-indicators dark out">
										<li class="active" data-slide-to="0" data-target="#carousel"></li>
										<li data-slide-to="1" data-target="#carousel" class=""></li>
										<li class="" data-slide-to="2" data-target="#carousel"></li>
									</ol>
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

									<div class="carousel-inner text-center">

										<!--Item 1-->
										<div class="item active">
											<h3><?= $announcements[0]['title'] ?></h3>
											<p><?= $announcements[0]['content'] ?></p>
										</div>

										<!--Item 2-->
										<div class="item">
											<h3><?= $announcements[1]['title'] ?></h3>
											<p><?= $announcements[1]['content'] ?></p>
										</div>

										<!--Item 3-->
										<div class="item">
											<h3><?= $announcements[2]['title'] ?></h3>
											<p><?= $announcements[2]['content'] ?></p>
										</div>
									</div>

									<!--carousel-control-->
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
									<a class="carousel-control left" data-slide="prev" href="#carousel"><i class="fa fa-chevron-left fa-2x"></i></a>
									<a class="carousel-control right" data-slide="next" href="#carousel"><i class="fa fa-chevron-right fa-2x"></i></a>
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

								</div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-xs-12">
        <div class="panel panel-primary">
        <!-- Panel heading -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <div class="panel-heading">
            <h3 class="panel-title">Facebook</h3>
          </div>
          <!-- Panel body -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <div class="panel-body">
            <!-- Content here -->
            <div class="container">
              <div class="fb-page" data-href="https://www.facebook.com/CS50xMIAMI-871833776233275/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-xs-12">
        <div class="panel panel-info">
        <!-- Panel heading -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <div class="panel-heading">
            <h3 class="panel-title">Twitter</h3>
          </div>
          <!-- Panel body -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <div class="panel-body">
            <!-- Content here -->
            <a class="twitter-timeline" href="https://twitter.com/cs50xMiami" data-widget-id="707787725890523142">Tweets by @cs50xMiami</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </div>
        </div>
      </div>



    </div>
    <!--===================================================-->
    <!--End page content-->


  </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->
