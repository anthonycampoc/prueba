<!-- resources/views/clientes/show.blade.php -->
<h1>Detalles del Cliente</h1>
<p>Nombre: {{ $cliente->nombre }}</p>
<p>Cédula: {{ $cliente->cedula }}</p>
<!-- Agrega los campos restantes según tus necesidades -->
<a href="{{ route('clientes.edit', $cliente) }}">Editar</a>
