<?php
session_start();
if(session_destroy())
{
  $msg = "로그아웃 하셨습니다.";
    echo "<script> if('$msg'!=''){
      alert('$msg');} location.href='../../index.php'; </script>'";
}

?>
