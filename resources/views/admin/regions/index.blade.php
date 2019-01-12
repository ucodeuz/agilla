@extends('admin.layouts.main')
@section('content')
<div class="page-header">
  <div class="page-header-main">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Регионы</li>
    </ol>
    <a class="ml-auto btn btn-success" href="#" data-toggle="modal" data-target="#regionsAdd" role="button">Add regions</a>
  </div>
  <div class="page-header-extra">
    <div class="row">
      <div class="col-auto">
        tet
      </div>
    </div>
  </div>
</div>
<div class="page-content">
  <div class="card">
    <table class="table table-hover">
      <thead>
        <tr>
          <th width="8%">ID</th>
          <th width="62%">Название</th>
          <th width="30%">Страна</th>
          <th width="0%"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>15</td>
          <td><a class="font-weight-bold" href="#">Ферганская область</a></td>
          <td>Узбекистан</td>
          <td>
            <div class="table-action">
              <a class="btn btn-icon" data-toggle="modal" data-target="#regionEdit" title="Редактировать"><i class="icon icon-edit"></i></a>
            </div>
          </td>
        </tr>
        <tr>
          <td>25</td>
          <td><a class="font-weight-bold" href="#">Ташкентская область</a></td>
          <td>Узбекистан</td>
          <td>
            <div class="table-action">
              <a class="btn btn-icon" data-toggle="modal" data-target="#regionEdit" title="Редактировать"><i class="icon icon-edit"></i></a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection