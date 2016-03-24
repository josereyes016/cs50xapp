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
        <div class="col-sm-8">
          <div class="panel panel-default">
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
