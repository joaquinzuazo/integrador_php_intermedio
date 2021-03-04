<?php
include ('middlewares/session.php');
include ('helpers/header.php');
?>

<body>
    <main class='main'>
        <div class="cliente">
            <div class="cliente-menu">
                <img src="/images/acceso_clientes.png" alt="">
                <h2>Bienvenido <?php echo $_SESSION['usuario']; ?></h2>
                <p id="info">En esta sección encontrará información sobre sus pedidos y compras.</p>
                <div class='cliente-button'>
                    <form class='cliente-form' action="realizar_pedidos.php" method="POST">
                        <button id='button' type="submit" name="salir" value="salir">Realizar pedido</button>
                    </form>
                    <form class='cliente-form' action="ver_pedidos.php" method="POST">
                        <button id='button' type="submit" name="salir" value="salir">Ver mis pedidos</button>
                    </form>
                    <form class='cliente-form' action="ver_pedidos_f.php" method="POST">
                        <button id='button' type="submit" name="salir" value="salir">Ver pedidos finalizados</button>
                    </form>
                </div>
                <a href="salir.php">Cerrar sesion</a>
            </div>
        </div>
    </main>
</body>
</html>