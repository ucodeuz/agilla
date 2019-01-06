@extends('admin.layouts.main')
@section('content')
<form class="card card-100 needs-validation" method="post" novalidate>
  <div class="card-header">
    <div class="card-title">Редактирование сотрудника<span class="count">45</span></div>
  </div>
  <div class="card-body p-2">
    <div class="form-group form-row form-item-required">
      <div class="col-4 col-form-label">
        <label class="form-label" for="group">Отдел</label>
      </div>
      <div class="col-8">
        <select class="custom-select" id="group" name="group" required>
          <option value="0" selected disabled>Невыбран</option>
          <option value="1">Разработчики</option>
          <option value="2">Оператори</option>
        </select>
      </div>
    </div>
    <div class="form-group form-row">
      <div class="col-4 col-form-label form-item-required">
        <label class="form-label" for="fullname">Имя и фамилия</label>
      </div>
      <div class="col-8">
        <input class="form-control" id="fullname" name="fullname" type="text" required>
      </div>
    </div>
    <div class="form-group form-row form-item-required">
      <div class="col-4 col-form-label">
        <label class="form-label" for="email">Email</label>
      </div>
      <div class="col-8">
        <div class="input-group">
          <input class="form-control" type="text" name="email" id="email" required>
          <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">@prisma.uz</span>
          </div>
        </div>
      </div>
    </div>
    <div class="form-row form-item-required">
      <div class="col-4 col-form-label">
        <label class="form-label" for="password">Пароль</label>
      </div>
      <div class="col-8">
        <input class="form-control" id="password" name="password" type="password" required>
      </div>
    </div>
  </div>
  <div class="card-footer">
    <div class="ml-auto">
      <a class="btn btn-light" href="/employees" role="button">Отменить</a>
      <button class="btn btn-primary" type="submit" name="save">Сохранить</button>
    </div>
  </div>
</form>
@endsection