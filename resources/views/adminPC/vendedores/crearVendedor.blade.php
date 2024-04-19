
<h1>Crear Vendedor</h1>
<form action="{{ route('vendedor.store') }}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="cedula" placeholder="Cédula" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    
    <!-- Agrega los campos restantes según tus necesidades -->
    <button type="submit">Guardar</button>
</form>
