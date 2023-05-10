<?php require_once("../resources/config.php"); ?> <!-- import config.php -->

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?> <!-- include header.php -->

<div class="container"> <!-- startContainer -->

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
  <h4 class="text-center">ลูกค้าที่ประสงค์สั่งซื้อ<i>ไม่ถึงเกณฑ์</i> ปริมาณขั้นต่ำ ท่านสามารถรวมรายการ<br><br>
    กับลูกค้าท่านอื่นๆ ตามรายการที่แสดงข้างล่าง</h4>
  </div>
  <div class="col-md-3"></div>
</div>

<div class="row"> <hr> </div>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
  <table class="table table-hover">
    <thead>
    <tr>
      <th> หมายเลขรายการ </th>
      <th> ปริมาณ </th>
      <th> หน่วย </th>
    </tr>
    </thead>
    <tbody>
      <?php display_orders_touser(); ?>
    </tbody>
  </table>
</div>
<div class="col-md-3"></div>
</div>

</div> <!-- endContainer -->


<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
