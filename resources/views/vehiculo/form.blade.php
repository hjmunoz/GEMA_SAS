<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    @include('vehiculo.nav  ')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <label for="Placa" class="form-label">Placa:</label>
                <input type="text" class="form-control" name="placa" value="{{isset($vehiculo->Placa)?$vehiculo->Placa:''}}" id="Placa"><br>

                <label for="Telefono" class="form-label">Teléfono:</label>
                <input type="text" class="form-control" name="telefono" value="{{isset($vehiculo->Telefono)?$vehiculo->Telefono:''}}" id="Telefono"><br>

                <label for="Color" class="form-label">Color:</label>
                <input type="text" class="form-control" name="color" value="{{isset($vehiculo->Color)?$vehiculo->Color:''}}" id="Color"><br>

                <label for="Estado" class="form-label">Estado:</label>
                <input type="text" class="form-control" name="estado" value="{{isset($vehiculo->Estado)?$vehiculo->Estado:''}}" id="Estado"><br>

                <label for="ApellidoMaterno" class="form-label">Fecha:</label>
                <input type="date" class="form-control" name="fecha" value="{{isset($vehiculo->Fecha)?$vehiculo->Fecha:''}}" id="Fecha"><br>

                <input type="submit" class="btn btn-dark" value="Guardar datos"><br><br>
            </div>
        </div>
    </div>
</body>

</html>