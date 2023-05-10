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

<div class="row">

 <h3 class="text-center"> <?php display_message(); ?> </h3>


  <div class=caption>
  <h2> ติดต่อเรา </h2>
  </div>

  <h3> ฝากข้อความ </h3>
  <div class="col-md-6"> <!-- startInput -->

    <form action="" method="post" enctype="multipart/form-data">
    <div class="col-md-8">
    <div class="form-group">
    <label for="product-title"> วัตถุประสงค์ </label>
    <select name="purposes" id="" class="form-control">
    <option value=""> ระบุวัตถุประสงค์ของท่าน </option>
    <option value="สนใจซื้อสินค้า (โปรดระบุชนิด)"> สนใจซื้อสินค้า (โปรดระบุชนิด) </option>
    <option value="สอบถามข้อมูลเพิ่มเติม"> สอบถามข้อมูลเพิ่มเติม </option>
    <option value="อัพเดตข่าวสารล่าสุดจากเรา"> อัพเดตข่าวสารล่าสุดจากเรา </option>
    </select>
    </div>
    </div>
    <div class="col-md-8">
    <div class="form-group">
    <label for="product-title"> ชื่อ นามสกุล </label>
    <input type="text" name="user_name" class="form-control">
    </div>
    <label for="product-title"> อีเมล </label>
    <input type="email" name="user_email" class="form-control">
    </div>
    <div class="form-group row">
    <div class="col-xs-4">
    <label for="product-price">เบอร์โทรศัพท์</label>
    <input type="text" name="user_tel" class="form-control" size="60">
    </div>
    </div>
    <div class="form-group">
    <label for="product-title"> ข้อความ </label>
    <textarea name="user_message" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
    <input type="submit" name="send" class="btn btn-primary btn-lg" value="ส่ง">
    </div>
    </form>
    <?php user_contacts(); ?>

  </div><!-- endinput-->

  <div class="col-md-6"> <!-- startOutput -->

    <div class=caption>
      <h3> ข้อมูลติดต่อผู้ประกอบการ </h3>
      <ul>
        <li> <b>LINE ID:</b> panuwat.26 (คุณแฮ็ค) </li>
        <li> <a href="#" class="fa fa-facebook">acebook Page</a> </li>

      </ul>
    </div>

  </div>


</div>


</div> <!-- endContainer -->



<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
