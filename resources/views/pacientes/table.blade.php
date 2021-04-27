<div class="table-responsive">
    <table class="table" id="pacientes-table">
        <thead>
            <tr>
                <th>Rut Paciente</th>
        <th>Nombre Paciente</th>
        <th>Direccion</th>
        <th>Email</th>
        <th>Telefono</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->rut_paciente }}</td>
            <td>{{ $paciente->nombre_paciente }}</td>
            <td>{{ $paciente->direccion }}</td>
            <td>{{ $paciente->email }}</td>
            <td>{{ $paciente->telefono }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pacientes.destroy', $paciente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('view_pacientes')
                        <a href="{{ route('pacientes.show', [$paciente->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        @endcan
                        @can('edit_pacientes')
                        <a href="{{ route('pacientes.edit', [$paciente->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        @endcan
                        @can('delete_pacientes')
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro de eliminar?')"]) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
