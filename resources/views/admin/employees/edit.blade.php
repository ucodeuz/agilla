@extends('admin.layouts.main')
@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif
<div class="page-header">
  <div class="page-header-main">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">Оргструктура</a></li>
      <li class="breadcrumb-item">Редактирование</li>
    </ol>
  </div>
</div>
<div class="page-content">
  <form class="card needs-validation" method="post" action="{{ route('employees.update',$employee->id) }}" novalidate>
    @method('PUT')
    @csrf
    <div class="card-header">
      <div class="card-title">Сотрудник<span class="count">{{ $employee->id }}</span></div>
    </div>
    <div class="card-body">
      <div class="form-group form-row form-item-required">
        <div class="col-4 col-form-label">
          <label class="form-label" for="group">Роль</label>
        </div>
        <div class="col-8">
          <select class="custom-select" id="group" name="employee_type_id" required>
          <option value="0" @if($employee->employee_type_id != 1 && $employee->employee_type_id != 2) selected @endif disabled>Невыбран</option>
          <option value="1" @if($employee->employee_type_id == 1) selected @endif>Администратор</option>
            <option value="2" @if($employee->employee_type_id == 2) selected @endif>Модератор</option>
          </select>
        </div>
      </div>
      <div class="form-group form-row">
        <div class="col-4 col-form-label form-item-required">
          <label class="form-label" for="name">Имя и фамилия</label>
        </div>
        <div class="col-8">
        <input class="form-control" id="name" name="name" value="{{ $employee->name }}" type="text" required>
        </div>
      </div>
      <div class="form-group form-row form-item-required">
        <div class="col-4 col-form-label">
          <label class="form-label" for="email">Email</label>
        </div>
        <div class="col-8">
          <div class="input-group">
          <input class="form-control" type="text" name="email" id="email" value="{{ $employee->email }}" required>
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
          <input class="form-control" id="password" name="password" type="text" required>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <div class="ml-auto">
        <button class="btn btn-light" onclick="window.history.go(-1); return false;" type="button">Отменить</button>
        <button class="btn btn-primary" type="submit">Сохранить</button>
      </div>
    </div>
  </form>
</div>
@endsection