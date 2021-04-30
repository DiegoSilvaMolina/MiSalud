<div class="table-responsive">
    <table class="table" id="fichaPacientes-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Fecha</th>
        <th>Hora Inicio</th>
        <th>Doctor</th>
        <th>Especialidad</th>
        <th>Diagnostico</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($fichaPacientes as $fichaPaciente)
            <tr>
                  
            <td>{{ $fichaPaciente->fk_paciente }}</td>
            <td>{{ $fichaPaciente->fecha }}</td>
            <td>{{ $fichaPaciente->hora_inicio }}</td>
            <td>{{ $fichaPaciente->doctor }}</td>
            <td>{{ $fichaPaciente->especialidad }}</td>
            <td>{{ $fichaPaciente->diagnostico }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['fichaPacientes.destroy', $fichaPaciente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('view_ficha_pacientes')
                        <a href="{{ route('fichaPacientes.show', [$fichaPaciente->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        @endcan
                        @can('edit_ficha_pacientes')
                        <a href="{{ route('fichaPacientes.edit', [$fichaPaciente->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        @endcan
                        @can('delete_ficha_pacientes')
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro de eliminar?')"]) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
