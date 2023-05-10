<?php require_once("../../resources/config.php"); ?>

<?php include(TEMPLATE_BACK . "/header.php");?>

<?php

if(!isset($_SESSION['username'])){
  redirect("../admin.php");
}

?>

<div id="page-wrapper"> <!-- startPageWrapper -->
<div class="container-fluid"> <!-- endContainer -->

<?php

if($_SERVER['REQUEST_URI'] == "/ecom_durian/public/admin/" || $_SERVER['REQUEST_URI'] == "/ecom/public/admin/index.php") {
  include(TEMPLATE_BACK . "/admin_contents.php");
}
if(isset($_GET['contacts'])){
  include(TEMPLATE_BACK . "/user_contacts.php");
}
if(isset($_GET['add_order'])){
  include(TEMPLATE_BACK . "/add_order.php");
}
if(isset($_GET['orders'])){
  include(TEMPLATE_BACK . "/orders.php");
}
if(isset($_GET['edit_order'])){
  include(TEMPLATE_BACK . "/edit_order.php");
}
if(isset($_GET['completed_orders'])){
  include(TEMPLATE_BACK . "/completed_orders.php");
}
if(isset($_GET['slides'])){
  include(TEMPLATE_BACK . "/slides.php");
}
if(isset($_GET['delete_slide'])){
  include(TEMPLATE_BACK . "/delete_slide.php");
}
if(isset($_GET['images'])){
  include(TEMPLATE_BACK . "/images.php");
}




?>

</div> <!-- endContainer -->
</div> <!-- endPageWrapper -->


<?php include(TEMPLATE_BACK . "/footer.php");?>
