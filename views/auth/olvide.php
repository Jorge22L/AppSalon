<h1 class="nombre-pagina">Olvide mi Contraseña</h1>
<p class="descripcion-pagina">Ingresa tu Email y te enviaremos las instrucciones para recuperarla</p>

<form class="formulario" method="post" action="/olvide">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu Email" />
    </div>
    <input type="submit" class="boton" value="Enviar Instrucciones" />
</form>

<div class="acciones">
    <a href="/">¿Ya tienes cuenta? Inicia Sesion</a>
    <a href="/crear-cuenta">¿Aún no tienes cuenta? Crea una</a>
</div>