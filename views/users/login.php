<!DOCTYPE html>
<html>
  <head>
    <?php require_once ('../partials/head.php'); ?>
  </head>
  <body>
    <?php require_once ('../partials/nav.php'); ?>
    <div class="container">
        <div class="row"><div class"col-md-12">
          <div class="page-header">
            <h1>로그인</h1>
          </div>
        </div>
            <div class='col-md-3'></div>
            <div class="col-md-6">
                        <form method="post" action="Memberlogin.php" >

                            <div class="form-group">
                                <label class="control-label" for="id">ID</label>
                                <input class="form-control" name="id" placeholder="아이디" type="text"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="pwd">Password</label>
                                <input class="form-control" name="pwd" placeholder="비밀번호" type="Password"  />
                            </div>
                                <input type="submit" class="btn btn-default btn-login-submit btn-block m-t-md" value="Login" />
                                <p class="text-center m-t-xs text-sm">아직 회원이 아니세요?</p>
                                <a href="./new.php" class="btn btn-default btn-block m-t-md">Sign Up</a>
                        </form>

            </div>
            <div class='col-md-3'></div>
        </div>
    </div>
    <?php require_once ('../partials/footer.php'); ?>
  </body>
</html>
