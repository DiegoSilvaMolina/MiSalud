<!-- Rut Paciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rut_paciente', 'Rut Paciente:') !!}
    {!! Form::text('rut_paciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Paciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_paciente', 'Nombre Paciente:') !!}
    {!! Form::text('nombre_paciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>