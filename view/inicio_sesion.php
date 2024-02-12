<div class="login">
    <h1>Iniciar Sesión</h1>
    <form method="post" action="/index.php?action=login">
      <div class="txt">
        <label for="email">Email:</label><input type="email" name="email"><br>
        <label for="pwd">Contraseña:</label><input id="pwd" name="pwd" type="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"><br>
        <input type="submit" value="Inicia sesión">
      </div>
    </form>
  </div>