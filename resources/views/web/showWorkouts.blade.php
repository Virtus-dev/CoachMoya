@extends('grid.grid')

@section('contenidoPrincipal')

    <h1>Entrenamiento </h1>
    <h2>Lunes </h2>
    <table class="table bg-dark text-white">
  <thead>
    <tr>
      <th scope="col">Ejercicio</th>
      <th scope="col">Sets</th>
      <th scope="col">Reps</th>
      <th scope="col">Marca</th>
      <th scope="col">Observaciones</th>
    </tr>
  </thead>
  <tbody>
    
   
   
    <tr>
      @foreach($workouts as $exercise)
      <td scope="col">{{$exercise->nombre_ejercicio}}</td>
      @endforeach
      @foreach($sets as $Ksets=>$numSets)
      <td scope="col">{{$numSets->numero_sets}}</td>
      @endforeach
      <td>

    </tr>
  
  </tbody>

</table>

  <h2>Martes </h2>
    <table class="table bg-dark text-white">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td scope="col"></td>
      <td scope="col"></td>
      <td scope="col"></td>
      <td scope="col"></td>
      <td scope="col"></td>

    </tr>
    <tr>
      <td scope="col"></td>
      <td scope="col"></td>
      <td scope="col"></td>
      <td scope="col"></td>
      <td scope="col"></td>

    </tr>
  </tbody>
</table>

@endsection
