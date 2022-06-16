@extends ('grid.grid')

@section('contenidoPrincipal')


    <h1>Listado De Clientes</h1>
    </br>
    <table>
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scopre="col">Microciclo actual</th>
                <th scope="col">RM Historico En Sentadilla</th>
                <th scope="col">RM Historico En Press Banca</th>
                <th scope="col">RM Historico En Peso Muerto</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    @foreach($users as $user)
                    
                    <td>
                        <div style="margin: auto; width: 220px;">
                            <a href="/client/{{$user->id}}/workout">{{$user->name}} {{$user->surname}}</a>
                        </div>
                    </td>

                    <td>
                        <div style="margin: auto; width: 220px;">
                            <p>{{$user->age}}</p>
                        </div>
                    </td>

                    <td>
                        <div style="margin: auto; width: 220px;">
                            <p>{{$workouts->microciclo}}</p>
                         
                        </div>
                    </td>

                    <td>
                        <div style="margin: auto; width: 220px;">
                            <p>{{$user->RM_Historico_Squat}}</p>
                        </div>
                    </td>

                    <td>
                        <div style="margin: auto; width: 220px;">
                            <p>{{$user->RM_Historico_Bench}}</p>
                        </div>
                    </td>

                    <td>
                        <div style="margin: auto; width: 220px;">
                            <p>{{$user->RM_Historico_DeadLift}}</p>
                        </div>
                    </td>

                    <td>
                        <div style="margin: auto; width: 220px;">
                            <p>{{$user->email}}</p>
                        </div>
                    </td>
                    @endforeach

                   
                    
                 
                </tr>
        </tbody>
    </table>


@endsection