<div class="row"> <!-- startRow -->


<h3 class="bg-success"><?php display_message(); ?></h3>

<div class="col-xs-3">

<form action="" method="post" enctype="multipart/form-data">

  <?php add_image(); ?>

  <div class="form-group">
    <input type="file" name="file">
  </div>
  <div class="form-group">
    <label for="title">Image Title</label>
    <input type="text" name="image_title" class="form-control">
  </div>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="add_image">
  </div>
</form>

</div>


<div class="col-xs-8">
  <?php get_current_image_in_admin() ?>
</div>
