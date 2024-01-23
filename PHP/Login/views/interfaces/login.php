
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main class="contenido">
    <div class="InicioSes">
    <form action="../Login/models/verificar.php" method="post"class="formDelLogin">
      <h3>Login</h3>
      <div class="EstilosForm">
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="usuario" required>
      </div>
      <div class="EstilosForm">
        <label for="contra">Contraseña</label>
        <input type="password" id="contra" name="contra" required>
      </div>
      <div class="EstilosForm">
        <input type="submit" value="Iniciar sesión" name="btnIngresar">
      </div>
    </form>
  </div>

    </main>  
</body>
</html>