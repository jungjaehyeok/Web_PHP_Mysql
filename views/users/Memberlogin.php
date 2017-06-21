<?php
require_once ('../partials/config.php');


session_start();

$id = $_POST['id'];
$password = $_POST['pwd'];
$sql = "SELECT * FROM member WHERE id='$id' AND pwd='$password'";
$result = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result) ==1)
{
$name = $row['name'];
$_SESSION['id'] = $id;
$_SESSION['pwd'] = $password;
$_SESSION['name'] = $row['name'];
$_SESSION['phone'] = $row['phone'];
$_SESSION['email'] = $row['email'];
$msg = "$name 님 환영합니다.";
  echo "<script> if('$msg'!=''){
    alert('$msg');} location.href='/'; </script>";
}else
{
  $msg = "아이디 또는 비밀번호를 확인해주세요.";
    echo "<script> if('$msg'!=''){
      alert('$msg');} history.go(-1); </script>'";
}



?>
