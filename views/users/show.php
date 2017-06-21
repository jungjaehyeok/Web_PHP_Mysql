<?php session_start() ;
  $ses_id = $_SESSION['id'];
  $ses_name = $_SESSION['name'];
  $ses_phone = $_SESSION['phone'];
  $ses_email = $_SESSION['email'];
  ?>
<html>
  <head>
    <?php require_once ('../partials/head.php'); ?>
  </head>
  <body>
    <?php require_once ('../partials/nav.php'); ?>

    <div class="container user user-show">

      <div class="buttons">
        <a class="btn btn-default" href="/">Back</a>
        <a class="btn btn-default" href="./edit.php">Edit</a>
      </div>

      <form class="user-form form-horizontal" >
        <div class="page-header">
          <h1><?php echo $ses_id ?></h1>
        </div>
          <br>
          <fieldset disabled>
            <div class="form-group">
              <label for="name" class="col-sm-3">Name</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" id="name" name="name" value="<?php echo $ses_name ;?>">
              </div>
            </div>
            <div class="form-group">
              <label for="phone" class="col-sm-3">Phone Number</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" id="phone" name="phone" value="<?php echo $ses_phone ;?> ">
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-3">E-mail</label>
              <div class="col-sm-9">
                <input class="form-control" type="email" id="email" name="email" value="<?php echo $ses_email; ?> ">
              </div>
            </div>
          </fieldset>
        </div>
      </form>

    </div>
    <?php require_once ('../partials/footer.php'); ?>
  </body>
</html>
