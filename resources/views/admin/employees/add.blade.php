<div class="modal" id="employeeAdd" tabindex="-1">
  <div class="modal-dialog modal-lg" role="document">
    <form class="modal-content needs-validation" method="post" novalidate>
      <div class="modal-header">
        <div class="modal-title">Новый сотрудник</div>
        <button type="button" class="close" data-dismiss="modal"><i class="icon icon-close"></i></button>
      </div>
      <div class="modal-body">
            <div class="form-group form-row form-item-required">
      <div class="col-4 col-form-label">
        <label class="form-label" for="group">Отдел</label>
      </div>
      <div class="col-8">
        <select class="custom-select" id="group" name="group" required>
          <option value="0" selected disabled>Невыбран</option>
          <option value="1">Разработчики</option>
          <option value="2">Оператори</option>
        </select>
      </div>
    </div>
    <div class="form-group form-row">
      <div class="col-4 col-form-label form-item-required">
        <label class="form-label" for="fullname">Имя и фамилия</label>
      </div>
      <div class="col-8">
        <input class="form-control" id="fullname" name="fullname" type="text" required>
      </div>
    </div>
    <div class="form-group form-row form-item-required">
      <div class="col-4 col-form-label">
        <label class="form-label" for="email">Email</label>
      </div>
      <div class="col-8">
        <div class="input-group">
          <input class="form-control" type="text" name="email" id="email" required>
          <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">@prisma.uz</span>
          </div>
        </div>
      </div>
    </div>
    <div class="form-row form-item-required">
      <div class="col-4 col-form-label">
        <label class="form-label" for="password">Пароль</label>
      </div>
      <div class="col-8">
        <input class="form-control" id="password" name="password" type="password" required>
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