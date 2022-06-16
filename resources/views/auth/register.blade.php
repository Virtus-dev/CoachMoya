@extends('grid.grid')
@section('contenidoPrincipal') 


<head>
<title>Hanfit wellnes center. Inicio de sesion</title>
</head>
<body class="text-center">
<main class="form-signin">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark ">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <h1 class="h3 mb-3 fw-normal">Regístrese</h1>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Edad') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="RM_Historico_Squat" class="col-md-4 col-form-label text-md-end">{{ __('RM Historico Sentadilla') }}</label>

                            <div class="col-md-6">
                                <input id="RM_Historico_Squat" type="number" class="form-control @error('RM_Historico_Squat') is-invalid @enderror" name="RM_Historico_Squat" value="{{ old('RM_Historico_Squat') }}" autocomplete="RM_Historico_Squat" autofocus>

                                @error('RM_Historico_Squat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="RM_Historico_Bench" class="col-md-4 col-form-label text-md-end">{{ __('RM Historico Press Banca') }}</label>

                            <div class="col-md-6">
                                <input id="RM_Historico_Bench" type="number" class="form-control @error('RM_Historico_Bench') is-invalid @enderror" name="RM_Historico_Bench" value="{{ old('RM_Historico_Bench') }}" autocomplete="RM_Historico_Bench" autofocus>

                                @error('RM_Historico_Bench')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="RM_Historico_DeadLift" class="col-md-4 col-form-label text-md-end">{{ __('RM Historico Peso Muerto') }}</label>

                            <div class="col-md-6">
                                <input id="RM_Historico_DeadLift" type="number" class="form-control @error('RM_Historico_DeadLift') is-invalid @enderror" name="RM_Historico_DeadLift" value="{{ old('RM_Historico_DeadLift') }}" autocomplete="RM_Historico_DeadLift" autofocus>

                                @error('RM_Historico_Squat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Dirección de email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmación de contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Regístrate') }}
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
