<div class="boxed">

  <!--CONTENT CONTAINER-->
  <!--===================================================-->
  <div id="content-container">


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
      <div class="nano-content" tabindex="0">

							<!-- Simple profile -->
              <div class="col-md-4 col-sm-12">
                <div class="panel">
                  <div class="panel-body">
                    <div class="text-center pad-all">
                      <div class="pad-ver">
                        <img src="img/av1.png" class="img-xl img-border img-circle" alt="Profile Picture">
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
                    </div>

                    <a href="editprofile.php"><button class="btn btn-block btn-success">Edit</button></a>

                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-12">
                <div class="panel">
                  <div class="panel-heading">
                    <h4 class="panel-title">Contact Information</h4>
                  </div>
                  <div class="panel-body">
                    <ul class="list-group bg-trans">
                      <!-- Profile Details -->
                      <?php if(isset($user['phone']) && $user['phone'] != '') : ?>
                        <li class="list-group-item list-item-sm">
                          <a href="tel:+1<?=preg_replace('/\D/', '', $user['phone'])?>"><i class="fa fa-phone fa-fw"></i> <?= $user['phone'] ?></a>
                        </li>
                      <?php endif; ?>
                      <!-- <li class="list-group-item list-item-sm">
                        <i class="fa fa-clock-o fa-fw"></i> Member since 1 years ago
                      </li> -->
                        <li class="list-group-item list-item-sm">
                          <a href="mailto:<?=$user['email']?>"><i class="fa fa-envelope fa-fw"></i> <?= $user['email'] ?></a>
                        </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-12">
                <div class="panel">
                  <div class="panel-heading">
                    <h4 class="panel-title">About Me</h4>
                  </div>
                  <div class="panel-body">
                    <div class="pad-hor">
                      <p class="text-thin">
                        <?php if($user['bio'] != NULL && $user['bio'] != ''){
                          echo $user['bio'];
                        } else {
                          echo "Hello world!";
                        } ?>
                      </p>
                    </div>
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
