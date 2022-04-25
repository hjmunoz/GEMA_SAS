<form action="{{url('/vehiculo')}}" method="POST">
    @csrf
    @include('vehiculo.form');
</form>