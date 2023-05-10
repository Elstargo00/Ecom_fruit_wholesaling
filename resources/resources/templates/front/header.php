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
    <div class="col-md-2">
      <?php include(TEMPLATE_FRONT . DS . "side_nav.php"); ?> <!-- include side_nav.php -->
    </div>
    <div class="col-md-9">
      <div class="row carousel-holder">
        <div class="col-md-10">
          <?php include(TEMPLATE_FRONT . DS . "slider.php"); ?> <!-- include slider.php -->
        </div>
      </div>
    </div>
  </div>

</div> <!-- endContainer -->
