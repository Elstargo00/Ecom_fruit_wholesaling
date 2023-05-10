<?php

ob_start(); //This about redirect

session_start(); //Turn on session

// session_destroy();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR); //define separator to display "/"

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front"); //define the path of front's template

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back"); // define the path of back's template

defined("TEMPLATE_FRUIT") ? null : define("TEMPLATE_FRUIT", __DIR__ . DS . "templates/fruit");

defined("UPLOAD_DIR") ? null : define("UPLOAD_DIR", __DIR__ . DS . "uploads");

defined("UPLOAD_SLI_DIR") ? null : define("UPLOAD_SLI_DIR", __DIR__ . DS . "slide_uploads");

defined("UPLOAD_IMG_DIR") ? null : define("UPLOAD_IMG_DIR", __DIR__ . DS . "image_uploads");



defined("DB_HOST") ? null : define("DB_HOST", "localhost"); //define "DB_HOST" = "localhost"

defined("DB_USER") ? null : define("DB_USER", "root"); //define "DB_USER" = "root"

defined("DB_PASS") ? null : define("DB_PASS", ""); //define "DB_PASS" = ""

defined("DB_NAME") ? null : define("DB_NAME", "ecom_durian"); //define = "DB_NAME" = "ecom_db"


$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

require_once("functions.php");



?>
