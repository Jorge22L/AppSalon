<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<form class="formulario" method="post" action="/crear-cuenta">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre" />
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido" />
    </div>
    <div class="campo">
        <label for="telefono">Telefono</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Tu Email" />
    </div>
    <div class="campo">
        <label for="telefono">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu Email" />
    </div>
    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Tu Contraseña" />
    </div>

    <input class="boton" type="submit" value="Crear Cuenta" />
</form>

<div class="acciones">
    <a href="/">¿Ya tienes cuenta? Inicia Sesion</a>
    <a href="/olvide">¿Olvidaste tu Contraseña?</a>
</div>