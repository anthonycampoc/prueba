
<h1>Lista de Clientes</h1>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Cédula</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Fecha de Nacimiento</th>
            <th>Provincia</th>
            <th>Cantón</th>
            <th>Parroquia</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->cedula }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->fecha_nacimiento }}</td>
                <td>{{ $cliente->provincia }}</td>
                <td>{{ $cliente->canton }}</td>
                <td>{{ $cliente->parroquia }}</td>
                <td>
                    <a href="{{ route('cliente.show', $cliente) }}">Ver</a>
                    <a href="{{ route('cliente.edit', $cliente) }}">Editar</a>
                    <form action="{{ route('cliente.destroy', $cliente) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('cliente.create') }}">Crear nuevo cliente</a>
