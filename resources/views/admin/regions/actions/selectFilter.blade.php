@if($data)
    <option value="all" selected>Все города</option>
        @foreach ($data as $city)
            <option value="{{ $city->id }}" @if(request()->city == $city->id) selected @endif>{{ $city->name_ru }}</option>
        @endforeach
@endif