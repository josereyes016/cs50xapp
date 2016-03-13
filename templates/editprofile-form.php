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

      <div class="row">
        <!-- AVATAR UPDATE -->
        <div class="col-md-4 col-xs-12">
          <div class="panel">
            <div class="panel-body">
              <div class="text-center pad-all">
                <div class="pad-ver">
                  <img src="img/av1.png" class="img-xl img-border img-circle" alt="Profile Picture">
                </div>
                <h4 class="text-lg text-overflow mar-no"><?= $_SESSION['fname'] . ' ' . $_SESSION['lname'] ?></h4>
                <br/>
                <form action="upload.php" class="dropzone"></form>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-8 col-xs-12">
          <!-- FORM VALIDATION ON ACCORDION -->
          <!--===================================================-->
          <form id="bv-accordion" class="form-horizontal" action="editprofile.php" method="post">
            <div id="accordion" class="panel-group accordion">
              <div class="panel">

                <!-- Accordion title -->
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-parent="#accordion" data-toggle="collapse" href="#acc-panel-1"><i class="fa"></i> Account</a>
                  </h4>
                </div>

                <!-- Accordion content -->
                <div id="acc-panel-1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="col-lg-3 control-label">First Name</label>
                      <div class="col-lg-7">
                        <input type="text" class="form-control" name="fname" placeholder="First Name" value="<?= $_SESSION['fname'] ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Last Name</label>
                      <div class="col-lg-7">
                        <input type="text" class="form-control" name="lname" placeholder="Last Name" value="<?= $_SESSION['lname']?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Email address</label>
                      <div class="col-lg-7">
                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $_SESSION['email'] ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel">

                <!-- Accordion title -->
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-parent="#accordion" data-toggle="collapse" href="#acc-panel-2"><i class="fa"></i> Password</a>
                  </h4>
                </div>

                <!-- Accordion content -->
                <div id="acc-panel-2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Current Password</label>
                      <div class="col-lg-7">
                        <input type="password" class="form-control" name="currentpw">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">New Password</label>
                      <div class="col-lg-7">
                        <input type="password" class="form-control" name="newpw">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Confirm Password</label>
                      <div class="col-lg-7">
                        <input type="password" class="form-control" name="confpw">
                      </div>
                    </div>
                    <div class="form-group">
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel">

                <!-- Accordion title -->
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-parent="#accordion" data-toggle="collapse" href="#acc-panel-3"><i class="fa"></i> Profile</a>
                  </h4>
                </div>

                <!-- Accordion content -->
                <div id="acc-panel-3" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Phone Number</label>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" name="phone" value="<?php if($currentPhone != NULL){echo $currentPhone;}?>" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Slack Username</label>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" name="slack" value="<?php if($currentSlack != NULL){echo $currentSlack;}?>" placeholder="@username">
                      </div>
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Bio</label>
                      <div class="col-lg-7">
                        <?php if(isset($user['bio']) && $user['bio'] != '') : ?>
                          <textarea class="form-control" name="bio" rows="7" placeholder="Tell us your story..." maxlength="300"><?= $user['bio'] ?></textarea>
                        <?php endif; ?>
                        <?php if($user['bio'] == NULL || $user['bio'] == '') :?>
                          <textarea class="form-control" name="bio" rows="7" placeholder="Tell us your story..." maxlength="300"></textarea>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel">

                <!-- Accordion title -->
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-parent="#accordion" data-toggle="collapse" href="#acc-panel-4"><i class="fa"></i> Social Media</a>
                  </h4>
                </div>

                <!-- Accordion content -->
                <div id="acc-panel-4" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Facebook</label>
                      <div class="col-lg-7">
                        <input type="text" class="form-control" name="facebook" placeholder="URL" value="<?php if($currentFacebook != NULL){echo $currentFacebook;}?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Twitter</label>
                      <div class="col-lg-7">
                        <input type="text" class="form-control" name="twitter" placeholder="URL" value="<?php if($currentTwitter != NULL){echo $currentTwitter;}?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Google+</label>
                      <div class="col-lg-7">
                        <input type="text" class="form-control" name="google" placeholder="URL" value="<?php if($currentGoogle != NULL){echo $currentGoogle;}?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">LinkedIn</label>
                      <div class="col-lg-7">
                        <input type="text" class="form-control" name="linkedin" placeholder="URL" value="<?php if($currentLinkedin != NULL){echo $currentLinkedin;}?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-parent="#accordion"><i class="fa"></i> Submit</a>
                  </h4>
                </div>

                <div id="acc-panel-5" class="expand">
                  <div class="panel-body">
                    <p>
                      Make sure you've filled out all the required fields, then press the button below to submit your changes and update your profile.
                    </p>
                  </div>
                  <div class="panel-footer">
                    <div class="form-group">
                      <div class="col-md-3">
                        <button type="submit" class="btn btn-primary btn-labeled fa fa-user fa-lg" name="submit" value="submit">Update Profile</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <!--===================================================-->
          <!-- END FORM VALIDATION ON ACCORDION -->
        </div>
      </div>

    </div>
    <!--===================================================-->
    <!--End page content-->


  </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->
