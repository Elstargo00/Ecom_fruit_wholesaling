<?php

//********** queryFunction

function query($sql){
// build function to keep query correspoding to ecom_db

global $connection; //using globals, to make it know that it's the same value using in config.php
return mysqli_query($connection, $sql);
}


function confirm($query){

global $connection;
if(!$query){
  die("QUERY FAILED" . mysqli_error($connection));
}
}


function escape_string($string){
//create a legal SQL string that can be used in an SQL statement

global $connection;
return mysqli_real_escape_string($connection, $string);
}


function fetch_array($query){
//fetch query from database into array form

return mysqli_fetch_array($query);
}


//********** endQueryFunction


//********** helperFunction

function set_message($msg){
//set the message

if(!empty($msg)) {
  $_SESSION['message'] = $msg;
} else {
  $msg = "";
}
}

function display_message() {
//display the message

if(isset($_SESSION['message'])){
  echo $_SESSION['message'];
  unset($_SESSION['message']);
}
}


function redirect($location){
//redirect to new location

header("Location: $location");
}

//********** endHelperFunction



//********** systemFunction

function login_admin(){
//for checking admin to login

if(isset($_POST['submit'])){
  $username = htmlspecialchars(escape_string($_POST['username']), ENT_QUOTES);
  $password = htmlspecialchars(escape_string($_POST['password']), ENT_QUOTES);

  $admin_query = query("SELECT * FROM admin_info WHERE admin_name = '{$username}' AND admin_password = '{$password}' ");
  // $admin_query = query("SELECT * FROM admin_info WHERE admin_name = ' ';DROP TABLE hack_this;--' AND admin_password = '{$password}' ");
  confirm($admin_query);

  if(mysqli_num_rows($admin_query) == 0){
    redirect("admin.php");
    set_message("Your username or password are wrong");
  } else {
    $_SESSION['username'] = $username;
    redirect("admin");
  }
}
}

function user_contacts(){

if(isset($_POST['send'])){

$user_purpose =   htmlspecialchars(escape_string($_POST['purposes']), ENT_QUOTES);
$user_name    =   htmlspecialchars(escape_string($_POST['user_name']), ENT_QUOTES);
$user_email   =   htmlspecialchars(escape_string($_POST['user_email']), ENT_QUOTES);
$user_tel     =   htmlspecialchars(escape_string($_POST['user_tel']), ENT_QUOTES);
$user_message =   htmlspecialchars(escape_string($_POST['user_message']), ENT_QUOTES);

$contact_query = query(" INSERT INTO user_contact(user_purpose, user_name, user_email, user_tel, user_message) VALUES('{$user_purpose}','{$user_name}','{$user_email}',
  '{$user_tel}','{$user_message}') ");

confirm($contact_query);

if(!$contact_query) {
  set_message("ขออภัยเกิดข้อผิดพลาดบางอย่าง เราไม่สามารถส่งข้อความของคุณ");
  redirect("contact.php?id=f");
} else {
  set_message("ข้อความของคุณได้ถูกส่งแล้ว");
  redirect("contact.php?id=s");
}
}
}


function display_contacts(){

$contact_query = query(" SELECT * FROM user_contact ORDER BY user_id DESC ");

while($row = fetch_array($contact_query)) {
$messages = <<<DELIMETER
<tr>
  <td>{$row['user_id']}</td>
  <td>{$row['user_purpose']}</td>
  <td>{$row['user_name']}</td>
  <td>{$row['user_tel']}</td>
  <td>{$row['user_email']}</td>
  <td>{$row['user_message']}</td>
</tr>
DELIMETER;
echo $messages;
}
}

function add_order() {

if(isset($_POST['save'])) {
  $order_title      = escape_string($_POST['order_title']);
  $order_quantity   = escape_string($_POST['order_quantity']);
  $order_unit       = escape_string($_POST['order_unit']);
  $order_price      = escape_string($_POST['order_price']);
  $order_status     = escape_string($_POST['order_status']);

$order_query = query(" INSERT INTO order_info(order_title, order_quantity, order_unit, order_price, order_status)
VALUES('{$order_title}','{$order_quantity}','{$order_unit}','{$order_price}','{$order_status}') ");

confirm($order_query);
set_message("ออเดอร์ใหม่ ได้ถูกเพิ่มเข้ามา");
redirect("index.php?orders");
}
}


function display_orders(){

$order_query = query(" SELECT * FROM order_info ORDER BY order_id DESC");

while($row = fetch_array($order_query)) {
$orders = <<<DELIMETER
<tr>
  <td>{$row['order_id']}</td>
  <td><a href="index.php?edit_order&id={$row['order_id']}">{$row['order_title']}</a></td>
  <td>{$row['order_quantity']}</td>
  <td>{$row['order_unit']}</td>
  <td>{$row['order_price']}</td>
  <td>{$row['order_status']}</td>

</tr>
DELIMETER;
echo $orders;
}
}



function display_completed_orders(){

$order_query = query(" SELECT * FROM order_info WHERE order_status='Completed' ORDER BY order_id DESC");

while($row = fetch_array($order_query)) {
$orders = <<<DELIMETER
<tr>
  <td>{$row['order_id']}</td>
  <td><a href="index.php?edit_order&id={$row['order_id']}">{$row['order_title']}</a></td>
  <td>{$row['order_quantity']}</td>
  <td>{$row['order_unit']}</td>
  <td>{$row['order_price']}</td>
  <td>{$row['order_status']}</td>

</tr>
DELIMETER;
echo $orders;
}
}




function edit_order(){

if(isset($_POST['change'])) {

$order_title       = escape_string($_POST['order_title']);
$order_quantity    = escape_string($_POST['order_quantity']);
$order_unit        = escape_string($_POST['order_unit']);
$order_price       = escape_string($_POST['order_price']);
$order_status      = escape_string($_POST['order_status']);

$order_query = "UPDATE order_info SET ";
$order_query .= "order_title         = '{$order_title}'         , ";
$order_query .= "order_quantity      = '{$order_quantity}'      , ";
$order_query .= "order_unit          = '{$order_unit}'          , ";
$order_query .= "order_price         = '{$order_price}'         , ";
$order_query .= "order_status        = '{$order_status}'          ";
$order_query .= "WHERE order_id=" . escape_string($_GET['id']);

$send_edit_order_query = query($order_query);

confirm($send_edit_order_query);
set_message("ออเดอร์ได้ถูกแก้ไขแล้ว");

redirect("index.php?orders");
}
}



function add_slide(){
//add slide to the system

if(isset($_POST['add_slide'])){
$slide_title     = escape_string($_POST['slide_title']);
$slide_image     = escape_string($_FILES['file']['name']);
$slide_image_loc = escape_string($_FILES['file']['tmp_name']);

if(empty($slide_title) || empty($slide_image)){

echo "<p class='bg-danger'> กรอกข้อมูลให้ครบถ้วน </p>";

} else {

move_uploaded_file($slide_image_loc, UPLOAD_SLI_DIR . DS . $slide_image);
$slide_query = query(" INSERT INTO slides(slide_title,slide_image) VALUES('{$slide_title}','{$slide_image}') ");
confirm($slide_query);
set_message("สไลด์ ได้ถูกเพิ่มเข้ามา");
redirect("index.php?slides");
}
}
}


function get_current_slide_in_admin(){

$slide_query = query(" SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1 ");
confirm($slide_query);

while($row = fetch_array($slide_query)){

$slide_active_admin = <<<DELIMETER
<img width="300" class="img-responsive" src="../../resources/slide_uploads/{$row['slide_image']}" alt="">
DELIMETER;

echo   $slide_active_admin;
}
}



function get_active_slide(){

$slide_query = query(" SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1 ");
confirm($slide_query);

while($row = fetch_array($slide_query)){

$active_slide = <<<DELIMETER
<div class="item active">
<img class="slide-image" src="../resources/slide_uploads/{$row['slide_image']}" alt="">
</div>
DELIMETER;

echo   $active_slide;
}
}


function get_slide(){
//get all slides

$slide_query = query(" SELECT * FROM slides ");
confirm($slide_query);

while($row = fetch_array($slide_query)) {

$slide = <<<DELIMETER
<div class="item">
<img class="slide-image" src="../resources/slide_uploads/{$row['slide_image']}" alt="">
</div>
DELIMETER;

echo $slide;
}
}


function get_slide_thumbnails(){

$slide_query = query(" SELECT * FROM slides ORDER BY slide_id ASC ");
confirm($slide_query);

while($row = fetch_array($slide_query)){

$slide_thumb = <<<DELIMETER
<div class="col-xs-6 col-md-3">
<a href="index.php?delete_slide={$row['slide_id']}">
<img width="100" class="img-responsive slide_image" src="../../resources/slide_uploads/{$row['slide_image']}" alt="" >
</a>
</div>
DELIMETER;

echo   $slide_thumb;
}
}

function add_image(){
//add slide to the system

if(isset($_POST['add_image'])){
$image_title     = escape_string($_POST['image_title']);
$image_image     = escape_string($_FILES['file']['name']);
$image_image_loc = escape_string($_FILES['file']['tmp_name']);

if(empty($image_title) || empty($image_image)){

echo "<p class='bg-danger'> กรอกข้อมูลให้ครบถ้วน </p>";

} else {

move_uploaded_file($image_image_loc, UPLOAD_IMG_DIR . DS . $image_image);
$image_query = query(" INSERT INTO images(image_title,image_image) VALUES('{$image_title}','{$image_image}') ");
confirm($image_query);
set_message("รูปภาพ ได้ถูกเพิ่มเข้ามา");
redirect("index.php?images");
}
}
}



function display_image($image_title){

$image_query = query(" SELECT image_image FROM images WHERE image_title= '$image_title' ");
confirm($image_query);
$row = fetch_array($image_query);

  echo "<img width='300' src='../resources/image_uploads/{$row[0]}' alt=''>" ;
}

function display_image2($image_title){

$image_query = query(" SELECT image_image FROM images WHERE image_title= '$image_title' ");
confirm($image_query);
$row = fetch_array($image_query);

  echo "<img width='225' src='../resources/image_uploads/{$row[0]}' alt=''>" ;
}

function display_image3($image_title){

$image_query = query(" SELECT image_image FROM images WHERE image_title= '$image_title' ");
confirm($image_query);
$row = fetch_array($image_query);

  echo "<img width='150' src='../resources/image_uploads/{$row[0]}' alt=''>" ;
}





function get_current_image_in_admin(){

$image_query = query(" SELECT * FROM images ORDER BY image_id DESC LIMIT 1 ");
confirm($image_query);

while($row = fetch_array($image_query)){

$image_active_admin = <<<DELIMETER
<img width="300" class="img-responsive" src="../../resources/image_uploads/{$row['image_image']}" alt="">
DELIMETER;

echo   $image_active_admin;
}
}


function display_orders_touser(){

$order_query = query(" SELECT * FROM order_info WHERE order_status='Placed' ORDER BY order_id DESC");

while($row = fetch_array($order_query)) {
$orders = <<<DELIMETER
<tr>
  <td>{$row['order_id']}</td>
  <td>{$row['order_quantity']}</td>
  <td>{$row['order_unit']}</td>
</tr>
DELIMETER;
echo $orders;
}
}

//********** endSystemFunction


?>
