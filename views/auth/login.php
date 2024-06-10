<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus credenciales</p>

<form class="formulario" method="post" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu Email" />
    </div>
    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Tu Password" />
    </div>

    <input type="submit" class="boton" value="Iniciar Sesion" />
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿No tienes cuenta? Crea una</a>
    <a href="/olvide">¿Olvidaste tu Contraseña?</a>
</div>