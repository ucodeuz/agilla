<div class="modal" id="departmentAdd" tabindex="-1">
  <div class="modal-dialog modal-lg" role="document">
    <form class="modal-content needs-validation" method="post" novalidate>
      <div class="modal-header">
        <div class="modal-title">Новый сотрудник</div>
        <button type="button" class="close" data-dismiss="modal"><i class="icon icon-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="form-group form-row">
          <div class="col-4 col-form-label form-item-required">
            <label class="form-label" for="name">Название</label>
          </div>
          <div class="col-8">
            <input class="form-control" id="name" name="name" type="text" required>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4">
          Объявления
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
      <div class="modal-footer">
        <button class="btn btn-light" type="button" data-dismiss="modal">Отмена</button>
        <button class="btn btn-primary" type="submit" name="add">Добавить</button>
      </div>
    </form>
  </div>
</div>