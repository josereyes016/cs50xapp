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

        <div class="col-md-12 col-xs-12">
          <!-- FORM -->
          <!--===================================================-->
            <div class="col-sm-6">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <?php if (isset($_GET['aid'])) {
                      echo "Edit: " . $announcementInfo['title'];
                    } else {
                      echo "Add Announcement";
                    }
                    ?>
                  </h3>
                </div>
                <div class="panel-body">
                  <div style="color:red;" class="text-center">
                    <?= $announcementError ?>
                  </div>
                  <div style="color:green;" class="text-center">
                    <?= $announcementSuccess ?>
                  </div>
                  <br />
                  <div class="row">
                    <form action="editannouncements.php" method="post" id="editAnnouncement">
                      <div class="form-group hidden">
                        <div class="input-group col-sm-12">
                          <label class="col-sm-3 control-label" for="announcementID">Announcement ID: </label>
                          <div class="col-sm-9">
                            <input type="text" name="announcementID" <?php if (isset($announcementInfo)){ echo 'value="' . $announcementInfo['id']. '"'; }?> >
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group col-sm-12">
                          <label class="col-sm-3 control-label" for="pset-selector">Title: </label>
                          <div class="col-sm-9">
                            <input type="text" name="title" <?php if (isset($announcementInfo)){ echo 'value="' . $announcementInfo['title']. '"'; }?> required>
                          </div>
                        </div>
                      </div>
                      <div>
                        <br/>
                        <div class="input-group col-sm-12">
                          <label class="col-sm-3 control-label" for="grade-input">Content: </label>
                          <div class="col-sm-9">
                            <input type="text" name="content" <?php if (isset($announcementInfo)){ echo 'value="' . $announcementInfo['content']. '"'; }?> required>
                          </div>
                        </div>
                        <br/>
                        <hr/>
                        <div>
                          <button class="btn btn-mint text-uppercase pull-right" type="submit" name="submit" value="editAnnouncement">
                            <?php if (isset($_GET['aid'])) {
                              echo 'Save';
                            } else {
                              echo 'Add';
                            }
                            ?>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          <div class="col-sm-6 col-xs-12">
            <div class="panel panel-mint">
            <!-- Panel heading -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
              <div class="panel-heading">
                <h3 class="panel-title">Announcement List</h3>
              </div>
              <!-- Panel body -->
              <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
              <!-- <div class="panel-body">
                  <p>Teachers and administrators</p>
              </div> -->
              <ul class="list-group">
                <?php foreach($announcements as $announcement){?>
                  <div class="list-group-item" style="height:150px;">
                      <div>
                        <div><b><?= $announcement['title'] ?></b></div>
                      </div>
                      <div>
                        <div><?= $announcement['content'] ?></div>
                      </div>
                    <a href="editannouncements.php?aid=<?= $announcement['id'] ?>&m=e"><button class="btn btn-xs btn-warning pad-all" style="margin:5px;"> Edit </button></a>
                    <a href="editannouncements.php?aid=<?= $announcement['id'] ?>&m=d"><button class="btn btn-xs btn-danger pad-all"> Delete </button></a>
                  </div>
                <?php ;}?>
              </ul>
            </div>
          </div>
          <!--===================================================-->
          <!-- END FORM -->
        </div>
      </div>

    </div>
    <!--===================================================-->
    <!--End page content-->


  </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->
