@extends('grid.grid')

@section('contenidoPrincipal') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Has iniciado sesión.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
