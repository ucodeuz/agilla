<div class="modal" id="categoryAdd" tabindex="-1">
  <div class="modal-dialog modal-lg" role="document">
    <form class="modal-content needs-validation" method="post" action="{{ route('categories.store') }}" novalidate>
      @csrf
      <div class="modal-header">
        <div class="modal-title">Новая категория</div>
      </div>
      <div class="modal-body">
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="user_last_name">Основная категория</label>
          </div>
          <div class="col-8">
            <div class="row">
              <div class="col">
                <select class="custom-select category">
                  <option value="0" selected>Корневой раздел</option>
                  <option value="1">Транспорт</option>
                  <option value="2">Недвижимость</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="name_ru">Название (ru)</label>
          </div>
          <div class="col-8">
            <input class="form-control" id="name_ru" name="name_ru" type="text" required>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="name_uz">Название (uz)</label>
          </div>
          <div class="col-8">
            <input class="form-control" id="name_uz" name="name_uz" type="text" required>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="fullname_ru">Полная название (ru)</label>
          </div>
          <div class="col-8">
            <input class="form-control" id="fullname_ru" name="fullname_ru" type="text" required>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="fullname_uz">Полная название (uz)</label>
          </div>
          <div class="col-8">
            <input class="form-control" id="fullname_uz" name="fullname_uz" type="text" required>
          </div>
        </div>
      </div>
      <div class="modal-footer">
          <button class="btn btn-light" type="button" data-dismiss="modal">Отмена</button>
        <button class="btn btn-primary" type="submit">Создать</button>
      </div>
    </form>
  </div>
</div>