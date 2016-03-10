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

      <div class="col-sm-8 col-sm-offset-2 col-xs-12">
        <div class="panel panel-mint">
        <!-- Panel heading -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <div class="panel-heading">
            <h3 class="panel-title">Privacy</h3>
          </div>
          <!-- Panel body -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <div class="panel-body">
              <!-- Content here -->
              <p>
                By default, all contact info that you enter into your profile is public.
                If you'd like to limit your info to only be viewable to admins such as TFs and Sari, please use the form below.
                If you don't want anyone to view your info, you can delete the information from your profile by using the "Edit Profile" button on your profile page.
              </p>
              <hr class="hr-sm">
              <form action="../settings.php" method="POST">
                <div class="form-group pad-ver">
                  <div class="col-md-12">
                    <div class="col-md-6 pad-no form-block">
                      <!-- Icon Checkboxes -->
                      <div class="checkbox">
                        <label class="form-checkbox form-icon form-text"><input type="checkbox" name="phone-admin" checked=""> Phone</label>
                      </div>
                    </div>
                    <div class="col-md-6 pad-no form-block">
                      <!-- Icon Checkboxes -->
                      <div class="checkbox">
                        <label class="form-checkbox form-icon form-text"><input type="checkbox" name="email-admin" checked=""> E-mail</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6 pad-no form-block">
                      <!-- Icon Checkboxes -->
                      <div class="checkbox">
                        <label class="form-checkbox form-icon form-text"><input type="checkbox" name="facebook-admin" checked=""> Facebook</label>
                      </div>
                    </div>
                    <div class="col-md-6 pad-no form-block">
                      <!-- Icon Checkboxes -->
                      <div class="checkbox">
                        <label class="form-checkbox form-icon form-text"><input type="checkbox" name="twitter-admin" checked=""> Twitter</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6 pad-no form-block">
                      <!-- Icon Checkboxes -->
                      <div class="checkbox">
                        <label class="form-checkbox form-icon form-text"><input type="checkbox" name="google-admin" checked=""> Google+</label>
                      </div>
                    </div>
                    <div class="col-md-6 pad-no form-block">
                      <!-- Icon Checkboxes -->
                      <div class="checkbox">
                        <label class="form-checkbox form-icon form-text"><input type="checkbox" name="linkedin-admin" checked=""> LinkedIn</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="hr-sm">
                <div class="col-xs-12">
                  <button class="btn btn-mint" type="submit" name="submit" value="submit">Save Settings</button>
                </div>
              </form>
          </div>
        </div>
      </div>

    </div>
    <!--===================================================-->
    <!--End page content-->


  </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->
