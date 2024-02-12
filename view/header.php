<header id="Header-out_productos" class="Header-out">
    <div class="Header-in">
        <div class="Header-logo">
            <h1>Libreria</h1>
        </div>

        <nav class="Header-nav">
            <ul class="menu">
                <li><a href="index.php">Inicio</a></li>
                <li id="userDropdown" class="dropdown">
                    <div class="dropdown-toggle" onmouseover="mostrarUserMenu()" onmouseout="ocultarUserMenu()">Usuario
                        <ul class="dropdown-menu">
                            <?php if (!isset($_SESSION['user_id'])) { ?>
                                <li class="logged-out"><a href="index.php?action=login">Iniciar Sesión</a></li>
                                <li class="logged-out"><a href="index.php?action=reg-user">Registrarse</a></li>
                            <?php } else { ?>
                                <li class="logged-in"><div onclick="goToAccountData(<?php echo $_SESSION['user_id']; ?>)">Mi Cuenta</div></li>
                                <li class="logged-in"><div onclick="goToOrdersHistory(<?php echo $_SESSION['user_id']; ?>)">Mis Pedidos</div></li>
                                <li class="logged-in"><a href="index.php?action=logout">Cerrar Sesión</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>

</header>