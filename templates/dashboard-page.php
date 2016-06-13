<div class="boxed">

  <!--CONTENT CONTAINER-->
  <!--===================================================-->
  <div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
     <!-- <h1 class="page-header text-overflow"><?= $title ?></h1> -->

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
            <h3 class="panel-title">
              Announcements
              <?php if($user['is_admin'] == 1) : ?>
              <div class="pull-right">
              <a href="editannouncements.php"><button class="btn btn-mint">Edit</button></a>
              </div>
              <?php endif;?>
            </h3>
          </div>
          <!-- Panel body -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <div class="panel-body">
              <!-- Content here -->
              <div id="carousel" class="carousel slide" data-ride="carousel">

									<!--Indicators-->
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
									<ol class="carousel-indicators dark out">
                    <?php
                      $a = 0;
                      foreach ($announcements as $announcement){
                    ?>
    										<li class="<?php if ($a == 0){echo 'active';}?>" data-slide-to="<?=$a?>" data-target="#carousel"></li>
                    <?php $a++; }?>
									</ol>
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

									<div class="carousel-inner text-center">

										<!--Item 1-->
                    <?php
                    $b = 0;
                    foreach ($announcements as $announcement){
                    ?>
  										<div class="item <?php if ($b == 0){echo 'active';}?>">
  											<h3><?= $announcement['title'] ?></h3>
                        <div class="col-xs-8 col-xs-offset-2">
                          <p><?= $announcement['content'] ?></p>
                        </div>
  										</div>
                    <?php $b++; }?>

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
              <div class="fb-page" style="margin-left:0px;" data-href="https://www.facebook.com/CS50xMIAMI-871833776233275/?ref=br_rs" data-tabs="timeline,events" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
            </div>
          </div>
        </div>
      </div>



    </div>
    <!--===================================================-->
    <!--End page content-->


  </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->
