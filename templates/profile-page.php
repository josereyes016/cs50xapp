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

                      <h4 class="text-lg text-overflow mar-no"><?= $profileData['fname'] . ' ' . $profileData['lname'] ?></h4>
                      <p class="text-sm"><?php
                        if($profileData['is_admin'] == 0){
                          echo 'Student';
                        }
                        elseif($profileData['is_admin'] == 1){
                          echo 'Teaching Fellow';
                        }
                        ?>
                      </p>
                      <div class="pad-ver btn-group">
                        <?php if(isset($profileData['facebook']) && $profileData['facebook'] != '' && ($user['is_admin'] == 1 || $profilePrivacy['facebook'] == 0 || $profileData['id'] == $user['id'])) : ?>
                              <a target="_blank" title="" href="<?= $profileData['facebook'] ?>" class="btn btn-icon btn-hover-primary fa fa-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                        <?php endif; ?>
                        <?php if(isset($profileData['twitter']) && $profileData['twitter'] != '' && ($user['is_admin'] == 1 || $profilePrivacy['twitter'] == 0 || $profileData['id'] == $user['id'])) : ?>
                              <a target="_blank" title="" href="<?= $profileData['twitter'] ?>" class="btn btn-icon btn-hover-info fa fa-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                        <?php endif; ?>
                        <?php if(isset($profileData['google']) && $profileData['google'] != '' && ($user['is_admin'] == 1 || $profilePrivacy['google'] == 0 || $profileData['id'] == $user['id'])) : ?>
                              <a target="_blank" title="" href="<?= $profileData['google'] ?>" class="btn btn-icon btn-hover-danger fa fa-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                        <?php endif; ?>
                        <?php if(isset($profileData['linkedin']) && $profileData['linkedin'] != '' && ($user['is_admin'] == 1 || $profilePrivacy['linkedin'] == 0 || $profileData['id'] == $user['id'])) : ?>
                              <a target="_blank" title="" href="<?= $profileData['linkedin'] ?>" class="btn btn-icon btn-hover-primary fa fa-linkedin icon-lg add-tooltip" data-original-title="LinkedIn" data-container="body"></a>
                        <?php endif; ?>
                      </div>
                    </div>
                    <?php if($profileData['id'] == $user['id']) : ?>
                      <a href="editprofile.php"><button class="btn btn-block btn-success">Edit</button></a>
                    <?php endif; ?>
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
                      <?php if(isset($profileData['phone']) && $profileData['phone'] != '' && ($user['is_admin'] == 1 || $profilePrivacy['phone'] == 0 || $profileData['id'] == $user['id'])) : ?>
                        <li class="list-group-item list-item-sm">
                          <a href="tel:+1<?=preg_replace('/\D/', '', $profileData['phone'])?>"><i class="fa fa-phone fa-fw"></i> <?= $profileData['phone'] ?></a>
                        </li>
                      <?php endif; ?>
                      <?php if(isset($profileData['slack']) && $profileData['slack'] != '') : ?>
                        <li class="list-group-item list-item-sm">
                          <a target="_blank" href="https://cs50xmiami.slack.com/messages/<?=$profileData['slack']?>/"><i class="fa fa-slack fa-fw"></i> <?= $profileData['slack'] ?></a>
                        </li>
                      <?php endif; ?>
                      <!-- <li class="list-group-item list-item-sm">
                        <i class="fa fa-clock-o fa-fw"></i> Member since 1 years ago
                      </li> -->
                      <?php if($user['is_admin'] == 1 || $profilePrivacy['email'] == 0 || $profileData['id'] == $user['id']) : ?>
                        <li class="list-group-item list-item-sm">
                          <a href="mailto:<?=$profileData['email']?>"><i class="fa fa-envelope fa-fw"></i> <?= $profileData['email'] ?></a>
                        </li>
                      <?php endif; ?>
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
                        <?php if($profileData['bio'] != NULL && $profileData['bio'] != ''){
                          echo $profileData['bio'];
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
