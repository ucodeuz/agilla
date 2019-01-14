@if($data)
    <option value="0" selected disabled>Невыбран</option>
    @if(!$type)
        @foreach ($data as $region)
            <option value="{{ $region->id }}"> {{ $region->name_ru }}</option>    
        @endforeach
    @else
            <option value="{{ $data[0]->parent->id }}" disabled>{{ $data[0]->parent->name_ru }}</option>
            @foreach ($data as $children)
                <option class="parent" value="{{ $children->id }}">- {{ $children->name_ru }}</option> 
            @endforeach
    @endif
@endif