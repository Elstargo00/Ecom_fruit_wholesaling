<div class="row">
  <h1 class="page-header"> รายการออเดอร์ </h1>
  <h4 class="bg-success"> <?php display_message(); ?> </h4>
</div>

<div class="row">
  <table class="table table-hover">
  <thead>
  <tr>
    <th> id </th>
    <th> ชื่อรายการ </th>
    <th> ปริมาณ </th>
    <th> หน่วย </th>
    <th> ราคาสุทธิรวม </th>
    <th> สถานะ </th>
  </tr>
  </thead>
  <tbody>
    <?php display_completed_orders(); ?>
  </tbody>
  </table>
</div>
