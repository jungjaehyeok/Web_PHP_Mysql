<?php
require_once ('../partials/config.php');
session_start();
$token=$_GET['token'];
$sql = "SELECT * FROM board WHERE token='$token'";
$result = mysqli_query($mysqli, $sql);
$row=mysqli_fetch_array($result);

?>

<html>
  <head>
    <?php require_once ('../partials/head.php'); ?>
  </head>
  <body>
    <?php require_once ('../partials/nav.php'); ?>

    <div class="container post post-new">
      <div class="buttons">
        <a class="btn btn-default" href="index.php">Back</a>
      </div>
      <div class="page-header">
        <h3>Edit <div class="float_right" style="font-size:15px">글쓴이:  <?php echo $row['name']?></div></h3>
      </div>
      <?php echo "<form class='post-form form-horizontal' action='postsedit.php?token=$row[token]' method='post'>" ?>
          <fieldset>
            <div class="form-group">
              <label for="newtitle" class="col-sm-2 control-label">제목</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="newtitle" value="<?php echo $row['title']; ?>">
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label for="pwd" class="col-sm-2 control-label">비밀번호</label>
              <div class="col-sm-10">
                <input class="form-control" type="password" name="pwd">
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label for="newcontent" class="col-sm-2 control-label">내용</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="newcontent" rows="5" value="<?php echo $row['content']; ?>">
                  <span class="help-block"></span>
              </div>
            </div>
          </fieldset>

        <div class="buttons">
          <button type="submit" class="btn btn-default">수정하기</button>
        </div>

      </form>

    </div>  <!-- container end -->
    <?php require_once ('../partials/footer.php'); ?>
  </body>
</html>
