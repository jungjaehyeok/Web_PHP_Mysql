<?php
session_start();
extract($_GET);
extract($_POST);
extract($_SERVER);
require_once ('../partials/config.php');
if($page=="") $page=1;
$sql_count="SELECT count(*) FROM board";
$result_count=mysqli_query($mysqli,$sql_count);
$result_row=mysqli_fetch_row($result_count);
$total_row = $result_row[0];
$sql = "SELECT * FROM board";
$result = mysqli_query($mysqli, $sql);

 ?>

<html>
  <head>
    <?php require_once ('../partials/head.php'); ?>
  </head>
  <body>

    <?php require_once ('../partials/nav.php'); ?>

    <div class="container post post-index">



      <div class="buttons">
        <a class="btn btn-default" href="./new.php">New</a>
      </div>
      <div class="page-header">
        <h1>자유게시판</h1>
      </div>
      <table class="table table-striped posts" style="text-align:center;">
        <thead>
          <tr>
            <th class="header" width="400" style="text-align:center;">제목</th>
            <th class="float_right"style="text-align:center;">작성자</th>
            <th class="float_right"style="text-align:center;">작성날짜</th>
          </tr>
        </thead>
        <tbody><?php if($total_row==0){ ?>
            <tr>
              <td class="noData" colspan=100> 게시물이 없습니다 :(  </td>
            </tr><?php }else{ ?>
            <?php
            while($row=mysqli_fetch_array($result)){
            ?>
             <tr>
              <td class="header" width="400">
                   <?php echo "<a href='show.php?token=$row[token]'>"; echo $row['title'];?></a>
              </td>
              <td class="float_right">
                <?php echo $row['name']; ?>
              </td>
              <td class="float_right">
              <?php echo $row['wdate'];?>
              </td>
            </tr><?php }}?>
        </tbody>
      </table>
    </div>  <!-- container end -->
      <?php require_once ('../partials/footer.php'); ?>
  </body>
</html>
