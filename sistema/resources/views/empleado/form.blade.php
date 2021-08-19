<h1>{{$modo}} Empleado</h1>
@if (count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre"  value="{{isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre')}}" id="Nombre">
</div>
<div class="form-group">
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : old('ApellidoPaterno')}}" id="ApellidoPaterno">
</div>
<div class="form-group">
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno: old('ApellidoMaterno')}}" id="ApellidoMaterno">
</div>
<div class="form-group">
    <label for="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo" value="{{isset($empleado->Correo) ? $empleado->Correo: old('Correo')}}" id="Correo">
</div>
<div class="form-group">
    <label for="Estado">Estado</label>
    <input type="text" class="form-control" name="Estado" value="{{isset($empleado->Estado) ? $empleado->Estado: old('Estado')}}" id="Estado">
</div>
<div class="form-group">
    <label for="Foto"></label>
    @if (isset($empleado->Foto))
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
    @endif
    <input class="form-control" type="file" name="Foto" value="" id="Foto">
</div>
    <input type="submit" value="{{$modo}} datos" class="btn btn-success"/>
    <a class="btn btn-primary" href="{{url('empleado/')}}">Regresar</a>

