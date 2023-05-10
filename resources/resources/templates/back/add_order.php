<div class="row">
  <h1 class="page-header"> เขียนบันทึก ออเดอร์ </h1>
</div>

<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-5">
  <div class="form-group">
    <label for="product-title"> ชื่อรายการ </label>
    <input type="text" name="order_title" class="form-control">
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <div class="col-xs-3">
      <label for="order_quantity"> ปริมาณ </label>
      <input type="number" name="order_quantity" class="form-control" size="60">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-xs-3">
      <label for="order_unit"> หน่วย </label>
      <input type="text" name="order_unit" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-xs-3">
      <label for="order_price"> ราคาสุทธิรวม </label>
      <input type="number" name="order_price" class="form-control" size="60">
    </div>
  </div>
</div>

<div class="form-group row">
  <div class="col-xs-3">
    <select name="order_status" id="" class="form-control">
              <option value="">ประเภทออเดอร์</option>
              <option value="Placed"> Placed </option>
              <option value="Completed"> Completed </option>
    </select>
  </div>
</div>

<?php add_order(); ?>



<!-- SIDEBAR-->
<aside id="admin_sidebar" class="col-md-4">
  <div class="form-group">
    <input type="submit" name="save" class="btn btn-warning btn-lg" value="บันทึก">
  </div>
</aside><!--SIDEBAR-->


</form>
