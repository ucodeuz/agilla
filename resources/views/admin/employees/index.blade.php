@extends('admin.layouts.main')
@section('content')
<div class="page-header">
  <div class="page-header-main">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Оргструктура</li>
    </ol>
    <a class="ml-auto btn btn-success" href="#" data-toggle="modal" data-target="#employeeAdd" role="button">Добавить сотрудника</a>
  </div>
</div>
<div class="page-content">
  <div class="card">
    <table class="table table-hover">
      <thead>
        <tr>
          <th width="8%">ID</th>
          <th width="62%">Имя и фамилия</th>
          <th width="30%">Роль</th>
          <th width="0%"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($employees as $employee)
        <tr>
        <td>{{ $employee->id }}</td>
        <td>
          <a class="font-weight-bold item_detail" data-target="#employeeView" data-target-id="{{ $employee->id }}" data-toggle="modal">{{$employee->name}}</a>
        </td>
          <td>{{ $employee->employee_type}}</td>
          <td>
            <div class="table-action">
              <a class="btn btn-icon" href="{{ route('employees.edit',$employee->id) }}" title="Редактировать"><i class="icon icon-edit"></i></a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@include('admin.employees.add')
@include('admin.employees.view')
@endsection