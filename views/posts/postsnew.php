<?php
require_once ('../partials/config.php');

session_start();
$ses_name = $_SESSION['name'];
$password = $_POST['pwd'];
$title = $_POST['title'];
$content = $_POST['content'];
 $sql = "insert into board (name, pass, title,content,wdate) values ('$ses_name','$password','$title','$content',now())";
 if($mysqli->query($sql)){
  header("location: ./index.php");
 }
?>
