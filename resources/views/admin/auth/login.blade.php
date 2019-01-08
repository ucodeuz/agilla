<!DOCTYPE HTML>
<html lang="ru">
<head>
    @include('admin.layouts.inc.head')
</head>
<body>
<div class="app">
  <form method="POST" class="login-form" action="{{ route('admin.login') }}">
    @csrf
    <div class="form-group">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Email" name="email">
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2">@prisma.uz</span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <input class="form-control" type="password" placeholder="Пароль" name="password">
    </div>
    <button type="submit" class="btn btn-block btn-primary">
        {{ __('Войты') }}
        
    </button>
  </form>
</div>
</body>