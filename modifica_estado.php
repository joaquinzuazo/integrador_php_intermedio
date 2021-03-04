<?php
include ('middlewares/session.php');
include ('helpers/header.php');
include ("conexion.php");
?>

<body>
    <main class='main'>
        <div class="login">
            <div class='login-form'>
                <?php
                $id=$_GET["id"];
                $resultado=mysqli_query(con(), "UPDATE pedidos SET estado='finalizado' WHERE id=$id");
                echo '<h2>El pedido ha sido actualizado:</h2>';
                echo '<a class="enlace" href="/mostrar_contenido.php">Volver al menu</a>';
                ?>
            </div>
        </div>
    </main>
</body>
</html>