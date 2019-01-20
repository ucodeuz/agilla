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
    <table class="table table-hover categories-table" data-location="/cp/categories">
      <thead>
        <tr>
          <th width="0%"></th>
          <th width="8%">ID</th>
          <th width="92%">Название</th>
          <th width="0%"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr data-index="{{ $category->id }}" data-position="{{ $category->position }}">
          <td></td>
            <td>{{ $category->id }}</td>
            <td><a class="font-weight-bold item_detail" href="javascript:void(0)" data-toggle="modal" title="Подробность" data-target-id="{{ $category->id }}">{{ $category->name_ru }}</a></td>
            <td>
              <div class="table-action">
                <a class="btn btn-icon" href="/categories/edit" title="Редактировать"><i class="icon icon-edit"></i></a>
                <a class="btn btn-icon" href="/categories/property" title="Динамические свойства"><i class="icon icon-show-property"></i></a>
                <a class="btn btn-icon" href="/categories/add?parent_id=2" title="Добавить подкатегорию"><i class="icon icon-plus"></i></a>
              </div>
            </td>
          </tr>    
        @endforeach
      </tbody>
    </table>
    <div class="card-footer">
      <button class="btn btn-light change_position">Изменить порядок</button>
      <button class="btn btn-light cancel_position d-none">Отменить изменения порядок</button>
      <button class="btn btn-primary save_position d-none" onclick="saveNewPositions()">Сохранить порядок</button>
    </div>
  </div>
</div>
@include('admin.categories.add')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.change_position').on('click',function(){
      $('.cancel_position, .save_position').removeClass('d-none');
      $('.categories-table tbody tr td:first-child').addClass('handler').html('<i class="icon icon-move-grabber"></i>');
      $('.categories-table tbody').sortable({
      helper: fixHelper,
      handle: '.handler',
      update: function(event,ui){
      $(this).children().each(function(index){
            if($(this).attr('data-position') != (index+1)) {
              $(this).attr('data-position', (index+1)).addClass('updated');
            }
        });
      }
    }).disableSelection();
  });
  $('.cancel_position').on('click',function(){
    window.location.reload();
  });
});
function saveNewPositions(){
  var position = [];
  $('.updated').each(function(){
      position.push([$(this).attr('data-index'), $(this).attr('data-position')]);
      $(this).removeClass('updated');
  });
  $.ajax({
    url: '/cp/categories/sort',
    method: 'POST',
    dataType: 'text',
    data: {
      positions: position
    },
    success: function(responce){
        location.reload();
      }
    });
  };
  var fixHelper = function (e, ui) {
      ui.children().each(function () {
      $(this).width($(this).width());
  });
  return ui;
};
</script>
@endsection