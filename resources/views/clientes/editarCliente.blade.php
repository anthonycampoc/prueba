<!-- resources/views/clientes/edit.blade.php -->
<h1>Editar Cliente</h1>
<form action="{{ route('clientes.update', $cliente) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nombre" value="{{ $cliente->nombre }}" required>
    <input type="text" name="cedula" value="{{ $cliente->cedula }}" required>
    <input type="email" name="email" value="{{ $cliente->email }}" required>
    <input type="text" name="telefono" value="{{ $cliente->telefono }}" required>
    <!-- Agrega los campos restantes según tus necesidades -->
    <button type="submit">Actualizar</button>
</form>
