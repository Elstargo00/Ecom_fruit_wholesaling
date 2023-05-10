<?php require_once("../resources/config.php"); ?> <!-- import config.php -->


<html lang="th-TH">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin Console </title>

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

</head>

<body>



<div class="container"> <!-- startContainer-->

<header>
  <h1 class="text-center">Login</h1>
  <h2 class="text-center bg-warning"> <?php display_message(); ?> </h2>
  <div class="col-sm-4 col-sm-offset-5">
    <form class="" action="" method="post" enctype="multipart/form-data">

      <?php login_admin(); ?>

      <div class="form-group"><label for="">
        Username<input type="text" name="username" class="form-control"></label>
      </div>
      <div class="form-group"><label for="password">
        Password<input type="password" name="password" class="form-control"></label>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary" >
      </div>

    </form>
  </div>
</header>


</div> <!-- endContainer -->

</body>
</html>
