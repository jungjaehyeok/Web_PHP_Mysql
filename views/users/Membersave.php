<?php
require_once ('../partials/config.php');

$id = $_POST['id'];
$password = $_POST['pwd'];
$password2 = $_POST['pwd2'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
if($password==$password2){
 $sql = "insert into member (id, pwd, name, phone,email) values ('$id','$password','$name','$phone','$email')";
 if($mysqli->query($sql)){
   $msg = "$name 님 환영합니다.";
     echo "<script> if('$msg'!=''){
       alert('$msg');} location.href='login.php'; </script>";
 }else{
  echo 'fail to insert sql';
}}else{
  $msg = "패스워드를 다시 입력해 주세요.";
    echo "<script> if('$msg'!=''){
      alert('$msg');} history.go(-1); </script>";
}
?>
