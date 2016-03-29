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

      <?php if($user['is_admin'] == 1) : ?>
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
                <form action="grades.php" method="post" id="addStudent">
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
      <?php endif; ?>

      <?php if(!empty($_GET['uid'])) : ?>
        <div class="col-sm-6">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Add Grade</h3>
            </div>
            <div class="panel-body">
              <div style="color:red;">
                <?= $gradeError ?>
              </div>
              <div style="color:green;">
                <?= $gradeSuccess ?>
              </div>
              <div class="row">
                <form action="grades.php" method="post" id="addGrade">
                  <div class="form-group">
										<label class="col-sm-3 control-label" for="demo-hor-inputemail">Email</label>
										<div class="col-sm-9">
											<input type="email" placeholder="Email" id="demo-hor-inputemail" class="form-control">
											<span style="opacity: 1; left: 391px; top: 8px; width: 19px; min-width: 19px; height: 13px; position: absolute; border: none; display: inline; visibility: visible; z-index: auto; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAANCAYAAABLjFUnAAAACXBIWXMAAAsTAAALEwEAmpwYAAABMmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarZG9SsNQGIaf04qCQxAJbsLBQVzEn61j0pYiONQokmRrkkMVbXI4Of508ia8CAcXR0HvoOIgOHkJboI4ODgECU4i+EzP9w4vL3zQWPE6frcxB6PcmqDnyzCK5cwj0zQBYJCW2uv3twHyIlf8RMD7MwLgadXr+F3+xmyqjQU+gc1MlSmIdSA7s9qCuATc5EhbEFeAa/aCNog7wBlWPgGcpPIXwDFhFIN4BdxhGMXQAHCTyl3AtercArQLPTaHwwMrN1qtlvSyIlFyd1xaNSrlVp4WRhdmYFUGVPuq3Z7Wx0oGPZ//JYxiWdnbDgIQC5M6q0lPzOn3D8TD73fdMb4HL4Cp2zrb/4DrNVhs1tnyEsxfwI3+AvOlUD7FY+VVAAAAIGNIUk0AAHolAACAgwAA9CUAAITRAABtXwAA6GwAADyLAAAbWIPnB3gAAAECSURBVHjapNK9K8UBFIfxD12im8LEYLgZjcpgUFgUCUlZTJRkMpqUxR+hDFIGhWwGwy0MFiUxSCbZ5DXiYjnqdvvpvnim0+mcZ/ieU9U6tySBNEbQjBpMoANZnGIdl4VLKcm8YCPqbgzhAT1ox1mSrFpxjtCHLdygH5tJgymlMYhhtKH+r6FishYsYBpN0dvFHu5wi9okWToC/0AmcpqM+pd7PKMRDajDNb5xlS97Qyem0BsL8IT9uOAhXpGLvL/wGXO5fFkOO7FwHvJtLOOilGALM8vE1d6xiFVlkP8aXTjAI8bKFeXLBuJ3shjFiQpIYR6zWMFaXFOlsnHM4Ng/+RkAdVE2mEeC7WYAAAAASUVORK5CYII=&quot;); background-size: 19px 13px; background-position: 0px 0px; background-repeat: no-repeat;">
                      </span>
                    </div>
                    <div class="input-group">
                      <label class="col-sm-3 control-label" for="pset-selector">Assignment</label>
                      <div class="col-sm-9">
                        <select name="pset" form="addGrade" id="pset-selector">
                          <?php foreach ($assignments as $assignment) {?>
                            <option value="<?= $assignment['name'] ?>"><?= $assignment['name'] ?></option>
                          <?php;} ?>
                        </select>
                      </div>
                    </div>
                    <br/>
                    <div>
                      <button class="btn btn-mint text-uppercase pull-right" type="submit" name="submit" value="addGrade">Add Grade</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php endif;?>

      <?php if($user['is_admin'] == 1) : ?>
        <div class="col-sm-6 col-xs-12">
          <div class="panel panel-mint">
          <!-- Panel heading -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="panel-heading">
              <h3 class="panel-title">Student Roster</h3>
            </div>
            <!-- Panel body -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- <div class="panel-body">
                <p>Teachers and administrators</p>
            </div> -->
            <ul class="list-group">
              <?php foreach($students as $student){?>
                  <a class="list-group-item" href="grades.php?uid=<?=$student['id']?>">
                    <div>
                      <?= $student['fname'].' '.$student['lname'] ?>
                    </div>
                  </a>
              <?php ;}?>
            </ul>
          </div>
        </div>
      <?php endif; ?>

    </div>
    <!--===================================================-->
    <!--End page content-->


  </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->
