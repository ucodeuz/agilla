<!DOCTYPE HTML>
<html lang="ru">
<head>
  <?php include_once('templates/head.php');?> 
</head>
<body>
<div class="app">
  <form class="login-form" method="post">
    <div class="form-group">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Email">
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2">@prisma.uz</span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <input class="form-control" type="password" placeholder="Пароль">
    </div>
    <button class="btn btn-block btn-primary">Войты</button>
  </form>
</div>
</body>