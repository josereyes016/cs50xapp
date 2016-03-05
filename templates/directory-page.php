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

      <div class="col-sm-6 col-xs-12">
        <div class="panel panel-info">
        <!-- Panel heading -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <div class="panel-heading">
            <h3 class="panel-title">Administrators</h3>
          </div>
          <!-- Panel body -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <!-- <div class="panel-body">
              <p>Teachers and administrators</p>
          </div> -->
          <ul class="list-group">
            <?php foreach($admins as $admin){?>
                <a class="list-group-item" href="profile.php?uid=<?=$admin['id']?>">
                  <div>
                    <?= $admin['fname'].' '.$admin['lname'] ?>
                  </div>
                </a>
            <?php ;}?>
          </ul>
        </div>
      </div>

      <div class="col-sm-6 col-xs-12">
        <div class="panel panel-mint">
        <!-- Panel heading -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <div class="panel-heading">
            <h3 class="panel-title">Students</h3>
          </div>
          <!-- Panel body -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <!-- <div class="panel-body">
              Content here
          </div> -->
          <ul class="list-group">
            <?php foreach($students as $student){?>
                <a class="list-group-item" href="profile.php?uid=<?=$student['id']?>">
                  <div>
                    <?= $student['fname'].' '.$student['lname'] ?>
                  </div>
                </a>
            <?php ;}?>
          </ul>
        </div>
      </div>

    </div>
    <!--===================================================-->
    <!--End page content-->


  </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->
