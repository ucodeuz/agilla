@extends('admin.layouts.main')
@section('content')
<script type="text/javascript">
    var regions = <?=$regions?>
</script>
<div class="page-header">
  <div class="page-header-main">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Регионы</li>
    </ol>
    <a class="ml-auto btn btn-success" href="#" data-toggle="modal" data-target="#regionsAdd" role="button">Добавить регион</a>
  </div>
  <div class="page-header-extra">
    <div class="row">
      <div class="col-auto">
        
      </div>
    </div>
  </div>
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
                  <a class="btn btn-icon item_edit" href="javascript:void(0)" data-toggle="modal" data-target="#regionEdit" title="Редактировать"><i class="icon icon-edit"></i></a>
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