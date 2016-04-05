<?php


function gradePanel($grade)
{
  require("assignments.php");
    if ($grade['grade'] == 0){
      $color = 'danger';
    }
    elseif ($grade['grade'] == $assignments[$grade['name']]['max']){
      $color = 'success';
    }
    else {
      $color = 'warning';
    }
    echo "<div class=\"col-sm-3 col-xs-12\">
      <div class=\"panel panel-" . $color . "\">
      <!-- Panel heading -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">" . $grade['name'] . "</h3>
        </div>
        <!-- Panel body -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class=\"panel-body\">
          <!-- Content here -->
          <div class=\"col-xs-4\">
            <p><b>Grade: </b></p>
          </div>
          <div class=\"col-xs-8\">
            <p>" . $grade['grade'] . " / " . $assignments[$grade['name']]['max'] . "</p>
          </div>
        </div>
      </div>
    </div>";

}
?>
