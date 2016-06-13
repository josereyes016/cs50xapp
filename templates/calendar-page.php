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

      <div class="responsive-iframe-container">
            <iframe src="https://calendar.google.com/calendar/embed?src=02r6c0anpj2bgtuhh4tcnv66b0%40group.calendar.google.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
      </div>

      <script type='text/javascript'>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                googleCalendarApiKey: '63670088644-73hoahjd15tcrtqne5opj0vstghpe1qv.apps.googleusercontent.com',
                events: {
                    googleCalendarId: 'cs50xmiami@gmail.com'
                }
            });
        });
      </script>

    </div>
    <!--===================================================-->
    <!--End page content-->


  </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->
