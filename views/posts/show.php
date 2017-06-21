<?php
require_once ('../partials/config.php');
session_start();
$token = $_GET['token'];
$sql = "SELECT * FROM board WHERE token='$token'";
$result = mysqli_query($mysqli, $sql);
$row=mysqli_fetch_array($result);
$_SESSION['name']=$row['name'];
$_SESSION['title']=$row['title'];
$_SESSION['content']=$row['content'];
$_SESSION['pwd']=$row['pass'];


?>
<html>
  <head>
    <?php require_once ('../partials/head.php'); ?>
  </head>
  <body>
    <?php require_once ('../partials/nav.php'); ?>

    <div class="container user user-show">

      <div class="buttons">
        <a class="btn btn-default" href="./index.php">Back</a>
        <?php echo "<a class='btn btn-default' href='edit.php?token=$row[token]' type='submit'>Edit</a>" ?>
        <?php echo "<a class='btn btn-default' href='delete.php?token=$row[token]' type='submit'>Delete</a>" ?>
      </div>

      <div class="page-header">
        <h4><?php echo $row['title']; ?></h4>
      </div>
      <form class="post-form form-horizontal" method="post" action="./edit.php">
          <fieldset disabled>
            <div class="form-group">
              <label for="wdate" class="col-sm-3">작성일시</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" id="wdate" name="wdate" value="<?php echo $row['wdate'] ;?>">
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="col-sm-3">글쓴이</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" id="name" name="name" value="<?php echo $row['name'] ;?>">
              </div>
            </div>
            <div class="form-group">
              <label for="content" class="col-sm-3">내용</label>
              <div class="col-sm-9">
                <input class="form-control" id="content" name="content" rows='5' value="<?php echo $row['content'] ;?> ">
              </div>
            </div>
          </fieldset>


      </form>

    </div>  <!-- container end -->
    <?php require_once ('../partials/footer.php'); ?>
  </body>
  </html>
