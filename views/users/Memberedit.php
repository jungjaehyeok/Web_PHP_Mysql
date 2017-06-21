<?php
require_once ('../partials/config.php');
session_start();
$ses_id=$_SESSION['id'];
$ses_pwd=$_SESSION['pwd'];
$pwd = $_POST['Currentpwd'];
$password = $_POST['Newpwd'];
$password2 = $_POST['Newpwd2'];
$phone = $_POST['Newphone'];
$email = $_POST['Newemail'];
if($password==$password2){
if($pwd==$ses_pwd){
$sql = "UPDATE member SET pwd = '$password' ,phone = '$phone ' ,email = '$email' WHERE id='$ses_id'";
$result = mysqli_query($mysqli,$sql);
if(mysqli_num_rows($result) ==0){
  header("location: ./show.php");
}}else
{
  $msg = "비밀번호를 확인해주세요.";
  echo "<script> if('$msg'!=''){
    alert('$msg');} history.go(-1); </script>'";
}}else{
  $msg = "새 비밀번호를 확인해주세요.";
    echo "<script> if('$msg'!=''){
      alert('$msg');} history.go(-1); </script>'";
}
?>
