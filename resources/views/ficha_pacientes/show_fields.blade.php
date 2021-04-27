<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $fichaPaciente->nombre }}</p>
</div>

<!-- Fecha Field -->
<div class="col-sm-12">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $fichaPaciente->fecha }}</p>
</div>

<!-- Hora Inicio Field -->
<div class="col-sm-12">
    {!! Form::label('hora_inicio', 'Hora Inicio:') !!}
    <p>{{ $fichaPaciente->hora_inicio }}</p>
</div>

<!-- Doctor Field -->
<div class="col-sm-12">
    {!! Form::label('doctor', 'Doctor:') !!}
    <p>{{ $fichaPaciente->doctor }}</p>
</div>

<!-- Especialidad Field -->
<div class="col-sm-12">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    <p>{{ $fichaPaciente->especialidad }}</p>
</div>

<!-- Diagnostico Field -->
<div class="col-sm-12">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    <p>{{ $fichaPaciente->diagnostico }}</p>
</div>


