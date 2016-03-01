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

      <!-- FORM VALIDATION ON ACCORDION -->
      <!--===================================================-->
      <form id="bv-accordion" class="form-horizontal" action="#" method="post">
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
                  <label class="col-lg-3 control-label">Username</label>
                  <div class="col-lg-7">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Email address</label>
                  <div class="col-lg-7">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Password</label>
                  <div class="col-lg-7">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel">

            <!-- Accordion title -->
            <div class="panel-heading">
              <h4 class="panel-title">
              <a data-parent="#accordion" data-toggle="collapse" href="#acc-panel-2"><i class="fa"></i> Information</a>
              </h4>
            </div>

            <!-- Accordion content -->
            <div id="acc-panel-2" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-3 control-label">Full name</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="firstName" placeholder="First name">
                  </div>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="lastName" placeholder="Last name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Member type</label>
                  <div class="col-lg-7">
                    <div class="radio">
                      <label class="form-radio form-icon">
                        <input type="radio" name="memberType" value="free"> Free
                      </label>

                      <label class="form-radio form-icon">
                        <input type="radio" name="memberType" value="personal"> Personal
                      </label>

                      <label class="form-radio form-icon">
                        <input type="radio" name="memberType" value="bussines"> Bussiness
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Bio</label>
                  <div class="col-lg-7">
                    <textarea class="form-control" name="bio" rows="7" placeholder="Tell us your story..."></textarea>
                  </div>
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
            <div id="acc-panel-3" class="panel-collapse collapse in">
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-3 control-label">Phone number</label>
                  <div class="col-lg-7">
                    <input type="text" class="form-control" name="phoneNumber" placeholder="Phone number">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">City</label>
                  <div class="col-lg-7">
                    <input type="text" class="form-control" name="city" placeholder="City">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-7 col-lg-offset-3">
                    <button type="submit" class="btn btn-primary btn-labeled fa fa-user fa-lg" name="signup" value="Sign up">Sign up</button>
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
    <!--===================================================-->
    <!--End page content-->


  </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->
