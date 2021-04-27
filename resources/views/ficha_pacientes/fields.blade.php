<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::select('nombre', $pacienteItems, null, ['class' => 'form-control custom-select']) !!}    
</div>

<!-- fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- hora_inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_inicio', 'Hora Inicio:') !!}
    {!! Form::time('hora_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Doctor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor', 'Doctor:') !!}
    {!! Form::text('doctor', null, ['class' => 'form-control']) !!}
</div>

<!-- Especialidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    {!! Form::text('especialidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Diagnostico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    {!! Form::textarea('diagnostico', null, ['class' => 'form-control']) !!}
</div>