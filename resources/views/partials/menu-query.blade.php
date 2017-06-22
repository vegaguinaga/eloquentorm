<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Consultas Eloquent
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ route('all') }}">
                Todos los usuarios (all)
            </a>
        </li>
        <li>
            <a href="{{ route('get', 'f') }}">
                Lista de usuarios (femenina) (get)
            </a>
        </li>
        <li>
            <a href="{{ route('get', 'm') }}">
                Lista de usuarios (maculina) (get)
            </a>
        </li>
        <li>
            <a href="{{ route('get-custom') }}">
                Lista de usuarios (get con Array)
            </a>
        </li>
        <li>
            <a href="{{ route('lists') }}">
                Lista de Usuarios para Select (LISTS)
            </a>
        </li>
    </ul>
</li>