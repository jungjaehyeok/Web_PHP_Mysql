<?php
require_once ('../partials/config.php');
session_start();
$ses_id = $_SESSION['id'];
$post_pwd =$_SESSION['pwd'];
$title=$_POST['newtitle'];
$content=$_POST['newcontent'];
$password=$_POST['pwd'];
$token=$_GET['token'];
$postname=$_SESIION['name'];
if($post_pwd==$password){
$sql = "UPDATE board SET title = '$title' ,content = '$content' WHERE token='$token'";
$result = mysqli_query($mysqli,$sql);
if(mysqli_num_rows($result)==0){
  $msg = "수정되었습니다.";
    echo "<script> if('$msg'!=''){
      alert('$msg');} location.href='index.php'; </script>'";
}}else
{$msg = "패스워드를 다시 입력해 주세요.";
  echo "<script> if('$msg'!=''){
    alert('$msg');} history.go(-1); </script>'";
}
?>
