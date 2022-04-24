@extends('grid.grid')

@section('contenidoPrincipal') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark ">
                <div class="card-header">{{ __('Insertar') }}</div>
                <div class="card-body" >
                    <form method="POST" action="{{ route('insertWorkout') }}">
                <div class="row mb-3">
                        <label for="nombreEjercicio" class="col-md-4 col-form-label text-md-end">{{ __('Nombre Ejercicio') }}</label>

                        <div class="col-md-6">
                        <input id="nombreEjericicio" type="text" class="form-control @error('nombreEjercicio') is-invalid @enderror" name="nombreEjercicio" value="{{ old('nombreEjercicio') }}" required autocomplete="Nombre_ejercicio" autofocus>
                        </div>
                </div>

                <div class="row mb-3">
                        <label for="repId" class="col-md-4 col-form-label text-md-end">{{ __('Repeticiones') }}</label>
                        
                        <div class="col-md-6">  
                        <input id="repId" type="text" class="form-control @error('repId') is-invalid @enderror" name="repId" value="{{ old('repId') }}" required autocomplete="repId" autofocus>
                        </div>
                </div>
                
                <div class="row mb-3">
                        <label for="setId" class="col-md-4 col-form-label text-md-end">{{ __('Sets') }}</label>
                        
                        <div class="col-md-6">  
                        <input id="setId" type="text" class="form-control @error('setId') is-invalid @enderror" name="setId" value="{{ old('setId') }}" required autocomplete="setId" autofocus>
                        </div>
                </div>

                <div class="row mb-3">
                        <label for="marcaId" class="col-md-4 col-form-label text-md-end">{{ __('Marca') }}</label>
                        
                        <div class="col-md-6">  
                        <input id="marcaId" type="text" class="form-control @error('marcaId') is-invalid @enderror" name="marcaId" value="{{ old('marcaId') }}" required autocomplete="marcaId" autofocus>
                        </div>
                </div>  

                <div class="row mb-3">
                        <label for="observaciones" class="col-md-4 col-form-label text-md-end">{{ __('Observaciones') }}</label>
                        
                        <div class="col-md-6">  
                        <input id="observaciones" type="text" class="form-control @error('Marca') is-invalid @enderror" name="Marca" value="{{ old('Marca') }}" required autocomplete="Marca" autofocus>
                        </div>
            </div>

            <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Insertar') }}
                                </button>
                            </div>
            </div>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>

















@endsection