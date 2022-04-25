@include('vehiculo.nav')

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <h5 class="mt-3">Lista de vehiculos</h5>
        </div>
        <div class="col">
            <a href="{{url('vehiculo/export')}}" class="btn btn-sm btn-primary float-right mt-3">Exportar a Excel</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>Codigo</th>
                <th>Placa</th>
                <th>Teléfono</th>
                <th>Color</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>

        <tbody>
            @foreach($vehiculos as $vehiculo)
            <tr>
                <td>{{$vehiculo->id}}</td>
                <td>{{$vehiculo->Placa}}</td>
                <td>{{$vehiculo->Telefono}}</td>
                <td>{{$vehiculo->Color}}</td>
                <td>{{$vehiculo->Estado}}</td>
                <td>{{$vehiculo->Fecha}}</td>

                <td>
                    <button type="button" class="btn btn-primary"><a style="color:white;" href="{{ url('/vehiculo/'.$vehiculo->id.'/edit') }}">
                            Editar
                        </a></button>

                </td>

                <td>
                    <form action="{{url('/vehiculo/'.$vehiculo->id)}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" class="btn btn-danger " onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                    </form>



                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>