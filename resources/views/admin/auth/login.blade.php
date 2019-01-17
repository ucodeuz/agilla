<!DOCTYPE HTML>
<html lang="ru">
<head>
    @include('admin.layouts.inc.head')
</head>
<body>
<div class="app">
  <form method="POST" class="login-form" action="{{ route('admin.login') }}">
    @csrf
    @if($errors->has('email'))
        <p class="alert alert-danger alert-dismissible"> {{ $errors->first('email') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </p>
    @elseif($errors->has('password'))
      <p class="alert alert-danger alert-dismissible"> {{ $errors->first('password') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </p>
    @endif
    <div class="form-group">
      <div class="input-group">
        <input class="form-control {{ $errors->has('email') ? 'border-danger' : '' }}" type="text" placeholder="Email" name="email" value="{{ old('email') }}">
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2">@prisma.uz</span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <input class="form-control  {{ $errors->has('password') ? 'border-danger' : '' }}" type="password" placeholder="Пароль" name="password">
    </div>
    <button type="submit" class="btn btn-block btn-primary">
        {{ __('Войты') }}
        
    </button>
  </form>
</div>
</body>