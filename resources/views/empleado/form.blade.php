<h1>{{$modo}} empleado</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>

    </div>

@endif

<div class="form-group">

    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}">
    <br>
</div>

<div class="form-group">
    <label for="ApellidoPatern">ApellidoPatern</label>
    <input type="text" class="form-control" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}">
    <br>
</div>

<div class="form-group">
    <label for="ApellidoMaterno">ApellidoMaterno</label>
    <input type="text" class="form-control" name ="ApellidoMaterno" id ="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}">
    <br>
</div>

<div class="form-group">
    <label for="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo" id="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}">
    <br>
</div>

<div class="form-group">
    <label for="Foto"></label>
    @if(isset($empleado->Foto))
    <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="">

    @endif
    <br>
    <br>
    <input type="file" class="form-control" name="Foto" id="Foto" value="">
    <br>
</div>


<input class="btn btn-success" type="submit" value="{{$modo}} datos">
<a class="btn btn-primary" href="{{ url('empleado/') }}">
    Regresar
</a>
<br>

