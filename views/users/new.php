<!DOCTYPE html>
<html>
  <head>
   <?php require_once ('../partials/head.php'); ?>
   <link href="../../css/login.css" rel="stylesheet">
  </head>
  <body>
   <?php require_once ('../partials/nav.php'); ?>

   <article class="container">
     <div class="col-md-12">
     <div class="page-header">
       <h1>회원 가입</h1>
     </div>
     <form class="form-horizontal" method="post" action="Membersave.php">
     <div class="form-group">
       <label class="col-sm-3 control-label" for="id">ID</label>
     <div class="col-sm-6">
       <input class="form-control" name="id" type="text" placeholder="아이디">
     </div>
     </div>
     <div class="form-group">
       <label class="col-sm-3 control-label" for="pwd">Password</label>
     <div class="col-sm-6">
       <input class="form-control" name="pwd" type="password" placeholder="비밀번호">
     <p class="help-block">숫자, 영문자 포함 8자 이상</p>
     </div>
     </div>
       <div class="form-group">
           <label class="col-sm-3 control-label" for="pwd2">Password Confirmation</label>
          <div class="col-sm-6">
           <input class="form-control" name="pwd2" type="password" placeholder="비밀번호 확인">
             <p class="help-block">비밀번호를 한번 더 입력해주세요.</p>
          </div>
       </div>
     <div class="form-group">
         <label class="col-sm-3 control-label" for="name">Name</label>
       <div class="col-sm-6">
         <input class="form-control" name="name" type="text" placeholder="이름">
       </div>
     </div>
     <div class="form-group">
         <label class="col-sm-3 control-label" for="phone">Phone Number</label>
           <div class="col-sm-6">
               <input type="tel" class="form-control" name="phone" placeholder="- 없이 입력해 주세요" />
           </div>
     </div>
     <div class="form-group">
         <label class="col-sm-3 control-label" for="email">E-mail</label>
           <div class="col-sm-6">
               <input type="email" class="form-control" name="email" placeholder="ex)OOOOO@naver.com" />
           </div>
     </div>
     <div class="form-group">
       <div class="col-sm-12 text-center">
         <button class="btn btn-default" type="submit">가입하기</button>
         <a href="/"<button class="btn btn-default" >취소</button></a>
       </div>
     </div>
     </form>
       <hr>
     </div>
   </article>
           <hr/>
   <?php require_once ('../partials/footer.php'); ?>
   </body>
</html>
