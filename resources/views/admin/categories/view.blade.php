<form class="modal-content">
  <div class="modal-header">
  <div class="modal-title">Категория<span> {{ $category_view->id ?? '' }}</span></div>
    <button type="button" class="close" data-dismiss="modal"><i class="icon icon-close"></i></button>
  </div>
  <div class="modal-body">
    <dl>
      <dt>Название(Уз)</dt>
      <dd>{{ $category_view->name_uz ?? ''}}</dd>
    </dl>
    <dl>
      <dt>Название(Ру)</dt>
      <dd>{{ $category_view->name_ru ?? ''}}</dd>
    </dl>
    <dl>
      <dt>Полное название(Уз)</dt>
      <dd>{{ $category_view->fullname_uz ?? ''}}</dd>
    </dl>
    <dl>
      <dt>Полное название(Ру)</dt>
      <dd>{{ $category_view->fullname_ru ?? ''}}</dd>
    </dl>
    <dl>
      <dt>Позиция</dt>
      <dd>{{ $category_view->position ?? ''}}</dd>
    </dl>
  </div>
</form>