<!-- Rut Paciente Field -->
<div class="col-sm-12">
    {!! Form::label('rut_paciente', 'Rut Paciente:') !!}
    <p>{{ $paciente->rut_paciente }}</p>
</div>

<!-- Nombre Paciente Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_paciente', 'Nombre Paciente:') !!}
    <p>{{ $paciente->nombre_paciente }}</p>
</div>

<!-- Direccion Field -->
<div class="col-sm-12">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $paciente->direccion }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $paciente->email }}</p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $paciente->telefono }}</p>
</div>

