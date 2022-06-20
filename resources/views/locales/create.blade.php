<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<center><h2>Registro Locales</h2></center>
<body>
    <div class="container">
    <form action="{{route('locales.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
          <label for="" class="form-label">Razon Social</label>
          <input type="text" class="form-control" name="razon_social">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion">
          </div>
           <div class="mb-3">
            <label for="" class="form-label">Telefono Fijo</label>
            <input type="text" class="form-control" name="telefono_fijo">
          </div> 
          <div class="mb-3">
            <label for="" class="form-label">Telefono Movil</label>
            <input type="text" class="form-control" name="telefono_movil">
          </div> 
          <div class="mb-3">
            <label for="" class="form-label">Correo Electronico</label>
            <input type="text" class="form-control" name="correo_electronico">
          </div> 
          <div class="mb-3">
            <label for="" class="form-label">Identificacion</label>
            <input type="text" class="form-control" name="identificacion">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Tipo Identificacion Comercial</label>
            <select name="id_tipo_id_comercials">
                <option>Tipo identificacion Comercial</option>
                @foreach ($tipo as $item)
                <option value="{{$item->id}}">{{$item->tipo}}</option>

                @endforeach

            </select>
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>