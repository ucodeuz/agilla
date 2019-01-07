@extends('admin.layouts.main')
@section('content')
<div class="page-header">
  <div class="page-header-main">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Отделы</li>
    </ol>
    <a class="ml-auto btn btn-success" href="#" data-toggle="modal" data-target="#departmentAdd">Создать отдел</a>
  </div>
</div>
<div class="page-content">
  <div class="card">
    <table class="table">
      <thead>
        <tr>
          <th width="8%">ID</th>
          <th width="92%">Название</th>
          <th width="0%"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>15</td>
          <td><a class="font-weight-bold" data-toggle="modal" data-target="#departmentView">Разработчики</a></td>
          <td>
            <div class="table-action">
              <a class="btn btn-icon" href="/departments/edit" title="Редактировать"><i class="icon icon-edit"></i></a>
            </div>
          </td>
        </tr>
        <tr>
          <td>25</td>
          <td><a class="font-weight-bold" data-toggle="modal" data-target="#departmentView">Модераторы</a></td>
          <td>
            <div class="table-action">
              <a class="btn btn-icon" href="/departments/edit" title="Редактировать"><i class="icon icon-edit"></i></a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@include('admin.departments.add')
@include('admin.departments.view')
@endsection