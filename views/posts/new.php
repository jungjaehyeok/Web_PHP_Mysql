<?php
require_once ('../partials/config.php');
  session_start();
  $ses_name = $_SESSION['name'];
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
        <h3>새 게시글 <div class="float_right" style="font-size:15px">글쓴이:  <?php echo $ses_name ?></div></h3>
      </div>
      <form class="post-form form-horizontal" action="postsnew.php" method="post">
          <fieldset>
            <div class="form-group">
              <label for="title" class="col-sm-2 control-label">제목</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="title" name="title">
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label for="pwd" class="col-sm-2 control-label">비밀번호</label>
              <div class="col-sm-10">
                <input class="form-control" type="password" id="pwd" name="pwd">
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label for="content" class="col-sm-2 control-label">내용</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                  <span class="help-block"></span>
              </div>
            </div>
          </fieldset>

        <div class="buttons">
          <button type="submit" class="btn btn-default">저장하기</button>
        </div>

      </form>

    </div>  <!-- container end -->
    <?php require_once ('../partials/footer.php'); ?>
  </body>
</html>
