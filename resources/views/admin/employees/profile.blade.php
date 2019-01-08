@extends('admin.layouts.main')
@section('content')
<div class="page-header">
  <div class="page-header-main">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Профиль</li>
    </ol>
    <button class="ml-auto btn btn-light" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();" type="submit">Выйти</button>
    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </div>
</div>
@if ($errors->any())
    @foreach ($errors->all() as $error)
      <div>{{$error}}</div>
    @endforeach
  @endif
<div class="page-content">
  <form class="needs-validation" method="post" action="{{ route('profile.update') }}" novalidate>
    @method('put')
    @csrf
    <div class="form-group form-row">
      <div class="col-4 col-form-label">
        <label class="form-label" for="fullname">Имя и фамилия</label>
      </div>
      <div class="col-8">
      <input class="form-control" id="fullname" name="fullname" type="text" value="{{ $employee['name'] }}" disabled>
      </div>
    </div>
    <div class="form-group form-row">
      <div class="col-4 col-form-label">
        <label class="form-label" for="department">Роль</label>
      </div>
      <div class="col-8">
      <input class="form-control" id="department" name="department" type="text" value="{{ $employee['employee_type_id'] == 1 ? 'Администратор' : 'Модератор' }}" disabled>
      </div>
    </div>
    <div class="form-group form-row">
      <div class="col-4 col-form-label">
        <label class="form-label" for="email">Email</label>
      </div>
      <div class="col-8">
      <input class="form-control" id="email" name="email" type="text" value="{{ $employee['email'].'@prisma.uz' }}" disabled>
      </div>
    </div>
    <div class="form-group form-row">
      <div class="col-4 col-form-label">
        <label class="form-label" for="password">Новый пароль</label>
      </div>
      <div class="col-8">
        <input class="form-control" id="password" name="password" type="text" required>
      </div>
    </div>
    <div class="form-group form-row">
      <div class="col-4 col-form-label">
        <label class="form-label" for="password_confirm">Повторения пароля</label>
      </div>
      <div class="col-8">
        <input class="form-control" id="password_confirm" name="password_confirm" type="text" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-8 offset-4">
      <button class="btn btn-primary">Сохранить</button>
      </div>
    </div>
  </form>
</div>
@endsection