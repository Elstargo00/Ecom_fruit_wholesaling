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
<!-- content here inside this! -->


<div class=caption>
<h2> เกี่ยวกับเรา </h2>
</div>

<div class="row">
  <div class="col-md-4">
    <?php echo display_image('เกี่ยวกับเรา1'); ?>
  </div>
  <div class="col-md-4">
    <?php echo display_image2('เกี่ยวกับเรา2'); ?>
  </div>
  <div class="col-md-4">
    <?php echo display_image(''); ?>
  </div>
</div>

<p><h4>
<br><br>
เราเป็นผู้ผลิตและให้บริการจัดส่งผลิตภัณฑ์ทางการเกษตร จำพวก ผัก ผลไม้ และวัตถุดิบต่างๆ <br><br>
ในปริมาณมาก ทั้งในและต่างประเทศ ส่งตรงจากสวนถึงมือท่าน โดยมีขั้นตอนการผลิต การเก็บเกี่ยว <br><br>
และการจัดเก็บที่เป็นมาตรฐาน
</p></h4>

</div> <!-- endContainer -->


<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
