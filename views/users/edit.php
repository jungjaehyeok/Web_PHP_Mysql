<?php session_start();
$ses_id = $_SESSION['id'];
$ses_name = $_SESSION['name'];
?>
<html>
  <head>
    <?php require_once ('../partials/head.php'); ?>
  </head>
  <body>
    <?php require_once ('../partials/nav.php'); ?>

    <div class="container user user-edit">

      <div class="buttons">
        <a class="btn btn-default" href="./show.php">Back</a>
      </div>

      <form class="user-form form-horizontal" action="Memberedit.php" method="post">
        <div class="page-header">
          <h1>회원 수정</h1>
        </div>
          <fieldset disabled>
            <div class="form-group">
              <label class="col-sm-3 control-label" for="id">ID</label>
            <div class="col-sm-6">
              <input class="form-control" name="id" type="text" value="<?php echo $ses_id ?>">
            </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="name">Name</label>
              <div class="col-sm-6">
                <input class="form-control" name="name" type="text" value="<?php echo $ses_name ?>">
              </div>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label class="col-sm-3 control-label" for="currentpwd">Current Password</label>
            <div class="col-sm-6">
              <input class="form-control" name="Currentpwd" type="password" placeholder="현재 비밀번호">
            </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label" for="Newpwd">New Password</label>
            <div class="col-sm-6">
              <input class="form-control" name="Newpwd" type="password" placeholder="새로운 비밀번호">
            </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label" for="Newpwd2">Password Confirmation</label>
            <div class="col-sm-6">
              <input class="form-control" name="Newpwd2" type="password" placeholder="비밀번호 확인">
            </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="Newphone">Phone Number</label>
                  <div class="col-sm-6">
                      <input type="tel" class="form-control" name="Newphone" placeholder="- 없이 입력해 주세요" />
                  </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="Newemail">E-mail</label>
                  <div class="col-sm-6">
                      <input type="email" class="form-control" name="Newemail" placeholder="ex)OOOOO@naver.com"/>
                  </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12 text-center">
                <button class="btn btn-default" type="submit">수정하기</button>
                <a href="/"<button class="btn btn-default" >취소</button></a>
              </div>
            </div>
      </form>
    <?php require_once ('../partials/footer.php'); ?>
    </div> <!-- container end -->
  </body>
</html>
