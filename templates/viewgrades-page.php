<div class="boxed">

  <!--CONTENT CONTAINER-->
  <!--===================================================-->
  <div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
      <h1 class="page-header text-overflow">
        <?php if(isset($_GET['uid'])){
          echo $studentName;
        }
        else {
          echo '';
        } ?>
      </h1>

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
      <?php foreach($grades as $grade){?>
        <div class="col-sm-3 col-xs-12">
          <div class="panel panel-default">
          <!-- Panel heading -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="panel-heading">
              <h3 class="panel-title"><?=ucfirst($grade['type']) . ' ' . $grade['number'] . ': ' . $grade['name'] ?></h3>
            </div>
            <!-- Panel body -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="panel-body">
              <!-- Content here -->
              <div class="col-xs-4">
                <b>Grade: </b>
              </div>
              <div class="col-xs-8">
                <p><?= $grade['grade'] ?> / <?= $assignments[$grade['name']]['max'] ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php ;}?>
    </div>

    <!--===================================================-->
    <!--End page content-->


  </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->
