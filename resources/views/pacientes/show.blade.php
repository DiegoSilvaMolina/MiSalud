@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detalles del Paciente</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-danger float-right"
                       href="{{ route('pacientes.index') }}">
                        Atras
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    @include('pacientes.show_fields')
                </div>
            </div>

        </div>
    </div>
@endsection
