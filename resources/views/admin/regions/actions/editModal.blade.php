@if($region)
<form class="modal-content" method="post" action="{{ route('regions.update',$region->id) }}" novalidate>
    @method('PUT')
    @csrf
    <div class="modal-header">
        <div class="modal-title">Редактировать регион<span> {{ $region->id }}</span></div>
        <button type="button" class="close" data-dismiss="modal"><i class="icon icon-close"></i></button>
    </div>
    <div class="modal-body">
        <div class="form-group form-row">
            <div class="col-4 col-form-label form-item-required">
                <label class="form-label" for="editRegionNameUz">Название(Уз)</label>
            </div>
            <div class="col-8">
                <input class="form-control" id="editRegionNameUz" name="name_uz" type="text" value="{{ $region->name_uz }}" required>
            </div>
        </div>
        <div class="form-group form-row">
            <div class="col-4 col-form-label form-item-required">
                <label class="form-label" for="editRegionNameRu">Название(Ру)</label>
            </div>
            <div class="col-8">
                <input class="form-control" id="editRegionNameRu" name="name_ru" type="text" value="{{ $region->name_ru }}" required>
            </div>
        </div>
        <div class="form-group form-row">
            <div class="col-4 col-form-label">
                <label class="form-label" for="editSlug">Slug</label>
            </div>
            <div class="col-8">
                <input class="form-control" id="editSlug" name="slug" type="text" value="{{ $region->slug }}">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-light" type="button" data-dismiss="modal">Отмена</button>
        <button class="btn btn-primary" type="submit">Сохранить</button>
    </div>
</form>
@endif
