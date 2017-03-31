<?php include "menu.php" ?>

<div class="container">
  <h2>Add new course</h2>
  <form class="form-horizontal" action="testing.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name_of_course">Name of course:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name_of_course" placeholder="Type the name of course">
      </div>
    </div>



    <div class="form-group">
      <label class="control-label col-sm-2" for="title_of_lesson">Title of lesson:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title_of_lesson" placeholder="Type the title of lesson">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="lesson_content">Lesson content:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="video_of_lesson" placeholder="Enter the video link">
      </div>
    </div>




    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="add_more_lesson" value="Add more lesson">
        <input type="submit" name="delete_previous_lesson" value="Delete Previous Lesson">
      </div>
    </div>

    <?php
    $btn=$_POST['add_more_lesson'];
    $index=0;
    if(isset($btn)){
      $index++;
      echo '<input type=\"text\" class=\"form-control\" id=\"video_of_lesson'.$index.'\" Placeholder=\"Enter the video link\">';

    }
    ?>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
<?php include "footer.php" ?>
