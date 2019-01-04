@extends('layouts.app')

@section('content')
    <div class="row justify-content-center" id="app">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, ea reprehenderit. Optio possimus ab facere a neque in nam quasi qui. Possimus quia consequuntur dolorem dicta nesciunt repellat optio ullam?</p>
                    </div>
            </div>
        </div>
    </div>
@endsection
