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
      <select class="custom-select type" name="type" data-fetch="{{ Request::get('type') ?? '' }}" onchange="$('#regionsFilter').submit();">
          <option value="1" @if(request()->type == 1 || !request()->type) selected @endif>Области</option>
          <option value="2" @if(request()->type == 2) selected @endif>Города</option>
          <option value="3" @if(request()->type == 3) selected @endif>Районы</option>
        </select>
      </div>
      <div class="col-auto d-none">
        <select class="custom-select province" name="province" onchange="$('#regionsFilter').submit();" disabled>
          <option value="all" selected>Все области</option>
          @foreach ($regionsTypeAll as $region)
            <option value="{{ $region->id }}" @if(request()->province == $region->id) selected @endif>{{ $region->name_ru }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-auto d-none">
        <select class="custom-select city" name="city" onchange="$('#regionsFilter').submit();" disabled>
          <option value="all" selected>Все города</option>
          @foreach ($regionsTypeTwo as $region)
            <option value="{{ $region->id }}" @if(request()->province == $region->id) selected @endif>{{ $region->name_ru }}</option>
          @endforeach
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
<script>
  $(document).ready(function () {
    var typeId = $('.type').data('fetch');
        if (typeId == 2) {
            $('.province').prop('disabled',false);
            $('.province').parent('div').removeClass('d-none');
        } else if(typeId == 3){
            $('.city, .province').prop('disabled', false);
            $('.city, .province').parent('div').removeClass('d-none');
        } else {
            $('.city, .province').prop('disabled', true);
            $('.city, .province').parent('div').addClass('d-none');
        }
  });
</script>
@endsection