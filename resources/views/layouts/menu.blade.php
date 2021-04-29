@canany(['view_pacientes','delete_pacientes','create_pacientes','edit_pacientes'])
<li class="nav-item">
    <a href="{{ route('pacientes.index') }}"
       class="nav-link {{ Request::is('pacientes*') ? 'active' : '' }}">
        <p>Pacientes</p>
    </a>
</li>
@endcan

@canany(['view_ficha_pacientes','delete_ficha_pacientes','create_ficha_pacientes','edit_ficha_pacientes'])
<li class="nav-item">
    <a href="{{ route('fichaPacientes.index') }}"
       class="nav-link {{ Request::is('fichaPacientes*') ? 'active' : '' }}">
        <p>Ficha Pacientes</p>
    </a>
</li>
@endcan

@canany(['view_users','delete_users','create_users','edit_users'])
<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Usuarios</p>
    </a>
</li>
@endcan



