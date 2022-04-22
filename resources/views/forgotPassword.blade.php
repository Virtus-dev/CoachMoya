@extends('grid.grid')

@section('contenidoPrincipal') 

<head>
    <title>Hanfit wellnes center. Inicio de sesion</title>

    <style>
      
      .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
      }

    .form-signin .checkbox {
      font-weight: 400;
      }

    .form-signin .form-floating:focus-within {
      z-index: 2;
      }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
      }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      }

    </style>

        </head>
        <body class="text-center">
            <main class="form-signin">
            <form>
            <h1 class="h3 mb-3 fw-normal">¿Has olvidado tu contraseña?</h1>

            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="floatingEmail">
                <label for="floatingPassword"class="text-black">Tu email</label> 
            </div>

            <div class="form-floating mb-4">
                <input type="password" class="form-control" id="Contraseña" name="Contraseña">
                <label for="floatingPassword"class="text-black">Nueva Contraseña</label> 
            </div>

            <div class="form-floating mb-4">
                <input type="password" class="form-control"  id="Contraseña2" name="Contraseña2">
                <label for="floatingPassword"class="text-black">Repita su contraseña</label> 
            </div>

                <div class="d-flex justify-content-center">
                  <button type="button" class="btn btn-primary btn-block btn-lg text-white">Cambiar contraseña</button>
                </div> 

                <p class="text-center text-white mt-5 mb-0">¿Ya tienes una cuenta? <a href="signIn" class="fw-bold text-primary"><u>Inicia sesión aquí</u></a></p>

              </form>

            </div>
            </main>
    </body>


@endsection