<div>
    <h2>Listado de Personas</h2>
    <ul>
        @foreach($personas as $p)
            <li>{{ $p->nombre }} {{ $p->apellido }} - {{ $p->correo }}</li>
        @endforeach
    </ul>
</div>
