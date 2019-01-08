@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success  alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert"><i class="icon icon-close"></i></button>
        {{ session('success') }}
    </div>
@endif

@if (session('errors'))
    @foreach (session('errors') as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif

@if (session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif

@if (session('info'))
    <div class="alert alert-info" role="alert">
        {{ session('info') }}
    </div>
@endif