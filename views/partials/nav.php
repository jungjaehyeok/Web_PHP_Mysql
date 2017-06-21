<?php session_start() ?>
<nav class="navbar navbar-inverse">
<div class="container-fluid" >
  <div class="navbar-header" >
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/" target="main">개인블로그</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <script>function fnclick(){alert("로그인해주세요.");}</script>
      <?php if (!isset($_SESSION["id"])){

    ?><li><a href="/views/users/login.php" onclick="javascript:fnclick()">자유게시판</a></li>
    <?php } else{ ?>
      <li><a href="/views/posts/index.php">자유게시판</a></li>
<?php }?>

</ul>
    <ul class="nav navbar-nav navbar-reft">


        <?php if (!isset($_SESSION["id"])){
        ?>
        <li><a href="/views/users/new.php">회원 가입</a></li>
        <li><a href="/views/users/login.php">로그인</a></li>
        <?php } else{ ?>
          <li><a href="/views/users/show.php">내 계정</a></li>
          <li><a href="/views/users/logout.php">로그아웃</a></li>
 <?php }?>
    </ul>
  </div>
</div>
</nav>
