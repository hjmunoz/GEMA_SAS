@include('vehiculos.nav');
<form action="{{ url('/vehiculo/'.$vehiculo->id )}}" method="POST">
@csrf
{{method_field('PATCH')}}

@include('vehiculo.form');


</form>