<?php

if(isset($_GET['id'])){

$order_query = query(" SELECT * FROM order_info WHERE order_id = " .escape_string($_GET['id']). " ");
confirm($order_query);

while($row = fetch_array($order_query)){

$order_title       = escape_string($row['order_title']);
$order_quantity    = escape_string($row['order_quantity']);
$order_unit        = escape_string($row['order_unit']);
$order_price       = escape_string($row['order_price']);
$order_status      = escape_string($row['order_status']);

}

edit_order();

}

?>


<div class="row">
  <h1 class="page-header"> แก้ไข ออเดอร์ </h1>
</div>

<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-5">
  <div class="form-group">
    <label for="product-title"> ชื่อรายการ </label>
    <input type="text" name="order_title" class="form-control" value="<?php echo $order_title; ?>">
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <div class="col-xs-3">
      <label for="order_quantity"> ปริมาณ </label>
      <input type="number" name="order_quantity" class="form-control" size="60" value="<?php echo $order_quantity; ?>">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-xs-3">
      <label for="order_unit"> หน่วย </label>
      <input type="text" name="order_unit" class="form-control" value="<?php echo $order_unit; ?>">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-xs-3">
      <label for="order_price"> ราคาสุทธิรวม </label>
      <input type="number" name="order_price" class="form-control" size="60" value="<?php echo $order_price; ?>">
    </div>
  </div>
</div>

<div class="form-group row">
  <div class="col-xs-3">
    <select name="order_status" id="" class="form-control">
              <option value="<?php echo $order_status; ?>"> ประเภทออเดอร์ </option>
              <option value="Placed"> Placed </option>
              <option value="Completed"> Completed </option>
    </select>
  </div>
</div>





<!-- SIDEBAR-->
<aside id="admin_sidebar" class="col-md-4">
  <div class="form-group">
    <input type="submit" name="change" class="btn btn-warning btn-lg" value="เปลี่ยนแปลง">
  </div>
</aside><!--SIDEBAR-->


</form>
