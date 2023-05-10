<?php require_once("../resources/config.php"); ?> <!-- import config.php -->

<!DOCTYPE html>
<html lang="th-TH">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> [ชื่อเว็ป] </title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <?php include(TEMPLATE_FRONT . DS . "top_nav.php"); ?>
</nav>

<div class="container"> <!-- startContainer -->

  <div class="row">
      <?php include(TEMPLATE_FRONT . DS . "side_nav.php"); ?> <!-- include side_nav.php -->
  </div>

</div> <!-- endContainer -->



<div class="container"> <!-- startContainer -->
<!-- content here inside this! -->


<div id="page-wrapper"> <!-- startPageWrapper -->
<div class="container-fluid"> <!-- startContainer-->

<?php

if( $_SERVER['REQUEST_URI'] == "/ecom_durian/public/products.php") {
  include(TEMPLATE_FRONT . "/product_content.php");
}

if(isset($_GET['betel_nut'])){
  include(TEMPLATE_FRUIT . "/betel_nut.php");
}

if(isset($_GET['coconut'])){
  include(TEMPLATE_FRUIT . "/coconut.php");
}

if(isset($_GET['betel_leaf'])){
  include(TEMPLATE_FRUIT . "/betel_leaf.php");
}

if(isset($_GET['longan'])){
  include(TEMPLATE_FRUIT . "/longan.php");
}

if(isset($_GET['papaya'])){
  include(TEMPLATE_FRUIT . "/papaya.php");
}

if(isset($_GET['banana'])){
  include(TEMPLATE_FRUIT . "/banana.php");
}

if(isset($_GET['inca_bean'])){
  include(TEMPLATE_FRUIT . "/inca_bean.php");
}

?>


</div> <!-- endContainer-->
</div> <!-- endPageWrapper -->



</div> <!-- endContainer -->



<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
