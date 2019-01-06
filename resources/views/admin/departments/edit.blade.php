<form class="card card-100 needs-validation" method="post" novalidate>
  <div class="card-header">
    <div class="card-title">Редактирование группа сотрудников</div>
  </div>
  <div class="card-body p-2">
    <div class="form-group form-row">
      <div class="col-4 col-form-label">
        <label class="form-label" for="name">Название</label>
      </div>
      <div class="col-8">
        <input class="form-control" id="name" name="name" type="text" required>
      </div>
    </div>
    <div class="form-group form-row">
      <div class="col-4">
      Сотрудники
      </div>
      <div class="col-8">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="test1">
          <label class="custom-control-label" for="test1">Группа сотрудников</label>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-4">

      </div>
      <div class="col-8">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="test2">
          <label class="custom-control-label" for="test2">Список сотрудников</label>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer">
    <div class="ml-auto">
      <a class="btn btn-light" href="/employees_group" role="button">Отменить</a>
      <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
  </div>
</form>