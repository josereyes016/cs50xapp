<div class="boxed">

  <!--CONTENT CONTAINER-->
  <!--===================================================-->
  <div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
      <h1 class="page-title text-overflow">
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
      <hr>

        <?php if(sizeof($pset0) > 0) : ?>
          <h3 class="page-header">Problem Set 0</h3>
        <?php endif;?>
      <div class="row">
        <?php
        foreach($pset0 as $grade){
          gradePanel($grade);
        }
        ?>
      </div>

        <?php if(sizeof($pset1) > 0) : ?>
          <h3 class="page-header">Problem Set 1</h3>
        <?php endif;?>
      <div class="row">
        <?php
        foreach($pset1 as $grade){
          gradePanel($grade);
        }
        ?>
      </div>

        <?php if(sizeof($pset2) > 0) : ?>
          <h3 class="page-header">Problem Set 2</h3>
        <?php endif;?>
      <div class="row">
        <?php
        foreach($pset2 as $grade){
          gradePanel($grade);
        }
        ?>
      </div>

        <?php if(sizeof($pset3) > 0) : ?>
          <h3 class="page-header">Problem Set 3</h3>
        <?php endif;?>
      <div class="row">
        <?php
        foreach($pset3 as $grade){
          gradePanel($grade);
        }
        ?>
      </div>

        <?php if(sizeof($pset4) > 0) : ?>
          <h3 class="page-header">Problem Set 4</h3>
        <?php endif;?>
      <div class="row">
        <?php
        foreach($pset4 as $grade){
          gradePanel($grade);
        }
        ?>
      </div>

        <?php if(sizeof($pset5) > 0) : ?>
          <h3 class="page-header">Problem Set 5</h3>
        <?php endif;?>
      <div class="row">
        <?php
        foreach($pset5 as $grade){
          gradePanel($grade);
        }
        ?>
      </div>

        <?php if(sizeof($pset6) > 0) : ?>
          <h3 class="page-header">Problem Set 6</h3>
        <?php endif;?>
      <div class="row">
        <?php
        foreach($pset6 as $grade){
          gradePanel($grade);
        }
        ?>
      </div>

        <?php if(sizeof($pset7) > 0) : ?>
          <h3 class="page-header">Problem Set 7</h3>
        <?php endif;?>
      <div class="row">
        <?php
        foreach($pset7 as $grade){
          gradePanel($grade);
        }
        ?>
      </div>

        <?php if(sizeof($pset8) > 0) : ?>
          <h3 class="page-header">Problem Set 8</h3>
        <?php endif;?>
      <div class="row">
        <?php
        foreach($pset8 as $grade){
          gradePanel($grade);
        }
        ?>
      </div>

        <?php if(sizeof($quizzes) > 0) : ?>
          <h3 class="page-header">Quizzes</h3>
        <?php endif;?>
      <div class="row">
        <?php
        foreach($quizzes as $grade){
          gradePanel($grade);
        }
        ?>
      </div>

        <?php if(sizeof($project) > 0) : ?>
          <h3 class="page-header">Project</h3>
        <?php endif;?>
      <div class="row">
        <?php
        foreach($project as $grade){
          gradePanel($grade);
        }
        ?>
      </div>

    </div>

    <!--===================================================-->
    <!--End page content-->


  </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->
