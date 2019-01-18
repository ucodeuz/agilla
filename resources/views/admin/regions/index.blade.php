@extends('admin.layouts.main')
@section('content')
<div class="page-header">
  <div class="page-header-main">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Регионы</li>
    </ol>
    <a class="ml-auto btn btn-success" href="#" data-toggle="modal" data-target="#regionsAdd" role="button">Добавить регион</a>
  </div>
  <form class="page-header-extra" id="regionsFilter">
    <div class="row">
      <div class="col-auto">
        <select class="custom-select" name="type" onchange="$('#regionsFilter').submit();">
          <option value="1">Области</option>
          <option value="2">Города</option>
          <option value="3">Районы</option>
        </select>
      </div>
      <div class="col-auto">
        <select class="custom-select" name="province" onchange="$('#regionsFilter').submit();">
          <option value="0" selected>Все области</option>
          <option value="1">Ферганская област</option>
          <option value="2">Ташкентская област</option>
        </select>
      </div>
      <div class="col-auto">
        <select class="custom-select" name="city" onchange="$('#regionsFilter').submit();">
          <option value="0" selected>Все города</option>
          <option value="1">Фергана</option>
          <option value="2">Маргилан</option>
        </select>
      </div>
    </div>
  </form>
</div>
<div class="page-content">
  <div class="card">
    <table class="table table-hover" data-location="/cp/regions">
      <thead>
        <tr>
          <th width="8%">ID</th>
          <th width="62%">Название</th>
          <th width="30%">Страна</th>
          <th width="0%"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($regions as $region)
          <tr>
            <td>{{ $region->id }}</td>
            <td><a class="font-weight-bold item_detail" href="javascript:void(0)" data-toggle="modal" title="Редактировать" data-target-id="{{ $region->id }}">{{ $region->name_ru }}</a></td>
              <td>Узбекистан</td>
              <td>
                <div class="table-action">
                  <a class="btn btn-icon item_edit" href="javascript:void(0)" data-toggle="modal" data-target-id="{{ $region->id }}" title="Редактировать"><i class="icon icon-edit"></i></a>
                </div>
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@include('admin.regions.add')
@include('admin.regions.edit')
@endsection