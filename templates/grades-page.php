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

      <?php if(!empty($_GET['uid'])  && $user['is_admin'] == 1) : ?>
        <div class="col-sm-6">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Add Grade: <?= $studentName ?> </h3>
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
                  <div class="form-group hidden">
                    <div class="input-group col-sm-12">
                      <label class="col-sm-3 control-label" for="id-input">Student ID: </label>
                      <div class="col-sm-9">
                        <input type="text" name="studentID" value="<?=$_GET['uid']?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group col-sm-12">
                      <label class="col-sm-3 control-label" for="pset-selector">Assignment: </label>
                      <div class="col-sm-9">
                        <select name="pset" form="addGrade" id="pset-selector" class="selectpicker" required>
                          <?php foreach ($assignments as $assignment) {?>
                            <option value="<?= $assignment['name'] ?>"><?= $assignment['name'] ?></option>
                          <?php;} ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div>
                    <br/>
                    <div class="input-group col-sm-12">
                      <label class="col-sm-3 control-label" for="grade-input">Grade: </label>
                      <div class="col-sm-9">
                        <input type="number" name="grade" step="0.01" min="0" max="100" required>
                      </div>
                    </div>
                    <br/>
                    <hr/>
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
                    	<div class="col-xs-9">
                      		<div class="input-group">
        						<input type="email" class="form-control" name="email" placeholder="Student E-mail">
        	      			</div>
                    	</div>
		    			<button class="btn btn-info text-uppercase col-xs-3" type="submit" name="submit" value="addStudent" style="font-size:16px; padding:3px;">+</button>
  					</div>
      			</form>
              </div>
              <div class="row">
                <form action="grades.php" method="post" id="addStudents">
      				<div class="form-group">
                    	<div class="col-xs-9">
                      		<div class="input-group">
        						<textarea wrap='soft' class="form-control" name="emails" placeholder="Student E-mails"></textarea>
        	      			</div>
                    	</div>
		    			<button class="btn btn-info text-uppercase col-xs-3" type="submit" name="submit" value="addStudents" style="font-size:16px; padding:3px;">+</button>
  					</div>
      			</form>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

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
                <div class="list-group-item">
                  <a class="col-xs-11" href="grades.php?uid=<?=$student['id']?>">
                    <div>
                      <div><?= $student['fname'].' '.$student['lname'] ?></div>
                    </div>
                  </a>
                  <a href="viewgrades.php?uid=<?= $student['id'] ?>"><button class="btn btn-xs btn-default pad-all"> > </button></a>
                </div>
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
