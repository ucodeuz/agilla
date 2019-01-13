<form class="modal-content">
  <div class="modal-header">
  <div class="modal-title">Регион<span> {{ $region_view->id ?? '' }}</span></div>
    <button type="button" class="close" data-dismiss="modal"><i class="icon icon-close"></i></button>
  </div>
  <div class="modal-body">
    <dl>
      <dt>Название(Уз)</dt>
      <dd>{{ $region_view->name_uz ?? ''}}</dd>
  </dl>
  <dl>
      <dt>Название(Ру)</dt>
      <dd>{{ $region_view->name_ru ?? ''}}</dd>
  </dl>
  <dl>
      <dt>Тип</dt>
      @if($region_view->type == 1)
        <dd>{{ _('Область')}}</dd>
      @elseif($region_view->type == 2)
        <dd>{{ _('Город')}}</dd>
      @elseif($region_view->type == 3)
        <dd>{{ _('Район')}}</dd>
      @else
        <dd>{{ $region_view->type ?? ''}}</dd>
      @endif
  </dl>
  </div>
</form>