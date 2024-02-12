  <div class="reg-user">
    <h1>Registro</h1>
    <form method="post" action="/index.php?action=reg-user">
      <div class="reg-txt">
        <label for="name">Nombre completo:</label><input required id="name" name="name" type="text" pattern="[A-Za-zÁ-Úá-ú\s]+" title="Solo letras y espacios permitidos" placeholder="Letras y espacios permitidos únicamente"><br>
        <label for="email">Email:</label><input required type="email" name="email" placeholder="tucorreo@gmail.com"><br>
        <label for="pwd">Contraseña:</label><input required id="pwd" name="pwd" type="password" pattern="^(?=.*[A-Za-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$" title="La contraseña debe contener mínimo una letra, minúscula, un número y tener al menos 8 carácteres" placeholder="Obligatorio: minús., mayús., núm. y al menos 8 carácteres"><br>
        <label for="adress">Dirección</label><input required id="adress" name="adress" type="text" maxlength="30" pattern="[A-Za-z0-9Á-Úá-ú,\s]+" title="Solo letras, números y espacios permitidos" placeholder="Letras, números y espacios permitidos"><br>
        <label for="location">Población</label><input required id="location" name="location" type="text" maxlength="30" pattern="[A-Za-zÁ-Úá-ú\s]+" title="Solo letras y espacios permitidos" placeholder="Letras y espacios permitidos únicamente"><br>
        <label for="CP">Código Postal</label><input required id="CP" name="CP" type="text" maxlength="5" pattern="\d{5}" title="Introduce un código postal válido de 5 dígitos" placeholder="ej.: 00000"><br>
        <input type="submit" value="Registrarme">
      </div>
    </form>
  </div>
