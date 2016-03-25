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

      <?php if($user['is_admin'] == 1) : ?>
        <div class="row">
          <div class="col-sm-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Add Students</h3>
              </div>
              <div class="panel-body">
                <div style="color:red;">
                  <?= $formError ?>
                </div>
                <div style="color:green;">
                  <?= $formSuccess ?>
                </div>
                <div class="row">
                  <form action="grades.php" method="post">
        						<div class="form-group">
                      <div class="col-sm-9">
                        <div class="input-group">
          								<div class="input-group-addon"><i class="fa fa-user"></i></div>
          								<input type="email" class="form-control" name="email" placeholder="Student E-mail">
          							</div>
                      </div>
  								    <button class="btn btn-info text-uppercase pull-right" type="submit" name="submit" value="addStudent">Add Student</button>
    								</div>
        					</form>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <?php if($user['is_admin'] == 1) : ?>
        <div class="col-sm-6">
          <div class="panel panel-mint">
            <div class="panel-heading">
              <h3 class="panel-title">Input Grades</h3>
            </div>
            <div class="panel-body">

            </div>
          </div>
        </div>
      <?php endif; ?>

    </div>
    <!--===================================================-->
    <!--End page content-->


  </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->
