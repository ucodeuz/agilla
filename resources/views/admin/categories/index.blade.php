@extends('admin.layouts.main')
@section('content')
<div class="page-header">
  <div class="page-header-main">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Категории</li>
    </ol>
    <a class="ml-auto btn btn-success" href="#" data-toggle="modal" data-target="#categoryAdd" role="button">
      <i class="icon icon-plus-math"></i><span class="text">Добавить категорию</span>
    </a>
  </div>
</div>
<div class="page-content">
  <div class="card">
    <table class="table table-hover categories-table">
      <thead>
        <tr>
          <th width="0%"></th>
          <th width="8%">ID</th>
          <th width="92%">Название</th>
          <th width="0%"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="handle"><i class="icon icon-move-grabber"></i></td>
          <td>1</td>
          <td><a class="font-weight-bold" title="fill_name">Товары</a></td>
          <td>
            <div class="table-action">
              <a class="btn btn-icon" href="/categories/edit" title="Редактировать"><i class="icon icon-edit"></i></a>
              <a class="btn btn-icon" href="/categories/property" title="Динамические свойства"><i class="icon icon-show-property"></i></a>
              <a class="btn btn-icon" href="/categories/add?parent_id=2" title="Добавить подкатегорию"><i class="icon icon-plus"></i></a>
            </div>
          </td>
        </tr>
        <tr>
          <td class="handle"><i class="icon icon-move-grabber"></i></td>
          <td>2</td>
          <td><a class="font-weight-bold" title="fill_name">Недвижимость</a></td>
          <td>
            <div class="table-action">
              <a class="btn btn-icon" href="/categories/edit" title="Редактировать"><i class="icon icon-edit"></i></a>
              <a class="btn btn-icon" href="/categories/property" title="Динамические свойства"><i class="icon icon-show-property"></i></a>
              <a class="btn btn-icon" href="/categories/add?parent_id=2" title="Добавить подкатегорию"><i class="icon icon-plus"></i></a>
            </div>
          </td>
        </tr>
        <tr>
          <td class="handle"><i class="icon icon-move-grabber"></i></td>
          <td>3</td>
          <td><a class="font-weight-bold" title="fill_name">Транспорт</a></td>
          <td>
            <div class="table-action">
              <a class="btn btn-icon" href="/categories/edit" title="Редактировать"><i class="icon icon-edit"></i></a>
              <a class="btn btn-icon" href="/categories/property" title="Динамические свойства"><i class="icon icon-show-property"></i></a>
              <a class="btn btn-icon" href="/categories/add?parent_id=2" title="Добавить подкатегорию"><i class="icon icon-plus"></i></a>
            </div>
          </td>
        </tr>
        <tr>
          <td class="handle"><i class="icon icon-move-grabber"></i></td>
          <td>4</td>
          <td><a class="font-weight-bold" title="fill_name">Работа</a></td>
          <td>
            <div class="table-action">
              <a class="btn btn-icon" href="/categories/edit" title="Редактировать"><i class="icon icon-edit"></i></a>
              <a class="btn btn-icon" href="/categories/property" title="Динамические свойства"><i class="icon icon-show-property"></i></a>
              <a class="btn btn-icon" href="/categories/add?parent_id=2" title="Добавить подкатегорию"><i class="icon icon-plus"></i></a>
            </div>
          </td>
        </tr>
        <tr>
          <td class="handle"><i class="icon icon-move-grabber"></i></td>
          <td>5</td>
          <td><a class="font-weight-bold" title="fill_name">Услуги</a></td>
          <td>
            <div class="table-action">
              <a class="btn btn-icon" href="/categories/edit" title="Редактировать"><i class="icon icon-edit"></i></a>
              <a class="btn btn-icon" href="/categories/property" title="Динамические свойства"><i class="icon icon-show-property"></i></a>
              <a class="btn btn-icon" href="/categories/add?parent_id=2" title="Добавить подкатегорию"><i class="icon icon-plus"></i></a>
            </div>
          </td>
        </tr>
        <tr>
          <td class="handle"><i class="icon icon-move-grabber"></i></td>
          <td>6</td>
          <td><a class="font-weight-bold" title="fill_name">Благотворительность</a></td>
          <td>
            <div class="table-action">
              <a class="btn btn-icon" href="/categories/edit" title="Редактировать"><i class="icon icon-edit"></i></a>
              <a class="btn btn-icon" href="/categories/property" title="Динамические свойства"><i class="icon icon-show-property"></i></a>
              <a class="btn btn-icon" href="/categories/add?parent_id=2" title="Добавить подкатегорию"><i class="icon icon-plus"></i></a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="card-footer">
      <button class="btn btn-light">Изменить порядок</button>
      <button class="btn btn-light">Отменить изменения порядок</button>
      <button class="btn btn-primary">Сохранить порядок</button>
    </div>
  </div>
</div>
@include('admin.categories.add')
@endsection