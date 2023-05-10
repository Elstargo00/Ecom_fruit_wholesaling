<?php require_once("../../resources/config.php");

if(isset($_GET['delete_slide'])){

$slide_query = query("DELETE FROM slides WHERE slide_id = " . escape_string($_GET['delete_slide']) . " ");
confirm($slide_query);

set_message("สไลด์ ได้ถูกลบ");
redirect("index.php?slides");

} else {

redirect("index.php?slides");




}
