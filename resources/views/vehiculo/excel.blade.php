<?php
header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=vehiculos.xls');
?>
<table class="table table-striped">
    <thead class="thead-light">
        <tr>
            <th>Codigo</th>
            <th>Placa</th>
            <th>Teléfono</th>
            <th>Color</th>
            <th>Estado</th>
            <th>Fecha</th>
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
        </tr>
        @endforeach
    </tbody>
</table>
</div>