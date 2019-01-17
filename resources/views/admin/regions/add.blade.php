<div class="modal" id="regionsAdd" tabindex="-1">
  <div class="modal-dialog modal-lg" role="document">
  <form class="modal-content needs-validation" method="post" action="{{ route('regions.store') }}" novalidate>
      @csrf
      <div class="modal-header">
        <div class="modal-title">Новый регион</div>
        <button type="button" class="close" data-dismiss="modal"><i class="icon icon-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="form-group form-row">
          <div class="col-4 col-form-label form-item-required">
            <label class="form-label" for="addRegionNameUz">Название(Уз)</label>
          </div>
          <div class="col-8">
            <input class="form-control" id="addRegionNameUz" name="name_uz" type="text" required>
          </div>
        </div>
        <div class="form-group form-row">
            <div class="col-4 col-form-label form-item-required">
              <label class="form-label" for="addRegionNameRu">Название(Ру)</label>
            </div>
            <div class="col-8">
              <input class="form-control" id="addRegionNameRu" name="name_ru" type="text" required>
            </div>
          </div>
          <div class="form-group form-row">
            <div class="col-4 col-form-label">
              <label class="form-label" for="addSlug">Slug</label>
            </div>
            <div class="col-8">
              <input class="form-control" id="addSlug" name="slug" type="text">
            </div>
          </div>
          <div class="form-group form-row form-item-required">
              <div class="col-4 col-form-label">
                <label class="form-label" for="regionType">Тип</label>
              </div>
              <div class="col-8">
                <select class="custom-select" id="regionType" name="type" required>
                  <option value="0" selected disabled>Невыбран</option>
                    <option value="1">Область</option>
                    <option value="2">Город</option>
                    <option value="3">Район</option>
                </select>
              </div>
          </div>
          <div class="form-group form-row form-item-required d-none">
              <div class="col-4 col-form-label">
                <label class="form-label" for="groupRegion">Имя родителей</label>
              </div>
              <div class="col-8 region_parent">
                  <select class="custom-select" id="groupRegion" name="parent_id" required>
                      <option value="0" selected disabled>Невыбран</option>
                  </select>
              </div>
          </div>
          <div class="form-group form-row form-item-required d-none">
              <div class="col-4 col-form-label">
                <label class="form-label" for="groupCity">Имя родителей</label>
              </div>
              <div class="col-8 city_parent">
                  <select class="custom-select" id="groupCity" name="city_id" required>
                      <option value="0" selected disabled>Невыбран</option>
                  </select>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-light" type="button" data-dismiss="modal">Отмена</button>
        <button class="btn btn-primary" type="submit">Добавить</button>
      </div>
    </form>
  </div>
</div>