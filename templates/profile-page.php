<div class="boxed">

  <!--CONTENT CONTAINER-->
  <!--===================================================-->
  <div id="content-container">


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
      <div class="nano-content" tabindex="0">

							<!-- Simple profile -->
							<div class="text-center pad-all">
								<div class="pad-ver">
									<img src="img/av1.png" class="img-lg img-border img-circle" alt="Profile Picture">
								</div>
								<h4 class="text-lg text-overflow mar-no"><?= $_SESSION['fname'] . ' ' . $_SESSION['lname'] ?></h4>
								<p class="text-sm"><?php
                  if($_SESSION['is_admin'] == 0){
                    echo 'Student';
                  }
                  elseif($_SESSION['is_admin'] == 1){
                    echo 'Teaching Fellow';
                  }
                  ?>
                </p>

								<div class="pad-ver btn-group">
                  <?php if(isset($user['facebook']) && $user['facebook'] != '') : ?>
                        <a title="" href="<?= $user['facebook'] ?>" class="btn btn-icon btn-hover-primary fa fa-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                  <?php endif; ?>
                  <?php if(isset($user['twitter']) && $user['twitter'] != '') : ?>
                        <a title="" href="<?= $user['twitter'] ?>" class="btn btn-icon btn-hover-info fa fa-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                  <?php endif; ?>
                  <?php if(isset($user['google']) && $user['google'] != '') : ?>
                        <a title="" href="<?= $user['google'] ?>" class="btn btn-icon btn-hover-danger fa fa-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                  <?php endif; ?>
                  <?php if(isset($user['linkedin']) && $user['linkedin'] != '') : ?>
                        <a title="" href="<?= $user['linkedin'] ?>" class="btn btn-icon btn-hover-primary fa fa-linkedin icon-lg add-tooltip" data-original-title="LinkedIn" data-container="body"></a>
                  <?php endif; ?>
								</div>
								<a href="editprofile.php"><button class="btn btn-block btn-success">Edit</button></a>
							</div>
							<hr>
							<ul class="list-group bg-trans">

								<!-- Profile Details -->
                <?php if(isset($user['phone']) && $user['phone'] != '') : ?>
                  <li class="list-group-item list-item-sm">
                    <i class="fa fa-phone fa-fw"></i><a href="tel:+1<?=preg_replace('/\D/', '', $user['phone'])?>"> <?= $user['phone'] ?></a>
                  </li>
                <?php endif; ?>
								<!-- <li class="list-group-item list-item-sm">
									<i class="fa fa-clock-o fa-fw"></i> Member since 1 years ago
								</li> -->
                  <li class="list-group-item list-item-sm">
                    <i class="fa fa-envelope fa-fw"></i><a href="mailto:<?=$user['email']?>"> <?= $user['email'] ?></a>
                  </li>
							</ul>
							<hr>
							<div class="pad-hor">
								<h5>About Me</h5>
								<small class="text-thin">
                </small>
							</div>
							<hr>
							<div class="text-center clearfix">
								<div class="col-xs-6">
									<p class="h3">523</p>
									<small class="text-muted">Likes</small>
								</div>
								<div class="col-xs-6">
									<p class="h3">7,345</p>
									<small class="text-muted">Friends</small>
								</div>
							</div>
						</div>

      <div class="row">
        <div class="col-lg-6">

          <!-- Status Form -->
          <!--===================================================-->
          <div class="panel">
            <div class="panel-body">
              <textarea class="form-control" rows="2" placeholder="What are you thinking?"></textarea>
              <div class="mar-top clearfix">
                <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Share</button>
                <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#" data-original-title="Add Video" data-toggle="tooltip"></a>
                <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#" data-original-title="Add Photo" data-toggle="tooltip"></a>
                <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#" data-original-title="Add File" data-toggle="tooltip"></a>
              </div>
            </div>
          </div>
          <!--===================================================-->
          <!-- End Status Form -->


          <div class="panel">
            <div class="panel-body">

              <!-- Newsfeed Content -->
              <!--===================================================-->
              <div class="media-block">
                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="img/av4.png"></a>
                <div class="media-body">
                  <div class="mar-btm">
                    <a href="#" class="btn-link text-semibold media-heading box-inline">Lisa D.</a>
                    <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                  </div>
                  <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                  <div class="pad-ver">
                    <div class="btn-group">
                      <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                      <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                    </div>
                    <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
                  </div>
                  <hr>

                  <!-- Comments -->
                  <div>
                    <div class="media-block">
                      <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="img/av3.png"></a>
                      <div class="media-body">
                        <div class="mar-btm">
                          <a href="#" class="btn-link text-semibold media-heading box-inline">Bobby Marz</a>
                          <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 7 min ago</p>
                        </div>
                        <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <div class="pad-ver">
                          <div class="btn-group">
                            <a class="btn btn-sm btn-default btn-hover-success active" href="#"><i class="fa fa-thumbs-up"></i> You Like it</a>
                            <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                          </div>
                          <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
                        </div>
                        <hr>
                      </div>
                    </div>

                    <div class="media-block">
                      <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="img/av6.png">
                      </a>
                      <div class="media-body">
                        <div class="mar-btm">
                          <a href="#" class="btn-link text-semibold media-heading box-inline">Lucy Moon</a>
                          <p class="text-muted text-sm"><i class="fa fa-globe fa-lg"></i> - From Web - 2 min ago</p>
                        </div>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate ?</p>
                        <div class="pad-ver">
                          <div class="btn-group">
                            <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                            <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                          </div>
                          <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--===================================================-->
              <!-- End Newsfeed Content -->


              <!-- Newsfeed Content -->
              <!--===================================================-->
              <div class="media-block pad-all">
                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="img/av1.png"></a>
                <div class="media-body">
                  <div class="mar-btm">
                    <a href="#" class="btn-link text-semibold media-heading box-inline">John Doe</a>
                    <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                  </div>
                  <p>Lorem ipsum dolor sit amet.</p>
                  <img class="img-responsive thumbnail" src="img/thumbs/img1.jpg" alt="Image">
                  <div class="pad-ver">
                    <span class="tag tag-sm"><i class="fa fa-heart text-danger"></i> 250 Likes</span>
                    <div class="btn-group">
                      <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                      <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                    </div>
                    <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
                  </div>
                  <hr>

                  <!-- Comments -->
                  <div>
                    <div class="media-block pad-all">
                      <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="img/av5.png"></a>
                      <div class="media-body">
                        <div class="mar-btm">
                          <a href="#" class="btn-link text-semibold media-heading box-inline">Maria Leanz</a>
                          <p class="text-muted text-sm"><i class="fa fa-globe fa-lg"></i> - From Web - 2 min ago</p>
                        </div>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate ?</p>
                        <div>
                          <div class="btn-group">
                            <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                            <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                          </div>
                          <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--===================================================-->
              <!-- End Newsfeed Content -->

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="panel panel-body">

            <!-- Timeline -->
            <!--===================================================-->
            <div class="timeline">

              <!-- Timeline header -->
              <div class="timeline-header">
                <div class="timeline-header-title bg-success">Now</div>
              </div>

              <div class="timeline-entry">
                <div class="timeline-stat">
                  <div class="timeline-icon"><img src="img/av6.png" alt="Profile picture">
                  </div>
                  <div class="timeline-time">30 Min ago</div>
                </div>
                <div class="timeline-label">
                  <p class="mar-no pad-btm"><a href="#" class="btn-link text-semibold">Maria J.</a> shared an image</p>
                  <div class="img-holder">
                    <img src="img/thumbs/img2.jpg" alt="Image">
                  </div>
                </div>
              </div>
              <div class="timeline-entry">
                <div class="timeline-stat">
                  <div class="timeline-icon bg-danger"><i class="fa fa-building fa-lg"></i>
                  </div>
                  <div class="timeline-time">2 Hours ago</div>
                </div>
                <div class="timeline-label">
                  <h4 class="mar-no pad-btm"><a href="#" class="text-danger">Job Meeting</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                </div>
              </div>
              <div class="timeline-entry">
                <div class="timeline-stat">
                  <div class="timeline-icon"><img src="img/av4.png" alt="Profile picture">
                  </div>
                  <div class="timeline-time">3 Hours ago</div>
                </div>
                <div class="timeline-label">
                  <p class="mar-no pad-btm"><a href="#" class="btn-link text-semibold">Lisa D.</a> commented on <a href="#">The Article</a>
                  </p>
                  <blockquote class="bq-sm bq-open">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</blockquote>
                </div>
              </div>
              <div class="timeline-entry">
                <div class="timeline-stat">
                  <div class="timeline-icon bg-purple"><i class="fa fa-check fa-lg"></i>
                  </div>
                  <div class="timeline-time">5 Hours ago</div>
                </div>
                <div class="timeline-label">
                  <img class="img-xs img-circle" src="img/av3.png" alt="Profile picture">
                  <a href="#" class="btn-link text-semibold">Bobby Marz</a> followed you.
                </div>
              </div>

              <!-- Timeline header -->
              <div class="timeline-header">
                <div class="timeline-header-title bg-dark">Yesterday</div>
              </div>

              <div class="timeline-entry">
                <div class="timeline-stat">
                  <div class="timeline-icon bg-info"><i class="fa fa-envelope fa-lg"></i>
                  </div>
                  <div class="timeline-time">15:45</div>
                </div>
                <div class="timeline-label">
                  <h4 class="text-info mar-no pad-btm">Lorem ipsum dolor sit amet</h4>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                </div>
              </div>
              <div class="timeline-entry">
                <div class="timeline-stat">
                  <div class="timeline-icon bg-success"><i class="fa fa-thumbs-up fa-lg"></i>
                  </div>
                  <div class="timeline-time">13:27</div>
                </div>
                <div class="timeline-label">
                  <img class="img-xs img-circle" src="img/av2.png" alt="Profile picture">
                  <a href="#" class="btn-link text-semibold">Michael Both</a> Like <a href="#">The Article</a>
                </div>
              </div>
              <div class="timeline-entry">
                <div class="timeline-stat">
                  <div class="timeline-icon"></div>
                  <div class="timeline-time">11:27</div>
                </div>
                <div class="timeline-label">
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                </div>
              </div>
            </div>
            <!--===================================================-->
            <!-- End Timeline -->

          </div>
        </div>
      </div>


    </div>
    <!--===================================================-->
    <!--End page content-->


  </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->
