@extends('grid.grid')

@section('contenidoPrincipal')


<form method='post' action="{{route('insertWorkouts')}}">
  @csrf
    <h1>Entrenamiento </h1>
    <h2>Lunes </h2>
    <table class="table bg-dark text-white">
  <thead>
    <tr>
      <th scope="col">Ejercicios</th>
      <th scope="col">Sets</th>
      <th scope="col">Reps</th>
      <th scope="col">Marca</th>
      <th scope="col">Observaciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="col">
        <div style="margin: auto; width: 220px;">
          <input id="nombre_ejercicio" type="text" class="form-control @error('nombre_ejercicio') is-invalid @enderror" name="nombre_ejercicio" value="{{ old('nombre_ejercicio') }}" required autocomplete="nombre_ejercicio" autofocus>

          @error('nombre_ejercicio')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>
      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="set_id" type="text" class="form-control @error('set_id') is-invalid @enderror" name="set_id" value="{{ old('set_id') }}" required autocomplete="set_id" autofocus>

          @error('set_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>

      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="rep_id" type="text" class="form-control @error('rep_id') is-invalid @enderror" name="rep_id" value="{{ old('rep_id') }}" required autocomplete="rep_id" autofocus>

          @error('rep_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>
      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="maarca_id" type="text" class="form-control @error('marca_id') is-invalid @enderror" name="marca_id" value="{{ old('marca_id') }}" required autocomplete="marca_id" autofocus>

          @error('marca_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>

      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="observaciones" type="text" class="form-control @error('observaciones') is-invalid @enderror" name="observaciones" value="{{ old('observaciones') }}" required autocomplete="observaciones" autofocus>

          @error('observaciones')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>
    </tr>
    <tr>
      <td scope="col">
        <div style="margin: auto; width: 220px;">
          <input id="nombre_ejercicio" type="text" class="form-control @error('nombre_ejercicio') is-invalid @enderror" name="nombre_ejercicio" value="{{ old('nombre_ejercicio') }}" required autocomplete="nombre_ejercicio" autofocus>

          @error('nombre_ejercicio')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>
      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="set_id" type="text" class="form-control @error('set_id') is-invalid @enderror" name="set_id" value="{{ old('set_id') }}" required autocomplete="set_id" autofocus>

          @error('set_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>

      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="rep_id" type="text" class="form-control @error('rep_id') is-invalid @enderror" name="rep_id" value="{{ old('rep_id') }}" required autocomplete="rep_id" autofocus>

          @error('rep_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>
      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="maarca_id" type="text" class="form-control @error('marca_id') is-invalid @enderror" name="marca_id" value="{{ old('marca_id') }}" required autocomplete="marca_id" autofocus>

          @error('marca_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>

      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="observaciones" type="text" class="form-control @error('observaciones') is-invalid @enderror" name="observaciones" value="{{ old('observaciones') }}" required autocomplete="observaciones" autofocus>

          @error('observaciones')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>
    </tr>
  </tbody>

</table>

  <h2>Martes </h2>
    <table class="table bg-dark text-white">
  <thead>
    <tr>
      <th scope="col">Ejercicios</th>
      <th scope="col">Sets</th>
      <th scope="col">Reps</th>
      <th scope="col">Marca</th>
      <th scope="col">Observaciones</th>
    </tr>
  </thead>
  <tbody>
   

  
  
    
    <tr>
      <td scope="col">
        <div style="margin: auto; width: 220px;">
          <input id="nombre_ejercicio" type="text" class="form-control @error('nombre_ejercicio') is-invalid @enderror" name="nombre_ejercicio" value="{{ old('nombre_ejercicio') }}" required autocomplete="nombre_ejercicio" autofocus>

          @error('nombre_ejercicio')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>
      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="set_id" type="text" class="form-control @error('set_id') is-invalid @enderror" name="set_id" value="{{ old('set_id') }}" required autocomplete="set_id" autofocus>

          @error('set_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>

      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="rep_id" type="text" class="form-control @error('rep_id') is-invalid @enderror" name="rep_id" value="{{ old('rep_id') }}" required autocomplete="rep_id" autofocus>

          @error('rep_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>
      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="maarca_id" type="text" class="form-control @error('marca_id') is-invalid @enderror" name="marca_id" value="{{ old('marca_id') }}" required autocomplete="marca_id" autofocus>

          @error('marca_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>

      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="observaciones" type="text" class="form-control @error('observaciones') is-invalid @enderror" name="observaciones" value="{{ old('observaciones') }}" required autocomplete="observaciones" autofocus>

          @error('observaciones')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>
    </tr>
    <tr>
      <td scope="col">
        <div style="margin: auto; width: 220px;">
          <input id="nombre_ejercicio" type="text" class="form-control @error('nombre_ejercicio') is-invalid @enderror" name="nombre_ejercicio" value="{{ old('nombre_ejercicio') }}" required autocomplete="nombre_ejercicio" autofocus>

          @error('nombre_ejercicio')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>
      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="set_id" type="text" class="form-control @error('set_id') is-invalid @enderror" name="set_id" value="{{ old('set_id') }}" required autocomplete="set_id" autofocus>

          @error('set_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>

      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="rep_id" type="text" class="form-control @error('rep_id') is-invalid @enderror" name="rep_id" value="{{ old('rep_id') }}" required autocomplete="rep_id" autofocus>

          @error('rep_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>
      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="maarca_id" type="text" class="form-control @error('marca_id') is-invalid @enderror" name="marca_id" value="{{ old('marca_id') }}" required autocomplete="marca_id" autofocus>

          @error('marca_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>

      <td scope="col">

        <div style="margin: auto; width: 220px;">
          <input id="observaciones" type="text" class="form-control @error('observaciones') is-invalid @enderror" name="observaciones" value="{{ old('observaciones') }}" required autocomplete="observaciones" autofocus>

          @error('observaciones')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </td>
    </tr>
  </tbody>
</table>

<input type='submit' value='Enviar'>
</form>

@endsection
