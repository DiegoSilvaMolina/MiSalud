@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Editar Ficha Paciente</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($fichaPaciente, ['route' => ['fichaPacientes.update', $fichaPaciente->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('ficha_pacientes.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                <a href="{{ route('fichaPacientes.index') }}" class="btn btn-danger">Cancelar</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
